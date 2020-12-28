<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\RoomRepository;
   /** Paypal Details classes **/ 
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

//country modal
use App\Models\Country;
use App\User;

class PaypalPaymentController extends Controller
{
   private $_api_context;
   private $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
            
        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['client_id'], $paypal_configuration['secret']));
        $this->_api_context->setConfig($paypal_configuration['settings']);

        //Repository
        $this->roomRepository = $roomRepository;
    }

    public function payWithPaypal(Request $request)
    {
        $roomById = $this->roomRepository->getById($request->id);

        //save the roomid so i can access it from other functions
        Session::put('room_id', $request->id);
        
        $countries = Country::select('id', 'nom_en_gb', 'nom_fr_fr')->get();
        //dd($roomId);
        return view('paywithpaypal', compact(['roomById', 'countries']));
    }

    public function postPaymentWithpaypal(Request $request)
    {
        //dd($request);

        // Form validation
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'adresse'=>'required',
            'ville' => 'required',
            'country' => 'required',
            'postale' => 'required',
            'terms' => 'accepted'
        ]);

        if($request->has('terms')){
              Session::put('firstname', $request->firstname);
              Session::put('lastname',  $request->lastname);
              Session::put('email', $request->email);
              Session::put('zip', $request->postale);
              Session::put('phone',   $request->phone);
              Session::put('country', $request->country);
              Session::put('city', $request->ville);
              Session::put('address',   $request->adresse);
        }else {
            //Checkbox not checked
        }


        $roomId = Session::get('room_id');
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

    	$item_1 = new Item();

        $item_1->setName($request->room_name)
            ->setCurrency('EUR')
            ->setQuantity(1)
            ->setPrice($request->get('prix'));

        $item_list = new ItemList();
        //$totalToPay = $request->get('prix') * $request->get('quantity');
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('EUR')
            ->setTotal($request->get('prix'));

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Enter Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('status'))
            ->setCancelUrl(URL::route('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));            
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error','Connection timeout');
                return redirect()->to('paywithpaypal/'.$roomId);                
            } else {
                \Session::put('error','Some error occur, sorry for inconvenient');
                return redirect()->to('paywithpaypal/'.$roomId);                
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        
        Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {            
            return Redirect::away($redirect_url);
        }

        \Session::put('error','Unknown error occurred');
    	return redirect()->to('paywithpaypal/'.$roomId );
    }

    public function getPaymentStatus(Request $request)
    {        
        //dd($request);
        $roomId = Session::get('room_id');
        $payment_id = Session::get('paypal_payment_id');

        Session::forget('paypal_payment_id');
        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            \Session::put('error','Payment failed');
            return redirect()->to('paywithpaypal/'.$roomId);
        }
        $payment = Payment::get($payment_id, $this->_api_context);        
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));        
        $result = $payment->execute($execution, $this->_api_context);
        
        if ($result->getState() == 'approved') {         
            \Session::put('success','Payment success !!');
            //Add data to your database on successful payment: TODO code
            
            //role_id = 2 i.e User by default
            $form_data = array(
                'name'              =>   Session::get('firstname'),
                'last_name'         =>   Session::get('lastname'),
                'email'             =>   Session::get('email'),
                'phone_number'      =>   Session::get('phone'),
                'address'           =>   Session::get('address'),
                'city'              =>   Session::get('city'),
                'country_id'        =>   Session::get('country'),
                'zip'               =>   Session::get('zip')
            );

            // Store data in database
            User::create($form_data);

            //return redirect()->to('available-rooms');
            return Redirect::route('successful-payment');
        }

        \Session::put('error','Payment failed !!');
		return Redirect::route('cancelled-payment');
    }

}
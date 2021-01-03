<?php

namespace App\Http\Controllers;
use App\Http\Traits\SendEmailTrait;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\RoomRepository;
use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
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
use DateTime;
use Auth;

//country modal
use App\Models\Country;
use App\Models\Reservation;
use App\User;

class PaypalPaymentController extends Controller
{
   private $_api_context;
   private $roomRepository;
   private $userRepository;
   private $roleRepository;

    //This adds all the functions functions in the trait into this class. 
    //You can use $this->functionName to access the function
    use SendEmailTrait; 

    public function __construct(RoomRepository $roomRepository, UserRepository $userRepository, RoleRepository $roleRepository)
    {
            
        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['client_id'], $paypal_configuration['secret']));
        $this->_api_context->setConfig($paypal_configuration['settings']);

        //Repository
        $this->roomRepository = $roomRepository;
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function payWithPaypal(Request $request)
    {
        //dd(Auth::user());
        $roomById = $this->roomRepository->getById($request->id);
    
        //save the roomid so i can access it from other functions
        Session::put('room_id', $request->id);

        //Reservation data
        $numberOfDaysBooked     = Session::get('numberOfDaysBooked');
        
        //formatting the price
        $roomPrice              =  $roomById->price;
        $intPrice               = (int)$roomPrice;
        $totalAmountToPay       = (int)$numberOfDaysBooked * $intPrice; //displayed on blade
    
        $countries = Country::select('id', 'nom_en_gb', 'nom_fr_fr')->get();
        return view('paywithpaypal', compact(['roomById', 'countries', 'totalAmountToPay']));
    }

    public function postPaymentWithpaypal(Request $request)
    {
        //dd($request);

        // Form validation
        if(!Auth::check()) { //If user is not an authenticated user
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

                Session::put('checkInDate', $request->checkInDate);
                Session::put('checkOutDate', $request->checkOutDate);
                Session::put('numberOfDaysBooked',   $request->numberOfDaysBooked);
                Session::put('totalAmount',   $request->totalAmount);
                Session::put('room_name', $request->room_name);
            }else {
                //Checkbox not checked
            }
        }

        $roomId = Session::get('room_id');
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

    	$item_1 = new Item();

        $item_1->setName($request->room_name)
            ->setCurrency('EUR')
            ->setQuantity($request->get('numberOfDaysBooked'))
            ->setPrice($request->get('prix'));

        $item_list = new ItemList();
        //$totalToPay = $request->get('prix') * $request->get('quantity');
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('EUR')
            ->setTotal($request->get('totalAmount'));

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


        if(!Auth::check()) {
            if ($result->getState() == 'approved') {         
                \Session::put('success','Payment success !!');
                /* Add data to your database on successful payment: TODO code
                role_id = 2 i.e User by default */
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

                /*
                    ===========================
                    Store data in User database
                    ============================
                */
                User::create($form_data);


                /* 
                    =========================
                    Store in Reservation table 
                    ==========================
                */
                $email = Session::get('email');
                $registeredUser = $this->userRepository->getByEmail($email);
                $newGuestId =  $registeredUser->id;
                
                //formatting checkin and checkout date to correspond with database format
                $checkInDateTime = DateTime::createFromFormat('Y-d-m', Session::get('checkInDate'));
                $check_in = $checkInDateTime->format('Y-m-d');

                $checkOutDateTime = DateTime::createFromFormat('Y-d-m', Session::get('checkOutDate'));
                $check_out = $checkOutDateTime->format('Y-m-d');

                //Generate reservation number 
                $reservationNumber = $this->generateBarcodeNumber();

                //cancelled at by default = 1970-01-01

                if ( $newGuestId ) {
                    $reservation_data = array(
                    'check_in'                 =>   $check_in,
                    'check_out'                =>   $check_out,
                    'reservation_number'       =>   $reservationNumber,
                    'guest_count'              =>   1,
                    'user_id'                  =>   $newGuestId,
                    'balance_amount'           =>   0.0,
                    'status'                   =>   'User',
                    'paid_amount'              =>   Session::get('totalAmount'),
                    'discount_percent'         =>   0.0,
                    'room_name'                =>   Session::get('room_name'),
                    'cancelled_at'             =>   '1970-01-01',
                    'number_of_days_booked'    =>   Session::get('numberOfDaysBooked')
                    );

                    // Store data in User database
                    Reservation::create($reservation_data);

                }

                //return redirect()->to('available-rooms');
                return Redirect::route('successful-payment');
            }
        } else if(Auth::check()) { //If user is authenticated

            if ($result->getState() == 'approved') {         
                \Session::put('success','Payment success !!');
                
                /* 
                    =========================
                    Store in Reservation table 
                    ==========================
                */
               
                //get authenticated User status
                $userRole = $this->roleRepository->getRoleById(Auth::user()->role_id);
                $userStatus = $userRole->name;
                
                //formatting checkin and checkout date to correspond with database format
                $checkInDateTime = DateTime::createFromFormat('Y-d-m', Session::get('checkInDate'));
                $check_in = $checkInDateTime->format('Y-m-d');

                $checkOutDateTime = DateTime::createFromFormat('Y-d-m', Session::get('checkOutDate'));
                $check_out = $checkOutDateTime->format('Y-m-d');

                //Generate reservation number 
                $reservationNumber = $this->generateBarcodeNumber();

                //cancelled_at by default is = 1970-01-01

                $reservation_data = array(
                    'check_in'                 =>   $check_in,
                    'check_out'                =>   $check_out,
                    'reservation_number'       =>   $reservationNumber,
                    'guest_count'              =>   1,
                    'user_id'                  =>   Auth::user()->id,
                    'balance_amount'           =>   0.0,
                    'status'                   =>   $userStatus,
                    'paid_amount'              =>   Session::get('totalAmount'),
                    'discount_percent'         =>   0.0,
                    'room_name'                =>   Session::get('room_name'),
                    'cancelled_at'             =>   '1970-01-01',
                    'number_of_days_booked'    =>   Session::get('numberOfDaysBooked')
                );

                // Store data in User database
                Reservation::create($reservation_data);

                //return redirect()->to('available-rooms');
                return Redirect::route('successful-payment');
            }
        }
        

        \Session::put('error','Payment failed !!');
		return Redirect::route('cancelled-payment');
    }


    /*
        ==============================
        Generating reservation number
        ==============================
    */

    public function generateBarcodeNumber() {
        $number = mt_rand(1000000000, 9999999999); // better than rand()

        // call the same function if the barcode exists already
        if ($this->barcodeNumberExists($number)) {
            return $this->generateBarcodeNumber();
        }

        // otherwise, it's valid and can be used
        return $number;
    }

    public function barcodeNumberExists($number) {
        // query the database and return a boolean
        // for instance, it might look like this in Laravel
        return Reservation::where('reservation_number', '=', $number)->exists();
    }
}

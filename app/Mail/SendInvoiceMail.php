<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendInvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

     public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = \Config::get('mail.from.address');
        $subject = 'Your palmsRoyal Invoice';
        $name = \Config::get('mail.from.name');
        //$myaddress = "mgbamsstephen@gmail.com";
        
        return $this->view('emails.send-invoice-mail')
                    ->from($address, $name)
                    ->bcc($address , $name)
                    ->replyTo($address , $name)
                    ->subject($subject)
                    ->with([ 'data' => $this->data]);
    }
}

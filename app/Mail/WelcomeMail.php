<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
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
        $subject = 'Welcome to PalmsRoyal Hotel';
        $name = \Config::get('mail.from.name');
        //$myaddress = "mgbamsstephen@gmail.com";
        
        return $this->view('emails.welcome')
                    ->from($address, $name)
                    ->bcc($address , $name)
                    ->replyTo($address , $name)
                    ->subject($subject)
                    ->with([ 'message' => $this->data['message'] ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSender extends Mailable
{
    use Queueable, SerializesModels;
    //création de variable
    public $mail;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($request)
    {
        $this->mail = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {                                         //view                    //objet du mail
        return $this->from($this->mail->mail)->markdown('mail.contact')->subject('test Subject');
    }
}

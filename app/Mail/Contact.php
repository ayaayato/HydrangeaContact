<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        //
        $this->contact = $inputs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('【受付完了】'.$this->contact['category'])
        ->view('contact.mail')
        ->with([
            'email' => $this->contact['email'],
            'category' => $this->contact['category'],
            'body'  => $this->contact['body'],
        ])
        ->to($this->contact['email']);
        
    }
}
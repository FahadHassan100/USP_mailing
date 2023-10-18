<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SignContract extends Mailable
{
    use Queueable, SerializesModels;
    public $SFormData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($SFormData)
    {
        $this->SFormData = $SFormData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $PassData = [
            'FromData' => $this->SFormData,
        ];

        return $this->subject('Welcome to The New Philanthropy Program')->view('mail_template.SignContract')->with($PassData);
        //return $this->view('view.name');
    }
}

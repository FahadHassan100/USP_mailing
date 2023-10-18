<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $CDWForm;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($CDWForm)
    {
        $this->CDWForm = $CDWForm;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   

        $PassData = [
            'FromData' => $this->CDWForm,
        ];

        return $this->subject('Reset Your Password')->view('mail_template.ForgetPasswordMail')->with($PassData);
        //return $this->view('view.name');
    }
}

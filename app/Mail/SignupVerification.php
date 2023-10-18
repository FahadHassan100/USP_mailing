<?php

namespace App\Mail;



use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Session;

class SignupVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $verificationCode;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($verificationCode)
    {
        $this->verificationCode = $verificationCode;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $passData = [
            "verification_code" => $this->verificationCode
        ];
        

        return $this->subject('Email Verification | NewPhilanthropy')->view('mail_template.SignupVerificationEmail')->with($passData);
    }
}

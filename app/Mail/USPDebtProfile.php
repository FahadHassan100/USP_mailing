<?php

namespace App\Mail;



use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Session;

class USPDebtProfile extends Mailable
{
    use Queueable, SerializesModels;

    public $debtForm;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($debtForm)
    {
        $this->debtForm = $debtForm;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $passData = [
            "Debt_form_data" => $this->debtForm
        ];
        

        return $this->subject('Email Verification | NewPhilanthropy')->view('mail_template.DebtProfileForm')->with($passData);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentsCompleteThankYou extends Mailable
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

        return $this->subject('Payment Completed | NewPhilanthropy')->view('mail_template.PaymentsCompleteThankYou')->with($PassData);
        //return $this->view('view.name');
    }
}

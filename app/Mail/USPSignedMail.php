<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class USPSignedMail extends Mailable
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

        return $this->subject('USP Signed Contract | Justice Trading')->view('mail_template.USPSignedMail')->with($PassData);
        //return $this->view('view.name');
    }
}

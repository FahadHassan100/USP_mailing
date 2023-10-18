<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class USPForm extends Mailable
{
    use Queueable, SerializesModels;

    public $USPFormData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($USPFormData)
    {
        $this->USPFormData = $USPFormData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $PassData = [
            'FromData' => $this->USPFormData,
        ];

        return $this->subject('USP From - Submit')->view('mail_template.USPForm')->with($PassData);

        //return view('mail_template.USPForm')->with($PassData);
    }
}

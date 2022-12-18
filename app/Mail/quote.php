<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class quote extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $inputvalue;
    public function __construct($inputvalue)
    {
      $this->inputvalue = $inputvalue;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->inputvalue;
        return $this->view('email.quote', compact('data'))->subject('New Quote')->replyTo($data['email'])->From($data['email']);;
    }
}

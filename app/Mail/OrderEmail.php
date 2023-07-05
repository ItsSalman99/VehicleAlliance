<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data = [];
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $data = $this->data;

        return $this->markdown('emails.order-email', compact('data'));

    }
}

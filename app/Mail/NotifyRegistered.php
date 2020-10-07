<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyRegistered extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $msg;
    public $cours;

    public function __construct($msg, $cours)
    {
        $this->msg = $msg;
        $this->cours = $cours;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@momoaudi.com','Inscription')->subject('Nouveau inscrit(e) | Momoaudi')
        ->view('mail.notify_registered');
    }
}

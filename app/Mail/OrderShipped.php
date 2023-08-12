<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $contact;
    public $attachInvoice = true;
    public $attachLink = true;
    public $senderEmail = 'sdisisi';
    public $accountHolder = [
        'name' => 'siwi'
    ];


    public $manifest = [

    ];
    public function __construct()
    {
        $this->contact = [
            'first_name' => '23',
        ];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orders.shipped');
    }
}

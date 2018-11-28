<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\GuestBook;

class MailGuestBook extends Mailable
{
    use Queueable, SerializesModels;

     public $guestbook;

    public function __construct(GuestBook $guestbook)
    {
        $this->guestbook = $guestbook;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.guest-book');
    }
}

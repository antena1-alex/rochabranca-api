<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->subject("Novo contato recebido - Rocha Branca")
                    ->from(config('mail.from.address'), 'Sistema Rocha Branca')
                    ->replyTo($this->contact['email'], $this->contact['first_name'] . ' ' . $this->contact['last_name'])
                    ->view('emails.contact_message_html')
                    ->with('contact', $this->contact);
    }
}
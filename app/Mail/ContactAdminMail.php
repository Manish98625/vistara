<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactAdminMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function envelope(): Envelope
    {
        $type = ucfirst($this->contact->type ?: 'contact');
        return new Envelope(subject: "[Vistara] New {$type} submission from {$this->contact->name}");
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-admin',
            with: ['contact' => $this->contact],
        );
    }
}

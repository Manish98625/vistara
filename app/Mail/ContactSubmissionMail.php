<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactSubmissionMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function envelope(): Envelope
    {
        $subject = $this->contact->type === 'inquiry'
            ? 'We received your study abroad inquiry'
            : ($this->contact->type === 'newsletter'
                ? 'Thanks for subscribing to Vistara Education'
                : 'We received your message');

        return new Envelope(subject: $subject);
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-submission',
            with: ['contact' => $this->contact],
        );
    }
}

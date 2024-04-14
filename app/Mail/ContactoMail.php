<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $remitName;
    public $remitMail;
    public $remitAsunto;
    public $remitMensaje;

    public function __construct($remitenteName,$remitenteMail,$remitenteAsunto,$remitenteMensaje)
    {
        $this->remitName = $remitenteName;
        $this->remitMail = $remitenteMail;
        $this->remitAsunto = $remitenteAsunto;
        $this->remitMensaje = $remitenteMensaje;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // subject: 'Contacto Mail',
            from: new Address($this->remitMail, $this->remitName),
            subject: ''.$this->remitAsunto,

        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // view: 'view.name',
            view: 'Email.contactCley',

        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

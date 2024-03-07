<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class mailtoCompany extends Mailable
{
    use Queueable, SerializesModels;
    public $company;
    public $consultation;
    /**
     * Create a new message instance.
     */
    public function __construct($company, $consultation)
    {
        $this->company =$company;
        $this->consultation =$consultation;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('teamglints@gmail.com', 'Glints'),
            subject: 'Your consultation schedule from Glints',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail-company',
            with: [
                'company' => $this->company,
                'consultation' => $this->consultation,
            ]
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
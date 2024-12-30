<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact_data;

    public function __construct($contact_data)
    {
        $this->contact_data = $contact_data;
    }

    public function build()
    {
        return $this->subject('Student Query')
                    ->view('emails.template')
                    ->with([
                        'title' => 'Students Queries',
                        'fields' => [
                            'E-Mail' => $this->contact_data['email'],
                            'Name' => $this->contact_data['name'],
                            'Query' => $this->contact_data['query'],
                        ]
                    ]);
    }
}

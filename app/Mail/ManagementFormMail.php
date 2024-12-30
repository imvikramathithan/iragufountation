<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ManagementFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $management_data;

    public function __construct($management_data)
    {
        $this->management_data = $management_data;
    }
    public function build()
    {
        return $this->subject('Management Query')
                    ->view('emails.template')
                    ->with([
                        'title' => 'Management Queries',
                        'fields' => [
                            'E-Mail' => $this->management_data['email'],
                            'Name' => $this->management_data['name'],
                            'Number' => $this->management_data['number'],
                            'Institute' => $this->management_data['institute'],
                            'Query' => $this->management_data['query'],

                        ]
                    ]);
    }
}

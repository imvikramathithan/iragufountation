<?php

namespace App\Mail;

use App\Models\Contact; // Add this import
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact_data;

    public function __construct($contact_data)
    {
        $this->contact_data = $contact_data;
    }

    public function submit(Request $request)
    {
      // Validate the incoming data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'query' => 'required|string',
    ]);

    // Store the contact data in the database
      Contact::create($validated);

        // Send the email
        Mail::to('vikramathithan2002@gmail.com')->send(new ContactFormMail($request->all()));

        return back()->with('success', 'Thank you for your query!');
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

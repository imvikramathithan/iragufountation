<?php
namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
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
        Mail::to('dctteamscolab@gmail.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Thank you for your query!');
    }
}

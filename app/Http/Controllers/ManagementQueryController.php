<?php

namespace App\Http\Controllers;

use App\Mail\ManagementFormMail;
use App\Models\ManagementQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ManagementQueryController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'number'=>'required|numeric',
            'institute' =>'required|string',
            'query' => 'required|string',
        ]);

        // Store the management query in the database
        ManagementQuery::create($validated);

        // Send the email
        Mail::to('dctteamscolab@gmail.com')->send(new ManagementFormMail($validated));

        return back()->with('success', 'Thank you for your query!');
    }
}

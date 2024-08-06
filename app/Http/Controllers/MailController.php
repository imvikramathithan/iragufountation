<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\ManagementFormMail;
use App\Mail\DonationFormMail;

class MailController extends Controller
{
    public function sendContactMail(Request $request){
        $contact_data = $request->only(['name', 'email', 'query']);

        Mail::to('vikramathithan2002@gmail.com')->send(new ContactFormMail($contact_data));

        return redirect()->back()->with('contact_success', 'Contact form email has been sent!');
    }

    public function sendManagementMail(Request $request){
        $management_data = $request->only(['name', 'email', 'number', 'institute', 'query']);

        Mail::to('vikramathithan2002@gmail.com')->send(new ManagementFormMail($management_data));

        return redirect()->back()->with('management_success', 'Management query has been sent!');
    }

    public function sendDonationMail(Request $request){
        $donation_data = $request->only(['name', 'email', 'number', 'amount']);

        Mail::to('vikramathithan2002@gmail.com')->send(new DonationFormMail($donation_data));

        return redirect()->back()->with('donation_success', 'Donation form has been sent!');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DonationFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $donation_data;

    public function __construct($donation_data)
    {
        $this->donation_data = $donation_data;
    }
     public function submit(Request $request)
    {
        $donation_data = $request->all();
        Mail::to('vikramathithan2002@gmail.com')->send(new DonationFormMail($donation_data));

        return back()->with('success', 'Thank you for your donation!');
    }
    public function build()
    {
        return $this->subject('Donation Form')
                    ->view('emails.template')
                    ->with([
                        'title' => 'Donate Form',
                        'fields' => [
                            'E-Mail' => $this->donation_data['email'],
                            'Name' => $this->donation_data['name'],
                            'Number' => $this->donation_data['number'],
                            'Amount' => $this->donation_data['amount'],
                        ]
                    ]);
    }
}

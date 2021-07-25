<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function form()
    {
        return view("guest.contact");
    }

    public function storeAndSend(Request $request)
    {
        // Validate mail data
        $validatedData = $request->validate([
            "full_name" => "required",
            "email" => "required | email",
            "message" => "required"
        ]);

        // Save email into database
        $contact = Contact::create($validatedData);

        // View email without sending it
        // return (new ContactFormMail($contact))->render();

        // Send email
        Mail::to("admin@test.it")->send(new ContactFormMail($contact));

        return redirect()->back()->with("message", "The message has been sent correctly. We'll get back to you soon.");
    }
}

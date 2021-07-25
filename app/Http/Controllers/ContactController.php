<?php

namespace App\Http\Controllers;

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

        // View email without sending it
        // return (new ContactFormMail($validatedData))->render();

        // Send email
        Mail::to("eduardomecchia273@gmail.com")->send(new ContactFormMail($validatedData));

        return redirect()->back()->with("message", "Thanks for your message. We'll get back to you soon");
    }
}

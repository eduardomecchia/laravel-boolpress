<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;

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

        // Send mail
        return (new ContactFormMail($validatedData))->render();
    }
}

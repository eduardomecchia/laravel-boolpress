<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function form()
    {
        return view("guest.contact");
    }

    public function sendContactForm(Request $request)
    {
        $validatedData = $request->validate([
            "full_name" => "required",
            "email" => "required | email",
            "message" => "required"
        ]);
    }
}

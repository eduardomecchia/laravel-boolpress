<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() 
    {
        return view("guest.index");
    }

    public function contact()
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

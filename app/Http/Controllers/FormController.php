<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showRegistrationForm()
    {
        return view('front.homepage');
    }

    public function handleRegistration(Request $request)
    {

        $request->validate([
             "name-surname"=> "required|min: 5",
             "phone"=> "required",
             "mail"=> "required|email "

        ]);

       echo "succes";
    }
}

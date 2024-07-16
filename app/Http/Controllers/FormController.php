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
        // Form verilerini işle
        $name = $request->input('name');
        $email = $request->input('email');

        // Verileri başka bir işlem için kullanabilir veya veritabanına kaydedebilirsiniz

        return redirect()->route('homepage')->with('success', 'Registration successful');
    }
}

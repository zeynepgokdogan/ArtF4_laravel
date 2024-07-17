<?php

namespace App\Http\Controllers;

use App\Models\Form;
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
            'name' => 'required|min:5',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $form = new Form();
        $form->name = $request->input('name');
        $form->phone = $request->input('phone');
        $form->email = $request->input('email');
        $form->save();

        return "Success! Data saved.";
    }
}

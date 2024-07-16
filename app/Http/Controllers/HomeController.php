<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.homepage');
    }

    public function aboutUs()
    {
        return view('front.aboutme');
    }

    public function startProject()
    {
        return view('front.contact');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutUsPage()
    {
        return view('about-us');
    }

    public function contactUsPage()
    {
        return view('contact-us');
    }
    public function welcomePage()
    {
        return view('welcome');
    }
}

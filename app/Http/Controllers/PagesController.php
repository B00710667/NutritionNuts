<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
 
    public function index()
    {
        return view('home');
    }

    public function programs()
    {
        return view('programs');
    }

    public function diet()
    {
        return view('diet');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
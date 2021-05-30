<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanHomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about-us');
    }
    public function help()
    {
        return view('help');
    }
    
}

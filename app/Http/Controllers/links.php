<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class links extends Controller
{
    

    public function about(){

        return view('about');
    }

    public function portfolio(){

        return view('portfolio');
    }

    public function resume(){

        return view('resume');
    }

    public function contact(){

        return view('contact');
    }
}

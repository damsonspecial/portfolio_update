<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactus extends Controller
{

    public function store(){
        request()->validate([
            'name' => ['required'],
            'email' => ['required'],
            'subject' => ['required'],
            'message' => ['required']
        ]);

        contact::create([
            'name' =>request('name'),
            'email'=>request('email'),
            'subject'=>request('subject'),
            'message'=>request('message')
        ]);
        return redirect('/contact');
    }

}

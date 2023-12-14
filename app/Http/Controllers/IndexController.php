<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class IndexController extends Controller
{
    public function contact() {
        return view('contact');
    }

    public function AddMessage(Request $request) {
        Message::create([
            'naam'=>$request->naam,
            'telefoon'=>$request->telefoon,
            'email'=>$request->email,
            'onderwerp'=>$request->onderwerp,
            'bericht'=>$request->bericht
        ]);

        return redirect('/contact');
    }

    public function websites() {
        return view('websites');
    }
}

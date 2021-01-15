<?php

namespace App\Http\Controllers;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function create(){
        return view('mail.mail');
    }
    public function send(Request $request){
        Mail::to(request('mail'))->send(new WelcomeMail());
        return redirect()->route('mail.create');
    }
}

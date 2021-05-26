<?php

namespace App\Http\Controllers;

use App\Mail\ContactSender;
use App\Mail\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(Request $request)
    {
        //welcome inscription
        // Mail::to($request->mail)->send(new MailSender($request));

        //formulaire de contact
        Mail::to('ayhan@molengeek.com')->send(new ContactSender($request));
        return redirect()->back();
    }
}

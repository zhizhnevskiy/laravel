<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendController extends Controller
{
    public function send(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        if($request->method() == 'POST'){
            $body = "<p><b>Name: </b>{$request->input('name')}</p>";
            $body .= "<p><b>E-mail: </b>{$request->input('email')}</p>";
            $body .= "<p><b>Message: </b><br>". nl2br($request->input('message')) . "</p>";

            Mail::to('zhizhnevskiy@yandex.ru')->send(new TestMail($body));
            $request->session()->flash('success', 'Email sent!');
            return redirect('/send');
        }
        return view('send');
    }
}

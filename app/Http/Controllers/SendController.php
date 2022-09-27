<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendController extends Controller
{
    public function send(){
        Mail::to('zhizhnevskiu@yandex.ru')->send(new TestMail());
        return view('send');
    }
}

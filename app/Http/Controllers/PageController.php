<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(){
//        return view("pages.$slug");
        $title = 'About Page';
        return view("pages.about", compact('title'));
    }
}

<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index(){
        dump($_ENV);
        dump(env('DB_DATABASE'));
        dump(config('app.timezone'));
        return view('home', ['count' => 5, 'name' => 'Yura']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function account()
    {
        return view('main.accountpage');
    }

    public function landing()
    {
        return view('main.landingpage');
    }

    public function preview()
    {
        return view('main.preview');
    }

    public function mainpage()
    {
        return view('main.mainpage');
    }

    public function ajukanSuvei() {
        
    }

    public function notifpage() {
        return view('main.notifpage');
    }
}

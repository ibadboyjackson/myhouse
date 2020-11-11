<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index () {
        return view('myHouse.front.pages.home');
    }
}

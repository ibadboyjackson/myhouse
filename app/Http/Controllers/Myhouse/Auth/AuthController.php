<?php

namespace App\Http\Controllers\Myhouse\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function connexion () {
        return view('myhouse.front.pages.auth.connexion');
    }

    public function inscription () {
        return view('myhouse.front.pages.auth.inscription');
    }

    public function forgot () {
        return view('myhouse.front.pages.auth.oublie');
    }

    public function confirm ($email) {
        return view('myhouse.front.pages.auth.confirm', ['email' => $email]);
    }

    public function password () {
        return view('myhouse.front.pages.auth.password');
    }

    public function success () {
        return view('myhouse.front.pages.auth.success');
    }
}

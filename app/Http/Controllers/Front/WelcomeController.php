<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{

    public function connexion () {
        return view('development.last.connexion');
    }

    public function abonnement () {
        return view('development.last.subscription');
    }

    public function enregistrement () {
        return view('development.last.enregistrement');
    }

    public function description () {
        return view('development.last.description');
    }

    public function critere () {
        return view('development.last.critere');
    }

    public function annonce () {
        return view('development.last.annonce');
    }

    public function upload () {
        return view('development.last.upload');
    }

    public function localisation () {
        return view('development.last.localisation');
    }

    public function type () {
        return view('development.last.type');
    }

    public function payment () {
        return view('development.last.payment');
    }

    public function success () {
        return view('development.last.success');
    }

}

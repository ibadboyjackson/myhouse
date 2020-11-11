<?php

namespace App\Http\Controllers\Menu\Particulier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParticulierController extends Controller
{

    public function annonces () {
        return view('development.menu.particulier.annonces');
    }

    public function interesse () {
        return view('development.menu.particulier.interesse');
    }

    public function agenda () {
        return view('development.menu.particulier.agenda');
    }

    public function profile () {
        return view('development.menu.particulier.profile');
    }

    public function faq () {
        return view('development.menu.particulier.faq');
    }


    public function charte () {
        return view('development.menu.particulier.charte');
    }

    public function contact () {
        return view('development.menu.particulier.contact');
    }


    public function messagerie () {
        return view('development.menu.particulier.messagerie');
    }

}

<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller {


    public function messagerie ($user) {
        return view('development.menu.messagerie', ['user' => $user]);
    }

    public function faq ($user) {
        return view('development.menu.faq', ['user' => $user]);
    }

    public function profile ($user) {
        return view('development.menu.profile', ['user' => $user]);
    }

    public function charte ($user) {
        return view('development.menu.charte', ['user' => $user]);
    }

    public function contact ($user) {
        return view('development.menu.contact', ['user' => $user]);
    }

    public function facture ($user) {
        return view('development.menu.facture', ['user' => $user]);
    }



}

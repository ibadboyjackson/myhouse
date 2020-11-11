<?php

namespace App\Http\Controllers\Menu\Professionnel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessionnelController extends Controller
{
    public function backoffice () {
        return view('development.menu.professionnel.backoffice');
    }

    public function interesse (string $user) {
        return view('development.menu.professionnel.interesse', ['user' => $user]);
    }

    public function agenda () {
        return view('development.menu.professionnel.agenda');
    }

    public function statistique () {
        return view('development.menu.professionnel.statistique');
    }


    public function campaign () {
        return view('development.menu.professionnel.campaign');
    }

    public function push () {
        return view('development.menu.professionnel.push');
    }

    public function entreprise () {
        return view('development.menu.professionnel.enterprise');
    }

    public function campaign_success () {
        return view('development.menu.professionnel.campaign-success');
    }

    public function push_next () {
        return view('development.menu.professionnel.push-next');
    }

    public function push_success () {
        return view('development.menu.professionnel.push-success');
    }

    public function email_success () {
        return view('development.menu.professionnel.email-success');
    }

    public function push_email () {
        return view('development.menu.professionnel.push-email');
    }

    public function push_notification () {
        return view('development.menu.professionnel.push-notification ');
    }
}

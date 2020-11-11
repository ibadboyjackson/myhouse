<?php

namespace App\Http\Controllers\Menu\Neuf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NeufController extends Controller
{
    public function backoffice () {
        return view('development.menu.neufs.backoffice');
    }

    public function interesse ($user) {
        return view('development.menu.neufs.interesse', ['user' => $user]);
    }

    public function agenda () {
        return view('development.menu.neufs.agenda');
    }

    public function entreprise () {
        return view('development.menu.neufs.enterprise');
    }

    public function statistique () {
        return view('development.menu.neufs.statistique');
    }

    public function evenement (Request $request) {
        return view('development.menu.neufs.marketing');
    }

    public function evenements (Request $request) {
        return view('development.menu.neufs.marketing', [
            'clickable' => $request->get('clickable'),
            'facebook' => $request->get('facebook'),
            'facebook_two' => $request->get('facebook-two'),
            'tombola' => $request->get('tombola'),
            'tresor' => $request->get('tresor'),
            'tresor_notif' => $request->get('tresor_notif'),
            'tresor_valid' => $request->get('tresor_valid'),
            'tresor_plateform' => $request->get('tresor_plateform'),
        ]);
    }

    public function plateform () {
        return view('development.menu.neufs.plateform');
    }
}

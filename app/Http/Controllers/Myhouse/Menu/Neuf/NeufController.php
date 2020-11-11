<?php

namespace App\Http\Controllers\Myhouse\Menu\Neuf;

use App\Repository\Back\Menu\NeufRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NeufController extends Controller
{
    /**
     * @var NeufRepository
     */
    private $neufRepository;

    /**
     * NeufController constructor.
     * @param NeufRepository $neufRepository
     */
    public function __construct(NeufRepository $neufRepository)
    {
        $this->middleware('auth');
        $this->neufRepository = $neufRepository;
    }

    public function backoffice () {

        $neufs = $this->neufRepository->getAllNeufs();

        return view('myhouse.back.menu.neuf.backoffice', ['neufs' => $neufs]);
    }

    public function agenda () {
        return view('myhouse.back.menu.neuf.agenda');
    }

    public function entreprise () {
        return view('myhouse.back.menu.neuf.entreprise');
    }


    public function interesse ($user) {
        return view('myhouse.back.menu.neuf.interesse')->with('user', $user);
    }

    /*
     * Evenements
     */

    public function evenement () {
        return view('myhouse.back.menu.neuf.evenements.marketing');
    }

    public function evenements (Request $request) {
        return view('myhouse.back.menu.neuf.evenements.marketing', [
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
        return view('myhouse.back.menu.neuf.evenements.plateform');
    }

}

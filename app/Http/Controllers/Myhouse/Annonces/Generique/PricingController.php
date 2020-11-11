<?php

namespace App\Http\Controllers\Myhouse\Annonces\Generique;

use App\Model\Generique\Url;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    public function pricing () {

        $url = $this->getAnnoceUrl();

        return view('myhouse.back.annonces.generique.pricing', ['url' => $url]);
    }

    public function url () {

        $this->setAnnonceUrl(url()->previous());

        $url = $this->getAnnoceUrl();

        return redirect()->route('pricing');
    }

    public function setAnnonceUrl ($url) {

        return Url::create(['name' => $url]);

    }

    public function getAnnoceUrl () {
        return Url::all()->last()->name;
    }




}

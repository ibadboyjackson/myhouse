<?php

namespace App\Http\Controllers\Myhouse\Annonces\Neufs;

use App\Http\Requests\Myhouse\Back\Annonces\Generique\EntrepriseProRequest;
use App\Http\Requests\Myhouse\Back\Annonces\Generique\EntrepriseRequest;
use App\Repository\Back\Annonces\Neuf\NeufRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Thiagoprz\HereGeocoder\HereGeocoder;

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

        $this->middleware('auth')->except(['service', 'abonnement', 'backUrlHouse']);

        $this->neufRepository = $neufRepository;
    }


    public function service () {
        return view('myhouse.back.annonces.neufs.service');
    }

    public function abonnement () {
        return view('myhouse.back.annonces.neufs.abonnement');
    }



    public function storeEntreprise (EntrepriseRequest $request) {

        $this->neufRepository->storeEntreprise($request);

        return redirect()->route('neuf.description', ['nom_projet' => urlencode($request->get('name'))]);
    }


    public function enregistrement () {
        return view('myhouse.back.annonces.neufs.enregistrement');
    }



    public function description () {
        return view('myhouse.back.annonces.neufs.description');
    }

    public function critere (Request $request) {

        $this->neufRepository->storeNeuf($request);

        return view('myhouse.back.annonces.neufs.critere', ['last_id' => $request->get('last_id')]);
    }

    public function annonce (Request $request) {

        $id = $this->neufRepository->getId($request);

        $this->neufRepository->storeCritere($request);

        return view('myhouse.back.annonces.neufs.annonce', ['id' => $id]);
    }

    public function upload (Request $request) {

        $id = $request->get('id');

        $this->validate($request, [
           'description' => 'required|min:10'
        ]);

        $this->neufRepository->storeDescription($request);

        return view('myhouse.back.annonces.neufs.upload', ['id' => $id]);

    }


    public function uploader (Request $request) {

        $id = $request->get('id');

        $this->neufRepository->recordMedia ($request);

        return redirect()->route('neuf.localisation', ['id' => $id]);
    }


    public function localisation () {
        return view('myhouse.back.annonces.neufs.localisation');
    }

    public function type (Request $request) {

        $geocoder = new HereGeocoder();
        $responses = $geocoder->geocode($request->get('adresse') . ', ' .$request->get('ville') . ', ' .$request->get('pays'));

        $latitude = $this->neufRepository->getLatitude($responses);
        $longitude = $this->neufRepository->getLongitude($responses);

        if (! is_null($longitude) && ! is_null($latitude)) {

            $request['latitude'] = $latitude;
            $request['longitude'] = $longitude;

            $neuf = $this->neufRepository->findRecord($request->get('id'));

            $this->neufRepository->hasRecord($request);

            return view('myhouse.back.annonces.neufs.type', ['neuf' => $neuf])    ;

        }

        return abort(403);

    }


    public function processFiles (Request $request) {


        $this->neufRepository->storeType($request);

        putSessionMessage('success', __('myhouse/back/annonces/neuf/success.ab'));

        return redirect()->back();

    }


    public function payement (Request $request) {
        return view('myhouse.back.annonces.neufs.payement');
    }

    public function success () {
        return view('myhouse.back.annonces.neufs.success');
    }

    public function backUrlHouse () {

        return redirect()->back();

    }

    public function activeOnline ($id) {
       $this->neufRepository->activeOnline($id);

        putSessionMessage('statut', __('myhouse/back/annonces/particulier/success.ad'));

        return redirect()->back();
    }

    public function deactiveOnline ($id) {
        $this->neufRepository->deactiveOnline($id);

        putSessionMessage('statut', __('myhouse/back/annonces/particulier/success.ae'));

        return redirect()->back();
    }

    public function delete ($id) {
        $this->neufRepository->delete($id);
        putSessionMessage('statut', __('myhouse/back/annonces/particulier/success.af'));
        return redirect()->back();
    }

    public function edit ($id) {
        return view('myhouse.back.annonces.neufs.description', ['id' => $id]);
    }

    public function update ($id, Request $request) {
        $this->neufRepository->updateVente($id, $request);
        return view('myhouse.back.annonces.neufs.critere', ['last_id' => $request->get('last_id')]);
    }

}

<?php

namespace App\Http\Controllers\Myhouse\Annonces\Professionnels;

use App\Http\Requests\Myhouse\Back\Annonces\Generique\EntrepriseRequest;
use App\Repository\Back\Annonces\Professionnel\ProfessionnelRepository;
use App\Repository\Validate\LocationRepository;
use App\Repository\Validate\VenteLocation;
use App\Repository\Validate\VenteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Thiagoprz\HereGeocoder\HereGeocoder;
use Illuminate\Support\Str;


class ProfessionnelController extends Controller
{
    /**
     * @var ProfessionnelRepository
     */

    private $professionnelRepository;
    /**
     * @var VenteRepository
     */
    private $venteRepository;
    /** 
     * @var LocationRepository
     */
    private $locationRepository;
    /**
     * @var VenteLocation
     */
    private $venteLocation;

    /**
     * ProfessionnelController constructor.
     * @param ProfessionnelRepository $professionnelRepository
     * @param VenteRepository $venteRepository
     * @param LocationRepository $locationRepository
     * @param VenteLocation $venteLocation
     */
    public function __construct(ProfessionnelRepository $professionnelRepository,
                                VenteRepository $venteRepository,
                                LocationRepository $locationRepository,
                                VenteLocation $venteLocation)
    {
        $this->middleware('auth')->except('service');
        $this->professionnelRepository = $professionnelRepository;
        $this->venteRepository = $venteRepository;
        $this->locationRepository = $locationRepository;
        $this->venteLocation = $venteLocation;
    }


    public function url () {

        $this->professionnelRepository->setAnnonceUrl (url()->previous());

        return redirect()->route('professionnel.service');

    }

    public function service () {
        return view('myhouse.back.annonces.professionnels.service');
    }

    public function abonnement () {
        return view('myhouse.back.annonces.professionnels.abonnement');
    }

    public function enregistrement () { 
        return view('myhouse.back.annonces.professionnels.enregistrement');
    }



    public function storeEntreprise(EntrepriseRequest $request) {

        $this->professionnelRepository->storeEntreprise($request);

        return redirect()->route('professionnel.transaction');
    }



    public function transaction () {

        return view('myhouse.back.annonces.professionnels.transaction');
    }


    public function typage ($id) {

        $choise = 1;

        $professionnel = $this->professionnelRepository->getCurrentRecord($id);

       return view('myhouse.back.annonces.professionnels.type', ['id' => $id, 'choise' => $choise, 'professionnel' => $professionnel]);

    }


    public function type (Request $request) {


        if ($request->has('venteActif') && ! $request->has('locationActif')) {

            $this->venteRepository->validateVente($request)->validate();


            if($request->get('page') === 'transaction') { 


                $this->professionnelRepository->storeVente($request);

                return redirect()->route('professionnel.edit', auth()->user()->professionnel->last()->id);

            }



            $this->professionnelRepository->storeVente($request);

            $lasts = $this->professionnelRepository->getLastRecord($request);

            foreach ($lasts as $last) {

                return redirect()->route('professionnel.type.type', ['id' => $last->id]);

            }

            return abort(403);

        }

        elseif ($request->has('locationActif') && ! $request->has('venteActif'))
        {

            if(count($request->all()) <= 11) {
                putSessionMessage('backerror', __('myhouse/help.must'));
                return redirect()->back();
            }

            $this->locationRepository->validateLocation($request)->validate();


            if($request->get('page') === 'transaction') {


                $this->professionnelRepository->storeLocation($request);

                return redirect()->route('professionnel.edit', auth()->user()->professionnel->last()->id);

            }



            $this->professionnelRepository->storeLocation($request);

            $lasts = $this->professionnelRepository->getLastRecord($request);

            foreach ($lasts as $last) {
                return redirect()->route('professionnel.type.type', ['id' => $last->id]);

            }

            return abort(403);

        }

        elseif ($request->has(["venteActif"])  && $request->has(["locationActif"]))
        {
            $this->venteLocation->validateVenteLocation($request)->validate();



            if($request->get('page') === 'transaction') {


                $this->professionnelRepository->storeVenteLocation($request);

                return redirect()->route('professionnel.edit', auth()->user()->professionnel->last()->id);

            }


            $this->professionnelRepository->storeVenteLocation($request);

            $lasts = $this->professionnelRepository->getLastRecord($request);

            foreach ($lasts as $last) {
                return redirect()->route('professionnel.type.type', ['id' => $last->id]);
            }

            return abort(403);
        }

        else {
            putSessionMessage('backerror', __('myhouse/help.back'));
            return redirect()->back();
        }
    }


    public function description (Request $request) {

        if ( $request->get('type') && is_null($request->get('page')) && ! $request->get('was-click')) {

            $lastrecord = $this->professionnelRepository->getCurrentRecord($request->get('id'));

            $this->professionnelRepository->storeType($request->get('type'), $lastrecord);
    
            return view('myhouse.back.annonces.professionnels.description', ['professionnel' => $lastrecord]);
        }


        if( is_null($request->get('page')) && $request->get('was-click')) {

            $lasrecord = $this->professionnelRepository->getCurrentRecord ($request->get('id'));
            $lasrecord->update(['page' => null]);
            return redirect()->back();
        }


        if ($request->get('page') === 'type') {

            $lasrecord = $this->professionnelRepository->getCurrentRecord ($request->get('id'));

            if (! is_null($request->get('type'))) {
                $this->professionnelRepository->storeType($request->get('type'), $lasrecord);
            }

            $request->merge([
                'page' => 'type',
                'uri' => url()->previous()
            ]);


            $lasrecord->update($request->all());

            return redirect()->back()->with('professionnel', $lasrecord);
        }

    }


    public function critere (Request $request) {

        if($request->get('was-click') && is_null($request->get('page'))) {
            $lasrecord = $this->professionnelRepository->getCurrentRecord ($request->get('id'));
            $lasrecord->update(['page' => null]);
            return redirect()->back();
        }

        if ($request->get('page') === 'description') {

            $lasrecord = $this->professionnelRepository->getCurrentRecord ($request->get('id'));

            $request->merge([
                'page' => 'description',
                'uri' => url()->previous()
            ]);

            $lasrecord->update($request->all());

            return redirect()->back();
        }



        $this->professionnelRepository->hasRecord($request);
        
        $professionnel = $this->professionnelRepository->getCurrentRecord($request->get('id'));


        return view('myhouse.back.annonces.professionnels.critere', ['id' => $request->get('id'), 'professionnel' => $professionnel]);
    }


    public function storeCritere (Request $request) {



        if(is_null($request->get('page')) && $request->get('was-click')) {
            $lasrecord = $this->professionnelRepository->getCurrentRecord ($request->get('id'));
            $lasrecord->update(['page' => null]);
            return redirect()->back();
        }

        if ($request->get('page') === 'critere') {

            $lasrecord = $this->professionnelRepository->getCurrentRecord ($request->get('id'));

            $request->merge([
                'page' => 'critere',
                'uri' => url()->previous()
            ]);

            $lasrecord->update($request->all());

            return redirect()->back();
        }


        if (count($request->all()) <= 10) {

            $lastrecord = $this->professionnelRepository->getCurrentRecord ($request->get('id'));


            if ( isset(auth()->user()->professionnel->last()->critere->last()->professionnel_id)) {


                $lastrecord->update($request->all());
    
                return redirect()->route('professionnel.annonce', ['id' => $request->get('id')]);
            }
    
            $this->professionnelRepository->storeCritere ($request);

            return redirect()->route('professionnel.annonce', ['id' => $request->get('id')]);

        }


        putSessionMessage('backerror', __('myhouse/help.error'));

        return redirect()->back();

    }

    public function annonce ($id) 
    {

        $lastrecord = $this->professionnelRepository->getCurrentRecord($id);

        return view('myhouse.back.annonces.professionnels.annonce', ['id' => $id, 'professionnel' => $lastrecord]);
    }



    public function media (Request $request) {


        $this->validate($request, [
           'description' => 'required|min:10|max:600'
        ]);



        if(is_null($request->get('page')) && $request->get('was-click')) {
            $lasrecord = $this->professionnelRepository->getCurrentRecord ($request->get('id'));
            $lasrecord->update(['page' => null]);
            return redirect()->back();
        }

        if ($request->get('page') === 'annonce') {
            $lasrecord = $this->professionnelRepository->getCurrentRecord ($request->get('id'));

            $request->merge([
                'page' => 'annonce',
                'uri' => url()->previous()
            ]);

            $lasrecord->update($request->all());

            return redirect()->back();
        }


        $this->professionnelRepository->hasRecord($request);
        $lastrecord = $this->professionnelRepository->getCurrentRecord($request->get('id'));


        return view('myhouse.back.annonces.professionnels.media', ['id' => $request->get('id'), 'professionnel' => $lastrecord]);

    }


    public function upload (Request $request) {


        if(is_null($request->get('page')) && $request->get('was-click')) {
            $lasrecord = $this->professionnelRepository->getCurrentRecord ($request->get('id'));
            $lasrecord->update(['page' => null]);
            return redirect()->back();
        }

        if ($request->get('page') === 'media') {
            $lasrecord = $this->professionnelRepository->getCurrentRecord ($request->get('id'));

            $request->merge([
                'page' => 'media',
                'uri' => url()->previous()
            ]);

            $lasrecord->update($request->all());

            return redirect()->back();
        }


        $this->professionnelRepository->finalRecord($request);
        $lastrecord = $this->professionnelRepository->getCurrentRecord($request->get('id'));

        return redirect()->route('professionnel.localisation', ['id' => $request->get('id'), 'professionnel' => $lastrecord]);

    }


    public function localisation (Request $request) {

        $lastrecord = $this->professionnelRepository->getCurrentRecord($request->get('id'));

        return view('myhouse.back.annonces.professionnels.localisation', ['professionnel' => $lastrecord]);

    }

    public function payement (Request $request) {



        if(is_null($request->get('page')) && $request->get('was-click')) {
            $lasrecord = $this->professionnelRepository->getCurrentRecord ($request->get('id'));
            $lasrecord->update(['page' => null]);
            return redirect()->back();
        }

        if ($request->get('page') === 'localisation') {
            $lasrecord = $this->professionnelRepository->getCurrentRecord ($request->get('id'));

            $request->merge([
                'page' => 'localisation',
                'uri' => url()->previous()
            ]);

            $lasrecord->update($request->all());

            return redirect()->back();
        }


        $geocoder = new HereGeocoder();
        $responses = $geocoder->geocode($request->get('adresse') . ', ' .$request->get('ville') . ', ' .$request->get('pays'));

        $latitude = $this->professionnelRepository->getLatitude($responses);
        $longitude = $this->professionnelRepository->getLongitude($responses);

        if (! is_null($longitude) && ! is_null($latitude)) {

            $request['latitude'] = $latitude;
            $request['longitude'] = $longitude;

            $this->professionnelRepository->hasRecord($request);

            return view('myhouse.back.annonces.professionnels.success');
        }

        return abort(403);
    }

    public function success () {
        return view('myhouse.back.annonces.professionnels.success');
    }

    public function activeOnline ($id) {
        $this->professionnelRepository->activeOnline($id);
        putSessionMessage('statut', __('myhouse/back/annonces/particulier/success.ad'));

        return redirect()->back();
    }

    public function deactiveOnline ($id) {
        $this->professionnelRepository->deactivateOnline($id);
        putSessionMessage('statut', __('myhouse/back/annonces/particulier/success.ae'));

        return redirect()->back();
    }

    public function delete ($id) {
        $this->professionnelRepository->delete($id);
        putSessionMessage('statut', __('myhouse/back/annonces/particulier/success.af'));

        return redirect()->back();
    }

    public function edit ($id) {
        
        $professionnel = $this->professionnelRepository->getCurrentRecord ($id);



        if ($professionnel) {

            $this->professionnelRepository->updateProfessionnel ($id, request()->getUri());

            return view('myhouse.back.annonces.professionnels.transaction', ['id' => $id, 'professionnel' => $professionnel]);
        }


    }

    public function update ($id, Request $request) {


        if (is_null($request->get('page')) && $request->get('was-click')) {

            $this->professionnelRepository->updatePage(auth()->user()->professionnel->last()->id, $request);

            return redirect()->back();

        }



        if ($request->has('venteActif') && ! $request->has('locationActif')) {


            $this->venteRepository->validateVente($request)->validate();


            if ($request->get('page') === 'transaction') {


                $this->professionnelRepository->updateVente($id, $request);

                return redirect()->route('professionnel.edit', auth()->user()->professionnel->last()->id);

            }



            $this->professionnelRepository->updateVente($id, $request);

            $lasts = $this->professionnelRepository->getLastRecord($request);


            foreach ($lasts as $last) {

                return redirect()->route('professionnel.type.type', ['id' => $last->id]);
            }

            return abort(403);

        }

        elseif ($request->has('locationActif') && ! $request->has('venteActif'))
        
        {

            if(count($request->all()) <= 11) {
                putSessionMessage('backerror', __('myhouse/help.must'));
                return redirect()->back();
            }

            $this->locationRepository->validateLocation($request)->validate();


            if($request->get('page') === 'transaction') {


                $this->professionnelRepository->updateLocation($id, $request);

                return redirect()->route('professionnel.edit', auth()->user()->professionnel->last()->id);

            }


            $this->professionnelRepository->updateLocation($id, $request);

            $lasts = $this->professionnelRepository->getLastRecord($request);

            foreach ($lasts as $last) {
                return redirect()->route('professionnel.type.type', ['id' => $last->id]);
            }

            return abort(403);

        }

        elseif ($request->has(["venteActif"])  && $request->has(["locationActif"]))

        {

            $this->venteLocation->validateVenteLocation($request)->validate();


            if($request->get('page') === 'transaction') {

                $this->professionnelRepository->updateVenteLocation($id, $request);

                return redirect()->route('professionnel.edit', auth()->user()->professionnel->last()->id);

            }



            $this->professionnelRepository->updateVenteLocation($id, $request);

            $lasts = $this->professionnelRepository->getLastRecord($request);

            foreach ($lasts as $last) {
                return redirect()->route('professionnel.type.type', ['id' => $last->id]);
            }

            return abort(403);
        }

        else {
            putSessionMessage('backerror', __('myhouse/help.back'));
            return redirect()->back();
        }

    }
}

<?php

namespace App\Http\Controllers\Myhouse\Annonces\Particuliers;

use App\Http\Controllers\Myhouse\Annonces\Generique\PricingController;
use App\Model\Particulier\Particulier;
use App\Repository\Back\Annonces\Particulier\ParticulierRepository;
use App\Repository\Back\Menu\Url\UrlRepository;
use App\Repository\Validate\EchangeRepository;
use App\Repository\Validate\LocationEchange;
use App\Repository\Validate\LocationRepository;
use App\Repository\Validate\LocationVenteEchange;
use App\Repository\Validate\VenteEchange;
use App\Repository\Validate\VenteLocation;
use App\Repository\Validate\VenteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Image;
use Spatie\Geocoder\Facades\Geocoder;
use Thiagoprz\HereGeocoder\HereGeocoder;
use Illuminate\Support\Str;
use App\Http\Requests\Myhouse\Annonces\Pareticulier\DescriptionRequest;

class ParticulierController extends Controller
{
    /**
     * @var ParticulierRepository
     */
    private $particulierRepository;
    /**
     * @var VenteRepository
     */
    private $venteRepository;
    /**
     * @var EchangeRepository
     */
    private $echangeRepository;
    /**
     * @var LocationRepository
     */
    private $locationRepository;
    /**
     * @var LocationEchange
     */
    private $locationEchange;
    /**
     * @var LocationVenteEchange
     */
    private $locationVenteEchange;
    /**
     * @var VenteEchange
     */
    private $venteEchange;
    /**
     * @var VenteLocation
     */
    private $venteLocation;
    /**
     * @var PricingController
     */
    private $pricingController;
    /**
     * @var UrlRepository
     */
    private $urlRepository;


    /**
     * ParticulierController constructor.
     * @param ParticulierRepository $particulierRepository
     * @param VenteRepository $venteRepository
     * @param LocationRepository $locationRepository
     * @param EchangeRepository $echangeRepository
     * @param LocationEchange $locationEchange
     * @param LocationVenteEchange $locationVenteEchange
     * @param VenteEchange $venteEchange
     * @param VenteLocation $venteLocation
     * @param PricingController $pricingController
     * @param UrlRepository $urlRepository
     */
    public function __construct(ParticulierRepository $particulierRepository,
                                VenteRepository $venteRepository,
                                LocationRepository $locationRepository,
                                EchangeRepository $echangeRepository,
                                LocationEchange $locationEchange,
                                LocationVenteEchange $locationVenteEchange,
                                VenteEchange $venteEchange,
                                VenteLocation $venteLocation,
                                PricingController $pricingController,
                                UrlRepository $urlRepository
    )
    {
        $this->middleware('auth')->except(['service']); 
        $this->middleware('exceed')->except(['service', 'activeOnline', 'deactiveOnline', 'delete', 'edit', 'update', 'url']);

        $this->venteRepository = $venteRepository;
        $this->particulierRepository = $particulierRepository;
        $this->echangeRepository = $echangeRepository;
        $this->locationRepository = $locationRepository;
        $this->locationEchange = $locationEchange;
        $this->locationVenteEchange = $locationVenteEchange;
        $this->venteEchange = $venteEchange;
        $this->venteLocation = $venteLocation;
        $this->pricingController = $pricingController;
        $this->urlRepository = $urlRepository;
    }

    public function service () {
        return view('myhouse.back.annonces.particuliers.service');
    }

    public function transaction () {

        return view('myhouse.back.annonces.particuliers.transaction');
    }

    public function backurl (Request $request) {
        return redirect()->back();
    }

    public function url () {

        $this->particulierRepository->setAnnonceUrl (url()->previous());

        return redirect()->route('particulier.service');

    }

    public function typage ($id) {
        
        $choise = 1;

        $particulier = $this->particulierRepository->getCurrentRecord($id);


        if ($particulier) {

            $this->particulierRepository->storeTypeUri (request()->url(), $id);

            return view('myhouse.back.annonces.particuliers.type', ['id' => $id, 'choise' => $choise, 'particulier' => $particulier]);
        }

        return abort(404);
    }


    public function beforeredirect () {

        return redirect()->route('particulier.edit', auth()->user()->particulier->last()->id);

    }


    public function type (Request $request) {


        if ($request->has('venteActif') && ! $request->has('locationActif') && ! $request->has('echangeActif')) {


            $this->venteRepository->validateVente($request)->validate(); 

            if($request->get('page') === 'transaction') {


                $this->particulierRepository->storeVente($request);
                
                return redirect()->route('particulier.beforeredirect');
            }


            
            if (! is_null($request->get('prix_m'))) {

                $this->validate($request, [
                    'prix_m' => 'required|regex:/^[\d.,]+$/'
                ]);

            }

            $this->particulierRepository->storeVente($request);

            $lasts = $this->particulierRepository->getLastRecord($request);

            foreach ($lasts as $last) {
            
                return redirect()->route('particulier.type.type', ['id' => $last->id]);
            
            }

            return abort(403);
        }


        elseif ($request->has('locationActif') && ! $request->has('venteActif') && ! $request->has('echangeActif'))
        {

            $this->locationRepository->validateLocation($request)->validate();


            if ( $request->get('page') === 'transaction') {

                $this->particulierRepository->storeLocation($request);

                return redirect()->route('particulier.beforeredirect');

            }


            if (! is_null($request->get('charge_copropriete'))) {
                
                $this->validate($request, [
                    'charge_copropriete' => 'regex:/^\d+(\,\d{1,2})?$/'
                ]);

            }



            $this->particulierRepository->storeLocation($request);

            $lasts = $this->particulierRepository->getLastRecord($request);
            $choise = 1;

            foreach ($lasts as $last) {
                return redirect()->route('particulier.type.type', ['id' => $last->id]);
            }

            return abort(403);
        }


        elseif ($request->has('echangeActif') && ! $request->has('venteActif') && ! $request->has('locationActif'))
        {

            $this->echangeRepository->validateEchange($request)->validate();


            if($request->get('page') === 'transaction') {


                $this->particulierRepository->storeEchange($request);

                return redirect()->route('particulier.beforeredirect');

            }



            $this->particulierRepository->storeEchange($request);

            $lasts = $this->particulierRepository->getLastRecord($request);

            foreach ($lasts as $last) {
                return redirect()->route('particulier.type.type', ['id' => $last->id]);
            }

            return abort(403);

        }

        elseif ($request->has(["venteActif"])  && $request->has(["locationActif"]) && ! $request->has(["echangeActif"]))
        {


            $this->venteLocation->validateVenteLocation($request)->validate();


            if($request->get('page') === 'transaction') {


                $this->particulierRepository->storeVenteLocation($request);

                return redirect()->route('particulier.beforeredirect');

            }

            $this->particulierRepository->storeVenteLocation($request);

            $lasts = $this->particulierRepository->getLastRecord($request);
            $choise = 1;


            foreach ($lasts as $last) {
                return redirect()->route('particulier.type.type', ['id' => $last->id]);
            }

            return abort(403);
        }


        elseif ($request->has(["venteActif"])  && $request->has(["echangeActif"]) && ! $request->has(["locationActif"]))
        {

      
           $this->venteEchange->validateVenteEchange($request)->validate();



            if($request->get('page') === 'transaction') {


                $this->particulierRepository->storeVenteEchange($request);

                return redirect()->route('particulier.beforeredirect');

            }

           $this->particulierRepository->storeVenteEchange($request);
            $lasts = $this->particulierRepository->getLastRecord($request);

            foreach ($lasts as $last) {
                return redirect()->route('particulier.type.type', ['id' => $last->id]);
            }

            return abort(403);
        }


        elseif ( ! $request->has(["venteActif"])  && $request->has(["echangeActif"]) && $request->has(["locationActif"]))
        {


           $this->locationEchange->validateLocationEchange($request)->validate();


            if($request->get('page') === 'transaction') {


                $this->particulierRepository->storeLocationEchange($request);

                return redirect()->route('particulier.beforeredirect');

            }

           $this->particulierRepository->storeLocationEchange($request);
            $lasts = $this->particulierRepository->getLastRecord($request);
            $choise = 1;

            foreach ($lasts as $last) {
                return redirect()->route('particulier.type.type', ['id' => $last->id]);
            }

            return abort(403);
        }


        elseif ($request->has(["venteActif"])  && $request->has(["echangeActif"]) && $request->has(["locationActif"]))
        {
                                   
            $this->locationVenteEchange->validateLocationVenteEchange($request)->validate();



            if($request->get('page') === 'transaction') {


                $this->particulierRepository->storeEchangeLocationVente($request);

                return redirect()->route('particulier.beforeredirect');

            }

            $this->particulierRepository->storeEchangeLocationVente($request);
            $lasts = $this->particulierRepository->getLastRecord($request);
            $choise = 1;

            foreach ($lasts as $last) {
                return redirect()->route('particulier.type.type', ['id' => $last->id]);
            }

            return abort(403);
        }



        else {
            putSessionMessage('backerror', __('myhouse/help.back'));
            return redirect()->back();
        }


    }



    public function description (Request $request) {


        $particulier = $this->particulierRepository->getCurrentRecord ($request->get('id'));

        if ($particulier) {
            $this->particulierRepository->storeDescriptionUri (request()->fullUrl(), $request->get('id'));

       

        if ($request->get('type') && is_null($request->get('page')) && ! $request->get('was-click')) {

            $lasrecord = $this->particulierRepository->getCurrentRecord ($request->get('id'));

            $this->particulierRepository->storeType($request->get('type'), $lasrecord);

            if ($lasrecord) {
                return view('myhouse.back.annonces.particuliers.description', ['particulier' => $lasrecord]);
            }

            return abort('404');
        }


        if(is_null($request->get('page')) && $request->get('was-click')) {

            $lasrecord = $this->particulierRepository->getCurrentRecord ($request->get('id'));
            $lasrecord->update(['page' => null]);
            return redirect()->back();
        }
        

        if ($request->get('page') === 'type') {

            $lasrecord = $this->particulierRepository->getCurrentRecord ($request->get('id'));

            if (! is_null($request->get('type'))) {
                $this->particulierRepository->storeType($request->get('type'), $lasrecord);
            }

            $request->merge([
                'page' => 'type',
                'uri' => url()->previous()
            ]);


            $lasrecord->update($request->all());

            return redirect()->back()->with('particulier', $lasrecord);
        }

        return redirect()->back();
        }

        return abort('404');

    }


    public function critere (DescriptionRequest $request) {

        $particulier = $this->particulierRepository->getCurrentRecord($request->get('id'));

        if ($particulier)  {

            $this->particulierRepository->storeCritereUri (request()->fullUrl(), $request->get('id'));

            if ($request->get('was-click') && is_null($request->get('page'))) {
    
                $lasrecord = $this->particulierRepository->getCurrentRecord ($request->get('id'));
    
    
                $lasrecord->update(['page' => null]);
                
                return redirect()->back();
            }
    
            if ($request->get('page') === 'description') {
    
                $lasrecord = $this->particulierRepository->getCurrentRecord ($request->get('id'));
    
                $request->merge([
                    'page' => 'description',
                    'uri' => url()->previous()
                ]);
    
                $lasrecord->update($request->all());
    
                return redirect()->back();
            }
    
    
            $this->particulierRepository->hasRecord($request);
            
            $particulier = $this->particulierRepository->getCurrentRecord($request->get('id'));
    
            if ($particulier) {
                return view('myhouse.back.annonces.particuliers.critere', ['id' => $request->get('id'), 'particulier' => $particulier]);
            }
    
            return abort('404');

        }

        return abort('404');

    }


    public function showLocalisation ($id) {


        $lasrecord = $this->particulierRepository->getCurrentRecord ($id);
        
        if ($lasrecord) {


            $this->particulierRepository->storeLocalisationUri (request()->url(), $id);

            $this->particulierRepository->storeLocalisationUri (request()->url(), $id);


            return view('myhouse.back.annonces.particuliers.localisation', ['id' => $id, 'particulier' => $lasrecord]);
        }

        return abort('404');
    }




    public function localisation (Request $request) {


        $lasrecord = $this->particulierRepository->getCurrentRecord ($request->get('id'));

        if ($lasrecord) {

            if (is_null($request->get('page')) && $request->get('was-click')) {

                $lasrecord = $this->particulierRepository->getCurrentRecord ($request->get('id'));
                $lasrecord->update(['page' => null]);
                return redirect()->back();
    
            }
    
    
    
            if ($request->get('page') === 'critere') {
    
                
                $lasrecord = $this->particulierRepository->getCurrentRecord ($request->get('id'));
    
                $request->merge([
                    'page' => 'critere',
                    'uri' => url()->previous()
                ]);
    
    
                if ( count($request->all()) <= 11) {
    
                    $this->particulierRepository->updateCritere ($request);
                    
                    $lasrecord->update($request->all());
                    
                    return redirect()->back();
    
    
    
                }
    
    
    
                putSessionMessage('backerror', __('myhouse/help.error'));
    
                return redirect()->back();
    
            }
    
    
    
    
    
            $lasrecord = $this->particulierRepository->getCurrentRecord ($request->get('id'));
    
            if ( count ($request->all()) <= 8) {
    
                if ( isset(auth()->user()->particulier->last()->critere->last()->particulier_id)) {
    
                    $this->particulierRepository->updateCritere ($request);
        
                    return redirect()->route('particulier.localisation.localisation', ['id' => $request->get('id')]);
                }
        
                $this->particulierRepository->storeParticulierCritere ($request);
        
                return redirect()->route('particulier.localisation.localisation', ['id' => $request->get('id')]);
            }
    
            putSessionMessage('backerror', __('myhouse/help.error'));
    
            return redirect()->back()->withInput();
      
            
        }


        return abort('404');

    }


    public function postlocalisation (Request $request) {


        if(is_null($request->get('page')) && $request->get('was-click') ){
            $lasrecord = $this->particulierRepository->getCurrentRecord ($request->get('id'));
            $lasrecord->update(['page' => null]);
            return redirect()->back();
        }

        if ($request->get('page') === 'localisation') {
            $lasrecord = $this->particulierRepository->getCurrentRecord ($request->get('id'));

            $request->merge([
                'page' => 'localisation',
                'uri' => url()->previous()
            ]);

            $lasrecord->update($request->all());

            return redirect()->back(); 
        }




        $geocoder = new HereGeocoder();
        $responses = $geocoder->geocode($request->get('adresse') . ', ' .$request->get('ville') . ', ' .$request->get('pays'));

        $latitude = $this->particulierRepository->getLatitude($responses);
        $longitude = $this->particulierRepository->getLongitude($responses);

        if (! is_null($longitude) && ! is_null($latitude)) {

            $request['latitude'] = $latitude;
            $request['longitude'] = $longitude;

            $this->particulierRepository->hasRecord($request);


            return redirect()->route('particulier.upload', $request->get('id'));
        }

        putSessionMessage('statut', __('myhouse/help.statut'));

        return redirect()->back();



    }


    public function upload ($id) {

        $this->particulierRepository->storeUploadUri (request()->url(), $id);

        $lasrecord = $this->particulierRepository->getCurrentRecord ($id);

        if ($lasrecord) {
            return view('myhouse.back.annonces.particuliers.upload', ['particulier' => $lasrecord]);
        }
        return abort('404');
    }



    public function successfull (Request $request) {

        $number = auth()->user()->particulier->where('images','!=', null)->count() + auth()->user()->particulier->where('page','!=', null)->count();
        


        if (is_null($request->get('page')) && $request->get('was-click') ){

            $lasrecord = $this->particulierRepository->getCurrentRecord ($request->get('id'));
            $lasrecord->update(['page' => null]);

            return redirect()->back();

        }

        if ($request->get('page') === 'upload') {

            $lasrecord = $this->particulierRepository->getCurrentRecord ($request->get('id'));
            
            $request->merge([
                'page' => 'upload',
                'uri' => url()->previous()
            ]);
            
            $lasrecord->update($request->all());

            return redirect()->back();
        }


        if ($request->hasFile('image'))
       
        {
            $names = [];

            if(count($request->file('image')) <= 9) {

            
                foreach($request->file('image') as $image)
                {
                    $destinationPath = public_path('development/files/particulier/images');

                    $filename = md5(Str::random(30) . time() . '_' . $image) . '.' . $image->getClientOriginalExtension();

                    $location_429 = public_path('development/files/particulier/429/' .$filename);
                    $location_400 = public_path('development/files/particulier/400/' .$filename);
                    $location_124 = public_path('development/files/particulier/124/' .$filename);
                    $location_878 = public_path('development/files/particulier/878/' .$filename);
                    $location_204 = public_path('development/files/particulier/204/' .$filename);



                    \Intervention\Image\Facades\Image::make($image)
                        ->fit(878, 464)->save($location_878)
                        ->fit(429, 291)->save($location_429)
                        ->fit(400, 304)->save($location_400)
                        ->fit(204, 134)->save($location_204)
                        ->fit(124, 87)->save($location_124);



                    $image->move($destinationPath, $filename);

                    array_push($names, $filename);

                }

                $images = json_encode($names);


                $this->particulierRepository->finalRecord($request->all(), $images);

                return redirect()->route('particulier.success');
            }

            putSessionMessage('error', __('myhouse/back/annonces/particulier/upload.al'));

            return redirect()->back();
        }

        if ($request->hasFile('image') == false) {

            putSessionMessage('error', __('myhouse/back/annonces/particulier/upload.am'));

            return redirect()->back();
        }

    }


    public function success () {
       return  view('myhouse.back.annonces.particuliers.success');
    }


    public function activeOnline ($id) {

        $this->particulierRepository->activateOnline($id);

        putSessionMessage('statut', __('myhouse/back/annonces/particulier/success.ad'));

        return redirect()->back();
    }

    public function deactiveOnline ($id) {

        $this->particulierRepository->deactivateOnline($id);
        putSessionMessage('statut', __('myhouse/back/annonces/particulier/success.ae'));

        return redirect()->back();
    }

    public function delete ($id) {
        $this->particulierRepository->delete($id);
        putSessionMessage('statut', __('myhouse/back/annonces/particulier/success.af'));

        return redirect()->back();
    }

    public function edit ($id) {

        $record = $this->particulierRepository->getCurrentRecord($id);

        if ($record) {

            $this->particulierRepository->updateParticulier ($id, request()->getUri());

            $particulier = $this->particulierRepository->getCurrentRecord($id);

            return view('myhouse.back.annonces.particuliers.transaction', ['id' => $id, 'particulier' => $particulier]);
        }

        return abort(404);
    }

    public function update ($id, Request $request) {


        if (is_null($request->get('page')) && $request->get('was-click')) {

            $this->particulierRepository->updatePage(auth()->user()->particulier->last()->id, $request);
            return redirect()->back();

        }


        if ($request->has('venteActif') && ! $request->has('locationActif') && ! $request->has('echangeActif')) {
            
            $this->venteRepository->validateVente($request)->validate();

            if ($request->get('page') === 'transaction') {


                $this->particulierRepository->updateVente($id, $request);

                return redirect()->route('particulier.edit', auth()->user()->particulier->last()->id);

            }


            $this->particulierRepository->updateVente($id, $request);

            $lasts = $this->particulierRepository->getLastRecord($request);


            $particulier = $this->particulierRepository->getCurrentRecord ($id);


            foreach ($lasts as $last) {
                return view('myhouse.back.annonces.particuliers.type', ['id' => $last->id, 'particulier' => $particulier]);
            }

            return abort(403);
        }


        elseif ($request->has('locationActif') && ! $request->has('venteActif') && ! $request->has('echangeActif'))
        {
    
            $this->locationRepository->validateLocation($request)->validate();

            if($request->get('page') === 'transaction') {


                $this->particulierRepository->updateLocation($id, $request);

                return redirect()->route('particulier.edit', auth()->user()->particulier->last()->id);

            }

            $this->particulierRepository->updateLocation($id, $request);

            $lasts = $this->particulierRepository->getLastRecord($request);
            $particulier = $this->particulierRepository->getCurrentRecord ($id);


            foreach ($lasts as $last) {
                return view('myhouse.back.annonces.particuliers.type', ['id' => $last->id, 'particulier' => $particulier]);
            }

            return abort(403);
        }






        elseif ($request->has('echangeActif') && ! $request->has('venteActif') && ! $request->has('locationActif'))
        {

            $this->echangeRepository->validateEchange($request)->validate();

            if($request->get('page') === 'transaction') {


                $this->particulierRepository->updateVente($id, $request);

                return redirect()->route('particulier.edit', auth()->user()->particulier->last()->id);

            }

            $this->particulierRepository->updateEchange($id, $request);

            $lasts = $this->particulierRepository->getLastRecord($request);
            $particulier = $this->particulierRepository->getCurrentRecord ($id);


            foreach ($lasts as $last) {
                return view('myhouse.back.annonces.particuliers.type', ['id' => $last->id, 'particulier' => $particulier]);
            }

            return abort(403);

        }

        elseif ($request->has(["venteActif"])  && $request->has(["locationActif"]) && ! $request->has(["echangeActif"]))
        {
            $this->venteLocation->validateVenteLocation($request)->validate();

            if($request->get('page') === 'transaction') {


                $this->particulierRepository->updateVenteLocation($id, $request);

                return redirect()->route('particulier.edit', auth()->user()->particulier->last()->id);

            }

            $this->particulierRepository->updateVenteLocation($id, $request);

            $lasts = $this->particulierRepository->getLastRecord($request);
            $particulier = $this->particulierRepository->getCurrentRecord ($id);



            foreach ($lasts as $last) {
                return view('myhouse.back.annonces.particuliers.type', ['id' => $last->id, 'particulier' => $particulier]);
            }

            return abort(403);
        }


        elseif ($request->has(["venteActif"])  && $request->has(["echangeActif"]) && ! $request->has(["locationActif"]))
        {
            $this->venteEchange->validateVenteEchange($request)->validate();

            if($request->get('page') === 'transaction') {


                $this->particulierRepository->updateVente($id, $request);

                return redirect()->route('particulier.edit', auth()->user()->particulier->last()->id);

            }

            $this->particulierRepository->updateVenteEchange($id, $request);
            $lasts = $this->particulierRepository->getLastRecord($request);
            $particulier = $this->particulierRepository->getCurrentRecord ($id);

            foreach ($lasts as $last) {
                return view('myhouse.back.annonces.particuliers.type', ['id' => $last->id, 'particulier' => $particulier]);
            }

            return abort(403);
        }


        elseif (! $request->has(["venteActif"])  && $request->has(["echangeActif"]) && $request->has(["locationActif"]))
        {
            $this->locationEchange->validateLocationEchange($request)->validate();

            if($request->get('page') === 'transaction') {


                $this->particulierRepository->updateVente($id, $request);

                return redirect()->route('particulier.edit', auth()->user()->particulier->last()->id);

            }

            $this->particulierRepository->updateLocationEchange($id, $request);
            $lasts = $this->particulierRepository->getLastRecord($request);
            $particulier = $this->particulierRepository->getCurrentRecord ($id);

            foreach ($lasts as $last) {
                return view('myhouse.back.annonces.particuliers.type', ['id' => $last->id, 'particulier' => $particulier]);
            }

            return abort(403);
        }


        elseif ($request->has(["venteActif"])  && $request->has(["echangeActif"]) && $request->has(["locationActif"]))
        {
            $this->locationVenteEchange->validateLocationVenteEchange($request)->validate();

            if($request->get('page') === 'transaction') {


                $this->particulierRepository->updateVente($id, $request);

                return redirect()->route('particulier.edit', auth()->user()->particulier->last()->id);

            }

            $this->particulierRepository->updateEchangeLocationVente($id, $request);
            $lasts = $this->particulierRepository->getLastRecord($request);
            $particulier = $this->particulierRepository->getCurrentRecord ($id);


            foreach ($lasts as $last) {
                return view('myhouse.back.annonces.particuliers.type', ['id' => $last->id, 'particulier' => $particulier]);
            }

            return abort(403);
        }



        else {
            putSessionMessage('backerror', __('myhouse/help.back'));
            return redirect()->back();
        }
    }
}

<?php

namespace App\Traits;

use App\Model\Particulier\Particulier;

trait HasRecord {


    public function hasRecord ($request) {

        $request->merge(['user_id' => auth()->user()->id]);


        $particulier = $this->getCurrentRecord($request->get('id'));


        $data = $request->all();


        if (isset($data['surface_habitable'])) {
            $surface_habitable = str_replace(',', '.', $data['surface_habitable']);

            $request->except('surface_habitable');


            $request->merge([
                'surface_habitable' => $surface_habitable,
            ]);
        }

        if (isset($data['surface_totale'])) {
            $surface_totale = str_replace(',', '.', $data['surface_totale']);

            $request->except('surface_totale');


            $request->merge([
                'surface_totale' => $surface_totale,
            ]);
        }



        if (isset($data['surface_garage'])) {
            $surface_garage = str_replace(',', '.', $data['surface_garage']);

            $request->except('surface_garage');


            $request->merge([
                'surface_garage' => $surface_garage,
            ]);
        }


        if (isset($data['superficie_terrain'])) {
            $superficie_terrain = str_replace(',', '.', $data['superficie_terrain']);

            $request->except('superficie_terrain');


            $request->merge([
                'superficie_terrain' => $superficie_terrain,
            ]);
        }

        if (isset($data['surface_batiment'])) {
            $surface_batiment = str_replace(',', '.', $data['surface_batiment']) ?? null;

            $request->except('surface_batiment');


            $request->merge([
                'surface_batiment' => $surface_batiment,
            ]);
        }

        if (isset($data['hauteur_sous_plafond'])) {
            $hauteur_sous_plafond = str_replace(',', '.', $data['hauteur_sous_plafond']) ?? null;

            $request->except('hauteur_sous_plafond');


            $request->merge([
                'hauteur_sous_plafond' => $hauteur_sous_plafond,
            ]);
        }


        if (isset($data['hauteur_plafond'])) {
            $hauteur_sous_plafond = str_replace(',', '.', $data['hauteur_plafond']) ?? null;

            $request->except('hauteur_plafond');


            $request->merge([
                'hauteur_plafond' => $hauteur_sous_plafond,
            ]);
        }


        if (isset($data['espace_entrepot'])) {
            $espace_entrepot = str_replace(',', '.', $data['espace_entrepot']) ?? null;

            $request->except('espace_entrepot');


            $request->merge([
                'espace_entrepot' => $espace_entrepot,
            ]);
        }

        if (isset($data['espace_activite'])) {
            $espace_activite = str_replace(',', '.', $data['espace_activite']) ?? null;

            $request->except('espace_activite');


            $request->merge([
                'espace_activite' => $espace_activite,
            ]);
        }

        if (isset($data['espace_bureau'])) {
            $espace_bureau = str_replace(',', '.', $data['espace_bureau']) ?? null;

            $request->except('espace_bureau');


            $request->merge([
                'espace_bureau' => $espace_bureau,
            ]);
        }

        if (isset($data['portail_un'])) {
            $portail_un = str_replace(',', '.', $data['portail_un']) ?? null;

            $request->except('portail_un');


            $request->merge([
                'portail_un' => $portail_un,
            ]);
        }

        if (isset($data['portail_deux'])) {
            $portail_deux = str_replace(',', '.', $data['portail_deux']) ?? null;

            $request->except('portail_deux');


            $request->merge([
                'portail_deux' => $portail_deux,
            ]);
        }

        if (isset($data['portail_trois'])) {
            $portail_trois = str_replace(',', '.', $data['portail_trois']) ?? null;

            $request->except('portail_trois');

            
            $request->merge([
                'portail_trois' => $portail_trois,
            ]);
        }

        if (isset($data['portail_quatre'])) {
            $portail_quatre = str_replace(',', '.', $data['portail_quatre']) ?? null;

            $request->except('portail_quatre');


            $request->merge([
                'portail_quatre' => $portail_quatre,
            ]);
        }


        if (isset($data['portail'])) {
            $portail = str_replace(',', '.', $data['portail']) ?? null;

            $request->except('portail');
            
            $request->merge([
                'portail' => $portail,
            ]);
        }



        $current = $this->getCurrentRecord ($request->get('id'));




        $particulier->update($request->all());

    }

 


    public function getLatitude ($response) {


        if ($response->Response->View == []) {
            putSessionMessage('statut', __('myhouse/help.address'));
        }else {
            return $response->Response->View[0]->Result[0]->Location->DisplayPosition->Latitude;
        }
         
    }


    public function getLongitude ($response) {

        if ($response->Response->View == []) {
            putSessionMessage('statut', __('myhouse/help.address'));
        }else {
            return $response->Response->View[0]->Result[0]->Location->DisplayPosition->Longitude;
        }
    }

    public function finalRecord ($request, $images) {


        $particulier = $this->getCurrentRecord($request['id']);

        unset($request['image']); 

        $request['images'] = $images;

        $particulier->update($request);

        return true;
    }


    public function countAdd () {
        return Particulier::where('user_id', auth()->user()->id)->get()->count();
    }



}

<?php

namespace App\Traits\Professionnel;


use Intervention\Image\Facades\Image;

trait HasProfessionnel {


    public function getEntreprise ($request) {


        if (isset($request['nom_de_l\'entreprise']) || isset($request['company_name'])) {
            $request['nom'] = $request['nom_de_l\'entreprise'] ?? $request['company_name'];
        }


        if (isset($request['ville']) || isset($request['city'])) {
            $request['ville'] = $request['ville'] ?? $request['city'];
        }


        if (isset($request['adresse']) || isset($request['address'])) {
            $request['adresse'] = $request['adresse'] ?? $request['address'];
        }
   
        if (isset($request['téléphone_de_contact']) || isset($request['contact_phone'])) {
            $request['telephone_un'] = $request['téléphone_de_contact'] ?? $request['contact_phone'];
        }


        if (isset($request['téléphone_(2)_(facultatif)']) || isset($request['telephone_(2)_(optional)'])) {
            $request['telephone_deux'] = $request['téléphone_(2)_(facultatif)'] ?? $request['telephone_(2)_(optional)'];
        }


        if (isset($request['téléphone_(3)_(facultatif)']) || isset($request['telephone_(3)_(optional)'])) {
            $request['telephone_trois'] = $request['téléphone_(3)_(facultatif)'] ?? $request['telephone_(3)_(optional)'];
        }



        if (isset($request['email_de_contact']) || isset($request['contact_email'])) {
            $request['email'] = $request['email_de_contact'] ?? $request['contact_email'];
        }


        if (isset($request['pays']) || isset($request['country'])) {
            $request['pays'] = $request['pays'] ?? $request['country'];
        }


        if (isset($request['code_postal_(facultatif)']) || isset($request['postal_code_(optional)'])) {
            $request['code_postal'] = $request['code_postal_(facultatif)'] ?? $request['postal_code_(optional)'];
        }



        if (isset($request['site_web_(facultatif)']) || isset($request['website_(optional)'])) {
            $request['siteweb'] = $request['site_web_(facultatif)'] ?? $request['website_(optional)'];
        }



        $request['user_id'] = auth()->user()->id;



        if (app()->getLocale() === 'fr') {
            unset($request['nom_de_l\'entreprise']);
            unset($request['téléphone_de_contact']);
            unset($request['téléphone_(2)_(facultatif)']);
            unset($request['téléphone_(3)_(facultatif)']);
            unset($request['email_de_contact']);
            unset($request['image']);
        }

        if (app()->getLocale() === 'en') {
            unset($request['company_name']);
            unset($request['city']);
            unset($request['address']);
            unset($request['contact_phone']);
            unset($request['telephone_(2)_(optional)']);
            unset($request['telephone_(3)_(optional)']);
            unset($request['contact_email']);
            unset($request['postal_code']);
            unset($request['image']);

        }


        return $request;
    }


    public function calculatePrice ($val_1, $val_2, $val_3) {
        return $val_1 . $val_2 . $val_3;
    }

    public function getData ($request) {

        if (isset($request['appartement'])) {
            $request ['prix_vente_de_appartement'] = $this->calculatePrice($request['man1'], $request['man2'], $request['man3']);
        }

        if (isset($request['villa'])) {
            $request ['prix_vente_de_villa'] = $this->calculatePrice($request['man4'], $request['man5'], $request['man6']);
        }

        if (isset($request['maison'])) {
            $request ['prix_vente_de_maison'] = $this->calculatePrice($request['man7'], $request['man8'], $request['man9']);
        }

        if (isset($request['riad'])) {
            $request ['prix_vente_de_riad'] = $this->calculatePrice($request['man10'], $request['man11'], $request['man12']);
        }

        if (isset($request['chalet'])) {
            $request ['prix_vente_de_chalet'] = $this->calculatePrice($request['man13'], $request['man14'], $request['man15']);
        }

        if (isset($request['commerce'])) {
            $request ['prix_vente_de_commerce'] = $this->calculatePrice($request['man16'], $request['man17'], $request['man18']);
        }

        if (isset($request['bureau'])) {
            $request ['prix_vente_de_bureau'] = $this->calculatePrice($request['man19'], $request['man20'], $request['man21']);
        }

        if (isset($request['plateau'])) {
            $request ['prix_vente_de_plateau'] = $this->calculatePrice($request['man22'], $request['man23'], $request['man24']);
        }

        if (isset($request['residentiel'])) {
            $request ['prix_vente_de_residentiel'] = $this->calculatePrice($request['man25'], $request['man26'], $request['man27']);
        }

        if (isset($request['commercial'])) {
            $request ['prix_vente_de_commercial'] = $this->calculatePrice($request['man28'], $request['man29'], $request['man30']);
        }

        return $request;

    }

    public function unsetData ($request) {
        unset($request['man1']);
        unset($request['man2']);
        unset($request['man3']);
        unset($request['man4']);
        unset($request['man5']);
        unset($request['man6']);
        unset($request['man7']);
        unset($request['man8']);
        unset($request['man9']);
        unset($request['man10']);
        unset($request['man11']);
        unset($request['man12']);
        unset($request['man13']);
        unset($request['man14']);
        unset($request['man15']);
        unset($request['man16']);
        unset($request['man17']);
        unset($request['man18']);
        unset($request['man19']);
        unset($request['man20']);
        unset($request['man21']);
        unset($request['man22']);
        unset($request['man23']);
        unset($request['man24']);
        unset($request['man25']);
        unset($request['man26']);
        unset($request['man27']);
        unset($request['man28']);
        unset($request['man29']);
        unset($request['man30']);

        return $request;
    }




}

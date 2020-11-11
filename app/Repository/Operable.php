<?php

namespace App\Repository;

trait Operable {

    /**
     * @param $request
     * Store a project in database
     * @return bool
     */
    public function storeProject ($request) {

        $request->get('piscineCollectiveAppart') ? $this->project->piscineCollectiveAppart = 1 : 0;
        $request->get('piscineCollectiveVilla') ? $this->project->piscineCollectiveVilla = 1 : 0;
        $request->get('piscinePriveVilla') ? $this->project->piscinePriveVilla = 1 : 0;
        $request->get('garage') ? $this->project->garage = 1 : 0;
        $request->get('garage2places') ? $this->project->garage2places = 1 : 0;
        $request->get('parking') ?  $this->project->parking = 1 : 0;
        $request->get('parking2places') ? $this->project->parking2places = 1 : 0;
        $request->get('climatisation') ? $this->project->climatisation = 1 : 0;
        $request->get('golf') ? $this->project->golf = 1 : 0;
        $request->get('centreCommercial') ? $this->project->centreCommercial = 1 : 0;
        $request->get('hotel') ? $this->project->hotel = 1 : 0;
        $request->get('hammam') ? $this->project->hammam = 1 : 0;
        $request->get('terrainSport') ? $this->project->terrainSport = 1 : 0;
        $request->get('restaurant') ? $this->project->restaurant = 1 : 0;
        $request->get('salleFete') ? $this->project->salleFete = 1 : 0;
        $request->get('salleConference') ? $this->project->salleConference = 1 : 0;
        $request->get('surPlan') ? $this->project->surPlan = 1 : 0;
        $request->get('accesForet') ? $this->project->accesForet = 1 : 0;
        $request->get('accesPlage') ? $this->project->accesPlage = 1 : 0;
        $request->get('jardin') ? $this->project->jardin = 1 : 0;
        $request->get('gardiennage') ? $this->project->gardiennage = 1 : 0;
        $request->get('conciergerie') ? $this->project->conciergerie = 1 : 0;
        $request->get('blanchisserie') ? $this->project->blanchisserie = 1 : 0;
        $request->get('shopping') ? $this->project->shopping = 1 : 0;
        $request->get('theatre') ? $this->project->theatre = 1 : 0;
        $request->get('ecole') ? $this->project->ecole = 1 : 0;
        $request->get('mosquee') ? $this->project->mosquee = 1 : 0;


        $this->project->nomProjet = $request->get('nomProjet');
        $this->project->dateAffiliation = $request->get('dateAffiliation');
        $this->project->NomPromoteur = $request->get('NomPromoteur');
        $this->project->NomAdministrateur = $request->get('nomAdministrateur');
        $this->project->label = $request->get('label');
        $this->project->superficieProjet = $request->get('superficieProjet');
        $this->project->nombreImmeuble = $request->get('nombreImmeuble');
        $this->project->addressePostale = $request->get('addressePostale');
        $this->project->nombreVilla = $request->get('nombreVilla');
        $this->project->nombreAppartement = $request->get('nombreAppartement');
        $this->project->nombreTerrain = $request->get('nombreTerrain');
        $this->project->superficieMaxVilla = $request->get('superficieMaxVilla');
        $this->project->superficieMinVilla = $request->get('superficieMinVilla');
        $this->project->superficieMinAppartement = $request->get('superficieMinAppartement');
        $this->project->superficieMaxAppartement = $request->get('superficieMaxAppartement');
        $this->project->superficieMaxTerrain = $request->get('superficieMaxTerrain');
        $this->project->superficieMinTerrain = $request->get('superficieMinTerrain');
        $this->project->budgetMax = $request->get('budgetMax');
        $this->project->budgetMin = $request->get('budgetMin');
        $this->project->quartier_id = 2;
        $this->project->user_id = $request->user()->id;

        /*
         * Store a single image
         */

        if ($request->hasFile('imageAcceuil')) {

            $before = $request->file('imageAcceuil');
            $name = $before->getClientOriginalName();
            $before->move(public_path().'/imagesAcceuil/', $name);
            $this->project->imageAcceuil = $name;
        }

        /*
         * Save multiple images
         */
        if ( $request->hasFile('images') ) {

            foreach($request->file('images') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;
            }

        }

        if (!empty($data)) {
            $this->project->images = json_encode($data);
        }

        /*
         * Save videos
         */

        if ($request->hasFile('videos')) {

            foreach ($request->file('videos') as $video) {

                $filename = $video->getClientOriginalName();
                $path = public_path().'/videos/';
                $video->move($path, $filename);


                $dataSet[] = $filename;
            }
        }

        if (! empty($dataSet) ) {
            $this->project->videos = json_encode($dataSet);
        }
        $this->project->save();

        return true;
    }


    /**
     * @param int $id
     * Update a project
     * @param $request
     * @return bool
     */
    public function updateProject (int $id, $request) {

        $projet = $this->projectId($id);

        $request->get('piscineCollectiveAppart') ? $projet->piscineCollectiveAppart = 1 : 0;
        $request->get('piscineCollectiveVilla') ? $projet->piscineCollectiveVilla = 1 : 0;
        $request->get('piscinePriveVilla') ? $projet->piscinePriveVilla = 1 : 0;
        $request->get('garage') ? $projet->garage = 1 : 0;
        $request->get('garage2places') ? $projet->garage2places = 1 : 0;
        $request->get('parking') ?  $projet->parking = 1 : 0;
        $request->get('parking2places') ? $projet->parking2places = 1 : 0;
        $request->get('climatisation') ? $projet->climatisation = 1 : 0;
        $request->get('golf') ? $projet->golf = 1 : 0;
        $request->get('centreCommercial') ? $projet->centreCommercial = 1 : 0;
        $request->get('hotel') ? $projet->hotel = 1 : 0;
        $request->get('hammam') ?$projet->hammam = 1 : 0;
        $request->get('terrainSport') ? $projet->terrainSport = 1 : 0;
        $request->get('restaurant') ? $projet->restaurant = 1 : 0;
        $request->get('salleFete') ? $projet->salleFete = 1 : 0;
        $request->get('salleConference') ? $projet->salleConference = 1 : 0;
        $request->get('surPlan') ? $projet->surPlan = 1 : 0;
        $request->get('accesForet') ? $projet->accesForet = 1 : 0;
        $request->get('accesPlage') ? $projet->accesPlage = 1 : 0;
        $request->get('jardin') ? $projet->jardin = 1 : 0;
        $request->get('gardiennage') ? $projet->gardiennage = 1 : 0;
        $request->get('conciergerie') ? $projet->conciergerie = 1 : 0;
        $request->get('blanchisserie') ? $projet->blanchisserie = 1 : 0;
        $request->get('shopping') ? $projet->shopping = 1 : 0;
        $request->get('theatre') ? $projet->theatre = 1 : 0;
        $request->get('ecole') ? $projet->ecole = 1 : 0;
        $request->get('mosquee') ? $projet->mosquee = 1 : 0;


        $projet->nomProjet = $request->get('nomProjet');
        $projet->dateAffiliation = $request->get('dateAffiliation');
        $projet->NomPromoteur = $request->get('NomPromoteur');
        $projet->NomAdministrateur = $request->get('nomAdministrateur');
        $projet->label = $request->get('label');
        $projet->superficieProjet = $request->get('superficieProjet');
        $projet->nombreImmeuble = $request->get('nombreImmeuble');
        $projet->addressePostale = $request->get('addressePostale');
        $projet->nombreVilla = $request->get('nombreVilla');
        $projet->nombreAppartement = $request->get('nombreAppartement');
        $projet->nombreTerrain = $request->get('nombreTerrain');
        $projet->superficieMaxVilla = $request->get('superficieMaxVilla');
        $projet->superficieMinVilla = $request->get('superficieMinVilla');
        $projet->superficieMinAppartement = $request->get('superficieMinAppartement');
        $projet->superficieMaxAppartement = $request->get('superficieMaxAppartement');
        $projet->superficieMaxTerrain = $request->get('superficieMaxTerrain');
        $projet->superficieMinTerrain = $request->get('superficieMinTerrain');
        $projet->budgetMax = $request->get('budgetMax');
        $projet->budgetMin = $request->get('budgetMin');
        $projet->quartier_id = 2;
        $projet->user_id = $request->user()->id;

        /*
         * Store a single image
         */

        if ($request->hasFile('imageAcceuil')) {

            $before = $request->file('imageAcceuil');
            $name = $before->getClientOriginalName();
            $before->move(public_path().'/imagesAcceuil/', $name);
            $projet->imageAcceuil = $name;
        }

        /*
         * Save multiple images
         */
        if ( $request->hasFile('images') ) {

            foreach($request->file('images') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;
            }

        }

        if (! empty($data)) {
            $projet->images = json_encode($data);
        }

        /*
         * Save videos
         */
        if ($request->hasFile('videos')) {

            foreach ($request->file('videos') as $video) {
                $filename = $video->getClientOriginalName();
                $path = public_path() . '/videos/';
                $video->move($path, $filename);

                $dataSet[] = $filename;
            }
        }

        if (! empty($dataSet) ) {
            $projet->videos = json_encode($dataSet);
        }
        $projet->save();

        return true;
    }


    private function getFiles () {

    }

}

<?php


namespace App\Repository\Back\Annonces\Professionnel;


use App\Model\Generique\Entreprise;
use App\Model\Professionnel\Professionnel;
use App\Traits\Professionnel\DatabaseRepositorybleProfessionnel;
use App\Traits\Professionnel\HasProfessionnel;
use App\Traits\Professionnel\HasProRecord;
use Intervention\Image\Facades\Image;
use App\Model\Generique\AnnonceUrl;
use Illuminate\Support\Str;


class ProfessionnelRepository { 

    use HasProfessionnel, DatabaseRepositorybleProfessionnel, HasProRecord;

    /**
     * @param $request
     * store enterprise
     * @return bool
     */
    public function storeEntreprise($request)
    {
        if($request->hasFile('image')){ 

            
            $image = $request->file('image');

            $destinationPath = public_path('development/files/professionnel/entreprise');


            $filename = md5(Str::random(30) . time() . '_' . $image) . '.' . $image->getClientOriginalExtension();

            $location_39 = public_path('development/files/professionnel/entreprise/39/' .$filename);
            $location_150 = public_path('development/files/professionnel/entreprise/150/' .$filename);
            $location_119 = public_path('development/files/professionnel/entreprise/119/' .$filename);
            $location_136 = public_path('development/files/professionnel/entreprise/136/' .$filename);





            Image::make($image)
                ->fit(150, 124)->save($location_150)
                ->fit(136, 116)->save($location_136)
                ->fit(119, 99)->save($location_119)
                ->fit(39, 39)->save($location_39);


            $image->move($destinationPath, $filename);
 
            $images = $filename;

            $request->merge([
                'images' => $images,
                'user_id' => auth()->user()->id 
            ]);

        }

        $data = $this->getEntreprise($request->all());

        Entreprise::create($data);

        return true;

    }


    public function storeVente ($request) {
        $data = $this->getVenteStore($request);
        $data['user_id'] = auth()->user()->id;
        $data['entreprise_id'] = auth()->user()->entreprises->last()->id;

        $this->professionnelCreate($data);

    }


    public function storeLocation($request)
    {
        $data = $this->getLocationStore($request);
        $data['entreprise_id'] = auth()->user()->entreprises->last()->id;
        $data['user_id'] = auth()->user()->id;


        $this->professionnelCreate($data);
    }


    public function storeVenteLocation ($request) {

        $data = $this->getVenteLocationData($request);
        $data['user_id'] = auth()->user()->id;
        $data['entreprise_id'] = auth()->user()->entreprises->last()->id;


        $this->professionnelCreate($data);
    }


 
    /**
     * Increment le prix de la transaction
     * @param $request
     * @return double
     */

    private function incrementPrice ($request) {
        return $request->man1.$request->man2.$request->man3;
    }


    /**
     * @param $data
     * @return mixed
     */
    public function professionnelCreate($data) {
        return Professionnel::create($data);
    }

    private function getLocationStore ($request) {


        $prix_mois = $this->incrementLoyerMois($request);
        $prix_jour = $this->incrementLoyerJour($request);
        $charge_copropriete = $this->incrementCharge($request);

        $data = $request->except(['loyerm1', 'loyerm2', 'loyerj1', 'loyerj2', 'charge1', 'charge2', 'man1', 'man2', 'man3']);


        if (isset($data['loyerMois'])) {
            $data['prix_mois'] = $prix_mois;
        }else{
            $data['prix_mois'] = null;
        }

        if (isset($data['loyerJour'])) {
            $data['prix_jour'] = $prix_jour;
        }else{
            $data['prix_jour'] = null;
        }

        if (isset($data['charge'])) {
            $data['charge_copropriete'] = $charge_copropriete;
        }else{
            $data['charge_copropriete'] = null;
        }

        
         

        $request->has('location_longue_duree') ? $data['location_longue_duree'] = 1 :  $data['location_longue_duree'] = 0;
        $request->has('location_courte_duree') ? $data['location_courte_duree'] = 1 :  $data['location_courte_duree'] = 0;
        $request->has('location_etudiant')  ? $data['location_etudiant'] = 1 :  $data['location_etudiant'] = 0;
        $request->has('location_meuble') ? $data['location_meuble'] = 1 :  $data['location_meuble'] = 0;
        $request->has('colocation') ? $data['colocation'] = 1 :  $data['colocation'] = 0;
        
        $request->has('locationActif') ? $data['locationActif'] = 1 :  $data['locationActif'] = 0;

        $data['vente_meuble'] = 0;
        $data['venteActif'] = 0;
        $data['prix_vente'] = null;



        return $data;
    }

    private function getVenteLocationData ($request) {

        $prix_vente = $this->incrementPrice($request);
        $data = $request->except(['loyerm1', 'loyerm2', 'loyerj1', 'loyerj2', 'charge1', 'charge2', 'man1', 'man2', 'man3']);
        $data['prix_vente'] = $prix_vente;

        $request->has('vente_meuble') ? $data['vente_meuble'] = 1 :  $data['vente_meuble'] = 0;

        $prix_mois = $this->incrementLoyerMois($request);
        $prix_jour = $this->incrementLoyerJour($request);
        $charge_copropriete = $this->incrementCharge($request);


        if (isset($data['loyerMois'])) {
            $data['prix_mois'] = $prix_mois;
        }else{
            $data['prix_mois'] = null;
        }

        if (isset($data['loyerJour'])) {
            $data['prix_jour'] = $prix_jour;
        }else{
            $data['prix_jour'] = null;
        }

        if (isset($data['charge'])) {
            $data['charge_copropriete'] = $charge_copropriete;
        }else{
            $data['charge_copropriete'] = null;
        }




        unset($data['loyerMois']);
        unset($data['loyerJour']);
        unset($data['charge']);

        $request->has('location_longue_duree') ? $data['location_longue_duree'] = 1 :  $data['location_longue_duree'] = 0;
        $request->has('location_courte_duree') ? $data['location_courte_duree'] = 1 :  $data['location_courte_duree'] = 0;
        $request->has('location_etudiant')  ? $data['location_etudiant'] = 1 :  $data['location_etudiant'] = 0;
        $request->has('location_meuble') ? $data['location_meuble'] = 1 :  $data['location_meuble'] = 0;
        $request->has('colocation') ? $data['colocation'] = 1 :  $data['colocation'] = 0;
        
        $request->has('locationActif') ? $data['locationActif'] = 1 :  $data['locationActif'] = 0;
        $request->has('venteActif') ? $data['venteActif'] = 1 :  $data['venteActif'] = 0;


        return $data;
    }


    private function getVenteStore ($request) {

        $prix_vente = $this->incrementPrice($request);

        $data = $request->except(['man1', 'man2', 'man3']);

        $data['prix_vente'] = $prix_vente;
        $data['prix_mois'] = null;
        $data['prix_jour'] = null;
        $data['charge_copropriete'] = null;
        $data['location_longue_duree'] = 0;
        $data['location_courte_duree'] = 0;
        $data['location_etudiant'] = 0;
        $data['location_meuble'] = 0;
        $data['colocation'] = 0;
        $data['locationActif'] = 0;


        return $data;
    }


    

    private function incrementLoyerMois ($request) {
        return $request->loyerm1.$request->loyerm2;
    }

    /**
     * Increment le loyer du jour de la transaction
     * @param $request
     * @return double
     */

    private function incrementLoyerJour ($request) {
        return $request->loyerj1.$request->loyerj2;
    }

    /**
     * Increment le charge de la transaction
     * @param $request
     * @return double
     */

    private function incrementCharge ($request) {
        return $request->charge1.$request->charge2;
    }


    public function getLastRecord ($request) {
        return Professionnel::where('last_id', $request->get('last_id'))->get();
    }


    public function activeOnline($id)
    {
        $record = $this->getCurrentRecord($id);
        $record->update(['online' => 1]);
        return true;
    }

    public function deactivateOnline ($id) {
        $record = $this->getCurrentRecord($id);
        $record->update(['online' => 0]);
        return true;
    }

    public function delete ($id) {
        $record = $this->getCurrentRecord($id);
        $record->delete();
        return true;
    }

    public function updateVente($id, $request)
    {
        $data = $this->getVenteStore($request);

        $record = $this->getCurrentRecord($id);

        $record->update($data);
    }

    public function updateLocation($id, $request)
    {
        $data = $this->getLocationStore($request);
        $record = $this->getCurrentRecord($id);

        $record->update($data);
    }

    public function updateVenteLocation($id, $request)
    {
        $data = $this->getVenteLocationData($request);
        $record = $this->getCurrentRecord($id);

        $record->update($data);
    }


 

    public function setAnnonceUrl(string $previous)
    {
        return AnnonceUrl::create([
           'url' => $previous,
           'user_id' => auth()->user()->id
        ]);
    }


    public function updatePage ($id, $request) {


        $professionnel = $this->getCurrentRecord($id);

        $professionnel->update([
           'page' => null
        ]);

    }


     /**
     * Put the current uri to particulier
     * @param $id
     * @param $uri
     * @return mixed
     */
    public function updateProfessionnel($id, $uri)
    {
        $professionnel = $this->getCurrentRecord($id);
        return $professionnel->update(['uri' => $uri]);
    }



}

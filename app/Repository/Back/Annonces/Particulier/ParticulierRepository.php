<?php

namespace App\Repository\Back\Annonces\Particulier;


use App\Model\Generique\AnnonceUrl;
use App\Model\Particulier\Particulier;
use App\Model\Particulier\ParticulierCritere;
use App\Model\Particulier\ParticulierInteresse;
use App\Traits\DatabaseRepositoryble;
use App\Traits\HasRecord;

class ParticulierRepository {

    use DatabaseRepositoryble, HasRecord;


    
    
    public function storeVente ($request) {



        $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'venteActif', 'page']);


        if (!is_null($data['prix_vente'])) {
            $prix_jour = str_replace(',', '.', $data['prix_vente']);
            unset($data['prix_vente']);
            $data['prix_vente'] = $prix_jour;
       }



       if (!is_null($data['prix_m'])) {
            $prixmetre = str_replace(',', '.', $data['prix_m']);
            unset($data['prix_m']);
            $data['prix_m'] = $prixmetre;
        }

        $data['user_id'] = auth()->user()->id;


        $this->particulierCreate($data);

    }
 


    public function storeLocation($request)

    {


        if ($request->get('charges') === "oui") {

            $data = $request->only(['prix_jour', 'prix_mois', 'last_id', 'locationActif', 'charges', 'page']);

        }

        if ($request->get('charges') === "non") {

            $data = $request->only(['prix_jour', 'prix_mois', 'charge_copropriete', 'last_id', 'locationActif', 'charges', 'page']);



            if (!is_null($data['charge_copropriete'])) {
                $charge_copropriete = str_replace(',', '.', $data['charge_copropriete']);
                unset($data['charge_copropriete']);
                $data['charge_copropriete'] = $charge_copropriete;
            }

        }

        if (is_null($request->get('prix_jour'))) {
            $data['prix_jour'] = null;
        }


        if (is_null($request->get('prix_mois'))) {
            $data['prix_mois'] = null;
        }



        if (!is_null($data['prix_jour'])) {
            $prixmois = str_replace(',', '.', $data['prix_jour']);
            unset($data['prix_jour']);
            $data['prix_jour'] = $prixmois;
        }



        
        if (!is_null($data['prix_mois'])) {
            $prix_mois = str_replace(',', '.', $data['prix_mois']);
            unset($data['prix_mois']);
            $data['prix_mois'] = $prix_mois;
        } 


        $data['user_id'] = auth()->user()->id;




        $this->particulierCreate($data);


    }



     /**
     * Enregistre un echange dans la base de données
     * @param $request
     * @return bool
     */
    public function storeEchange($request) {

        
        if ($request->has('echange_definitif') && ! $request->has('echange_provisoir')) {
            $data = $request->only(['last_id', 'echange_provisoir', 'echange_definitif', 'echangeActif', 'page']);
        } else {
            $data = $request->only(['echange_periode_un', 'echange_periode_deux', 'last_id', 'echange_provisoir', 'echange_definitif', 'echangeActif', 'page']);
        }


        $data['user_id'] = auth()->user()->id;

        $this->particulierCreate($data);

        return true;

    }





    public function storeVenteLocation ($request) {

    

        if ($request->get('charges') === "oui") {

            $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'venteActif', 'locationActif', 'page']);

        }

        if ($request->get('charges') === "non") {

            $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'charge_copropriete', 'venteActif', 'locationActif', 'page']);

            if (!is_null($data['charge_copropriete'])) {
                $charge_copropriete = str_replace(',', '.', $data['charge_copropriete']);
                unset($data['charge_copropriete']);
                $data['charge_copropriete'] = $charge_copropriete;
            }

        }



        $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'venteActif', 'locationActif', 'page']);



        if (isset($data['prix_jour'])) {

            if (!is_null($data['prix_jour'])) {
                $prix_jour = str_replace(',', '.', $data['prix_jour']);
                unset($data['prix_jour']);
                $data['prix_jour'] = $prix_jour;
           }

        }


        if (isset($data['prix_mois'])) {

            if (!is_null($data['prix_mois'])) {
                $prix_mois = str_replace(',', '.', $data['prix_mois']);
                unset($data['prix_mois']);
                $data['prix_mois'] = $prix_mois;
            }    
    
        }






       if (!is_null($data['prix_m'])) {
            $prixmetre = str_replace(',', '.', $data['prix_m']);
            unset($data['prix_m']);
            $data['prix_m'] = $prixmetre;
        }




       if (!is_null($data['prix_vente'])) {
            $prixmois = str_replace(',', '.', $data['prix_vente']);
            unset($data['prix_vente']);
            $data['prix_vente'] = $prixmois;
        }



        $data['user_id'] = auth()->user()->id;
        $this->particulierCreate($data);
    }



    public function storeVenteEchange ($request) {

            $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'venteActif', 'locationActif', 'page']);
        if ($request->has('echange_definitif') && ! $request->has('echange_provisoir')) {

            $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'echange_provisoir', 'echange_definitif', 'venteActif', 'echangeActif', 'page']);


        } else {
            $data = $request->only(['echange_periode_un', 'echange_periode_deux','prix_vente', 'prix_m', 'last_id', 'echange_provisoir', 'echange_definitif', 'venteActif', 'echangeActif', 'page']);

        }




        if (!is_null($data['prix_vente'])) {
            $prix_jour = str_replace(',', '.', $data['prix_vente']);
            unset($data['prix_vente']);
            $data['prix_vente'] = $prix_jour;
       }



       if (!is_null($data['prix_m'])) {
            $prixmetre = str_replace(',', '.', $data['prix_m']);
            unset($data['prix_m']);
            $data['prix_m'] = $prixmetre;
        }
        
        $data['user_id'] = auth()->user()->id;


        $this->particulierCreate($data);


        return true;
    }

    public function storeLocationEchange ($request) {


        if ($request->has('echange_definitif') && ! $request->has('echange_provisoir')) {


            if ($request->get('charges') === "oui") {

                $data = $request->only(['prix_jour', 'prix_mois', 'last_id', 'echange_provisoir', 'echange_definitif', 'locationActif', 'echangeActif', 'venteActif', 'charges', 'page']);
    
            }
    
            if ($request->get('charges') === "non") {
    
                $data = $request->only(['prix_jour', 'prix_mois', 'charge_copropriete', 'last_id', 'echange_provisoir', 'echangeActif', 'echange_definitif', 'locationActif', 'venteActif', 'charges', 'page']);

                if (!is_null($data['charge_copropriete'])) {
                    $charge_copropriete = str_replace(',', '.', $data['charge_copropriete']);
                    unset($data['charge_copropriete']);
                    $data['charge_copropriete'] = $charge_copropriete;
                }

            }
            $data = $request->only(['prix_jour', 'prix_mois', 'last_id', 'echange_provisoir', 'echange_definitif', 'echangeActif','locationActif', 'venteActif', 'charges', 'page']);
    




        } else {




            if ($request->get('charges') === "oui") {

                $data = $request->only(['prix_jour', 'prix_mois', 'last_id', 'echange_periode_un', 'echange_periode_deux', 'last_id', 'echangeActif', 'echange_provisoir', 'echange_definitif', 'locationActif', 'venteActif']);
            }
    
            if ($request->get('charges') === "non") {
    
                $data = $request->only(['prix_jour', 'prix_mois', 'charge_copropriete', 'last_id', 'echange_periode_un', 'echangeActif', 'echange_periode_deux', 'last_id', 'echange_provisoir', 'echange_definitif', 'locationActif', 'venteActif']);

                
                if (!is_null($data['charge_copropriete'])) {
                    $charge_copropriete = str_replace(',', '.', $data['charge_copropriete']);
                    unset($data['charge_copropriete']);
                    $data['charge_copropriete'] = $charge_copropriete;
                }

            }
            $data = $request->only(['prix_jour', 'prix_mois', 'charge_copropriete', 'last_id', 'echange_periode_un', 'echangeActif', 'echange_periode_deux', 'last_id', 'echange_provisoir', 'echange_definitif', 'locationActif', 'venteActif']);


        }



        if ($request->loyerMois == null) {
            $data['prix_mois'] = null;
            $data·['charges'] = 0;
            $data['charge_copriete'] = null;
        }

        if ($request->loyerJour == null) {
            $data['prix_jour'] = null;
        }


        if (isset($data['prix_jour'])) {
            if (!is_null($data['prix_jour'])) {
                $prixmois = str_replace(',', '.', $data['prix_jour']);
                unset($data['prix_jour']);
                $data['prix_jour'] = $prixmois;
            }
        }

        
        if (isset($data['prix_mois'])) {
            if (!is_null($data['prix_mois'])) {
                $prix_mois = str_replace(',', '.', $data['prix_mois']);
                unset($data['prix_mois']);
                $data['prix_mois'] = $prix_mois;
            } 
        }
        



        $data['user_id'] = auth()->user()->id;

        $this->particulierCreate($data);

    }



    public function storeEchangeLocationVente($request) {


        if ($request->has('echange_definitif') && ! $request->has('echange_provisoir')) {


             if ($request->get('charges') === "oui") {

                $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'echange_provisoir', 'echange_definitif', 'venteActif', 'locationActif', 'echangeActif', 'charges', 'page']);
            }
    
            if ($request->get('charges') === "non") {
    
                $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'charge_copropriete', 'echange_provisoir', 'echange_definitif', 'venteActif', 'locationActif', 'echangeActif', 'charges', 'page']);
    
                if (!is_null($data['charge_copropriete'])) {
                    $charge_copropriete = str_replace(',', '.', $data['charge_copropriete']);
                    unset($data['charge_copropriete']);
                    $data['charge_copropriete'] = $charge_copropriete;
                }
            
            }

            $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'echange_provisoir', 'echange_definitif', 'venteActif', 'locationActif', 'echangeActif', 'charges', 'page']);

        } else {



            if ($request->get('charges') === "oui") {

                $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'echange_periode_un', 'echange_periode_deux', 'echange_provisoir', 'echange_definitif', 'venteActif', 'locationActif', 'echangeActif', 'page']);
            
            }
    
            if ($request->get('charges') === "non") {
    
                $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'charge_copropriete', 'echange_periode_un', 'echange_periode_deux', 'echange_provisoir', 'echange_definitif', 'venteActif', 'locationActif', 'echangeActif', 'page']);
    
            
                if (!is_null($data['charge_copropriete'])) {
                    $charge_copropriete = str_replace(',', '.', $data['charge_copropriete']);
                    unset($data['charge_copropriete']);
                    $data['charge_copropriete'] = $charge_copropriete;
                }
            
            }



        }







        if (isset($data['prix_m'])) {

            if (!is_null($data['prix_m'])) {
                $prixmetre = str_replace(',', '.', $data['prix_m']);
                unset($data['prix_m']);
                $data['prix_m'] = $prixmetre;
            }
        }


        if (isset($data['prix_vente'])) {
            if (!is_null($data['prix_vente'])) {
                $prixmois = str_replace(',', '.', $data['prix_vente']);
                unset($data['prix_vente']);
                $data['prix_vente'] = $prixmois;
            }
        }






        if (isset($data['prix_mois'])) {
            if (!is_null($data['prix_mois'])) {
                $prix_mois = str_replace(',', '.', $data['prix_mois']);
                unset($data['prix_mois']);
                $data['prix_mois'] = $prix_mois;
            } 
        }



        if (isset($data['prix_jour'])) {
            if (!is_null($data['prix_jour'])) {
                $prix_jour = str_replace(',', '.', $data['prix_jour']);
                unset($data['prix_jour']);
                $data['prix_jour'] = $prix_jour;
           }
        }
        
        
        
            






        $data['user_id'] = auth()->user()->id;



        $this->particulierCreate($data);
    }





    public function updateVente ($id, $request) {

        $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'venteActif', 'page']);


        if (!is_null($data['prix_vente'])) {
            $prix_jour = str_replace(',', '.', $data['prix_vente']);
            unset($data['prix_vente']);
            $data['prix_vente'] = $prix_jour;
       }



       if (!is_null($data['prix_m'])) {
            $prixmetre = str_replace(',', '.', $data['prix_m']);
            unset($data['prix_m']);
            $data['prix_m'] = $prixmetre;
        }


        $data['locationActif'] = 0;
        $data['echangeActif'] = 0;
        $data['prix_mois'] = null;
        $data['prix_jour'] = null;
        $data['charges'] = 0;
        $data['charge_copropriete'] = null;
        $data['echange_provisoir'] = 0;
        $data['echange_definitif'] = 0;
        $data['echange_periode_un'] = '25/10/2003';
        $data['echange_periode_deux'] = '26/10/2003';




        $data['user_id'] = auth()->user()->id;

        $record = $this->getCurrentRecord($id);




        $record->update($data);

    }

    public function updateLocation ($id, $request) {


        if ($request->get('charges') === "oui") {

            $data = $request->only(['prix_jour', 'prix_mois', 'last_id', 'locationActif', 'charges', 'page']);

        }

        if ($request->get('charges') === "non") {

            $data = $request->only(['prix_jour', 'prix_mois', 'charge_copropriete', 'last_id', 'locationActif', 'charges', 'page']);



            if (!is_null($data['charge_copropriete'])) {
                $charge_copropriete = str_replace(',', '.', $data['charge_copropriete']);
                unset($data['charge_copropriete']);
                $data['charge_copropriete'] = $charge_copropriete;
            }

        }

        $data = $request->only(['prix_jour', 'prix_mois', 'last_id', 'locationActif', 'charges', 'page']);



        if ($request->loyerMois == null) {
            $data['prix_mois'] = null;
            $data·['charges'] = 0;
            $data['charge_copriete'] = null;
        }

        if ($request->loyerJour == null) {
            $data['prix_jour'] = null;
        }



        if (isset($data['prix_jour'])) {
            if (!is_null($data['prix_jour'])) {
                $prixmois = str_replace(',', '.', $data['prix_jour']);
                unset($data['prix_jour']);
                $data['prix_jour'] = $prixmois;
            }
        }





 

        if (isset($data['prix_mois'])) {

            if (!is_null($data['prix_mois'])) {

                $prix_mois = str_replace(',', '.', $data['prix_mois']);
                unset($data['prix_mois']);
                
                $data['prix_mois'] = $prix_mois;

            } 
        }
        




        $data['user_id'] = auth()->user()->id;

        $data['prix_vente'] = null;
        $data['prix_m'] = null;
        $data['venteActif'] = 0;
        $data['echangeActif'] = 0;
        $data['echange_provisoir'] = 0;
        $data['echange_definitif'] = 0;
        $data['echange_periode_un'] = '25/10/2003';
        $data['echange_periode_deux'] = '26/10/2003';

        


        
        $record = $this->getCurrentRecord($id);



        $record->update($data);

    }

    public function updateEchange($id, $request) {

        if ($request->has('echange_definitif') && ! $request->has('echange_provisoir')) {
            $data = $request->only(['last_id', 'echange_provisoir', 'echange_definitif', 'echangeActif', 'page']);
        } else {
            $data = $request->only(['echange_periode_un', 'echange_periode_deux', 'last_id', 'echange_provisoir', 'echange_definitif', 'echangeActif', 'page']);
        }


        $data['prix_vente'] = null;
        $data['prix_m'] = null;
        $data['venteActif'] = 0;
        $data['locationActif'] = 0;
        $data['prix_mois'] = null;
        $data['prix_jour'] = null;
        $data['charges'] = 0;

        $data['user_id'] = auth()->user()->id;
        
        
        
        $record = $this->getCurrentRecord($id);




        $record->update($data);
    }





    public function updateVenteLocation ($id, $request) {



        if ($request->get('charges') === "oui") {

            $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'venteActif', 'locationActif', 'page']);

        }

        if ($request->get('charges') === "non") {

            $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'charge_copropriete', 'venteActif', 'locationActif', 'page']);

            if (!is_null($data['charge_copropriete'])) {
                $charge_copropriete = str_replace(',', '.', $data['charge_copropriete']);
                unset($data['charge_copropriete']);
                $data['charge_copropriete'] = $charge_copropriete;
            }

        }



        $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'venteActif', 'locationActif', 'page']);



       
        if ($request->loyerMois == null) {
            $data['prix_mois'] = null;
            $data·['charges'] = 0;
            $data['charge_copriete'] = null;
        }

        if ($request->loyerJour == null) {
            $data['prix_jour'] = null;
        }



        if (isset($data['prix_jour'])) {
            if (!is_null($data['prix_jour'])) {
                $prixmois = str_replace(',', '.', $data['prix_jour']);
                unset($data['prix_jour']);
                $data['prix_jour'] = $prixmois;
            }
        }





 

        if (isset($data['prix_mois'])) {

            if (!is_null($data['prix_mois'])) {

                $prix_mois = str_replace(',', '.', $data['prix_mois']);
                unset($data['prix_mois']);
                
                $data['prix_mois'] = $prix_mois;

            } 
        }






       if (!is_null($data['prix_m'])) {
            $prixmetre = str_replace(',', '.', $data['prix_m']);
            unset($data['prix_m']);
            $data['prix_m'] = $prixmetre;
        }




       if (!is_null($data['prix_vente'])) {
            $prixmois = str_replace(',', '.', $data['prix_vente']);
            unset($data['prix_vente']);
            $data['prix_vente'] = $prixmois;
        }

        
        $data['echange_provisoir'] = 0;
        $data['echange_definitif'] = 0;
        $data['echangeActif'] = 0;
        $data['echange_periode_un'] = '25/10/2020';
        $data['echange_periode_deux'] = '26/10/2020';



        $data['user_id'] = auth()->user()->id;




        $record = $this->getCurrentRecord($id);

        $record->update($data);
    }

    public function updateVenteEchange  ($id, $request) {


        
        if ($request->has('echange_definitif') && ! $request->has('echange_provisoir')) {

            $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'echange_provisoir', 'echange_definitif', 'venteActif', 'echangeActif', 'page']);


        } else {

            $data = $request->only(['echange_periode_un', 'echange_periode_deux','prix_vente', 'prix_m', 'last_id', 'echange_provisoir', 'echange_definitif', 'venteActif', 'echangeActif', 'page']);

        }




        if (! is_null($data['prix_vente'])) {
            $prix_jour = str_replace(',', '.', $data['prix_vente']);
            unset($data['prix_vente']);
            $data['prix_vente'] = $prix_jour;
        }



       if (!is_null($data['prix_m'])) {
            $prixmetre = str_replace(',', '.', $data['prix_m']);
            unset($data['prix_m']);
            $data['prix_m'] = $prixmetre;
        }
        
        $data['user_id'] = auth()->user()->id;

        $data['prix_mois'] = null;
        $data['prix_jour'] = null;
        $data['charge_copropriete'] = null;
        $data['charges'] = 0;
        $data['locationActif'] = 0;

        if (is_null($request->echange_definitif)) {

            $data['echange_definitif'] = 0;

        }


        if (is_null($request->echange_provisoir)) {

            $data['echange_provisoir'] = 0;
            $data['echange_periode_un'] = '25/10/2020';
            $data['echange_periode_deux'] = '26/10/2020';

        }


        
        
        $record = $this->getCurrentRecord($id);

        $record->update($data);
    }

    public function updateLocationEchange ($id, $request) {
        
        
        if ($request->has('echange_definitif') && ! $request->has('echange_provisoir')) {


            if ($request->get('charges') === "oui") {

                $data = $request->only(['prix_jour', 'prix_mois', 'last_id', 'echange_provisoir', 'echange_definitif', 'locationActif', 'echangeActif', 'venteActif', 'charges', 'page']);
    
            }
    
            if ($request->get('charges') === "non") {
    
                $data = $request->only(['prix_jour', 'prix_mois', 'charge_copropriete', 'last_id', 'echange_provisoir', 'echangeActif', 'echange_definitif', 'locationActif', 'venteActif', 'charges', 'page']);

                if (!is_null($data['charge_copropriete'])) {
                    $charge_copropriete = str_replace(',', '.', $data['charge_copropriete']);
                    unset($data['charge_copropriete']);
                    $data['charge_copropriete'] = $charge_copropriete;
                }

            }
            $data = $request->only(['prix_jour', 'prix_mois', 'last_id', 'echange_provisoir', 'echange_definitif', 'echangeActif','locationActif', 'venteActif', 'charges', 'page']);
    




        } else {




            if ($request->get('charges') === "oui") {

                $data = $request->only(['prix_jour', 'prix_mois', 'last_id', 'echange_periode_un', 'echange_periode_deux', 'last_id', 'echangeActif', 'echange_provisoir', 'echange_definitif', 'locationActif', 'venteActif']);
            }
    
            if ($request->get('charges') === "non") {
    
                $data = $request->only(['prix_jour', 'prix_mois', 'charge_copropriete', 'last_id', 'echange_periode_un', 'echangeActif', 'echange_periode_deux', 'last_id', 'echange_provisoir', 'echange_definitif', 'locationActif', 'venteActif']);

                
                if (!is_null($data['charge_copropriete'])) {
                    $charge_copropriete = str_replace(',', '.', $data['charge_copropriete']);
                    unset($data['charge_copropriete']);
                    $data['charge_copropriete'] = $charge_copropriete;
                }

            }
            $data = $request->only(['prix_jour', 'prix_mois', 'charge_copropriete', 'last_id', 'echange_periode_un', 'echangeActif', 'echange_periode_deux', 'last_id', 'echange_provisoir', 'echange_definitif', 'locationActif', 'venteActif']);


        }



        if ($request->loyerMois == null) {
            $data['prix_mois'] = null;
            $data·['charges'] = 0;
            $data['charge_copriete'] = null;
        }

        if ($request->loyerJour == null) {
            $data['prix_jour'] = null;
        }


        if (isset($data['prix_jour'])) {
            if (!is_null($data['prix_jour'])) {
                $prixmois = str_replace(',', '.', $data['prix_jour']);
                unset($data['prix_jour']);
                $data['prix_jour'] = $prixmois;
            }
        }

        
        if (isset($data['prix_mois'])) {
            if (!is_null($data['prix_mois'])) {
                $prix_mois = str_replace(',', '.', $data['prix_mois']);
                unset($data['prix_mois']);
                $data['prix_mois'] = $prix_mois;
            } 
        }

        
        



        $data['user_id'] = auth()->user()->id;
        $data['prix_vente'] = null;
        $data['prix_m'] = null;
        $data['venteActif'] = 0;

        

        $record = $this->getCurrentRecord($id);

        $record->update($data);
    }

 public function updateEchangeLocationVente ($id, $request) {
        


        if ($request->has('echange_definitif') && ! $request->has('echange_provisoir')) {


            if ($request->get('charges') === "oui") {

               $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'echange_provisoir', 'echange_definitif', 'venteActif', 'locationActif', 'echangeActif', 'charges', 'page']);
           }
   
           if ($request->get('charges') === "non") {
   
               $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'charge_copropriete', 'echange_provisoir', 'echange_definitif', 'venteActif', 'locationActif', 'echangeActif', 'charges', 'page']);
   
               if (!is_null($data['charge_copropriete'])) {
                   $charge_copropriete = str_replace(',', '.', $data['charge_copropriete']);
                   unset($data['charge_copropriete']);
                   $data['charge_copropriete'] = $charge_copropriete;
               }
           
           }

           $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'echange_provisoir', 'echange_definitif', 'venteActif', 'locationActif', 'echangeActif', 'charges', 'page']);



       } else {



           if ($request->get('charges') === "oui") {

               $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'echange_periode_un', 'echange_periode_deux', 'echange_provisoir', 'echange_definitif', 'venteActif', 'locationActif', 'echangeActif', 'page']);
           
           }
   
           if ($request->get('charges') === "non") {
   
               $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'charge_copropriete', 'echange_periode_un', 'echange_periode_deux', 'echange_provisoir', 'echange_definitif', 'venteActif', 'locationActif', 'echangeActif', 'page']);
   
           
               if (!is_null($data['charge_copropriete'])) {
                   $charge_copropriete = str_replace(',', '.', $data['charge_copropriete']);
                   unset($data['charge_copropriete']);
                   $data['charge_copropriete'] = $charge_copropriete;
               }
           
           }

           $data = $request->only(['prix_vente', 'prix_m', 'last_id', 'prix_jour', 'prix_mois', 'echange_periode_un', 'echange_periode_deux', 'echange_provisoir', 'echange_definitif', 'venteActif', 'locationActif', 'echangeActif', 'page']);



       }



       if (isset($data['prix_m'])) {

        if (!is_null($data['prix_m'])) {
            $prixmetre = str_replace(',', '.', $data['prix_m']);
            unset($data['prix_m']);
            $data['prix_m'] = $prixmetre;
        }
    }


    if (isset($data['prix_vente'])) {
        if (!is_null($data['prix_vente'])) {
            $prixmois = str_replace(',', '.', $data['prix_vente']);
            unset($data['prix_vente']);
            $data['prix_vente'] = $prixmois;
        }
    }






    if (isset($data['prix_mois'])) {
        if (!is_null($data['prix_mois'])) {
            $prix_mois = str_replace(',', '.', $data['prix_mois']);
            unset($data['prix_mois']);
            $data['prix_mois'] = $prix_mois;
        } 
    }



    if (isset($data['prix_jour'])) {
        if (!is_null($data['prix_jour'])) {
            $prix_jour = str_replace(',', '.', $data['prix_jour']);
            unset($data['prix_jour']);
            $data['prix_jour'] = $prix_jour;
       }
    }




       if (is_null($request->echange_definitif)) {

              $data['echange_definitif'] = 0;

        }   


        if (is_null($request->echange_provisoir)) {

            $data['echange_provisoir'] = 0;
            $data['echange_periode_un'] = '25/10/2020';
            $data['echange_periode_deux'] = '26/10/2020';

        }


        $data['user_id'] = auth()->user()->id;
            

            $record = $this->getCurrentRecord($id);


            $record->update($data);
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
     * Increment le loyer du mois de la transaction
     * @param $request
     * @return double
     */

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

    /**
     * Ajoute un enregistrement dans la base de données
     * @param $data
     * @return mixed
     */
    private function particulierCreate($data) {
        return Particulier::create($data);
    }


    private function getLocationStore ($request) {


        $prix_mois = $this->incrementLoyerMois($request);
        $prix_jour = $this->incrementLoyerJour($request);
        $charge_copropriete = $this->incrementCharge($request);

        $data = $request->except(['loyerm1', 'loyerm2', 'loyerj1', 'loyerj2', 'charge1', 'charge2', 'man1', 'man2', 'man3', 'echange_periode_un', 'echange_periode_deux']);


        if (isset($data['loyerMois'])) {
            $data['prix_mois'] = $prix_mois;
        }

        if (isset($data['loyerJour'])) {
            $data['prix_jour'] = $prix_jour;
        }

        if (isset($data['charge'])) {
            $data['charge_copropriete'] = $charge_copropriete;
        }

        return $data;
    }

    private function getVenteStore ($request) {

        $prix_vente = $this->incrementPrice($request);

        $data = $request->except(['man1', 'man2', 'man3']);

        $data['prix_vente'] = $prix_vente;

        $request->has('vente_meuble') ? $data['vente_meuble'] = 1 :  $data['vente_meuble'] = 0;
        $request->has('venteActif') ? $data['venteActif'] = 1 :  $data['venteActif'] = 0;

        return $data;
    }


    public function getLastRecord ($request) {

        return Particulier::where('last_id', $request->get('last_id'))->get();
    
    }

    public function activateOnline($id)
    {
        $record = $this->getCurrentRecord($id);
        $record->update (['online' => 1]);
        return true;
    }

    public function deactivateOnline($id)
    {
        $record = $this->getCurrentRecord($id);
        $record->update (['online' => 0]);
        return true;
    }

    public function delete($id)
    {
        $record = $this->getCurrentRecord($id);
        $record->delete();
        return true;
    }

    public function storeParticulierCritere($request)
    {
        ParticulierCritere::create($request->all());
    }


    public function updateCritere ($request) {
        


        $particulier = $this->getCurrentRecord ($request->get('id'));

        if ($particulier->critere->last() ) {
            $particulier->critere->last()->delete();
        }


        $response = $this->storeParticulierCritere($request);

    }




    public function setAnnonceUrl(string $previous)
    {
        return AnnonceUrl::create([
           'url' => $previous,
           'user_id' => auth()->user()->id
        ]);
    }

    public function updatePage ($id, $request) {


        $particulier = $this->getCurrentRecord($id);

        $particulier->update([
           'page' => null
        ]);

    }

    /**
     * Put the current uri to particulier 
     * @param $id
     * @param $uri
     * @return mixed
     */
    public function updateParticulier($id, $uri)
    {
        $particulier = $this->getCurrentRecord($id);
        return $particulier->update(['uri' => $uri]);
    }



    public function storeTransactionUri ($url, $id) {

        $particulier = $this->getCurrentRecord ($id);

        $particulier->update([
            'transactionurl' => $url
        ]);
    }   


    public function storeTypeUri ($url, $id) {

        $particulier = $this->getCurrentRecord ($id);

        $particulier->update([
            'typeurl' => $url
        ]);
    }


    public function storeDescriptionUri ($url, $id) {

        $particulier = $this->getCurrentRecord ($id);

        $particulier->update([
            'descriptionurl' => $url
        ]);
    }



    public function storeCritereUri ($url, $id) {

        $particulier = $this->getCurrentRecord ($id);

        $particulier->update([
            'critereurl' => $url
        ]);
    }


    public function storeLocalisationUri ($url, $id) {

        $particulier = $this->getCurrentRecord ($id);

        $particulier->update([
            'localisationurl' => $url
        ]);
    }


    public function storeuploadUri ($url, $id) {

        $particulier = $this->getCurrentRecord ($id);

        $particulier->update([
            'uploadurl' => $url
        ]);
    }


    public function storesuccessUri ($url, $id) {

        $particulier = $this->getCurrentRecord ($id);

        $particulier->update([
            'uploadurl' => $url
        ]);
    }


}
 
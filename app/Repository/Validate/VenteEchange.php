<?php

namespace App\Repository\Validate;

use Illuminate\Support\Facades\Validator;

class VenteEchange {


    public function validateVenteEchange($request) {

        if (is_null($request->get('prix_vente'))) {
            return Validator::make($request->toArray(), [
                'prix_vente' => 'required|regex:/^[\d.,]+$/',
            ]);
        }
        
        elseif ($request->get('echange_provisoir')) {

            return Validator::make($request->toArray(), [
                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
            ]);

        }
        
        elseif (is_null($request->get('echange_provisoir')) && is_null($request->get('echange_definitif')) && is_null($request->get('prix_vente'))) {

            return Validator::make($request->toArray(), [
                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
                'prix_vente' => 'required|regex:/^[\d.,]+$/',
            ]);

        }

        elseif (is_null($request->get('echange_provisoir')) && is_null($request->get('echange_definitif')) && ! is_null($request->get('prix_vente'))) {

            return Validator::make($request->toArray(), [
                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
            ]);

        }


        elseif (! is_null($request->get('echange_provisoir')) && ! is_null($request->get('echange_definitif')) && ! is_null($request->get('prix_vente'))) {

            return Validator::make($request->toArray(), [
                'prix_vente' => 'required|regex:/^[\d.,]+$/',
            ]);

        }

         else {
            return Validator::make($request->toArray(), [
                '' => ''
            ]);
        }


    }

}

<?php

namespace App\Repository\Validate;

use Illuminate\Support\Facades\Validator;

class LocationRepository {


    public function validateLocation ($request) {

        

        if (is_null( $request->get('loyerJour')) &&  is_null( $request->get('loyerMois'))) {
            return Validator::make($request->toArray(), [
                'prix_jour' => 'required|regex:/^[\d.,]+$/',
                'prix_mois' => 'required|regex:/^[\d.,]+$/',
            ]);
        }


        elseif ( $request->get('loyerMois')) {
            return Validator::make($request->toArray(), [
                'prix_mois' => 'required|regex:/^[\d.,]+$/',
            ]);
        }


        elseif ( $request->get('loyerJour') ) {
            return Validator::make($request->toArray(), [
                'prix_jour' => 'required|regex:/^[\d.,]+$/',
            ]);
        }






        
        else {
            return Validator::make($request->toArray(), [
                '' => ''
            ]);
        }



    }

}

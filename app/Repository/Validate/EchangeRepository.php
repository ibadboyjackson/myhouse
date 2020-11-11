<?php

namespace App\Repository\Validate;

use Illuminate\Support\Facades\Validator;

class EchangeRepository {


    public function validateEchange ($request) {


        if ( $request->get('echange_provisoir')) {

            return Validator::make($request->toArray(), [
                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
            ]);

        } 

        elseif (is_null($request->get('echange_provisoir')) && is_null($request->get('echange_definitif')) ) {

            return Validator::make($request->toArray(), [
                'echange_provisoir' => 'required',
                'echange_definitif' => 'required',
            ]);

        }
        
        else 
        
        {
            return Validator::make($request->toArray(), [
                '' => ''
            ]);
        }


    }

}

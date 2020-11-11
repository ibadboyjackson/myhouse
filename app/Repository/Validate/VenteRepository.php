<?php

namespace App\Repository\Validate;

use Illuminate\Support\Facades\Validator;

class VenteRepository {


    public function validateVente ($request) {


        return Validator::make($request->toArray(), [
            'prix_vente' => 'required|regex:/^[\d.,]+$/', 

        ]);
    }

}

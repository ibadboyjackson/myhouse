<?php

namespace App\Repository\Validate;

use Illuminate\Support\Facades\Validator;

class LocationEchange {



    public function validateLocationEchange ($request) {


        if ( ! is_null($request->get('prix_mois')) && is_null($request->get('prix_jour')) &&  is_null($request->get('echange_definitif')) &&  is_null($request->get('echange_provisoir'))  ) {
            
            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',

            ]);

        }


        elseif ( is_null($request->get('prix_mois')) && ! is_null($request->get('prix_jour')) &&  is_null($request->get('echange_definitif')) &&  is_null($request->get('echange_provisoir'))  ) {
            
            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',

            ]);

        }


        elseif ( is_null($request->get('prix_mois')) &&  is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_definitif')) &&  ! is_null($request->get('echange_provisoir'))  ) {
            
            return Validator::make($request->toArray(), [

                'prix_mois' => 'required|date_format:d/m/Y',
                'prix_jour' => 'required|date_format:d/m/Y',

            ]);

        }



        elseif ( is_null($request->get('prix_mois')) &&  is_null($request->get('prix_jour')) &&  is_null($request->get('echange_definitif')) &&  ! is_null($request->get('echange_provisoir'))  ) {
            
            return Validator::make($request->toArray(), [

                'prix_mois' => 'required|date_format:d/m/Y',
                'prix_jour' => 'required|date_format:d/m/Y',

            ]);

        }


        elseif ( is_null($request->get('prix_mois')) &&  is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_definitif')) &&   is_null($request->get('echange_provisoir'))  ) {
            
            return Validator::make($request->toArray(), [

                'prix_mois' => 'required|date_format:d/m/Y',
                'prix_jour' => 'required|date_format:d/m/Y',

            ]);

        }


        elseif ( is_null($request->get('prix_mois')) &&  ! is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_definitif')) &&   ! is_null($request->get('echange_provisoir'))  ) {
            
            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',

            ]);

        }

        elseif ( ! is_null($request->get('prix_mois')) &&  is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_definitif')) &&   ! is_null($request->get('echange_provisoir'))  ) {
            
            return Validator::make($request->toArray(), [
                
                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',

            ]);

        }



        elseif ( $request->get('loyerMois')) {
            return Validator::make($request->toArray(), [
                'prix_mois' => 'required|regex:/^[\d.,]+$/',
            ]);
        }




        elseif ($request->get('loyerJour')) {
            
            return Validator::make($request->toArray(), [
                'prix_jour' => 'required|regex:/^[\d.,]+$/',
            ]);

        }

        elseif ( $request->get('echange_provisoir')) {
            
            return Validator::make($request->toArray(), [
                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
            ]);

        }


        elseif ( is_null($request->get('prix_mois')) && is_null($request->get('prix_jour')) &&  is_null($request->get('echange_definitif')) &&  is_null($request->get('echange_provisoire'))  ) {
            

            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
                'prix_jour' => 'required|regex:/^[\d.,]+$/',
                'prix_mois' => 'required|regex:/^[\d.,]+$/',

            ]);

        }



        elseif ( ! is_null($request->get('prix_mois')) && is_null($request->get('prix_jour')) &&  is_null($request->get('echange_definitif')) &&  is_null($request->get('echange_provisoire'))  ) {
            
            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
                'prix_jour' => 'required|regex:/^[\d.,]+$/',

            ]);

        }


        elseif ( is_null($request->get('prix_mois')) && ! is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_definitif')) &&  ! is_null($request->get('echange_provisoire'))  ) {
            
            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',

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

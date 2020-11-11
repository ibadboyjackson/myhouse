<?php

namespace App\Repository\Validate;

use Illuminate\Support\Facades\Validator;

class LocationVenteEchange {


    public function validateLocationVenteEchange ($request) {
        


        if ( is_null($request->get('prix_vente')) &&  ! is_null($request->get('prix_mois')) &&  ! is_null($request->get('prix_jour')) &&  is_null($request->get('echange_provisoir')) &&  ! is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'prix_vente' =>  'required|regex:/^[\d.,]+$/',

            ]);
            
        } 


        if ( is_null($request->get('prix_vente')) &&  ! is_null($request->get('prix_mois')) &&  is_null($request->get('prix_jour')) &&  is_null($request->get('echange_provisoir')) &&  ! is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'prix_vente' =>  'required|regex:/^[\d.,]+$/',

            ]);
            
        } 


        if ( is_null($request->get('prix_vente')) &&  is_null($request->get('prix_mois')) &&  ! is_null($request->get('prix_jour')) &&  is_null($request->get('echange_provisoir')) &&  ! is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'prix_vente' =>  'required|regex:/^[\d.,]+$/',

            ]);
            
        } 


        if ( ! is_null($request->get('prix_vente')) &&   is_null($request->get('prix_mois')) &&  ! is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_provisoir')) &&  is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',

            ]);
            
        } 


        if ( ! is_null($request->get('prix_vente')) &&  ! is_null($request->get('prix_mois')) &&   is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_provisoir')) &&  is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',

            ]);
            
        } 


        if ( ! is_null($request->get('prix_vente')) &&  is_null($request->get('prix_mois')) &&   is_null($request->get('prix_jour')) &&   is_null($request->get('echange_provisoir')) &&  ! is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'prix_mois' =>  'required|regex:/^[\d.,]+$/',
                'prix_jour' =>  'required|regex:/^[\d.,]+$/',

            ]);
            
        } 


        if ( ! is_null($request->get('prix_vente')) &&  is_null($request->get('prix_mois')) &&   is_null($request->get('prix_jour')) &&   ! is_null($request->get('echange_provisoir')) &&  is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'prix_mois' =>  'required|regex:/^[\d.,]+$/',
                'prix_jour' =>  'required|regex:/^[\d.,]+$/',

            ]);
            
        } 


        if ( ! is_null($request->get('prix_vente')) &&  ! is_null($request->get('prix_mois')) &&   is_null($request->get('prix_jour')) &&   is_null($request->get('echange_provisoir')) &&  is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [
                
                'echange_provisoir' => 'required',
                'echange_definitif' => 'required',

            ]);
            
        } 


        if ( ! is_null($request->get('prix_vente')) &&  is_null($request->get('prix_mois')) &&   ! is_null($request->get('prix_jour')) &&   is_null($request->get('echange_provisoir')) &&  is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [
                
                'echange_provisoir' => 'required',
                'echange_definitif' => 'required',

            ]);
            
        } 


        elseif ( is_null($request->get('prix_vente')) &&  is_null($request->get('prix_mois')) &&  ! is_null($request->get('prix_jour')) &&  is_null($request->get('echange_provisoir')) &&  is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'prix_vente' =>  'required|regex:/^[\d.,]+$/',
                'echange_provisoir' => 'required',
                'echange_definitif' => 'required',
            ]);
            
        } 


        elseif ( is_null($request->get('prix_vente')) &&  ! is_null($request->get('prix_mois')) &&  is_null($request->get('prix_jour')) &&  is_null($request->get('echange_provisoir')) &&  is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'prix_vente' =>  'required|regex:/^[\d.,]+$/',
                'echange_provisoir' => 'required',
                'echange_definitif' => 'required',
            ]);
            
        } 



        elseif ( ! is_null($request->get('prix_vente')) &&  ! is_null($request->get('prix_mois')) &&  ! is_null($request->get('prix_jour')) &&  is_null($request->get('echange_provisoir')) &&  is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'echange_provisoir' => 'required',
                'echange_definitif' => 'required',
                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
            ]);
            
        } 


        elseif ( ! is_null($request->get('prix_vente')) &&  ! is_null($request->get('prix_mois')) &&  ! is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_provisoir')) &&  ! is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
            ]);
            
        } 


        elseif ( ! is_null($request->get('prix_vente')) &&  ! is_null($request->get('prix_mois')) &&  is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_provisoir')) &&  ! is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
            ]);
            
        } 


        elseif ( ! is_null($request->get('prix_vente')) &&  is_null($request->get('prix_mois')) &&  ! is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_provisoir')) &&  ! is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
            ]);
            
        } 












































































        
        elseif ($request->get('loyerMois')) {
        
            return Validator::make($request->toArray(), [
                'prix_mois' => 'required|regex:/^[\d.,]+$/',
            ]);
        
        }


        elseif ($request->get('loyerJour')) {
        
            return Validator::make($request->toArray(), [
                'prix_jour' => 'required|regex:/^[\d.,]+$/',
            ]);
        
        }


        elseif (is_null($request->get('prix_vente'))) {
        
            return Validator::make($request->toArray(), [
                'prix_vente' => 'required|regex:/^[\d.,]+$/',
            ]);
        
        }


        elseif ( $request->get('echange_provisoir')) {

            return Validator::make($request->toArray(), [
                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
            ]);
            
        } 


        elseif ( is_null($request->get('prix_vente')) && is_null($request->get('prix_mois')) && is_null($request->get('prix_jour')) &&  is_null($request->get('echange_provisoir')) &&  is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
                'prix_vente' =>  'required|regex:/^[\d.,]+$/',
                'prix_mois' =>  'required|regex:/^[\d.,]+$/',
                'prix_jour' =>  'required|regex:/^[\d.,]+$/',

            ]);
            
        } 



        elseif ( ! is_null($request->get('prix_vente')) && is_null($request->get('prix_mois')) && is_null($request->get('prix_jour')) &&  is_null($request->get('echange_provisoir')) &&  is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
                'prix_mois' =>  'required|regex:/^[\d.,]+$/',
                'prix_jour' =>  'required|regex:/^[\d.,]+$/',
                
            ]);
            
        } 


        elseif ( ! is_null($request->get('prix_vente')) &&  ! is_null($request->get('prix_mois')) && is_null($request->get('prix_jour')) &&  is_null($request->get('echange_provisoir')) &&  is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
                
            ]);
            
        } 


        elseif ( ! is_null($request->get('prix_vente')) &&  ! is_null($request->get('prix_mois')) && ! is_null($request->get('prix_jour')) &&  is_null($request->get('echange_provisoir')) &&  is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
                
            ]);
            
        } 


        elseif ( ! is_null($request->get('prix_vente')) &&  is_null($request->get('prix_mois')) &&  is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_provisoir')) &&  ! is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'prix_mois' =>  'required|regex:/^[\d.,]+$/',
                'prix_jour' =>  'required|regex:/^[\d.,]+$/',
                
            ]);
            
        } 



        elseif ( is_null($request->get('prix_vente')) &&  ! is_null($request->get('prix_mois')) &&  ! is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_provisoir')) &&  ! is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'prix_vente' =>  'required|regex:/^[\d.,]+$/',

            ]);
            
        } 



        elseif ( is_null($request->get('prix_vente')) &&  ! is_null($request->get('prix_mois')) &&   is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_provisoir')) &&  ! is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'prix_vente' =>  'required|regex:/^[\d.,]+$/',

            ]);
            
        } 



        elseif ( is_null($request->get('prix_vente')) &&  is_null($request->get('prix_mois')) &&  ! is_null($request->get('prix_jour')) &&  ! is_null($request->get('echange_provisoir')) &&  ! is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'prix_vente' =>  'required|regex:/^[\d.,]+$/',

            ]);
            
        } 



        elseif ( is_null($request->get('prix_vente')) &&  ! is_null($request->get('prix_mois')) &&  is_null($request->get('prix_jour')) &&  is_null($request->get('echange_provisoir')) &&  ! is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'prix_vente' =>  'required|regex:/^[\d.,]+$/',

            ]);
            
        } 


        elseif ( is_null($request->get('prix_vente')) &&  is_null($request->get('prix_mois')) &&  ! is_null($request->get('prix_jour')) &&  is_null($request->get('echange_provisoir')) &&  is_null($request->get('echange_definitif'))) {

            return Validator::make($request->toArray(), [

                'prix_vente' =>  'required|regex:/^[\d.,]+$/',
                'echange_provisoir' => 'required',
                'echange_definitif' => 'required',
                'echange_periode_un' => 'required|date_format:d/m/Y',
                'echange_periode_deux' => 'required|date_format:d/m/Y',
            ]);
            
        } 





        
        else {
        
            return Validator::make($request->toArray(), [
                '' => ''
            ]);
        
        }



    }

}

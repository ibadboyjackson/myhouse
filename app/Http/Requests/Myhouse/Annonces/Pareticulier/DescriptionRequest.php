<?php

namespace App\Http\Requests\Myhouse\Annonces\Pareticulier;

use Illuminate\Foundation\Http\FormRequest;

class DescriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    
    public function rules()
    {




        if ( array_key_exists('surface_batiment', $this->input()) ) {


            return [ 
                'surface_batiment' => 'required|regex:/^[\d.,]+$/',
            ];


        }




        if ( array_key_exists('surface_disponible_un', $this->input()) ) {


            return [ 
                'surface_disponible_un' => 'required|regex:/^[\d.,]+$/',
            ];


        }

        if ( array_key_exists('surface_habitable', $this->input()) ) {


            return [ 
                'surface_habitable' => 'required|regex:/^[\d.,]+$/',
            ];


        }


        if ( array_key_exists('surface_total', $this->input()) ) {

            return [ 
                'surface_total' => 'required|regex:/^[\d.,]+$/',
            ];


        }


        if ( array_key_exists('surface_garage', $this->input()) ) {

            return [ 
                'surface_garage' => 'required|regex:/^[\d.,]+$/',
            ];


        }

        if ( array_key_exists('superficie_terrain', $this->input()) ) {

            return [ 
                'superficie_terrain' => 'required|regex:/^[\d.,]+$/',
            ];


        }


        

        return [
            '' => ''
        ];


    }





    public function messages () {
        return [

            'surface_habitable.required' => 'Ce champ est obligatoire.',
            'surface_total.required' => 'Ce champ est obligatoire.',
            'surface_disponible_un.required' => 'Ce champ est obligatoire',
            'surface_batiment.required' => 'Ce champ est obligatoire',
            'surface_garage.required' => 'Ce champ est obligatoire',
            'superficie_terrain.required' => 'Ce champ est obligatoire',





            'surface_habitable.regex' => 'Ce format est invalide.',
            'surface_total.regex' => 'Ce format est invalide.',
            'surface_disponible_un.regex' => 'Ce format est invalide.',
            'surface_batiment.regex' => 'Ce format est invalide.',
            'surface_garage.regex' => 'Ce format est invalide.',
            'superficie_terrain.regex' => 'Ce format est invalide.',




        ];
    }





    public function next () {
        return [
            'surface_totale' => 'required|regex:/^[\d.,]+$/',
            'surface_garage' => 'required|regex:/^[\d.,]+$/',
            'superficie_terrain' => 'required|regex:/^[\d.,]+$/',
            'surface_batiment' => 'required|regex:/^[\d.,]+$/',
            'hauteur_sous_plafond' => 'required|regex:/^[\d.,]+$/',
            'espace_entrepot' => 'required|regex:/^[\d.,]+$/',
            'espace_activite' => 'required|regex:/^[\d.,]+$/',
            'espace_bureau' => 'required|regex:/^[\d.,]+$/',
            'portail_un' => 'required|regex:/^[\d.,]+$/',
            'portail_deux' => 'required|regex:/^[\d.,]+$/',
            'portail_trois' => 'required|regex:/^[\d.,]+$/',
            'portail_quatre' => 'required|regex:/^[\d.,]+$/',
            'portail' => 'required|regex:/^[\d.,]+$/',
            "surface_disponible_deux" => 'required|regex:/^[\d.,]+$/',

            "sous_pente" => 'required|regex:/^[\d.,]+$/',
            "terrasse_commerciale" => 'required|regex:/^[\d.,]+$/',
            "longueur_facade" => 'required|regex:/^[\d.,]+$/',
            "hauteur_plafond" => 'required|regex:/^[\d.,]+$/',
            "surface_disponible_deux" => 'required|regex:/^[\d.,]+$/',
            "surface_disponible_deux" => 'required|regex:/^[\d.,]+$/',
            "surface_disponible_deux" => 'required|regex:/^[\d.,]+$/',

        ];
    }
}

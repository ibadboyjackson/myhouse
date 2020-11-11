<?php

namespace App\Http\Requests\Myhouse\Back\Annonces\Generique;

use Illuminate\Foundation\Http\FormRequest;

class EntrepriseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            str_replace(' ', '_', __('myhouse/back/annonces/professionnel/enregistrement.ag')) => 'required|string|max:155',
            str_replace(' ', '_', __('myhouse/back/annonces/professionnel/enregistrement.ah')) => 'required|string|max:155',
            str_replace(' ', '_', __('myhouse/back/annonces/professionnel/enregistrement.ai')) => 'required|string|max:155',
            str_replace(' ', '_', __('myhouse/back/annonces/professionnel/enregistrement.aj')) => 'required|string|max:155',
            str_replace(' ', '_', __('myhouse/back/annonces/professionnel/enregistrement.al')) => 'required|email|max:155',
        ]; 
    }
}

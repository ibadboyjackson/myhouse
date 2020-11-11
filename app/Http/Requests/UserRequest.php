<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->role_id != 4 ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'ville' => 'required|string|min:2',
            'email' => 'required|string|min:2|email|unique:users',
            'pays' => 'required|string|min:2',
            'address_postal' => 'required|string|min:2',
            'telephone' => 'required|numeric|min:7',
            'site_web' => 'required|string|min:2',
            'type_entreprise' => 'required|string|min:2',
            'siege_social' => 'required|string|min:2',
            'nom_entreprise' => 'required|string|min:2',
        ];
    }
}

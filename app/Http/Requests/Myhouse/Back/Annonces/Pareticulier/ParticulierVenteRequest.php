<?php

namespace App\Http\Requests\Myhouse\Back\Annonces\Pareticulier;

use Illuminate\Foundation\Http\FormRequest;

class ParticulierVenteRequest extends FormRequest
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
            'man1' => 'required|numeric',
            'man2' => 'required|numeric',
            'man3' => 'required|numeric',
        ];
    }
}

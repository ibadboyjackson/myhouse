<?php

namespace App\Http\Requests\Myhouse\Back\Annonces\Pareticulier;

use Illuminate\Foundation\Http\FormRequest;

class ParticulierLocationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'loyerm1' => 'required|numeric',
            'loyerm2' => 'required|numeric',
            'loyerj1' => 'required|numeric',
            'loyerj2' => 'required|numeric',
            'charge1' => 'required|numeric',
            'charge2' => 'required|numeric',
        ];
    }
}

<?php

namespace App\Http\Requests\Myhouse\Back\Annonces\Pareticulier;

use Illuminate\Foundation\Http\FormRequest;

class ParticulierEchangeRequest extends FormRequest
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
            'echange_periode_deux' => 'required',
            'echange_periode_un' => 'required',
        ];
    }
}

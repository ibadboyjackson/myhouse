<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrefectureRequest extends FormRequest
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
        return [
            'nom' => 'required|string|min:2',
            'region_id' => 'required|int',
            'country_id' => 'required|int',
            'lat' => 'required',
            'long' => 'required',
        ];
    }

    public function attributes()
    {
        return [
          'region_id' => 'nom de la region',
          'country_id' => 'nom du pays',
          'lat' => 'latitude',
          'long' => 'longitude',
        ];
    }


}

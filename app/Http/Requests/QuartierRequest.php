<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuartierRequest extends FormRequest
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
            'nom' => 'required|string|min:2|unique:districts',
            'lat' => 'required|numeric',
            'long' => 'required|numeric',
            'country_id' => 'required|int',
            'region_id' => 'required|int',
            'prefecture_id' => 'required|int',
            'town_id' => 'required|int',
            'district_id' => 'required|int',
        ];
    }

    public function attributes()
    {
        return [
            'lat' => 'latitude',
            'long' => 'longitude',
            'country_id' => 'pays',
            'region_id' => 'région',
            'prefecture_id' => 'préfecture',
            'town_id' => 'commune',
            'district_id' => 'arrondissement',
        ];
    }
}

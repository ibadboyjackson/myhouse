<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'nomProjet' => 'required|min:2|string',
            'nomAdministrateur' => 'required|min:2|string',
            'dateAffiliation' => 'required',
            'superficieProjet' => 'required',
            'budgetMin' => 'required',
            'budgetMax' => 'required',
            'superficieMinVilla' => 'required',
            'superficieMaxVilla' => 'required',
            'superficieMinTerrain' => 'required',
            'superficieMaxTerrain' => 'required',
            'superficieMaxAppartement' => 'required',
            'superficieMinAppartement' => 'required',
            'imageAcceuil' => 'required|image',
            'label' => 'required|string',
        ];
    }
}

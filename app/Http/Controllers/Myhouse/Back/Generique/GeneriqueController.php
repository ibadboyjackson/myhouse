<?php

namespace App\Http\Controllers\Myhouse\Back\Generique;

use App\Model\Particulier\Transaction;
use App\Model\Particulier\TypeBien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneriqueController extends Controller
{
    public function transaction() {
        Transaction::create([
           'nom' => 'vente'
        ]);
        Transaction::create([
            'nom' => 'echange'
        ]);
        Transaction::create([
            'nom' => 'location'
        ]);

        return 'ok';
    }

    public function typeBien() {
        TypeBien::create([
            'nom' => 'appartement',
            'category_types_id' => '1'
        ]);
        TypeBien::create([
            'nom' => 'Villa',
            'category_types_id' => '1'
        ]);
        TypeBien::create([
            'nom' => 'Maison',
            'category_types_id' => '1'
        ]);
        TypeBien::create([
            'nom' => 'Chalet',
            'category_types_id' => '1'
        ]);
        TypeBien::create([
            'nom' => 'Riad',
            'category_types_id' => '1'
        ]);
        TypeBien::create([
            'nom' => 'Ferme',
            'category_types_id' => '1'
        ]);
        TypeBien::create([
            'nom' => 'Chambre d\'hôte',
            'category_types_id' => '1'
        ]);




        TypeBien::create([
            'nom' => 'Cité universitaire',
            'category_types_id' => 2
        ]);
        TypeBien::create([
            'nom' => 'Bureau',
            'category_types_id' => 2
        ]);
        TypeBien::create([
            'nom' => 'Plateau',
            'category_types_id' => 2
        ]);
        TypeBien::create([
            'nom' => 'Entrepôt',
            'category_types_id' => 2
        ]);
        TypeBien::create([
            'nom' => 'Garage',
            'category_types_id' => 2
        ]);
        TypeBien::create([
            'nom' => 'Local industriel',
            'category_types_id' => 2
        ]);
        TypeBien::create([
            'nom' => 'Local commercial',
            'category_types_id' => 2
        ]);
        TypeBien::create([
            'nom' => 'Propriété agricole',
            'category_types_id' => 2
        ]);
        TypeBien::create([
            'nom' => 'Immeuble',
            'category_types_id' => 2
        ]);


        TypeBien::create([
            'nom' => 'Résidentiel',
            'category_types_id' => 3
        ]);
        TypeBien::create([
            'nom' => 'Commercial',
            'category_types_id' => 3
        ]);
        TypeBien::create([
            'nom' => 'Agricole',
            'category_types_id' => 3
        ]);
        TypeBien::create([
            'nom' => 'Industriel',
            'category_types_id' => 3
        ]);

        return 'ok';
    }
}

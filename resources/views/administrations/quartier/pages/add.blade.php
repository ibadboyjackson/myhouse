@include ('forms.add', [
    'title' => 'Ajouter un quartier',
    'name' => 'Nom du quartier',
    'route_name' => 'quartier.store',

    'variable' => false,
    'local_variables' => $countries,
    'local_variables_2' => $regions,
    'local_variables_3' => $prefectures,
    'local_variables_4' => $towns,
    'local_variables_5' => $districts,

    'local' => 'Country_id',
    'locals' => 'Pays',

    'local_2' => 'region_id',
    'locals_2' => 'Région',

    'locals_3' => 'Préfecture',
    'local_3' => 'prefecture_id',


    'locals_4' => 'Commune',
    'local_4' => 'town_id',


    'locals_5' => 'Arrondissement',
    'local_5' => 'district_id',
])

@include ('forms.add', [
    'title' => 'Ajouter un arrondissement',
    'name' => 'Nom de l\'arrondissement',
    'route_name' => 'district.store',

    'variable' => false,
    'local_variables' => $countries,
    'local_variables_2' => $regions,
    'local_variables_3' => $prefectures,
    'local_variables_4' => $towns,

    'local' => 'Country_id',
    'locals' => 'Pays',

    'local_2' => 'region_id',
    'locals_2' => 'Région',

    'locals_3' => 'Préfecture',
    'local_3' => 'prefecture_id',


    'locals_4' => 'Commune',
    'local_4' => 'town_id',
])

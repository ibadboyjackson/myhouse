@include ('forms.add', [
    'title' => 'Ajouter une commune',
    'name' => 'Nom de la commune',
    'route_name' => 'town.store',

    'variable' => false,
    'local_variables' => $countries,
    'local_variables_2' => $regions,
    'local_variables_3' => $prefectures,

    'local' => 'Country_id',
    'locals' => 'Pays',
    'locals' => 'Pays',

    'local_2' => 'region_id',
    'locals_2' => 'Région',

    'locals_3' => 'Préfecture',
    'local_3' => 'prefecture_id'
])

@include ('forms.add', [
    'title' => 'Ajouter une préfecture',
    'name' => 'Nom de la préfecture',
    'route_name' => 'prefecture.store',
    'variable' => false,
    'local_variables' => $countries,
    'local_variables_2' => $regions,

    'local' => 'Country_id',
    'locals' => 'Pays',

    'local_2' => 'region_id',
    'locals_2' => 'Région'
])

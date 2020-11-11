@include ('forms.add', [
    'title' => 'Ajouter une region',
    'name' => 'Nom de la region',
    'route_name' => 'region.store',
    'variable' => false,
    'local_variables' => $countries,
    'local' => 'Country_id',
    'locals' => 'Pays'
])

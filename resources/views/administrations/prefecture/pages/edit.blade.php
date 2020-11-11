@include ('forms.edit', [
    'title' => 'Modifier cette préfecture',
    'name' => 'Nom de la préfecture',
    'route_name' => 'prefecture.update',
    'variable' => false,
    'local' => $prefecture,

    'location' => 'country_id',
    'locations' => 'Pays',

    'location_2' => 'region_id',
    'locations_2' => 'Région',

    'location_variables' => $countries,
    'location_variables_2' => $regions,
])

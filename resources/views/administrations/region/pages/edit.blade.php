@include ('forms.edit', [
    'title' => 'Modifier cette région',
    'name' => 'Nom de la région',
    'route_name' => 'region.update',
    'variable' => false,
    'local' => $region,
    'location' => 'country_id',
    'locations' => 'Pays',
    'location_variables' => $countries
])

@include ('forms.edit', [

    'title' => 'Modifier cette commune',
    'name' => 'Nom de la commune',
    'route_name' => 'town.update',
    'variable' => false,
    'local' => $town,

    'location' => 'country_id',
    'locations' => 'Pays',

    'location_2' => 'region_id',
    'locations_2' => 'Région',

    'locations_3' => 'Prefecture',
    'location_3' => 'prefecture_id',

    'location_variables' => $countries,
    'location_variables_2' => $regions,
    'location_variables_3' => $prefectures,
])

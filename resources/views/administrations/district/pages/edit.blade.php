@include ('forms.edit', [

    'title' => 'Modifier cet arrondissement',
    'name' => 'Nom de l\'arrondissement',
    'route_name' => 'district.update',
    'variable' => false,
    'local' => $district,

    'location' => 'country_id',
    'locations' => 'Pays',

    'location_2' => 'region_id',
    'locations_2' => 'Région',

    'locations_3' => 'Prefecture',
    'location_3' => 'prefecture_id',

    'locations_4' => 'Commune',
    'location_4' => 'town_id',

    'location_variables' => $countries,
    'location_variables_2' => $regions,
    'location_variables_3' => $prefectures,
    'location_variables_4' => $towns,
])

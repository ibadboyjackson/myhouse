@include ('forms.edit', [

    'title' => 'Modifier ce quartier',
    'name' => 'Nom du quartier',
    'route_name' => 'quartier.update',
    'variable' => false,
    'local' => $quartier,

    'location' => 'country_id',
    'locations' => 'Pays',

    'location_2' => 'region_id',
    'locations_2' => 'Région',

    'locations_3' => 'Prefecture',
    'location_3' => 'prefecture_id',

    'locations_4' => 'Commune',
    'location_4' => 'town_id',

    'locations_5' => 'Arrondissement',
    'location_5' => 'district_id',

    'location_variables' => $countries,
    'location_variables_2' => $regions,
    'location_variables_3' => $prefectures,
    'location_variables_4' => $towns,
    'location_variables_5' => $districts,
])

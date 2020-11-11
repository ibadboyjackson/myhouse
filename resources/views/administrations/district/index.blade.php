@include('forms.index', [
    'title' => 'Liste des arrondissements',
    'variables' => $districts,
    'name' => 'nom',

    'route_action' => 'district.create',

    'route_action_edit' => 'district.edit',
    'route_action_delete' => 'district.destroy',



    'local' => true,
    'local_name' => 'Pays',

    'local_2' => true,
    'local_name_2' => 'Region',

    'local_3' => true,
    'local_name_3' => 'Prefecture',

    'local_4' => true,
    'local_name_4' => 'Commune',




    'variable_name' => 'country',
    'item' => 'nom',

     'variable_name_2' => 'region',
    'item_2' => 'nom',


     'variable_name_3' => 'prefecture',
    'item_3' => 'nom',

     'variable_name_4' => 'town',
    'item_4' => 'nom',


    'action_name' => 'Administrer les quartiers',
    'route_action_name' => 'quartier.index'
])

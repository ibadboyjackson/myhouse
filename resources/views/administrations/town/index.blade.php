@include('forms.index', [
    'title' => 'Liste des communes',
    'variables' => $towns,
    'name' => 'nom',

    'route_action' => 'town.create',

    'route_action_edit' => 'town.edit',
    'route_action_delete' => 'town.destroy',

    'local' => true,
    'local_name' => 'Pays',

    'local_2' => true,
    'local_name_2' => 'Region',

    'local_3' => true,
    'local_name_3' => 'Prefecture',

    'variable_name' => 'country',
    'item' => 'nom',

     'variable_name_2' => 'region',
    'item_2' => 'nom',


     'variable_name_3' => 'prefecture',
    'item_3' => 'nom',


    'action_name' => 'Administrer les Arrondissements',
    'route_action_name' => 'district.index'
])

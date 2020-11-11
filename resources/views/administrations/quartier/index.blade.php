@include('forms.index', [
    'title' => 'Liste des quartiers',
    'variables' => $quartiers,
    'name' => 'nom',

    'route_action' => 'quartier.create',

    'route_action_edit' => 'quartier.edit',
    'route_action_delete' => 'quartier.destroy',



    'local' => true,
    'local_name' => 'Pays',

    'local_2' => true,
    'local_name_2' => 'Region',

    'local_3' => true,
    'local_name_3' => 'Prefecture',

    'local_4' => true,
    'local_name_4' => 'Commune',

    'local_5' => true,
    'local_name_5' => 'Arrondissement',




    'variable_name' => 'country',
    'item' => 'nom',

     'variable_name_2' => 'region',
    'item_2' => 'nom',


     'variable_name_3' => 'prefecture',
    'item_3' => 'nom',

     'variable_name_4' => 'town',
    'item_4' => 'nom',

    'variable_name_5' => 'district',
    'item_5' => 'nom',


    'action_name' => 'Administrer les rues',
    'route_action_name' => 'street.index'
])

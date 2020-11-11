@include('forms.index', [
    'title' => $name,
    'variables' => $variable,
    'name' => 'nom',

    'route_action' => $route_action,

    'route_action_edit' => $route_action_edit,
    'route_action_delete' => $route_action_delete,



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

    'local_6' => true,
    'local_name_6' => 'Quartier',




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


    'variable_name_6' => 'quartier',
    'item_6' => 'nom',


    'action_name' => $action_name,
    'route_action_name' => $route_action_name
])

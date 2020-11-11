@include('forms.index', [
    'title' => 'Liste des préfectures',
    'variables' => $prefectures,
    'name' => 'nom',
    'route_action' => 'prefecture.create',
    'route_action_edit' => 'prefecture.edit',
    'route_action_delete' => 'prefecture.destroy',
    'local' => true,
    'local_name' => 'Pays',
    'local_2' => true,
    'local_name_2' => 'Region',
    'variable_name' => 'country',
    'item' => 'nom',
     'variable_name_2' => 'region',
    'item_2' => 'nom',


    'action_name' => 'Administrer les communes',
    'route_action_name' => 'town.index'
])

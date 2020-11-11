@include('forms.index', [
    'title' => 'Liste des regions',
    'variables' => $regions,
    'name' => 'nom',
    'route_action' => 'region.create',
    'route_action_edit' => 'region.edit',
    'route_action_delete' => 'region.destroy',
    'local' => true,
    'local_name' => 'Pays',
    'variable_name' => 'country',
    'variable_name_2' => 'region',
    'item' => 'nom',
    'action_name' => 'Administrer les prefectures',
    'route_action_name' => 'prefecture.store'
])

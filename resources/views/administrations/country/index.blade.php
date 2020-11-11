@include('forms.index', [
    'title' => 'Liste des pays',
    'variables' => $countries,
    'name' => 'nom',
    'route_action' => 'administration.create',
    'route_action_edit' => 'administration.edit',
    'route_action_delete' => 'administration.destroy',
    'route_action_name' => 'region.index',
    'action_name' => 'Administrer les regions',
])

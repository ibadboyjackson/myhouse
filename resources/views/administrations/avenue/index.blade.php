@include('forms.include.index', [
    'name' => 'Liste des avenues',
    'variable' => $avenues,
    'route_action' => 'avenue.create',
    'route_action_edit' => 'avenue.edit',
    'route_action_delete' => 'avenue.destroy',

    'action_name' => 'Administrer les places',
    'route_action_name' => 'place.index'
])

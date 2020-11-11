@include('forms.include.index', [
    'name' => 'Liste des ruelles',
    'variable' => $ruelles,
    'route_action' => 'ruelle.create',
    'route_action_edit' => 'ruelle.edit',
    'route_action_delete' => 'ruelle.destroy',

    'action_name' => 'Administrer les Routes',
    'route_action_name' => 'route.index'
])

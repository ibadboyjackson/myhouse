@include('forms.include.index', [
    'name' => 'Liste des routes',
    'variable' => $routes,
    'route_action' => 'route.create',
    'route_action_edit' => 'route.edit',
    'route_action_delete' => 'route.destroy',

    'action_name' => 'Administrer les Boulevards',
    'route_action_name' => 'boulevard.index'
])

@include('forms.include.index', [
    'name' => 'Liste des allées',
    'variable' => $allees,
    'route_action' => 'allee.create',
    'route_action_edit' => 'allee.edit',
    'route_action_delete' => 'allee.destroy',

    'action_name' => 'Administrer les allées',
    'route_action_name' => 'allee.index'
])

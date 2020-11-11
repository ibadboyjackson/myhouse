@include('forms.include.index', [
    'name' => 'Liste des sentiers',
    'variable' => $sentiers,
    'route_action' => 'sentier.create',
    'route_action_edit' => 'sentier.edit',
    'route_action_delete' => 'sentier.destroy',

    'action_name' => 'Administrer les allées',
    'route_action_name' => 'allee.index'
])

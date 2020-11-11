@include('forms.include.index', [
    'name' => 'Liste des rues',
    'variable' => $streets,
    'route_action' => 'street.create',
    'route_action_edit' => 'street.edit',
    'route_action_delete' => 'street.destroy',

    'action_name' => 'Administrer les avenues',
    'route_action_name' => 'avenue.index'
])

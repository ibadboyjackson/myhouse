@include('forms.include.index', [
    'name' => 'Liste des chemins',
    'variable' => $chemins,
    'route_action' => 'chemin.create',
    'route_action_edit' => 'chemin.edit',
    'route_action_delete' => 'chemin.destroy',

    'action_name' => 'Administrer les sentiers',
    'route_action_name' => 'sentier.index'
])

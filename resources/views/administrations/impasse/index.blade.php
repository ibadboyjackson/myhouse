@include('forms.include.index', [
    'name' => 'Liste des impasses',
    'variable' => $impasses,
    'route_action' => 'impasse.create',
    'route_action_edit' => 'impasse.edit',
    'route_action_delete' => 'impasse.destroy',

    'action_name' => 'Administrer les Chemins',
    'route_action_name' => 'chemin.index'
])

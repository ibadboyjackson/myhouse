@include('forms.include.index', [
    'name' => 'Liste des boulevards',
    'variable' => $boulevards,
    'route_action' => 'boulevard.create',
    'route_action_edit' => 'boulevard.edit',
    'route_action_delete' => 'boulevard.destroy',

    'action_name' => 'Administrer les Impasses',
    'route_action_name' => 'impasse.index'
])

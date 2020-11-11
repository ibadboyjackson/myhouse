@include('forms.include.index', [
    'name' => 'Liste des places',
    'variable' => $places,
    'route_action' => 'place.create',
    'route_action_edit' => 'place.edit',
    'route_action_delete' => 'place.destroy',

    'action_name' => 'Administrer les Ruelles',
    'route_action_name' => 'ruelle.index'
])

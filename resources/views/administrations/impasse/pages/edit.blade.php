
@include('forms.include.edit', [
    'title' => 'Modifier cette impasse',
    'name' => 'Nom de l\'impasse',
    'route_name' => 'impasse.update',
    'variable' => $impasse
])

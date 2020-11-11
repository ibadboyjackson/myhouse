@include('forms.include.edit', [
    'title' => 'Modifier cette place',
    'name' => 'Nom de la place',
    'route_name' => 'place.update',
    'variable' => $place
])

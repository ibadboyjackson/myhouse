@include ('forms.edit', [
    'title' => 'Modifier ce pays',
    'name' => 'Nom du pays',
    'route_name' => 'administration.update',
    'variable' => false,
    'local' => $country
])

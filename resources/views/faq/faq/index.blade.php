@include('faq.faq.include.index', [
    'title' => 'Type de question',
    'routeAdd' => 'faq.create',
    'routeEdit' => 'faq.edit',
    'routeDelete' => 'faq.destroy',
    'sendVars' => $faqs,
    'headOne' => 'Type de question',
])

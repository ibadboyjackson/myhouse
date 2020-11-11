@if ($user === 'neuf')
    @include('myhouse.back.includes.neuf.aside')
@endif

@if ($user === 'professionnel')
    @include('myhouse.back.includes.professionnel.aside')
@endif

@if ($user === 'particulier')
    @include('myhouse.back.includes.particulier.aside')
@endif

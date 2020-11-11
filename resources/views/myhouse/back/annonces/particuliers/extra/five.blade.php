<select name="nombre_salon" id="" class="form-control yt-select">
    
    @if($particulier->nombre_salon != "")
       <option hidden selected value="{{ $particulier->nombre_salon }}">{{ $particulier->nombre_salon }}</option>
    @endif

                        @if(old('nombre_salon'))
                            <option hidden selected value="{{ old('nombre_salon') }}">{{ old('nombre_salon') }}</option>
                        @endif

    <option value="{{ __('myhouse/back/annonces/particulier/description.abag') }}">{{ __('myhouse/back/annonces/particulier/description.abag') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.aq') }}">{{ __('myhouse/back/annonces/particulier/description.aq') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abah') }}">{{ __('myhouse/back/annonces/particulier/description.abah') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abai') }}">{{ __('myhouse/back/annonces/particulier/description.abai') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abaj') }}">{{ __('myhouse/back/annonces/particulier/description.abaj') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abak') }}">{{ __('myhouse/back/annonces/particulier/description.abak') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abal') }}">{{ __('myhouse/back/annonces/particulier/description.abal') }}</option>
</select>

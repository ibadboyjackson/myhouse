<select name="nombre_salle_bain" id="" class="form-control yt-select">
    
    @if($particulier->nombre_salle_bain != "")
        <option hidden selected value="{{ $particulier->nombre_salle_bain }}">{{ $particulier->nombre_salle_bain }}</option>
    @endif

                            @if(old('nombre_salle_bain'))
                            <option hidden selected value="{{ old('nombre_salle_bain') }}">{{ old('nombre_salle_bain') }}</option>
                        @endif

    <option value="{{ __('myhouse/back/annonces/particulier/description.abaa') }}">{{ __('myhouse/back/annonces/particulier/description.abaa') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.ap') }}">{{ __('myhouse/back/annonces/particulier/description.ap') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abab') }}">{{ __('myhouse/back/annonces/particulier/description.abab') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abac') }}">{{ __('myhouse/back/annonces/particulier/description.abac') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abad') }}">{{ __('myhouse/back/annonces/particulier/description.abad') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abae') }}">{{ __('myhouse/back/annonces/particulier/description.abae') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abaf') }}">{{ __('myhouse/back/annonces/particulier/description.abaf') }}</option>
</select>

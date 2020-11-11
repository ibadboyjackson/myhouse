<select name="nombre_chambre" id="" class="form-control yt-select">

        @if($particulier->nombre_chambre != "")
            <option hidden selected value="{{ $particulier->nombre_chambre }}">{{ $particulier->nombre_chambre }}</option>
        @endif

                        @if(old('nombre_chambre'))
                            <option hidden selected value="{{ old('nombre_chambre') }}">{{ old('nombre_chambre') }}</option>
                        @endif

    <option value="{{ __('myhouse/back/annonces/particulier/description.absd') }}">{{ __('myhouse/back/annonces/particulier/description.absd') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.an') }}">{{ __('myhouse/back/annonces/particulier/description.abr') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.aabs') }}">{{ __('myhouse/back/annonces/particulier/description.aabs') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.aabt') }}">{{ __('myhouse/back/annonces/particulier/description.aabt') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.aabu') }}">{{ __('myhouse/back/annonces/particulier/description.aabu') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.aabv') }}">{{ __('myhouse/back/annonces/particulier/description.aabv') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.aabw') }}">{{ __('myhouse/back/annonces/particulier/description.aabw') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.aabx') }}">{{ __('myhouse/back/annonces/particulier/description.aabx') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.aaby') }}">{{ __('myhouse/back/annonces/particulier/description.aaby') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.aabz') }}">{{ __('myhouse/back/annonces/particulier/description.aabz') }}</option>
</select>

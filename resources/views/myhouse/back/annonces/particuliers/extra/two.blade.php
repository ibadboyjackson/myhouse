<select name="cuisine_type" id="" class="form-control yt-select">


        @if($particulier->cuisine_type != "")
            <option hidden selected value="{{ $particulier->cuisine_type }}">{{ $particulier->cuisine_type }}</option>
        @endif

                        @if(old('nombre_piece'))
                            <option hidden selected value="{{ old('nombre_piece') }}">{{ old('nombre_piece') }}</option>
                        @endif


    <option value="{{ __('myhouse/back/annonces/particulier/description.al') }}">{{ __('myhouse/back/annonces/particulier/description.al') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.aabo') }}">{{ __('myhouse/back/annonces/particulier/description.aabo') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.aabq') }}">{{ __('myhouse/back/annonces/particulier/description.aabq') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.aabr') }}">{{ __('myhouse/back/annonces/particulier/description.aabr') }}</option>
</select>

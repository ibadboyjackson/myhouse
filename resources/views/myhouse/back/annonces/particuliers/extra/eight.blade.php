<select name="zone_disponible" id="" class="form-control yt-selects" style="font-size: 12px">

    @if($particulier->zone_disponible != "")
        <option hidden selected value="{{ $particulier->zone_disponible }}">{{ $particulier->zone_disponible }}</option>
    @endif

                        @if(old('zone_disponible'))
                            <option hidden selected value="{{ old('zone_disponible') }}">{{ old('zone_disponible') }}</option>
                        @endif

    <option value="{{ __('myhouse/back/annonces/particulier/description.bbax') }}">{{ __('myhouse/back/annonces/particulier/description.bbax') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbay') }}">{{ __('myhouse/back/annonces/particulier/description.bbay') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbaz') }}">{{ __('myhouse/back/annonces/particulier/description.bbaz') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbba') }}">{{ __('myhouse/back/annonces/particulier/description.bbba') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbb') }}">{{ __('myhouse/back/annonces/particulier/description.bbbb') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbc') }}">{{ __('myhouse/back/annonces/particulier/description.bbbc') }}</option>
</select>

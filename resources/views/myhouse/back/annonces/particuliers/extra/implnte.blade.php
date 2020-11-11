<select name="zone_implante" id="" class="form-control yt-select" style="font-size: 14px">

    @if($particulier->zone_implante != "")
        <option hidden selected value="{{ $particulier->zone_implante }}">{{ $particulier->zone_implante }}</option>
    @endif

                            @if(old('zone_implante'))
                            <option hidden selected value="{{ old('zone_implante') }}">{{ old('zone_implante') }}</option>
                        @endif

    <option value="{{ __('myhouse/back/annonces/particulier/description.ccbn') }}">{{ __('myhouse/back/annonces/particulier/description.ccbn') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.ccbaam') }}">{{ __('myhouse/back/annonces/particulier/description.ccbaam') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.ccbaan') }}">{{ __('myhouse/back/annonces/particulier/description.ccbaan') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.ccbaao') }}">{{ __('myhouse/back/annonces/particulier/description.ccbaao') }}</option>
</select>

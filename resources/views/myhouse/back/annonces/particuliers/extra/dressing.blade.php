<select name="dressings" id="" class="form-control yt-select" style="max-width: 234px !important;">


        @if($particulier->dressings != "")
            <option hidden selected value="{{ $particulier->dressings }}">{{ $particulier->dressings }}</option>
        @endif

                        @if(old('dressings'))
                            <option hidden selected value="{{ old('dressings') }}">{{ old('dressings') }}</option>
                        @endif


    <option value="{{ __('myhouse/back/annonces/particulier/description.xa') }}">{{ __('myhouse/back/annonces/particulier/description.xa') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.xb') }}">{{ __('myhouse/back/annonces/particulier/description.xb') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.xc') }}">{{ __('myhouse/back/annonces/particulier/description.xc') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.xd') }}">{{ __('myhouse/back/annonces/particulier/description.xd') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.xe') }}">{{ __('myhouse/back/annonces/particulier/description.xe') }}</option>
</select>

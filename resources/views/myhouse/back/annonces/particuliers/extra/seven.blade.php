<select name="sous_sol" id="" class="form-control yt-select">

        @if($particulier->sous_sol != "")
            <option hidden selected value="{{ $particulier->sous_sol }}">{{ $particulier->sous_sol }}</option>
        @endif

                        @if(old('sous_sol'))
                            <option hidden selected value="{{ old('sous_sol') }}">{{ old('sous_sol') }}</option>
                        @endif

    <option value="{{ __('myhouse/back/annonces/particulier/description.abas') }}">{{ __('myhouse/back/annonces/particulier/description.abas') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abat') }}">{{ __('myhouse/back/annonces/particulier/description.abat') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abau') }}">{{ __('myhouse/back/annonces/particulier/description.abau') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abav') }}">{{ __('myhouse/back/annonces/particulier/description.abav') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abaw') }}">{{ __('myhouse/back/annonces/particulier/description.abaw') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abax') }}">{{ __('myhouse/back/annonces/particulier/description.abax') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abay') }}">{{ __('myhouse/back/annonces/particulier/description.abay') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.abaz') }}">{{ __('myhouse/back/annonces/particulier/description.abaz') }}</option>
</select>

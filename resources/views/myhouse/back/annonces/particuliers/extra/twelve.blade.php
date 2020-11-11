<select name="nombre_piece" id="" class="form-control yt-selects">


        @if($particulier->nombre_piece != "")
            <option hidden selected value="{{ $particulier->nombre_piece }}">{{ $particulier->nombre_piece }}</option>
        @endif

                        @if(old('nombre_piece'))
                            <option hidden selected value="{{ old('nombre_piece') }}">{{ old('nombre_piece') }}</option>
                        @endif

    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbe') }}">{{ __('myhouse/back/annonces/particulier/description.bbbe') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbf') }}">{{ __('myhouse/back/annonces/particulier/description.bbbf') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbg') }}">{{ __('myhouse/back/annonces/particulier/description.bbbg') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbh') }}">{{ __('myhouse/back/annonces/particulier/description.bbbh') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbi') }}">{{ __('myhouse/back/annonces/particulier/description.bbbi') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbj') }}">{{ __('myhouse/back/annonces/particulier/description.bbbj') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbk') }}">{{ __('myhouse/back/annonces/particulier/description.bbbk') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbl') }}">{{ __('myhouse/back/annonces/particulier/description.bbbl') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbm') }}">{{ __('myhouse/back/annonces/particulier/description.bbbm') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbn') }}">{{ __('myhouse/back/annonces/particulier/description.bbbn') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbo') }}">{{ __('myhouse/back/annonces/particulier/description.bbbo') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbp') }}">{{ __('myhouse/back/annonces/particulier/description.bbbp') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbq') }}">{{ __('myhouse/back/annonces/particulier/description.bbbq') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbr') }}">{{ __('myhouse/back/annonces/particulier/description.bbbr') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbs') }}">{{ __('myhouse/back/annonces/particulier/description.bbbs') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bbbt') }}">{{ __('myhouse/back/annonces/particulier/description.bbbt') }}</option>
</select>

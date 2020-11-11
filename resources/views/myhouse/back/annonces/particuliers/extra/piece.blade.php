<select name="nombre_piece" id="" class="form-control yt-select">

        @if($particulier->nombre_piece != "")
            <option hidden selected value="{{ $particulier->nombre_piece }}">{{ $particulier->nombre_piece }}</option>
        @endif


                        @if(old('nombre_piece'))
                            <option hidden selected value="{{ old('nombre_piece') }}">{{ old('nombre_piece') }}</option>
                        @endif

    <option value="{{ __('myhouse/back/annonces/particulier/description.acbdp') }}">{{ __('myhouse/back/annonces/particulier/description.acbdp') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.bcbdp') }}">{{ __('myhouse/back/annonces/particulier/description.bcbdp') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.lcbdp') }}">{{ __('myhouse/back/annonces/particulier/description.lcbdp') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.dcbdp') }}">{{ __('myhouse/back/annonces/particulier/description.dcbdp') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.ecbdp') }}">{{ __('myhouse/back/annonces/particulier/description.ecbdp') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.fcbdp') }}">{{ __('myhouse/back/annonces/particulier/description.fcbdp') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.gcbdp') }}">{{ __('myhouse/back/annonces/particulier/description.gcbdp') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.hcbdp') }}">{{ __('myhouse/back/annonces/particulier/description.hcbdp') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.icbdp') }}">{{ __('myhouse/back/annonces/particulier/description.icbdp') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.jcbdp') }}">{{ __('myhouse/back/annonces/particulier/description.jcbdp') }}</option>
    <option value="{{ __('myhouse/back/annonces/particulier/description.kcbdp') }}">{{ __('myhouse/back/annonces/particulier/description.kcbdp') }}</option>
</select>

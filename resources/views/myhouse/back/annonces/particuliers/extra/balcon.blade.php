@if(request()->get('type') === 'bureau' || request()->get('type') === 'plateau')
    <select name="balcons" id="" class="form-control yt-select" style="max-width: 234px !important;">
        @if($particulier->balcons != "")
            <option hidden selected value="{{ $particulier->balcons }}">{{ $particulier->balcons }}</option>
        @endif


                        @if(old('balcons'))
                            <option hidden selected value="{{ old('balcons') }}">{{ old('balcons') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.ceark') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceark') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearl') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearl') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearm') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearm') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearn') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearo') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearo') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearp') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearp') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearq') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearq') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearr') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearr') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cears') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cears') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceart') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceart') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.eeasn') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.eeasn') }}</option>
    </select>

@elseif(request()->get('type') === 'appartement')
    <select name="balcons" id="" class="form-control yt-select" style="max-width: 234px !important;">
        @if($particulier->balcons != "")
            <option hidden selected value="{{ $particulier->balcons }}">{{ $particulier->balcons }}</option>
        @endif


                        @if(old('balcons'))
                            <option hidden selected value="{{ old('balcons') }}">{{ old('balcons') }}</option>
                        @endif


        <option value="{{ __('myhouse/back/annonces/particulier/description.ceark') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceark') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearl') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearl') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearm') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearm') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearn') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearo') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearo') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearp') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearp') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearq') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearq') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearr') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearr') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cears') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cears') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceart') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceart') }}</option>

        <!-- <option value="{{ __('myhouse/back/annonces/particulier/description.eeasn') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.eeasn') }}</option> -->
    </select>
@else
    <select name="balcons" id="" class="form-control yt-select" style="max-width: 234px !important;">
        @if($particulier->balcons != "")
            <option hidden selected value="{{ $particulier->balcons }}">{{ $particulier->balcons }}</option>
        @endif

                        @if(old('balcons'))
                            <option hidden selected value="{{ old('balcons') }}">{{ old('balcons') }}</option>
                        @endif


        <option value="{{ __('myhouse/back/annonces/particulier/description.ceark') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceark') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearl') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearl') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearm') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearm') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearn') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearo') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearo') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearp') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearp') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearq') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearq') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearr') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearr') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cears') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cears') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceart') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceart') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearu') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearu') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearv') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearv') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearw') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearw') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearx') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearx') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceary') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceary') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.cearz') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.cearz') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.ceask') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceask') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceasl') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceasl') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceasm') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceasm') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceasn') }}">&nbsp;{{ __('myhouse/back/annonces/particulier/description.ceasn') }}</option>
    </select>
@endif

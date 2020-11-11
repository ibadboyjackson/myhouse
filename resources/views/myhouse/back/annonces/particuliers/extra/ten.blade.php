@if(request()->get('type') === 'bureau')
    <select name="appart_etage" id="" class="form-control yt-select" style="max-width: 234px !important;">
        
        @if($particulier->appart_etage != "")
            <option hidden selected value="{{ $particulier->appart_etage }}">{{ $particulier->appart_etage }}</option>
        @endif

                        @if(old('appart_etage'))
                            <option hidden selected value="{{ old('appart_etage') }}">{{ old('appart_etage') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.aaam') }}">{{ __('myhouse/back/annonces/particulier/description.aaam') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaan') }}">{{ __('myhouse/back/annonces/particulier/description.aaan') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaao') }}">{{ __('myhouse/back/annonces/particulier/description.aaao') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaap') }}">{{ __('myhouse/back/annonces/particulier/description.aaap') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaaq') }}">{{ __('myhouse/back/annonces/particulier/description.aaaq') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaar') }}">{{ __('myhouse/back/annonces/particulier/description.aaar') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaas') }}">{{ __('myhouse/back/annonces/particulier/description.aaas') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaat') }}">{{ __('myhouse/back/annonces/particulier/description.aaat') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaau') }}">{{ __('myhouse/back/annonces/particulier/description.aaau') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaav') }}">{{ __('myhouse/back/annonces/particulier/description.aaav') }}</option>
    </select>
@else
    <select name="appart_etage" id="" class="form-control yt-select">
               @if($particulier->appart_etage != "")
            <option hidden selected value="{{ $particulier->appart_etage }}">{{ $particulier->appart_etage }}</option>
        @endif

                        @if(old('appart_etage'))
                            <option hidden selected value="{{ old('appart_etage') }}">{{ old('appart_etage') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.aaam') }}">{{ __('myhouse/back/annonces/particulier/description.aaam') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaan') }}">{{ __('myhouse/back/annonces/particulier/description.aaan') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaao') }}">{{ __('myhouse/back/annonces/particulier/description.aaao') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaap') }}">{{ __('myhouse/back/annonces/particulier/description.aaap') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaaq') }}">{{ __('myhouse/back/annonces/particulier/description.aaaq') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaar') }}">{{ __('myhouse/back/annonces/particulier/description.aaar') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaas') }}">{{ __('myhouse/back/annonces/particulier/description.aaas') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaat') }}">{{ __('myhouse/back/annonces/particulier/description.aaat') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaau') }}">{{ __('myhouse/back/annonces/particulier/description.aaau') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaav') }}">{{ __('myhouse/back/annonces/particulier/description.aaav') }}</option>
    </select>

@endif

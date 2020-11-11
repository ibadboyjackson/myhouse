@if(request()->get('type') === 'appartement')
    <select name="place_vehicule" id="" class="form-control yt-select" style="max-width: 234px !important;">
        
        @if($particulier->sous_sol != "")
            <option hidden selected value="{{ $particulier->place_vehicule }}">{{ $particulier->place_vehicule }}</option>
        @endif

                        @if(old('sous_sol'))
                            <option hidden selected value="{{ old('sous_sol') }}">{{ old('sous_sol') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.aab') }}">{{ __('myhouse/back/annonces/particulier/description.aab') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abam') }}">{{ __('myhouse/back/annonces/particulier/description.abam') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aban') }}">{{ __('myhouse/back/annonces/particulier/description.aban') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abao') }}">{{ __('myhouse/back/annonces/particulier/description.abao') }}</option>
>
    </select>
@elseif(request()->get('type') === 'bureau')
    <select name="place_vehicule" id="" class="form-control yt-select" style="max-width: 234px !important;">
               @if($particulier->place_vehicule != "")
            <option hidden selected value="{{ $particulier->place_vehicule }}">{{ $particulier->place_vehicule }}</option>
        @endif

                                @if(old('place_vehicule'))
                            <option hidden selected value="{{ old('place_vehicule') }}">{{ old('place_vehicule') }}</option>
                        @endif


        <option value="{{ __('myhouse/back/annonces/particulier/description.aab') }}">{{ __('myhouse/back/annonces/particulier/description.aab') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abam') }}">{{ __('myhouse/back/annonces/particulier/description.abam') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aban') }}">{{ __('myhouse/back/annonces/particulier/description.aban') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abao') }}">{{ __('myhouse/back/annonces/particulier/description.abao') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abap') }}">{{ __('myhouse/back/annonces/particulier/description.abap') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abaq') }}">{{ __('myhouse/back/annonces/particulier/description.abaq') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abar') }}">{{ __('myhouse/back/annonces/particulier/description.abar') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.aeasn') }}">{{ __('myhouse/back/annonces/particulier/description.aeasn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.beasn') }}">{{ __('myhouse/back/annonces/particulier/description.beasn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceaen') }}">{{ __('myhouse/back/annonces/particulier/description.ceaen') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.deasn') }}">{{ __('myhouse/back/annonces/particulier/description.deasn') }}</option>
    </select>
@elseif(request()->get('type') === 'plateau')
    <select name="place_vehicule" id="" class="form-control yt-select" style="max-width: 234px !important;">
                @if($particulier->place_vehicule != "")
            <option hidden selected value="{{ $particulier->place_vehicule }}">{{ $particulier->place_vehicule }}</option>
        @endif

                                @if(old('place_vehicule'))
                            <option hidden selected value="{{ old('place_vehicule') }}">{{ old('place_vehicule') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.aab') }}">{{ __('myhouse/back/annonces/particulier/description.aab') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abam') }}">{{ __('myhouse/back/annonces/particulier/description.abam') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aban') }}">{{ __('myhouse/back/annonces/particulier/description.aban') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abao') }}">{{ __('myhouse/back/annonces/particulier/description.abao') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abap') }}">{{ __('myhouse/back/annonces/particulier/description.abap') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abaq') }}">{{ __('myhouse/back/annonces/particulier/description.abaq') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abar') }}">{{ __('myhouse/back/annonces/particulier/description.abar') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.aeasn') }}">{{ __('myhouse/back/annonces/particulier/description.aeasn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.beasn') }}">{{ __('myhouse/back/annonces/particulier/description.beasn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ceaen') }}">{{ __('myhouse/back/annonces/particulier/description.ceaen') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.deasa') }}">{{ __('myhouse/back/annonces/particulier/description.deasa') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.debsn') }}">{{ __('myhouse/back/annonces/particulier/description.debsn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.decsn') }}">{{ __('myhouse/back/annonces/particulier/description.decsn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.dedsn') }}">{{ __('myhouse/back/annonces/particulier/description.dedsn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.deesn') }}">{{ __('myhouse/back/annonces/particulier/description.deesn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.defsn') }}">{{ __('myhouse/back/annonces/particulier/description.defsn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.degsn') }}">{{ __('myhouse/back/annonces/particulier/description.degsn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.dehsn') }}">{{ __('myhouse/back/annonces/particulier/description.dehsn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.deisn') }}">{{ __('myhouse/back/annonces/particulier/description.deisn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.dejsn') }}">{{ __('myhouse/back/annonces/particulier/description.dejsn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.deksn') }}">{{ __('myhouse/back/annonces/particulier/description.deksn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.delsn') }}">{{ __('myhouse/back/annonces/particulier/description.delsn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.demsn') }}">{{ __('myhouse/back/annonces/particulier/description.demsn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.densn') }}">{{ __('myhouse/back/annonces/particulier/description.densn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.deosn') }}">{{ __('myhouse/back/annonces/particulier/description.deosn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.depsn') }}">{{ __('myhouse/back/annonces/particulier/description.depsn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.deqsn') }}">{{ __('myhouse/back/annonces/particulier/description.deqsn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.dersn') }}">{{ __('myhouse/back/annonces/particulier/description.dersn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.dessn') }}">{{ __('myhouse/back/annonces/particulier/description.dessn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.detsn') }}">{{ __('myhouse/back/annonces/particulier/description.detsn') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.deusn') }}">{{ __('myhouse/back/annonces/particulier/description.deusn') }}</option>
    </select>
@else
    <select name="place_vehicule" id="" class="form-control yt-select" style="max-width: 215px !important;">
               @if($particulier->sous_sol != "")
            <option hidden selected value="{{ $particulier->place_vehicule }}">{{ $particulier->place_vehicule }}</option>
        @endif

                                @if(old('place_vehicule'))
                            <option hidden selected value="{{ old('place_vehicule') }}">{{ old('place_vehicule') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.aab') }}">{{ __('myhouse/back/annonces/particulier/description.aab') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abam') }}">{{ __('myhouse/back/annonces/particulier/description.abam') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aban') }}">{{ __('myhouse/back/annonces/particulier/description.aban') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abao') }}">{{ __('myhouse/back/annonces/particulier/description.abao') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abap') }}">{{ __('myhouse/back/annonces/particulier/description.abap') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abaq') }}">{{ __('myhouse/back/annonces/particulier/description.abaq') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.abar') }}">{{ __('myhouse/back/annonces/particulier/description.abar') }}</option>
    </select>

@endif

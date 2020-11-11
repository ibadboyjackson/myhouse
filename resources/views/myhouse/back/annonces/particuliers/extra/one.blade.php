@if(request()->get('type') === 'bureau' || request()->get('type') === 'plateau')
    <select name="appart_type_un" id="" class="form-control yt-select Livraison immediate" style="max-width: 234px !important;">
           @if($particulier->appart_type_un != "")
                <option hidden selected value="{{ $particulier->appart_type_un }}">{{ $particulier->appart_type_un }}</option>
           @endif


                        @if(old('appart_type_un'))
                            <option hidden selected value="{{ old('appart_type_un') }}">{{ old('appart_type_un') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.bbv') }}">{{ __('myhouse/back/annonces/particulier/description.bbv') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bby') }}">{{ __('myhouse/back/annonces/particulier/description.bby') }}</option>



        @if ($particulier->locationActif == 0)
            <option value="{{ __('myhouse/back/annonces/particulier/description.bbw') }}">{{ __('myhouse/back/annonces/particulier/description.bbw') }}</option>
            <option value="{{ __('myhouse/back/annonces/particulier/description.bbx') }}">{{ __('myhouse/back/annonces/particulier/description.bbx') }}</option>
        @endif


    
    
    </select>
@else
    <select name="appart_type_un" id="" class="form-control yt-select Livraison immediate">
           @if($particulier->appart_type_un != "")
                <option hidden selected value="{{ $particulier->appart_type_un }}">{{ $particulier->appart_type_un }}</option>
           @endif

                        @if(old('appart_type_un'))
                            <option hidden selected value="{{ old('appart_type_un') }}">{{ old('appart_type_un') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.bbv') }}">{{ __('myhouse/back/annonces/particulier/description.bbv') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.bby') }}">{{ __('myhouse/back/annonces/particulier/description.bby') }}</option>

        @if ($particulier->locationActif == 0)
            <option value="{{ __('myhouse/back/annonces/particulier/description.bbw') }}">{{ __('myhouse/back/annonces/particulier/description.bbw') }}</option>
            <option value="{{ __('myhouse/back/annonces/particulier/description.bbx') }}">{{ __('myhouse/back/annonces/particulier/description.bbx') }}</option>
        @endif
    
    </select>
@endif

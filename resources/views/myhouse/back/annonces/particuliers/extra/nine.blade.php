@if(request()->get('type') === 'bureau' || request()->get('type') === 'plateau' )
    <select name="appart_etage_nombre" id="" class="form-control yt-select" style="max-width: 234px !important;">

           @if($particulier->appart_etage_nombre != "")
                <option hidden selected value="{{ $particulier->appart_etage_nombre }}">{{ $particulier->appart_etage_nombre }}</option>
           @endif

                        @if(old('appart_etage_nombre'))
                            <option hidden selected value="{{ old('appart_etage_nombre') }}">{{ old('appart_etage_nombre') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.aaab') }}">{{ __('myhouse/back/annonces/particulier/description.aaab') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaac') }}">{{ __('myhouse/back/annonces/particulier/description.aaac') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ag') }}">    {{ __('myhouse/back/annonces/particulier/description.ag') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.aaae') }}">{{ __('myhouse/back/annonces/particulier/description.aaae') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaaf') }}">{{ __('myhouse/back/annonces/particulier/description.aaaf') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaag') }}">{{ __('myhouse/back/annonces/particulier/description.aaag') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaah') }}">{{ __('myhouse/back/annonces/particulier/description.aaah') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaai') }}">{{ __('myhouse/back/annonces/particulier/description.aaai') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaaj') }}">{{ __('myhouse/back/annonces/particulier/description.aaaj') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaak') }}">{{ __('myhouse/back/annonces/particulier/description.aaak') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaal') }}">{{ __('myhouse/back/annonces/particulier/description.aaal') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.iaal') }}">{{ __('myhouse/back/annonces/particulier/description.iaal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.haal') }}">{{ __('myhouse/back/annonces/particulier/description.haal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.oaal') }}">{{ __('myhouse/back/annonces/particulier/description.oaal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.yaal') }}">{{ __('myhouse/back/annonces/particulier/description.yaal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.daal') }}">{{ __('myhouse/back/annonces/particulier/description.daal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaal') }}">{{ __('myhouse/back/annonces/particulier/description.saal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaal') }}">{{ __('myhouse/back/annonces/particulier/description.zaal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaal') }}">{{ __('myhouse/back/annonces/particulier/description.faal') }}</option>



        <option value="{{ __('myhouse/back/annonces/particulier/description.uaal') }}">{{ __('myhouse/back/annonces/particulier/description.uaal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.taal') }}">{{ __('myhouse/back/annonces/particulier/description.taal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.afal') }}">{{ __('myhouse/back/annonces/particulier/description.afal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.axal') }}">{{ __('myhouse/back/annonces/particulier/description.axal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.awal') }}">{{ __('myhouse/back/annonces/particulier/description.awal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.adal') }}">{{ __('myhouse/back/annonces/particulier/description.adal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aral') }}">{{ __('myhouse/back/annonces/particulier/description.aral') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.asal') }}">{{ __('myhouse/back/annonces/particulier/description.asal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.agal') }}">{{ __('myhouse/back/annonces/particulier/description.agal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aqal') }}">{{ __('myhouse/back/annonces/particulier/description.aqal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aval') }}">{{ __('myhouse/back/annonces/particulier/description.aval') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aeal') }}">{{ __('myhouse/back/annonces/particulier/description.aeal') }}</option>
    </select>

@else
    <select name="appart_etage_nombre" id="" class="form-control yt-select">
             @if($particulier->appart_etage_nombre != "")
                <option hidden selected value="{{ $particulier->appart_etage_nombre }}">{{ $particulier->appart_etage_nombre }}</option>
           @endif


                        @if(old('appart_etage_nombre'))
                            <option hidden selected value="{{ old('appart_etage_nombre') }}">{{ old('appart_etage_nombre') }}</option>
                        @endif        
    


        <option value="{{ __('myhouse/back/annonces/particulier/description.aaab') }}">{{ __('myhouse/back/annonces/particulier/description.aaab') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaac') }}">{{ __('myhouse/back/annonces/particulier/description.aaac') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ag') }}">{{ __('myhouse/back/annonces/particulier/description.ag') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.aaae') }}">{{ __('myhouse/back/annonces/particulier/description.aaae') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaaf') }}">{{ __('myhouse/back/annonces/particulier/description.aaaf') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaag') }}">{{ __('myhouse/back/annonces/particulier/description.aaag') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaah') }}">{{ __('myhouse/back/annonces/particulier/description.aaah') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaai') }}">{{ __('myhouse/back/annonces/particulier/description.aaai') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaaj') }}">{{ __('myhouse/back/annonces/particulier/description.aaaj') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaak') }}">{{ __('myhouse/back/annonces/particulier/description.aaak') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaal') }}">{{ __('myhouse/back/annonces/particulier/description.aaal') }}</option>


        <option value="{{ __('myhouse/back/annonces/particulier/description.iaal') }}">{{ __('myhouse/back/annonces/particulier/description.iaal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.haal') }}">{{ __('myhouse/back/annonces/particulier/description.haal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.oaal') }}">{{ __('myhouse/back/annonces/particulier/description.oaal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.yaal') }}">{{ __('myhouse/back/annonces/particulier/description.yaal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.daal') }}">{{ __('myhouse/back/annonces/particulier/description.daal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaal') }}">{{ __('myhouse/back/annonces/particulier/description.saal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaal') }}">{{ __('myhouse/back/annonces/particulier/description.zaal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaal') }}">{{ __('myhouse/back/annonces/particulier/description.faal') }}</option>



        <option value="{{ __('myhouse/back/annonces/particulier/description.uaal') }}">{{ __('myhouse/back/annonces/particulier/description.uaal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.taal') }}">{{ __('myhouse/back/annonces/particulier/description.taal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.afal') }}">{{ __('myhouse/back/annonces/particulier/description.afal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.axal') }}">{{ __('myhouse/back/annonces/particulier/description.axal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.awal') }}">{{ __('myhouse/back/annonces/particulier/description.awal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.adal') }}">{{ __('myhouse/back/annonces/particulier/description.adal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aral') }}">{{ __('myhouse/back/annonces/particulier/description.aral') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.asal') }}">{{ __('myhouse/back/annonces/particulier/description.asal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.agal') }}">{{ __('myhouse/back/annonces/particulier/description.agal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aqal') }}">{{ __('myhouse/back/annonces/particulier/description.aqal') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aval') }}">{{ __('myhouse/back/annonces/particulier/description.aval') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aeal') }}">{{ __('myhouse/back/annonces/particulier/description.aeal') }}</option>

    </select>

@endif

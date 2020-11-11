@if(request()->get('type') === 'appartement' || request()->get('type') === 'plateau')
    <select name="appart_etage_immeuble" id="" class="form-control yt-select" style="max-width: 234px !important;">
        
    @if($particulier->appart_etage_immeuble != "")
        <option hidden selected value="{{ $particulier->appart_etage_immeuble }}">{{ $particulier->appart_etage_immeuble }}</option> 
    @endif

                        @if(old('appart_etage_immeuble'))
                            <option hidden selected value="{{ old('appart_etage_immeuble') }}">{{ old('appart_etage_immeuble') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.aaax') }}">{{ __('myhouse/back/annonces/particulier/description.aagf') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaax') }}">{{ __('myhouse/back/annonces/particulier/description.aaax') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaay') }}">{{ __('myhouse/back/annonces/particulier/description.aaay') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaaz') }}">{{ __('myhouse/back/annonces/particulier/description.aaaz') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaba') }}">{{ __('myhouse/back/annonces/particulier/description.aaba') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabb') }}">{{ __('myhouse/back/annonces/particulier/description.aabb') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ai') }}">{{ __('myhouse/back/annonces/particulier/description.ai') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.aabd') }}">{{ __('myhouse/back/annonces/particulier/description.aabd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabe') }}">{{ __('myhouse/back/annonces/particulier/description.aabe') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabf') }}">{{ __('myhouse/back/annonces/particulier/description.aabf') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabg') }}">{{ __('myhouse/back/annonces/particulier/description.aabg') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabh') }}">{{ __('myhouse/back/annonces/particulier/description.aabh') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabi') }}">{{ __('myhouse/back/annonces/particulier/description.aabi') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabj') }}">{{ __('myhouse/back/annonces/particulier/description.aabj') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabk') }}">{{ __('myhouse/back/annonces/particulier/description.aabk') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabl') }}">{{ __('myhouse/back/annonces/particulier/description.aabl') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabm') }}">{{ __('myhouse/back/annonces/particulier/description.aabm') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.fd') }}">{{ __('myhouse/back/annonces/particulier/description.fd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.fdd') }}">{{ __('myhouse/back/annonces/particulier/description.fdd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ahhg') }}">{{ __('myhouse/back/annonces/particulier/description.ahhg') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.dz') }}">{{ __('myhouse/back/annonces/particulier/description.dz') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.zd') }}">{{ __('myhouse/back/annonces/particulier/description.zd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.rc') }}">{{ __('myhouse/back/annonces/particulier/description.rc') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.zdd') }}">{{ __('myhouse/back/annonces/particulier/description.zdd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.dzdzd') }}">{{ __('myhouse/back/annonces/particulier/description.dzdzd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.dzd') }}">{{ __('myhouse/back/annonces/particulier/description.dzd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.zdz') }}">{{ __('myhouse/back/annonces/particulier/description.zdz') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.zdzd') }}">{{ __('myhouse/back/annonces/particulier/description.zdzd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.qx') }}">{{ __('myhouse/back/annonces/particulier/description.qx') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.qxd') }}">{{ __('myhouse/back/annonces/particulier/description.qxd') }}</option>
    </select>
@else
    <select name="appart_etage_immeuble" id="" class="form-control yt-select">
     @if($particulier->appart_etage_immeuble != "")
        <option hidden selected value="{{ $particulier->appart_etage_immeuble }}">{{ $particulier->appart_etage_immeuble }}</option>
     @endif

                        @if(old('appart_etage_immeuble'))
                            <option hidden selected value="{{ old('appart_etage_immeuble') }}">{{ old('appart_etage_immeuble') }}</option>
                        @endif

        <option value="{{ __('myhouse/back/annonces/particulier/description.aaax') }}">{{ __('myhouse/back/annonces/particulier/description.aagf') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaax') }}">{{ __('myhouse/back/annonces/particulier/description.aaax') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaay') }}">{{ __('myhouse/back/annonces/particulier/description.aaay') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaaz') }}">{{ __('myhouse/back/annonces/particulier/description.aaaz') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aaba') }}">{{ __('myhouse/back/annonces/particulier/description.aaba') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabb') }}">{{ __('myhouse/back/annonces/particulier/description.aabb') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ai') }}">{{ __('myhouse/back/annonces/particulier/description.ai') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabd') }}">{{ __('myhouse/back/annonces/particulier/description.aabd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabe') }}">{{ __('myhouse/back/annonces/particulier/description.aabe') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabf') }}">{{ __('myhouse/back/annonces/particulier/description.aabf') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabg') }}">{{ __('myhouse/back/annonces/particulier/description.aabg') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabh') }}">{{ __('myhouse/back/annonces/particulier/description.aabh') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabi') }}">{{ __('myhouse/back/annonces/particulier/description.aabi') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabj') }}">{{ __('myhouse/back/annonces/particulier/description.aabj') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabk') }}">{{ __('myhouse/back/annonces/particulier/description.aabk') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabl') }}">{{ __('myhouse/back/annonces/particulier/description.aabl') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.aabm') }}">{{ __('myhouse/back/annonces/particulier/description.aabm') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.fd') }}">{{ __('myhouse/back/annonces/particulier/description.fd') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.fdd') }}">{{ __('myhouse/back/annonces/particulier/description.fdd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.ahhg') }}">{{ __('myhouse/back/annonces/particulier/description.ahhg') }}</option>

        <option value="{{ __('myhouse/back/annonces/particulier/description.dz') }}">{{ __('myhouse/back/annonces/particulier/description.dz') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.zd') }}">{{ __('myhouse/back/annonces/particulier/description.zd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.rc') }}">{{ __('myhouse/back/annonces/particulier/description.rc') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.zdd') }}">{{ __('myhouse/back/annonces/particulier/description.zdd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.dzdzd') }}">{{ __('myhouse/back/annonces/particulier/description.dzdzd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.dzd') }}">{{ __('myhouse/back/annonces/particulier/description.dzd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.zdz') }}">{{ __('myhouse/back/annonces/particulier/description.zdz') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.zdzd') }}">{{ __('myhouse/back/annonces/particulier/description.zdzd') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.qx') }}">{{ __('myhouse/back/annonces/particulier/description.qx') }}</option>
        <option value="{{ __('myhouse/back/annonces/particulier/description.qxd') }}">{{ __('myhouse/back/annonces/particulier/description.qxd') }}</option>
    </select>
@endif

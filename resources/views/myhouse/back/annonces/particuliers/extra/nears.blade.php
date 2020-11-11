<div class="ca-page-item-second-body-card-item-heads">
    <div class="ca-page-item-second-body-card-item-head-img">
        <img src="http://31.220.62.192/images/residential/ip.svg" alt="" height="50" width="50">
    </div>
    <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cbbw') }}</div>
</div>
<div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.cbbx') }}
            </div>

            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: -7px;">
                <input type="checkbox" name="mvoix" id="#" class="ios" value="1" {{ $particulier->mvoix != 0 ? 'checked' : '' }}  {{ old('voix') != null ? 'checked' : '' }}>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-input">
                <select name="voie" id="" class="form-control yt-select">

                        @if($particulier->voie != "")
                            <option hidden selected value="{{ $particulier->voie }}">{{ $particulier->voie }}</option>
                        @endif

                        @if(old('voie'))
                            <option hidden selected value="{{ old('voie') }}">{{ old('voie') }}</option>
                        @endif

                    @include('myhouse.back.annonces.particuliers.extra.meter')
                </select> 
            </div>
        </div>
    </div>


    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.cbby') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 47px;">
                <input type="checkbox" name="mplage" id="#" class="ios" value="1" {{ $particulier->mplage != 0 ? 'checked' : '' }}  {{ old('mplage') != null ? 'checked' : '' }}>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-input">
                <select name="plage" id="" class="form-control yt-select">
                   
                        @if($particulier->plage != "")
                            <option hidden selected value="{{ $particulier->plage }}">{{ $particulier->plage }}</option>
                        @endif


                        @if(old('plage'))
                            <option hidden selected value="{{ old('plage') }}">{{ old('plage') }}</option>
                        @endif


                    @include('myhouse.back.annonces.particuliers.extra.meter')
                </select>
            </div>
        </div>
    </div>

    

    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.cbbz') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 13px;">
                <input type="checkbox" name="mcampagne" id="#" class="ios" value="1" {{ $particulier->mcampagne != 0 ? 'checked' : '' }}  {{ old('mcampagne') != null ? 'checked' : '' }}>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-input">
                <select name="campagne" id="" class="form-control yt-select">
                      @if($particulier->campagne != "")
                            <option hidden selected value="{{ $particulier->campagne }}">{{ $particulier->campagne }}</option>
                      @endif

                      @if(old('campagne'))
                         <option hidden selected value="{{ old('campagne') }}">{{ old('campagne') }}</option>
                      @endif

                    @include('myhouse.back.annonces.particuliers.extra.meter')
                </select>
            </div>
        </div>
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.ccaa') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 20px;">
                <input type="checkbox" name="mmontagne" id="#" class="ios" value="1" {{ $particulier->mmontagne != 0 ? 'checked' : '' }}  {{ old('mmontagne') != null ? 'checked' : '' }}>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-input">
                <select name="montagne" id="" class="form-control yt-select">
                   
                        @if($particulier->montagne != "")
                            <option hidden selected value="{{ $particulier->montagne }}">{{ $particulier->montagne }}</option>
                        @endif

                         @if(old('montagne'))
                         <option hidden selected value="{{ old('montagne') }}">{{ old('montagne') }}</option>
                      @endif

                    @include('myhouse.back.annonces.particuliers.extra.meter')
                </select>
            </div>
        </div>
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.ccab') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 46px;">
                <input type="checkbox" name="mdesert" id="#" class="ios" value="1" {{ $particulier->mdesert != 0 ? 'checked' : '' }}  {{ old('mdesert') != null ? 'checked' : '' }}>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-input">
                <select name="desert" id="" class="form-control yt-select">
                       @if($particulier->desert != "")
                            <option hidden selected value="{{ $particulier->desert }}">{{ $particulier->desert }}</option>                       
                        @endif

                         @if(old('desert'))
                         <option hidden selected value="{{ old('desert') }}">{{ old('desert') }}</option>
                      @endif

                    @include('myhouse.back.annonces.particuliers.extra.meter')
                </select>
            </div>
        </div>
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.ccac') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 59px;">
                <input type="checkbox" name="mforet" id="#" class="ios" value="1" {{ $particulier->mforet != 0 ? 'checked' : '' }}  {{ old('mforet') != null ? 'checked' : '' }}>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-input">
                <select name="foret" id="" class="form-control yt-select">
                        @if($particulier->foret != "")
                            <option hidden selected value="{{ $particulier->foret }}">{{ $particulier->foret }}</option> 
                        @endif

                         @if(old('foret'))
                         <option hidden selected value="{{ old('foret') }}">{{ old('foret') }}</option>
                      @endif

                    @include('myhouse.back.annonces.particuliers.extra.meter')
                </select>
            </div>
        </div>
    </div>

    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.ccad') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 34px;">
                <input type="checkbox" name="mspot_surf" id="#" class="ios" value="1" {{ $particulier->mspot_surf != 0 ? 'checked' : '' }}  {{ old('mspot_surf') != null ? 'checked' : '' }}>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-input">
                <select name="spot_surf" id="" class="form-control yt-select">

                        @if($particulier->spot_surf != "")
                            <option hidden selected value="{{ $particulier->spot_surf }}">{{ $particulier->spot_surf }}</option>                     
                        @endif

                         @if(old('spot_surf'))
                         <option hidden selected value="{{ old('spot_surf') }}">{{ old('spot_surf') }}</option>
                      @endif

                    @include('myhouse.back.annonces.particuliers.extra.meter')
                </select>
            </div>
        </div>
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.ccae') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 70px;">
                <input type="checkbox" name="mgolf" id="#" class="ios" value="1" {{ $particulier->mgolf != 0 ? 'checked' : '' }}  {{ old('mgolf') != null ? 'checked' : '' }}>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-input">
                <select name="golf" id="" class="form-control yt-select">

                    @if($particulier->golf != "")
                        <option hidden selected value="{{ $particulier->golf }}">{{ $particulier->golf }}</option>
                    @endif

                     @if(old('golf'))
                         <option hidden selected value="{{ old('golf') }}">{{ old('golf') }}</option>
                      @endif

                    @include('myhouse.back.annonces.particuliers.extra.meter')
                </select>
            </div>
        </div>
    </div>

    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.ccaf') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 27px;">
                <input type="checkbox" name="mstation_ski" id="#" class="ios" value="1" {{ $particulier->mstation_ski != 0 ? 'checked' : '' }}  {{ old('mstation_ski') != null ? 'checked' : '' }}>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-input">
                <select name="station_ski" id="" class="form-control yt-select">
              
                   @if($particulier->station_ski != "")
                        <option hidden selected value="{{ $particulier->station_ski }}">{{ $particulier->station_ski }}</option> 
                   @endif

                    @if(old('station_ski'))
                         <option hidden selected value="{{ old('station_ski') }}">{{ old('station_ski') }}</option>
                      @endif

                    @include('myhouse.back.annonces.particuliers.extra.meter')
                </select>
            </div>
        </div>
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.ccag') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 7px;">
                <input type="checkbox" name="mriviere" id="#" class="ios" value="1" {{ $particulier->mriviere != 0 ? 'checked' : '' }}  {{ old('mriviere') != null ? 'checked' : '' }}>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-input">
                <select name="riviere" id="" class="form-control yt-select">

                   @if($particulier->riviere != "")
                     <option hidden selected value="{{ $particulier->riviere }}">{{ $particulier->riviere }}</option>   
                   @endif

                    @if(old('riviere'))
                         <option hidden selected value="{{ old('riviere') }}">{{ old('riviere') }}</option>
                      @endif

                    @include('myhouse.back.annonces.particuliers.extra.meter')
                </select>
            </div>
        </div>
    </div>


</div>

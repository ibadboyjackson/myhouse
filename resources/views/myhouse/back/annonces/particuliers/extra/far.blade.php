@if(request()->get('type') === 'industriel')
    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt beta">

        @include('myhouse.back.annonces.particuliers.extra.nears')

    </div>
@else
    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt beta">

        <div class="ca-page-item-second-body-card-item-heads">
            <div class="ca-page-item-second-body-card-item-head-img">
                <img src="http://31.220.62.192//images/residential/ip.svg" alt="" height="50" width="50">
            </div>
            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cbbb') }}</div>
        </div>

        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-box">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.cbbc') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 1px;">
                        <input type="checkbox" name="voide" id="#" class="ios" value="1">
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                        <select name="voie" id="" class="form-control yt-select">
                             @include('myhouse.back.annonces.particuliers.extra.meter')
                            <option hidden selected value="{{ $particulier->voie }}">{{ $particulier->voie }}</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-box">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.cbbd') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 57px;">
                        <input type="checkbox" name="pladge" id="#" class="ios" value="1">
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                        <select name="plage" id="" class="form-control yt-select">
                            <option hidden selected value="{{ $particulier->plage }}">{{ $particulier->plage }}</option>

                            @include('myhouse.back.annonces.particuliers.extra.meter')
                        </select>
                    </div>
                </div>
            </div>

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-box">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.cbbe') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 20px;">
                        <input type="checkbox" name="campdagne" id="#" class="ios" value="1">
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                        <select name="campagne" id="" class="form-control yt-select">
                            <option hidden selected value="{{ $particulier->campagne }}">{{ $particulier->campagne }}</option>

                            @include('myhouse.back.annonces.particuliers.extra.meter')
                        </select>
                    </div>
                </div>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-box">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.cbbf') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 29px;">
                        <input type="checkbox" name="mondtagne" id="#" class="ios" value="1">
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                        <select name="montagne" id="" class="form-control yt-select">
                            <option hidden selected value="{{ $particulier->montagne }}">{{ $particulier->montagne }}</option>

                            @include('myhouse.back.annonces.particuliers.extra.meter')
                        </select>
                    </div>
                </div>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-box">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.cbbg') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 54px;">
                        <input type="checkbox" name="dedsert" id="#" class="ios" value="1">
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                        <select name="desert" id="" class="form-control yt-select">
                            <option hidden selected value="{{ $particulier->desert }}">{{ $particulier->desert }}</option>

                            @include('myhouse.back.annonces.particuliers.extra.meter')
                        </select>
                    </div>
                </div>
            </div>
            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-box">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.cbbh') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 66px;">
                        <input type="checkbox" name="fordet" id="#" class="ios" value="1">
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                        <select name="foret" id="" class="form-control yt-select">
                        
                            <option hidden selected value="{{ $particulier->foret }}">{{ $particulier->foret }}</option>

                            @include('myhouse.back.annonces.particuliers.extra.meter')
                        </select>
                    </div>
                </div>
            </div>

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-box">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.cbbi') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" style="margin-left: 9px;">
                        <input type="checkbox" name="riviedre" id="#" class="ios" value="1">
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                        <select name="riviere" id="" class="form-control yt-select">
                            <option hidden selected value="{{ $particulier->riviere }}">{{ $particulier->riviere }}</option>

                            @include('myhouse.back.annonces.particuliers.extra.meter')
                        </select>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endif


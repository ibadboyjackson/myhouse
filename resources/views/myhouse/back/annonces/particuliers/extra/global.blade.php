<div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
    <div class="ca-page-item-second-body-card-item-head">
        <div class="ca-page-item-second-body-card-item-head-img">
            <img src="http://31.220.62.192//images/residential/single/gg2.svg" alt="">
        </div>
        <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cbas') }}</div>
    </div>
    <div class="ca-page-item-second-body-card-item-body">


        <div class="ca-page-item-second-body-card-item-body-item">
                <!-- Surface    -->

                <div class="ca-page-surface">
                    <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.cbat') }}</div>
                    <div class="ca-page-surface-input">
                        <div class="ca-page-surface-input-field">
                            <input type="text" value="{{ $particulier->superficie_terrain ?? old('superficie_terrain') }}" name="superficie_terrain" id="" class="form-control @error('superficie_terrain') man-red @enderror" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbaze') }}">
                        </div>
                        <div class="ca-page-surface-input-unit">m²</div>
                    </div>

                    @error('superficie_terrain') 
                        <span class="myhouse-invalid" role="alert" style="margin-left: 27px;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 

                </div>

                <!-- Surface    -->
        </div>


       <!-- <div class="ca-page-item-second-body-card-item-body-item">
            <select name="zone_implante" id="" class="form-control yt-select">
                <option value="{{ __('myhouse/back/annonces/particulier/description.cbau') }}">{{ __('myhouse/back/annonces/particulier/description.cbau') }}</option>
                <option value="{{ __('myhouse/back/annonces/particulier/description.cbau') }}">{{ __('myhouse/back/annonces/particulier/description.cbau') }}</option>
            </select>
        </div>
        <div class="ca-page-item-second-body-card-item-body-item">
            <select name="terrain_type" id="" class="form-control yt-select">
                <option value="{{ __('myhouse/back/annonces/particulier/description.cbav') }}">{{ __('myhouse/back/annonces/particulier/description.cbav') }}</option>
                <option value="{{ __('myhouse/back/annonces/particulier/description.cbav') }}">{{ __('myhouse/back/annonces/particulier/description.cbav') }}</option>
            </select>
        </div>-->

        <div class="ca-page-item-second-body-card-item-body-item">
            <div class="ca-page-item-second-body-card-item-body-item-box">
                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                    {{ __('myhouse/back/annonces/particulier/description.cbaw') }}
                </div>
                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                    <input type="checkbox" name="assainissement" id="#" class="ios" value="1" {{ $particulier->assainissement == 1 ? 'checked' : '' }} {{ old('assainissement') != null ? 'checked' : '' }}>
                </div>
            </div>
        </div>
        <div class="ca-page-item-second-body-card-item-body-item">
            <div class="ca-page-item-second-body-card-item-body-item-box">
                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                    {{ __('myhouse/back/annonces/particulier/description.cbax') }}
                </div>
                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                    <input type="checkbox" name="raccordement_eau" id="#" class="ios" value="1" {{ $particulier->raccordement_eau == 1 ? 'checked' : '' }} {{ old('raccordement_eau') != null ? 'checked' : '' }}> 
                </div>
            </div>
        </div>
        <div class="ca-page-item-second-body-card-item-body-item">
            <div class="ca-page-item-second-body-card-item-body-item-box">
                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                    {{ __('myhouse/back/annonces/particulier/description.x') }}
                </div>
                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                    <input type="checkbox" name="titre_foncier" id="#" class="ios" value="1" {{ $particulier->titre_foncier == 1 ? 'checked' : '' }} {{ old('titre_foncier') != null ? 'checked' : '' }}>
                </div>
            </div>
        </div>
        <div class="ca-page-item-second-body-card-item-body-item">
            <div class="ca-page-item-second-body-card-item-body-item-box">
                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                    {{ __('myhouse/back/annonces/particulier/description.cbay') }}
                </div>
                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                    <input type="checkbox" name="puits" id="#" class="ios" value="1" {{ $particulier->puits == 1 ? 'checked' : '' }} {{ old('puits') != null ? 'checked' : '' }}>
                </div>
            </div>
        </div>
        <div class="ca-page-item-second-body-card-item-body-item">
            <div class="ca-page-item-second-body-card-item-body-item-box">
                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                    {{ __('myhouse/back/annonces/particulier/description.cbaz') }}
                </div>
                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                    <input type="checkbox" name="raccordement_electricite" id="#" class="ios" value="1" {{ $particulier->raccordement_electricite == 1 ? 'checked' : '' }} {{ old('raccordement_electricite') != null ? 'checked' : '' }}>
                </div>
            </div>
        </div>
        <div class="ca-page-item-second-body-card-item-body-item">
            <div class="ca-page-item-second-body-card-item-body-item-box">
                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                    {{ __('myhouse/back/annonces/particulier/description.cbba') }}
                </div>
                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                    <input type="checkbox" name="raccordement_telephone" id="#" class="ios" value="1" {{ $particulier->raccordement_telephone == 1 ? 'checked' : '' }} {{ old('raccordement_telephone') != null ? 'checked' : '' }}> 
                </div>
            </div>
        </div>

    </div>
</div>

<div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
    <div class="ca-page-item-second-body-card-item-head">
        <div class="ca-page-item-second-body-card-item-head-img">
            <img src="http://31.220.62.192//images/residential/single/gg2.svg" alt="">
        </div>
        <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cbas') }}</div>
    </div>
    <div class="ca-page-item-second-body-card-item-body">




       <!-- <div class="ca-page-item-second-body-card-item-body-item">
            <select name="zone_implante" id="" class="form-control yt-select">
                <option value="{{ __('myhouse/back/annonces/professionnel/description.cbau') }}">{{ __('myhouse/back/annonces/professionnel/description.cbau') }}</option>
                <option value="{{ __('myhouse/back/annonces/professionnel/description.cbau') }}">{{ __('myhouse/back/annonces/professionnel/description.cbau') }}</option>
            </select>
        </div>
        <div class="ca-page-item-second-body-card-item-body-item">
            <select name="terrain_type" id="" class="form-control yt-select">
                <option value="{{ __('myhouse/back/annonces/professionnel/description.cbav') }}">{{ __('myhouse/back/annonces/professionnel/description.cbav') }}</option>
                <option value="{{ __('myhouse/back/annonces/professionnel/description.cbav') }}">{{ __('myhouse/back/annonces/professionnel/description.cbav') }}</option>
            </select>
        </div>-->


        
@if($professionnel->typeBien->nom === 'Commercial' || $professionnel->typeBien->nom === 'Industriel') 

    @if(isset($professionnel->assainissement) && $professionnel->assainissement > 0)
        <div class="ca-page-item-second-body-card-item-body-item">
            <div class="ca-page-item-second-body-card-item-body-item-box">
                <div class="box-display">
                    <div>
                        <div class="pc-checkbox">
                            <input type="checkbox" name="assainissement" id="assainissement" value="1">
                            <label for="assainissement">
                            </label>
                        </div>
                    </div>
                    <div class="pc-label">
                        {{ __('myhouse/back/annonces/particulier/description.cbaw') }}
                    </div>
                </div>
            </div>
        </div>
    @endif    

@endif

@if(isset($professionnel->raccordement_eau) && $professionnel->raccordement_eau > 0)
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="box-display">
                <div>
                    <div class="pc-checkbox">
                        <input type="checkbox" name="raccordement_eau" id="raccordement_eau" value="1">
                        <label for="raccordement_eau">
                        </label>
                    </div>
                </div>
                <div class="pc-label">
                    {{ __('myhouse/back/annonces/particulier/description.cbax') }}
                </div>
            </div>
        </div>
    </div>
@endif  

@if(isset($professionnel->titre_foncier) && $professionnel->titre_foncier > 0)
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="box-display">
                <div>
                    <div class="pc-checkbox">
                        <input type="checkbox" name="titre_foncier" id="titre_foncier" value="1">
                        <label for="titre_foncier">
                        </label>
                    </div>
                </div>
                <div class="pc-label">
                    {{ __('myhouse/back/annonces/particulier/description.x') }}
                </div>
            </div>
        </div>
    </div>
@endif  

@if(isset($professionnel->puits) && $professionnel->puits > 0)
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="box-display">
                <div>
                    <div class="pc-checkbox">
                        <input type="checkbox" name="puits" id="puits" value="1">
                        <label for="puits">
                        </label>
                    </div>
                </div>
                <div class="pc-label">
                    {{ __('myhouse/back/annonces/particulier/description.cbay') }}
                </div>
            </div>
        </div>
    </div>
@endif 

@if(isset($professionnel->raccordement_electricite) && $professionnel->raccordement_electricite > 0)
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="box-display">
                <div>
                    <div class="pc-checkbox">
                        <input type="checkbox" name="raccordement_electricite" id="raccordement_electricite" value="1">
                        <label for="raccordement_electricite">
                        </label>
                    </div>
                </div>
                <div class="pc-label">
                    {{ __('myhouse/back/annonces/particulier/description.cbaz') }}
                </div>
            </div>
        </div>
    </div>
@endif 

@if(isset($professionnel->raccordement_telephone) && $professionnel->raccordement_telephone > 0)
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="box-display">
                <div>
                    <div class="pc-checkbox">
                        <input type="checkbox" name="raccordement_telephone" id="raccordement_telephone" value="1">
                        <label for="raccordement_telephone">
                        </label>
                    </div>
                </div>
                <div class="pc-label">
                    {{ __('myhouse/back/annonces/particulier/description.cbba') }}
                </div>
            </div>
        </div>
    </div>
@endif 








    </div>
</div>

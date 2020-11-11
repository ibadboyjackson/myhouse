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


        
@if($particulier->typeBien->nom === 'Terrain commercial' || $particulier->typeBien->nom === 'Terrain industriel' ) 

    @if(isset($particulier->assainissement) && $particulier->assainissement > 0)
        <div class="ca-page-item-second-body-card-item-body-item">
            <div class="ca-page-item-second-body-card-item-body-item-box">
                <div class="box-display">
                    <div>
                        <div class="pc-checkbox">
                            <input type="checkbox"  class = "myhouse-check" {{ old('assainissement') != null ? 'checked' : '' }} name="assainissement" id="assainissement" value="1" {{ isset($particulier->critere->last()->assainissement) && $particulier->critere->last()->assainissement == 1 ? 'checked' : '' }}>
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

@if(isset($particulier->raccordement_eau) && $particulier->raccordement_eau > 0)
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="box-display">
                <div>
                    <div class="pc-checkbox">
                        <input type="checkbox"  class = "myhouse-check" {{ old('raccordement_eau') != null ? 'checked' : '' }} name="raccordement_eau" id="raccordement_eau" value="1" {{ isset($particulier->critere->last()->raccordement_eau) && $particulier->critere->last()->raccordement_eau == 1 ? 'checked' : '' }}>
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

@if(isset($particulier->titre_foncier) && $particulier->titre_foncier > 0)
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="box-display">
                <div>
                    <div class="pc-checkbox">
                        <input type="checkbox"  class = "myhouse-check" {{ old('titre_foncier') != null ? 'checked' : '' }} name="titre_foncier" id="titre_foncier" value="1" {{ isset($particulier->critere->last()->titre_foncier) && $particulier->critere->last()->titre_foncier == 1 ? 'checked' : '' }}>
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

@if(isset($particulier->puits) && $particulier->puits > 0)
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="box-display">
                <div>
                    <div class="pc-checkbox">
                        <input type="checkbox"  class = "myhouse-check" {{ old('puits') != null ? 'checked' : '' }} name="puits" id="puits" value="1" {{ isset($particulier->critere->last()->puits) && $particulier->critere->last()->puits == 1 ? 'checked' : '' }}>
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

@if(isset($particulier->raccordement_electricite) && $particulier->raccordement_electricite > 0)
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="box-display">
                <div>
                    <div class="pc-checkbox">
                        <input type="checkbox"  class = "myhouse-check" {{ old('raccordement_electricite') != null ? 'checked' : '' }} name="raccordement_electricite" id="raccordement_electricite" value="1" {{ isset($particulier->critere->last()->raccordement_electricite) && $particulier->critere->last()->raccordement_electricite == 1 ? 'checked' : '' }}>
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

@if(isset($particulier->raccordement_telephone) && $particulier->raccordement_telephone > 0)
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="box-display">
                <div>
                    <div class="pc-checkbox">
                        <input type="checkbox"  class = "myhouse-check" {{ old('raccordement_telephone') != null ? 'checked' : '' }} name="raccordement_telephone" id="raccordement_telephone" value="1" {{ isset($particulier->critere->last()->raccordement_telephone) && $particulier->critere->last()->raccordement_telephone == 1 ? 'checked' : '' }}>
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

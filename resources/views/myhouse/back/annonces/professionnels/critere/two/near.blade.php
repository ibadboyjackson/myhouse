<div class="ca-page-item-second-body-card-item-heads">
    <div class="ca-page-item-second-body-card-item-head-img">
        <img src="http://31.220.62.192/images/residential/ip.svg" alt="" height="50" width="50">
    </div>
    <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cbbw') }}</div>
</div>
<div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">




                                                                        @if(isset($professionnel->voie) && $professionnel->voie != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="voie" id="voie" value="1">
                                                                                            <label for="voie">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                         {{ __('myhouse/back/annonces/particulier/description.cbbx') }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->voie }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($professionnel->plage) && $professionnel->plage != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="plage" id="plage" value="1">
                                                                                            <label for="plage">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                         {{ __('myhouse/back/annonces/particulier/description.cbby') }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->plage }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($professionnel->campagne) && $professionnel->campagne != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="campagne" id="campagne" value="1">
                                                                                            <label for="campagne">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                         {{ __('myhouse/back/annonces/particulier/description.cbbz') }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->campagne }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($professionnel->montagne) && $professionnel->montagne != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="montagne" id="montagne" value="1">
                                                                                            <label for="montagne">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                         {{ __('myhouse/back/annonces/particulier/description.ccaa') }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->montagne }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($professionnel->desert) && $professionnel->desert != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="desert" id="desert" value="1">
                                                                                            <label for="desert">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                         {{ __('myhouse/back/annonces/particulier/description.ccab') }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->desert }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($professionnel->foret) && $professionnel->foret != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="foret" id="foret" value="1">
                                                                                            <label for="foret">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                         {{ __('myhouse/back/annonces/particulier/description.ccac') }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->foret }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($professionnel->spot_surf) && $professionnel->spot_surf != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="spot_surf" id="spot_surf" value="1">
                                                                                            <label for="spot_surf">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                         {{ __('myhouse/back/annonces/particulier/description.ccad') }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->spot_surf }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($professionnel->golf) && $professionnel->golf != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="golf" id="golf" value="1">
                                                                                            <label for="golf">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                         {{ __('myhouse/back/annonces/particulier/description.ccae') }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->golf }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($professionnel->station_ski) && $professionnel->station_ski != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="station_ski" id="station_ski" value="1">
                                                                                            <label for="station_ski">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                         {{ __('myhouse/back/annonces/particulier/description.ccaf') }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->station_ski }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($professionnel->riviere) && $professionnel->riviere != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="riviere" id="riviere" value="1">
                                                                                            <label for="riviere">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                         {{ __('myhouse/back/annonces/particulier/description.ccag') }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->riviere }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif



</div>

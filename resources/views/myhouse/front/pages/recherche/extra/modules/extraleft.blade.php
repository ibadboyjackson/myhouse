@if(Route::is('resultat.neuf') || Route::is('resultat.type'))
    <div class="carte-infos text-center ct-99">
        <div>{{ __('myhouse/modules/extraleft.aa') }} Casablanca</div>
        <div>{{ __('myhouse/modules/extraleft.ab') }} Casablanca-Settat</div>
        <div>{{ __('myhouse/modules/extraleft.ac') }} Aïn Diab</div>
        <div>{{ __('myhouse/modules/extraleft.ad') }} 33, rue de la Mer Rouge</div>
    </div>
    <div class="content-map">
        <div class="map" id="map"></div>
    </div>
    <div class="media-quarter">
        <div class="media-desc-box text-capitalize">{{ __('myhouse/modules/extraleft.ae') }}</div>
        <div class="media-quater d-flex justify-content-center">
            <div class="quater">
                <div class="quater-content">
                    <div class="a">
                        <div class="clearfix">
                            <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                        </div>
                        <div class="clearfix">
                            <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                        </div>
                        <div class="clearfix">
                            <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                        </div>
                        <div class="clearfix">
                            <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                        </div>

                    </div>
                    <div class="b mt-3">
                        <div class="clearfix">
                            <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                        </div>
                        <div class="clearfix">
                            <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                        </div>
                        <div class="clearfix">
                            <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                        </div>
                        <div class="clearfix">
                            <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                        </div>

                    </div>
                    <div class="c mt-3">
                        <div class="clearfix">
                            <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                        </div>
                        <div class="clearfix">
                            <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                        </div>
                        <div class="clearfix">
                            <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                        </div>
                        <div class="clearfix">
                            <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                        </div>

                    </div>
                    <div class="d mt-3">
                        <div class="clearfix">
                            <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                        </div>
                        <div class="clearfix">
                            <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                        </div>
                        <div class="clearfix">
                            <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                        </div>
                        <div class="clearfix">
                            <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    @isset($particulier)
        <div class="carte-infos text-center">
            <div><span style="color: #212529">{{ __('myhouse/modules/extraleft.aa') }}</span> {{ ucfirst($particulier->ville) }}</div>
            <div><span style="color: #212529">{{ __('myhouse/modules/extraleft.ac') }}</span>  {{ ucfirst($particulier->quartier) }}</div>
            <div><span style="color: #212529">{{ __('myhouse/modules/extraleft.ad') }}</span>  {{ ucfirst($particulier->adresse) }}</div>
        </div>
        <div class="content-map">
            <div class="map" id="map"></div>
        </div>
        <div class="media-quarter">
            <div class="media-desc-box text-capitalize">{{ __('myhouse/modules/extraleft.ae') }}</div>
            <div class="media-quater d-flex justify-content-center">
                <div class="quater">
                    <div class="quater-content">
                        <div class="a">
                            <div class="clearfix">
                                <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                            </div>

                        </div>
                        <div class="b mt-3">
                            <div class="clearfix">
                                <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                            </div>

                        </div>
                        <div class="c mt-3">
                            <div class="clearfix">
                                <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                            </div>

                        </div>
                        <div class="d mt-3">
                            <div class="clearfix">
                                <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        @else

        <div class="carte-infos text-center">
            <div>{{ __('myhouse/modules/extraleft.aa') }}: {{ ucfirst($professionnel->ville) }}</div>
            <div>{{ __('myhouse/modules/extraleft.ab') }}: Casablanca-Settat</div>
            <div>{{ __('myhouse/modules/extraleft.ac') }} : {{ ucfirst($professionnel->quartier) }}</div>
            <div>{{ __('myhouse/modules/extraleft.ad') }} : {{ ucfirst($professionnel->adresse) }}</div>
        </div>
        <div class="content-map">
            <div class="map" id="map"></div>
        </div>
        <div class="media-quarter">
            <div class="media-desc-box text-capitalize">{{ __('myhouse/modules/extraleft.ae') }}</div>
            <div class="media-quater d-flex justify-content-center">
                <div class="quater">
                    <div class="quater-content">
                        <div class="a">
                            <div class="clearfix">
                                <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                            </div>

                        </div>
                        <div class="b mt-3">
                            <div class="clearfix">
                                <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                            </div>

                        </div>
                        <div class="c mt-3">
                            <div class="clearfix">
                                <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                            </div>

                        </div>
                        <div class="d mt-3">
                            <div class="clearfix">
                                <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                            </div>
                            <div class="clearfix">
                                <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endisset
@endif

<div class="the-page-suggestion">


    @if (Route::is('resultat.professionnel', ''))
            <div class="the-page-suggestion-button">
                {{ Route::is('professionnel.entreprise', '') ? __('myhouse/modules/discover.aa') : __('myhouse/modules/discover.aa')  }}
            </div>
    @else
        <div class="the-page-suggestion-button">
            {{ Route::is('professionnel.entreprise', '') ?  __('myhouse/modules/discover.aa') : __('myhouse/modules/discover.ab')  }}
        </div>
    @endif


    @if (Route::is('resultat.type', 'a') || Route::is('resultat.neuf', 'a') )

            <a href="{{ route('resultat.type', ['type' => 'appartements', 'name' => 'a']) }}" style="text-decoration: none; color: inherit">
                <div class="the-page-suggestion-type-button">{{ __('myhouse/modules/discover.ac') }}</div>
            </a>

            <div class="the-page-suggestion-media">
                
                <div class="the-page-suggestion-chevron">
                    <div class="the-page-suggestion-chevron-left">
                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                    </div>
                    <div class="the-page-suggestion-chevron-right">
                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                    </div>
                </div> 

                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <a href="{{ route('resultat.type', ['type' => 'villas', 'name' => 'a']) }}" style="text-decoration: none; color: inherit">
                <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ad') }}</div>
            </a>






            <div class="the-page-suggestion-media">
                <div class="the-page-suggestion-chevron">
                    <div class="the-page-suggestion-chevron-left">
                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                    </div>
                    <div class="the-page-suggestion-chevron-right">
                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a href="{{ route('resultat.type', ['type' => 'commerces', 'name' => 'a']) }}" style="text-decoration: none; color: inherit">
                <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ae') }}</div>
            </a>

            <div class="the-page-suggestion-media">
                <div class="the-page-suggestion-chevron">
                    <div class="the-page-suggestion-chevron-left">
                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                    </div>
                    <div class="the-page-suggestion-chevron-right">
                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a href="{{ route('resultat.type', ['type' => 'terrains', 'name' => 'a']) }}" style="text-decoration: none; color: inherit">
                <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.af') }}</div>
            </a>

            <div class="the-page-suggestion-media">
                <div class="the-page-suggestion-chevron">
                    <div class="the-page-suggestion-chevron-left">
                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                    </div>
                    <div class="the-page-suggestion-chevron-right">
                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>
                <div class="the-page-suggestion-media-item">
                    <div class="the-page-suggestion-media-box">
                        <div class="the-page-suggestion-media-box-img">
                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-suggestion-media-box-price">
                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                            <div class="the-page-suggestion-media-box-price-text">
                                1.000.000 <span>mad</span>
                            </div>
                        </div>
                        <div class="the-page-suggestion-media-box-desc">
                            <div class="the-page-suggestion-media-box-desc-text">
                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                2 salle(s) de bain   | 2 salon(s)
                            </div>
                            <div class="the-page-suggestion-media-box-desc-text">
                                Dressing     |  Jardin privatif   |   Cheminée
                            </div>
                        </div>
                    </div>
                </div>

            </div>


    @else



        @isset($professionnel)

                
                @foreach($professionnel->user->entreprises->first()->user->professionnel as $profession)


                    @if ($profession->type_bien_id === 3)
                  
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ag') }}</div>
                  
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 3) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                               
                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif

                    @if ($profession->type_bien_id  === 1)
                        <div class="the-page-suggestion-type-button">{{ __('myhouse/modules/discover.ac') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 1) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">

                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach
                    @endif

                    @if ($profession->type_bien_id === 2)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ad') }}</div>

                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 2) as $appartement)
                           
                            <div class="the-page-suggestion-medias" style="position: relative">
                                
                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
           
                    @if ($profession->type_bien_id === 4)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ax') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 4) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif
                    @if ($profession->type_bien_id === 5)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.aw') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 5) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif
                    @if ($profession->type_bien_id === 6)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.av') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 6) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif
                    @if ($profession->type_bien_id === 7)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.au') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 7) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif
                    @if ($profession->type_bien_id === 8)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.at') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 8) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                 <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif
                    @if ($profession->type_bien_id === 9)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.as') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 9) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                 <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif
                    @if ($profession->type_bien_id === 10)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ar') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 10) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                       <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 11)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.aq') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 11) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                     <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 12)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ap') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 12) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 13)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ao') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 13) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                        <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 14)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.an') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 14) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 15)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.am') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 15) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 16)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.al') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 16) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->

                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 17)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ak') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 17) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 18)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ad') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 18) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                 <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 19)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.af') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 19) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->

                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 20)
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ad') }}</div>
                        @foreach($professionnel->user->entreprises->first()->user->professionnel->where('type_bien_id', 20) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <!-- <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach
                    @endif



                @endforeach


        @endisset

        @isset($entreprise)


                @foreach($entreprise->user->professionnel as $profession)

                    @if ($profession->type_bien_id === 'appartement')
                        <div class="the-page-suggestion-type-button">{{ __('myhouse/modules/discover.ac') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 1) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach
                    @endif
                    @if ($profession->type_bien_id === 'Villa')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ad') }}</div>

                        @foreach($entreprise->user->professionnel->where('type_bien_id', 2) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 'Maison')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ag') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 3) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif
                    @if ($profession->type_bien_id === 'Chalet')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ax') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 4) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif
                    @if ($profession->type_bien_id === 'Riad')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.aw') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 5) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif
                    @if ($profession->type_bien_id === 'Ferme')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.av') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 6) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif
                    @if ($profession->type_bien_id === 'Chambre d\'hôte')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.au') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 7) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif
                    @if ($profession->type_bien_id === 'Cité universitaire')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.at') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 8) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif
                    @if ($profession->type_bien_id === 'Bureau')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.as') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 9) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach


                    @endif
                    @if ($profession->type_bien_id === 'Plateau')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ar') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 10) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 'Entrepôt')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.aq') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 11) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 'Garage')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ap') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 12) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 'Local industriel')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ao') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 13) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 'Local commercial')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.an') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 14) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 'Propriété agricole')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.am') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 15) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 'Immeuble')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.al') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 16) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 'Résidentiel')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ak') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 17) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 'Commercial')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ad') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 18) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 'Agricole')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.af') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 19) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    @endif
                    @if ($profession->type_bien_id === 'Industriel')
                        <div class="the-page-suggestion-type-button" style="margin-top: 40px !important;">{{ __('myhouse/modules/discover.ad') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 20) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->type_bien_id) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
                                        <div class="the-page-suggestion-media-item" style="margin: 0 10px">
                                            <div class="the-page-suggestion-media-box">
                                                <div class="the-page-suggestion-media-box-img">
                                                    <img
                                                        class="img-fluid"
                                                        src="{{ asset('development/files/professionnel/204/') . '/' . json_decode($appartement->images)[0] }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                                <div class="the-page-suggestion-media-box-price">
                                                    <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                                    <div class="the-page-suggestion-media-box-price-text">
                                                        @if($appartement->venteActif)
                                                            {{ $appartement->prix_vente }} mad
                                                        @endif

                                                        @if($appartement->locationActif)
                                                            @if($appartement->prix_mois)
                                                                {{ $appartement->prix_mois }}<span> mad</span>
                                                            @endif
                                                            @if($appartement->prix_jour)
                                                                {{ $appartement->prix_jour }}<span> mad</span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="the-page-suggestion-media-box-desc">
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        2 salle(s) de bain   | 2 salon(s)
                                                    </div>
                                                    <div class="the-page-suggestion-media-box-desc-text">
                                                        Dressing     |  Jardin privatif   |   Cheminée
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach
                    @endif



                @endforeach

        @endisset

    @endif


</div>

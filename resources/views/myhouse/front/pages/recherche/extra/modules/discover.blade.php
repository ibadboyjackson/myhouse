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
                @foreach($professionnel->user->entreprises->first()->user->professionnel->take(2) as $profession)



                    @if ($professionnel->typeBien->nom === 'appartement')
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
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->typeBien->nom) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
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
                    @if ($professionnel->typeBien->nom === 'Villa')
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
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->typeBien->nom) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
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
                    @if ($professionnel->typeBien->nom === 'Maison')
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
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->typeBien->nom) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
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


                @foreach($entreprise->user->professionnel->take(2) as $profession)

                                            <div class="the-page-suggestion-type-button">{{ __('myhouse/modules/discover.ac') }}</div>
                        @foreach($entreprise->user->professionnel->where('type_bien_id', 1) as $appartement)
                            <div class="the-page-suggestion-medias" style="position: relative">
                                <!--<div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div> -->


                                <div style="display: flex; justify-content: center;">
                                    <a href="{{ route('resultat.professionnel', [strtolower($appartement->typeBien->nom) . '-'. $appartement->id]) }}" style="text-decoration: none; color: inherit">
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

                @endforeach

            @endisset

    @endif


</div>

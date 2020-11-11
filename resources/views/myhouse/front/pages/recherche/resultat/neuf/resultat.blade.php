@extends('myhouse.front.template')

@section('title')
    {{ $neuf->nom_projet }}
@stop

@section('content')
    <div class="the-neuf">

        <div class="the-page pb-5">
            <div class="the-page-mt">
                <div class="the-page-close-button">
                    <img src="{{ asset('images/residential/x.svg') }}" alt="">
                </div>
                <div class="the-real-page-head">
                    <div class="the-page-head">
                        <div class="the-page-head-title">
                            {{ $neuf->nom_projet }}
                        </div>
                    </div>
                    <div class="the-page-contact"></div>

                    @include('myhouse.front.pages.recherche.extra.modules.share')

                </div>
                <div class="the-page-head-hr"></div>
               <!-- <div class="the-page-neuf-promotion">
                    <div class="the-page-neuf-promotion-title">
                        Promotions & cadeaux, événements
                    </div>

                    <div class="the-page-neuf-promotion-box">
                        <div class="the-page-neuf-promotion-box-one">
                            <div class="the-page-neuf-promotion-box-one-text">
                                24 ET 25 JUIN
                                <div class="the-page-neuf-promotion-box-one-text-img">
                                    <img src="{{ asset('images/residential/single/menu/jp.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="the-page-neuf-promotion-box-one-connexion">
                                <div class="the-page-neuf-promotion-box-one-connexion-img">
                                    <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                </div>
                                <div class="the-page-neuf-promotion-box-one-connexion-text">S'inscrire</div>
                            </div>
                        </div       >
                        <div class="the-page-neuf-promotion-box-two">
                            <div class="the-page-neuf-promotion-box-two-box">
                                <div class="the-page-neuf-promotion-box-two-box-left">
                                    <div class="the-page-neuf-promotion-box-two-box-left-one">
                                        TOMBOLA
                                    </div>
                                    <div class="the-page-neuf-promotion-box-two-box-left-two">
                                        Tirage le 3 mai 2020
                                    </div>
                                    <div class="the-page-neuf-promotion-box-two-box-left-three">
                                        <img src="{{ asset('images/residential/single/menu/ca.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-neuf-promotion-box-two-box-left-four">
                                        <div class="the-page-neuf-promotion-box-two-box-left-four-one">
                                            <img src="{{ asset('images/residential/single/menu/icos.svg') }}" alt="">
                                        </div>
                                        <div class="the-page-neuf-promotion-box-two-box-left-four-two">S'inscrire</div>
                                    </div>
                                </div>
                                <div class="the-page-neuf-promotion-box-two-box-right">
                                    <div class="the-page-neuf-promotion-box-two-box-right-one">Achetez</div>
                                    <div class="the-page-neuf-promotion-box-two-box-right-two">
                                        du <br>
                                        1 janvier <br>
                                        au 1 mai 2020
                                    </div>
                                    <div class="the-page-neuf-promotion-box-two-box-right-three">
                                        Appartement <br>
                                        Villa
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="the-page-neuf-promotion-box-three">
                            <div class="page-list-item-enterprise-event-chasse-box">
                                <div class="page-list-item-enterprise-event-chasse-box-one">
                                    Chasse
                                    au
                                    Trésor
                                </div>
                                <div class="page-list-item-enterprise-event-chasse-box-two">
                                    <img src="http://myhouse.com/images/residential/single/menu/pi.svg " alt="">
                                </div>
                                <div class="page-list-item-enterprise-event-chasse-box-three">
                                    <div class="page-list-item-enterprise-event-chasse-box-three-text-one">gagnez</div>
                                    <div class="page-list-item-enterprise-event-chasse-box-three-text-two">100.000 dh</div>
                                    <div class="page-list-item-enterprise-event-chasse-box-three-text-three">à l'achat de votre bien</div>
                                </div>
                                <div class="page-list-item-enterprise-event-chasse-box-four">
                                    <img src="http://myhouse.com/images/residential/single/menu/fo.svg " alt="">
                                </div>
                                <div class="page-list-item-enterprise-event-chasse-box-five">
                                    Samedi 23 juillet 2020
                                </div>
                                <div class="page-list-item-enterprise-event-chasse-box-six" data-toggle="modal" data-target="#modal">
                                    <div class="page-list-item-enterprise-event-chasse-box-six-one">
                                        <img src="http://myhouse.com/images/residential/single/menu/icoo.svg " alt="">
                                    </div>
                                    <div class="page-list-item-enterprise-event-chasse-box-six-two">S'inscrire</div>
                                </div>
                            </div>
                        </div>
                        <div class="the-page-neuf-promotion-box-four">
                            <div class="the-page-neuf-promotion-box-four-box">
                                <div class="the-page-neuf-promotion-box-four-box-right-four">
                                    <img src="{{ asset("images/residential/single/menu/pro.svg") }}" alt="">
                                </div>
                                <div class="the-page-neuf-promotion-box-four-box-right">
                                    <div class="the-page-neuf-promotion-box-four-box-right-one">
                                        Votre salon <br>
                                        meublé !
                                    </div>
                                    <div class="the-page-neuf-promotion-box-four-box-right-two">Contactez-nous vite !</div>
                                    <div class="the-page-neuf-promotion-box-four-box-right-three">Offre limitée</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> -->

                <div class="the-page-enterprise-logo">

                    <div class="the-page-enterprise-logo-box">

                        <div class="the-page-enterprise-logo-box-img">
                            <img src="{{ asset('images/residential/single/logo.svg') }}" alt="">
                        </div>

                        <div class="the-page-enterprise-logo-box-content">

                            <div class="the-page-enterprise-logo-box-content-text">
                            {{ $neuf->user->entreprises->first()->nom }}
                            </div>
                            <div class="the-page-enterprise-logo-box-content-button">
                                <a href="{{ route('profile.entreprise', '') }}" style="text-decoration: none; color: inherit">
                                    <div class="the-page-enterprise-logo-box-content-button-button">{{ __('myhouse/recherche/neuf/resultat.aa') }}</div>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="the-page-type">


                    @if ($neuf->appartement)
                        <div class="the-page-type-box">

                            <div class="the-page-type-name bg-g-light">
                                <div class="the-page-type-name-title">Appartement</div>
                                <div class="the-page-type-name-room">De {{ $neuf->nombre_chambre_de_appartement }} à {{ $neuf->nombre_chambre_a_appartement }} chambres</div>
                                <div class="the-page-type-name-room">De {{ $neuf->superficie_de_appartement }} m² à {{ $neuf->superficie_a_appartement }} m²</div>
                            </div>

                            <div class="the-page-type-price">
                                <div class="the-page-type-price-img">
                                    <img src="{{ asset('images/residential/single/price.svg') }}" alt="">
                                </div>
                                <div class="the-page-type-price-text-top">à partir de</div>
                                <div class="the-page-type-price-text">
                                    {{ $neuf->prix_vente_de_appartement }} <span>MAD</span>
                                </div>
                            </div>

                            <div class="the-page-type-deliver">Livraison immédiate</div>

                        </div>
                    @endif
                        @if ($neuf->villa)
                            <div class="the-page-type-box">

                                <div class="the-page-type-name bg-g-light">
                                    <div class="the-page-type-name-title">Villa</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->nombre_chambre_de_villa }} à {{ $neuf->nombre_chambre_a_villa }} chambres</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->superficie_de_villa }} m² à {{ $neuf->superficie_a_villa }} m²</div>
                                </div>

                                <div class="the-page-type-price">
                                    <div class="the-page-type-price-img">
                                        <img src="{{ asset('images/residential/single/price.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-type-price-text-top">à partir de</div>
                                    <div class="the-page-type-price-text">
                                        {{ $neuf->prix_vente_de_villa }} <span>MAD</span>
                                    </div>
                                </div>

                                <div class="the-page-type-deliver">Livraison immédiate</div>

                            </div>
                        @endif
                        @if ($neuf->maison)
                            <div class="the-page-type-box">

                                <div class="the-page-type-name bg-g-light">
                                    <div class="the-page-type-name-title">Maison</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->nombre_chambre_de_maison }} à {{ $neuf->nombre_chambre_de_maison }} chambres</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->superficie_de_maison }} à {{ $neuf->superficie_de_maison }}</div>
                                </div>

                                <div class="the-page-type-price">
                                    <div class="the-page-type-price-img">
                                        <img src="{{ asset('images/residential/single/price.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-type-price-text-top">à partir de</div>
                                    <div class="the-page-type-price-text">
                                        {{ $neuf->prix_vente_de_maison }} <span>MAD</span>
                                    </div>
                                </div>

                                <div class="the-page-type-deliver">Livraison immédiate</div>

                            </div>
                        @endif
                        @if ($neuf->riad)
                            <div class="the-page-type-box">

                                <div class="the-page-type-name bg-g-light">
                                    <div class="the-page-type-name-title">Riad</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->nombre_chambre_de_riad }} à {{ $neuf->nombre_chambre_de_riad }} chambres</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->superficie_de_riad }} à {{ $neuf->superficie_de_riad }}</div>
                                </div>

                                <div class="the-page-type-price">
                                    <div class="the-page-type-price-img">
                                        <img src="{{ asset('images/residential/single/price.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-type-price-text-top">à partir de</div>
                                    <div class="the-page-type-price-text">
                                        {{ $neuf->prix_vente_de_riad }} <span>MAD</span>
                                    </div>
                                </div>

                                <div class="the-page-type-deliver">Livraison immédiate</div>

                            </div>
                        @endif
                        @if ($neuf->chalet)
                            <div class="the-page-type-box">

                                <div class="the-page-type-name bg-g-light">
                                    <div class="the-page-type-name-title">Chalet</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->nombre_chambre_de_chalet }} à {{ $neuf->nombre_chambre_de_chalet }} chambres</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->superficie_de_chalet }} à {{ $neuf->superficie_de_chalet }}</div>
                                </div>

                                <div class="the-page-type-price">
                                    <div class="the-page-type-price-img">
                                        <img src="{{ asset('images/residential/single/price.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-type-price-text-top">à partir de</div>
                                    <div class="the-page-type-price-text">
                                        {{ $neuf->prix_vente_de_chalet }} <span>MAD</span>
                                    </div>
                                </div>

                                <div class="the-page-type-deliver">Livraison immédiate</div>

                            </div>
                        @endif
                        @if ($neuf->commerce)
                            <div class="the-page-type-box">

                                <div class="the-page-type-name bg-g-light">
                                    <div class="the-page-type-name-title">Commerce</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->nombre_chambre_de_commerce }} à {{ $neuf->nombre_chambre_de_commerce }} chambres</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->superficie_de_commerce }} à {{ $neuf->superficie_de_commerce }}</div>
                                </div>

                                <div class="the-page-type-price">
                                    <div class="the-page-type-price-img">
                                        <img src="{{ asset('images/residential/single/price.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-type-price-text-top">à partir de</div>
                                    <div class="the-page-type-price-text">
                                        {{ $neuf->prix_vente_de_commerce }} <span>MAD</span>
                                    </div>
                                </div>

                                <div class="the-page-type-deliver">Livraison immédiate</div>

                            </div>
                        @endif
                        @if ($neuf->bureau)
                            <div class="the-page-type-box">

                                <div class="the-page-type-name bg-g-light">
                                    <div class="the-page-type-name-title">Bureau</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->superficie_de_bureau }} m² à {{ $neuf->superficie_a_bureau }} m²</div>
                                </div>

                                <div class="the-page-type-price">
                                    <div class="the-page-type-price-img">
                                        <img src="{{ asset('images/residential/single/price.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-type-price-text-top">à partir de</div>
                                    <div class="the-page-type-price-text">
                                        {{ $neuf->prix_vente_de_bureau }} <span>MAD</span>
                                    </div>
                                </div>

                                <div class="the-page-type-deliver">Livraison immédiate</div>

                            </div>
                        @endif
                        @if ($neuf->plateau)
                            <div class="the-page-type-box">

                                <div class="the-page-type-name bg-g-light">
                                    <div class="the-page-type-name-title">Plateau</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->superficie_de_plateau }} m² à {{ $neuf->superficie_a_plateau }} m²</div>

                                </div>

                                <div class="the-page-type-price">
                                    <div class="the-page-type-price-img">
                                        <img src="{{ asset('images/residential/single/price.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-type-price-text-top">à partir de</div>
                                    <div class="the-page-type-price-text">
                                        {{ $neuf->prix_vente_de_plateau }} <span>MAD</span>
                                    </div>
                                </div>

                                <div class="the-page-type-deliver">Livraison immédiate</div>

                            </div>
                        @endif
                        @if ($neuf->residentiel)
                            <div class="the-page-type-box">

                                <div class="the-page-type-name bg-g-light">
                                    <div class="the-page-type-name-title">Résidentiel</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->superficie_de_residentiel }} m² à {{ $neuf->superficie_a_residentiel}} m²</div>

                                </div>

                                <div class="the-page-type-price">
                                    <div class="the-page-type-price-img">
                                        <img src="{{ asset('images/residential/single/price.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-type-price-text-top">à partir de</div>
                                    <div class="the-page-type-price-text">
                                        {{ $neuf->prix_vente_de_residentiel }} <span>MAD</span>
                                    </div>
                                </div>

                                <div class="the-page-type-deliver">Livraison immédiate</div>

                            </div>
                        @endif
                        @if ($neuf->commercial)
                            <div class="the-page-type-box">

                                <div class="the-page-type-name bg-g-light">
                                    <div class="the-page-type-name-title">Commercial</div>
                                    <div class="the-page-type-name-room">De {{ $neuf->superficie_de_commercial }} m² à {{ $neuf->superficie_a_commercial}} m²</div>
                                </div>

                                <div class="the-page-type-price">
                                    <div class="the-page-type-price-img">
                                        <img src="{{ asset('images/residential/single/price.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-type-price-text-top">à partir de</div>
                                    <div class="the-page-type-price-text">
                                        {{ $neuf->prix_vente_de_commercial }} <span>MAD</span>
                                    </div>
                                </div>

                                <div class="the-page-type-deliver">Livraison immédiate</div>

                            </div>
                        @endif


                </div>

                <!-- With grid -->

                <div class="the-page-grids">
                    <div class="the-page-grid-container">
                        <div class="the-page-grid-container-item">
                            @include('myhouse.front.pages.recherche.include.calendar')
                        </div>
                        <div class="the-page-grid-container-item">
                            <div class="medias mt-161">
                                <div class="the-page-grid-container-number">6/{{ count(json_decode($neuf->medias)) }}</div>
                                <div id="sync2" class="owl-carousel">
                                    @foreach(json_decode($neuf->medias) as $image)
                                        <div class="item">
                                            <img src="{{ asset('development/files/neuf/124/') . '/' . $image }}" alt="" class="img-fluid">
                                        </div>
                                    @endforeach
                                </div>
                                <div id="sync1" class="owl-carousel">
                                    @foreach(json_decode($neuf->medias) as $image)
                                        <div class="item">
                                            <div class="sync-text rounded-pill">
                                                <img src="{{ asset('images/residential/single/heart.svg') }}" alt="">
                                                {{ __('myhouse/recherche/particulier/resultat.ai') }}
                                            </div>
                                            <img src="{{ asset('development/files/neuf/878/') . '/' . $image }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="the-page-description">
                                <div class="the-page-description-head">
                                    <div class="the-page-description-head-title">
                                        {{ $neuf->nom_projet }}
                                        <div class="the-page-description-head-title-hr"></div>
                                    </div>
                                    <div class="the-page-description-head-publish">
                                        <button class="btn btn-light btn-publish">{{ __('myhouse/recherche/neuf/resultat.ac') }}
                                            {{ str_replace(' ', '/', \Carbon\Carbon::parse($neuf->created_at)->format('d m y')) }}
                                        </button>
                                    </div>
                                </div>
                                <div class="the-page-description-body">
                                    {{ $neuf->description }}
                                </div>
                            </div>
                            @include('myhouse.front.pages.recherche.extra.modules.description')
                            @include('myhouse.front.pages.recherche.extra.modules.discover')
                        </div>
                        <div class="the-page-grid-container-item">
                            @include('myhouse.front.pages.recherche.extra.modules.extraleft')
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
    <div class="the-neuf">
        <!-- Modal First -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <a href="" class="close" data-dismiss="modal" aria-label="Close">
                            <div class="modal-body-x-button">
                                <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                            </div>
                        </a>

                        <div class="modal-body-title text-uppercase">{{ __('myhouse/recherche/neuf/resultat.ad') }}</div>
                        <div class="modal-body-desc">{{ __('myhouse/recherche/neuf/resultat.ae') }}</div>
                        <div class="modal-body-desc">{{ __('myhouse/recherche/neuf/resultat.af') }}</div>
                        <div class="modal-body-desc-next text-center">
                            <div class="modal-body-desc-next-one">{{ __('myhouse/recherche/neuf/resultat.ag') }}</div>
                            <div class="modal-body-desc-next-two">{{ __('myhouse/recherche/neuf/resultat.ah') }} (23/07/2020)</div>
                        </div>
                        <div class="modal-body-content">
                            <div class="modal-body-content-left">
                                <div class="field">
                                    <label for="doge" class="field-label">{{ __('myhouse/recherche/neuf/resultat.ai') }}</label>
                                    <input type="email" id="email" name="doge" class="field-input">
                                </div>
                                <div class="field">
                                    <label for="doge" class="field-label">{{ __('myhouse/recherche/neuf/resultat.aj') }}</label>
                                    <input type="email" id="email" name="doge" class="field-input">
                                </div>
                            </div>
                            <div class="modal-body-content-right">
                                <div class="field">
                                    <label for="doge" class="field-label">{{ __('myhouse/recherche/neuf/resultat.ak') }}</label>
                                    <input type="email" id="email" name="doge" class="field-input">
                                </div>
                                <div class="field">
                                    <label for="doge" class="field-label">{{ __('myhouse/recherche/neuf/resultat.al') }}</label>
                                    <input type="email" id="email" name="doge" class="field-input">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body-content-late-foot">
                            <div class="field">
                                <label for="doge" class="field-label">{{ __('myhouse/recherche/neuf/resultat.am') }}</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                        </div>
                        <div class="modal-body-content-foot">
                            <div class="modal-body-coontent-foot-button text-uppercase">{{ __('myhouse/recherche/neuf/resultat.an') }}</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Modal First -->
    </div>
@stop

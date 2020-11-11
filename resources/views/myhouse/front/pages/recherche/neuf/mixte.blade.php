@extends('myhouse.front.template')

@section('title')
    Projets neufs mixte
@stop


@section('header')
    @include('myhouse.front.pages.recherche.include.header')
@stop


@section('content')
    <div class="overplay neu">
        <div class="row mt-25">
            <div class="page">
                <div class="page-carte">
                    <div class="is-map">
                        <div class="map" id="map"></div>
                    </div>
                </div>
                <div class="page-liste">

                    @if ($neufs->count() <= 0)
                        <div class="no-result">
                            <p>
                                {{ __('myhouse/recherche/particulier/resultat.ak') }}
                            </p>
                        </div>
                    @else
                        <div class="result-number">
                            <p>
                                {{ $neufs->count() }} {{ __('myhouse/recherche/particulier/resultat.al') }}
                            </p>
                        </div>

                        @foreach($neufs as $neuf)

                            <div class="page-list-panel">
                                <div class="page-list-panel-item">
                                    <a href="{{ route('resultat.neuf', [ strtolower(str_replace(' ', '-', $neuf->nom_projet)) . '-' . $neuf->id ]) }}" target="_blank" style="text-decoration: none; color: inherit">
                                        <div class="page-list-item-enterprise-logo">
                                            <div class="page-list-item-enterprise-logo-box">
                                                <div class="page-list-item-enterprise-logo-img">
                                                    <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-item-enterprise-logo-text">
                                                    {{ $neuf->user->entreprises->last()->nom }}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="page-list-item-enterprise-event">
                                            <div class="page-list-item-enterprise-event-promortion">
                                                <img src="{{ asset('images/residential/single/menu/pn.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-item-enterprise-event-chasse">
                                                <div class="page-list-item-enterprise-event-chasse-box">
                                                    <div class="page-list-item-enterprise-event-chasse-box-one">
                                                        Chasse
                                                        au
                                                        Trésor
                                                    </div>
                                                    <div class="page-list-item-enterprise-event-chasse-box-two">
                                                        <img src="{{ asset('images/residential/single/menu/pi.svg ') }}" alt="">
                                                    </div>
                                                    <div class="page-list-item-enterprise-event-chasse-box-three">
                                                        <div class="page-list-item-enterprise-event-chasse-box-three-text-one">gagnez</div>
                                                        <div class="page-list-item-enterprise-event-chasse-box-three-text-two">100.000 dh</div>
                                                        <div class="page-list-item-enterprise-event-chasse-box-three-text-three">à l'achat de votre bien</div>
                                                    </div>
                                                    <div class="page-list-item-enterprise-event-chasse-box-four">
                                                        <img src="{{ asset('images/residential/single/menu/fo.svg ') }}" alt="">
                                                    </div>
                                                    <div class="page-list-item-enterprise-event-chasse-box-five">
                                                        Samedi 23 juillet 2020
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="carousel slide" data-ride="carousel herman" id="{{ $neuf->last_id }}">
                                            <ol class="carousel-indicators">
                                                @foreach(json_decode($neuf->medias) as $image)
                                                    <li class="{{ $loop->first ? 'active' : '' }}" data-target="#{{ $neuf->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                @endforeach
                                            </ol>
                                            <div class="carousel-inner">
                                                @foreach(json_decode($neuf->medias) as $image)
                                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                        <img
                                                            class="img-fluid"
                                                            src="{{ asset('development/files/neuf/429/') . '/' . $image }}"
                                                            alt="Third Slide"
                                                        />
                                                    </div>
                                                @endforeach
                                            </div>
                                            <a class="carousel-control-prev" href="#{{ $neuf->last_id }}" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#{{ $neuf->last_id }}" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </a>

                                </div>
                                <div class="page-list-panel-item-two">
                                    <a href="{{ route('resultat.neuf', [ strtolower(str_replace(' ', '-', $neuf->nom_projet)) . '-' . $neuf->id ]) }}" target="_blank" style="text-decoration: none; color: inherit">
                                        <div class="page-list-panel-item-two-head">
                                            <div class="page-list-panel-item-two-head-left">
                                                <div class="page-list-panel-item-two-head-left-box">
                                                    <div class="page-list-panel-item-two-head-left-box-left">
                                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="page-list-panel-item-two-head-left-box-right">
                                                        {{ substr($neuf->adresse, 0, 26) }} <br>
                                                        {{ substr($neuf->adresse, 26, 50) }}
                                                        <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-head-right">
                                                <span class="text-panel-item-grays">{{ $neuf->nom_projet }}</span>
                                            </div>
                                        </div>
                                        <div class="page-list-panel-item-two-body">
                                            <div class="page-list-panel-item-two-body-box-one">
                                                @if ($neuf->appartement)
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">

                                                            Appartements résidentiel

                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">
                                                                {{ $neuf->nombre_chambre_de_appartement }}
                                                                à
                                                                {{ $neuf->nombre_chambre_a_appartement }}
                                                                chambres
                                                            </div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        {{ $neuf->prix_vente_de_appartement }}
                                                                        <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($neuf->villa)
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">

                                                            Villas résidentiel

                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">
                                                                {{ $neuf->nombre_chambre_de_villa }}
                                                                à
                                                                {{ $neuf->nombre_chambre_a_villa }}
                                                                chambres
                                                            </div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        {{ $neuf->prix_vente_de_villa }}
                                                                        <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($neuf->maison)
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">

                                                            Villas résidentiel

                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">
                                                                {{ $neuf->nombre_chambre_de_maison}}
                                                                à
                                                                {{ $neuf->nombre_chambre_a_maison }}
                                                                chambres
                                                            </div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        {{ $neuf->prix_vente_de_maison }}
                                                                        <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>




                                            <div class="page-list-panel-item-two-body-box-two">
                                                <div class="page-list-panel-item-two-body-box-two-ts">
                                                    {{ substr($neuf->description, 0, 150) }}...

                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three">
                                                <div class="page-list-panel-item-two-body-box-three-box">
                                                    Superficie Projet {{ $neuf->superficie }} m²

                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three-box">
                                                    Appart de
                                                    {{ $neuf->superficie_de_appartement }} m² à
                                                    {{ $neuf->superficie_a_appartement }} m²
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three-box">
                                                    Forêt
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three">
                                                <div class="page-list-panel-item-two-body-box-three-box">
                                                    3 apparts par étage
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three-box">
                                                    Villa de 500 à 1200 m2
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three-box">
                                                    Supérette
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        @endforeach

                    @endif

                </div>

            </div>
        </div>
    </div>
@stop




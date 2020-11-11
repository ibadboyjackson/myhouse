@extends('myhouse.front.template')


@section('title')
    Projets neufs liste
@stop

@section('header')
    @include('myhouse.front.pages.recherche.include.header')
@stop


@section('content')
    <div class="overflay">

    <div class="button-sps" id="button-sp">
        <i class="fas fa-caret-right button-sp-ds"></i>
    </div>


    <div class="d-flex justify-content-center mt-91">
        <div class="d-flex icon mt-2">
            <a href="" id="list-one-button" class="active-hover-two">
                <div class="menu-icon-two is-active" id ="icon-one">
                    <div class="menu-icon-centers-line"></div>
                </div>
            </a>
            <a href="" id="list-two-button" class="active-hover active-mr">
                <div class="menu-icon" id ="icon-two">
                    <div class="menus-icon-center">
                        <div class="boxes d-flex justify-content-center">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="boxes d-flex justify-content-center">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="boxes d-flex justify-content-center">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="" id="list-three-button" class="active-hover">
                <div class="menu-icon" id ="icon-three">
                    <div class="menus-icons-center">
                        <div class="boxes d-flex justify-content-center">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="boxes d-flex justify-content-center">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="boxes d-flex justify-content-center">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div id = "liste-one" class="mt-28 mb-68 list-button liste-active">
        <div class="container-fluid">
            <div class="marge">
                <div class="display mb-5">
                    <div class="display-item">





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
                                                <div class="page-list-item-enterprise-event-tombola">
                                                    <div class="page-list-item-enterprise-event-tombola-box">
                                                        <div class="page-list-item-enterprise-event-tombola-box-first">
                                                            Achats entre
                                                            01 janvier 2020
                                                            31 mai 2020
                                                        </div>
                                                        <div class="page-list-item-enterprise-event-tombola-box-second">
                                                            Inscription ouverte
                                                            Cliquez ici
                                                        </div>
                                                        <div class="page-list-item-enterprise-event-tombola-box-third">
                                                            tombola
                                                        </div>
                                                        <div class="page-list-item-enterprise-event-tombola-box-fourth">
                                                            <img src="{{ asset('images/residential/single/menu/cad.svg') }}" alt="">
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
    </div>

    <div id = "liste-three" class="mt-28 mb-68 list-button">
        <div style="margin-top: 70px;">
            <div class="grid-container">

                @if ($neufs->count() <= 0)
                    <div class="no-result">
                        <p>
                            {{ __('myhouse/recherche/particulier/resultat.ak') }}
                        </p>
                    </div>
                @else

                    @foreach($neufs as $neuf)
                        <div class="grid-item">
                            <div class="carouse">
                                <a href="{{ route('resultat.neuf', [ strtolower(str_replace(' ', '-', $neuf->nom_projet)) . '-' . $neuf->id ]) }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="carouse-image">
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
                                        <div class="carousel slide" data-ride="carousel herman" id="a{{ $neuf->last_id }}">
                                            <ol class="carousel-indicators">
                                                @foreach(json_decode($neuf->medias) as $image)
                                                    <li class="{{ $loop->first ? 'active' : '' }}" data-target="#a{{ $neuf->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                @endforeach
                                            </ol>
                                            <div class="carousel-inner">
                                                @foreach(json_decode($neuf->medias) as $image)
                                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                        <img
                                                            class="img-fluid"
                                                            src="{{ asset('development/files/neuf/400/') . '/' . $image }}"
                                                            alt="Third Slide"
                                                        />
                                                    </div>
                                                @endforeach
                                            </div>
                                            <a class="carousel-control-prev" href="#a{{ $neuf->last_id }}" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#a{{ $neuf->last_id }}" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>

                                    </div>

                                </a>
                                <a href="{{ route('resultat.neuf', [ strtolower(str_replace(' ', '-', $neuf->nom_projet)) . '-' . $neuf->id ]) }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="carouse-body">
                                        <div class="page-list-panel-item-two-head">
                                            <div class="page-list-panel-item-two-head-left">
                                                <div class="page-list-panel-item-two-head-left-box">
                                                    <div class="page-list-panel-item-two-head-left-box-left">
                                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="page-list-panel-item-two-head-left-box-right">
                                                        {{ substr($neuf->adresse, 0, 120) }}
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

    <div id = "liste-five" class="mt-28 mb-68 list-button">
        <div class="grid-containers">

            <div class="grid-iteme">
                <div class="carouse">
                    <a href="{{ route('resultat.neuf', [ strtolower(str_replace(' ', '-', $neuf->nom_projet)) . '-' . $neuf->id ]) }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        {{ $neuf->user->entreprises->last()->nom }}

                                    </div>
                                </div>
                                <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    {{ $neuf->nom_projet }} <br>
                                </span>
                                </div>

                            </div>
                            <div class="carousel slide" data-ride="carousel herman" id="c{{ $neuf->last_id }}">
                                <ol class="carousel-indicators">
                                    @foreach(json_decode($neuf->medias) as $image)
                                        <li class="{{ $loop->first ? 'active' : '' }}" data-target="#c{{ $neuf->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner">
                                    @foreach(json_decode($neuf->medias) as $image)
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('development/files/neuf/400/') . '/' . $image }}"
                                                alt="Third Slide"
                                            />
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#c{{ $neuf->last_id }}" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#c{{ $neuf->last_id }}" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                    </a>
                    <a href="{{ route('resultat.neuf', [ strtolower(str_replace(' ', '-', $neuf->nom_projet)) . '-' . $neuf->id ]) }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body">
                            <div class="clearfix mx-1">
                                <div class="float-left">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            {{ substr($neuf->adresse, 0, 26) }} <br>
                                            {{ substr($neuf->adresse, 26, 50) }}
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="float-right carouse-with-body-text">300m du lieu de recherche</div> -->
                            </div>
                            <div class="carouse-with-body-two">
                                Prix à partir de
                            </div>
                            <div class="carouse-with-footer">

                                @if ($neuf->appartement)
                                    <div class="carouse-body-content-box">
                                        <div class="carouse-body-content-box-title">Appartements</div>
                                        <div class="carouse-body-content-box-desc">{{ $neuf->prix_vente_de_appartement }} MAD</div>
                                    </div>
                                @endif
                                @if ($neuf->villa)
                                    <div class="carouse-body-content-box">
                                        <div class="carouse-body-content-box-title">Villas</div>
                                        <div class="carouse-body-content-box-desc"> {{ $neuf->prix_vente_de_villa }} MAD</div>
                                    </div>
                                @endif
                                @if ($neuf->maison)
                                    <div class="carouse-body-content-box">
                                        <div class="carouse-body-content-box-title">Maisons</div>
                                        <div class="carouse-body-content-box-desc">{{ $neuf->prix_vente_de_maison }} MAD</div>
                                    </div>
                                @endif

                            </div>

                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>



</div>
@stop

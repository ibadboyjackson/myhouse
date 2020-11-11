@extends('myhouse.front.template')


@section('title')
    Professionnel liste
@stop


@section('header')
    @include('myhouse.front.pages.recherche.include.header')
@stop


@section('content')
    <div class="overflay pro">

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

                        @if ($professionnels->count() <= 0)
                            <div class="no-result">
                                <p>
                                    {{ __('myhouse/recherche/particulier/resultat.ak') }}
                                </p>
                            </div>
                        @else
                            <div class="result-number">
                                <p>
                                    {{ $professionnels->count() }} {{ __('myhouse/recherche/particulier/resultat.al') }}
                                </p>
                            </div>

                            @foreach($professionnels as $professionnel)

                                <div class="display-item">
                                    <div class="page-list-panel">
                                        <div class="page-list-panel-item">
                                            <a href="{{ route('resultat.professionnel', [strtolower($professionnel->typeBien->nom) . '-'. $professionnel->id]) }}" target="_blank">
                                                <div class="page-list-item-enterprise-logoos">
                                                    <div class="page-list-item-enterprise-logo-box">
                                                        <div class="page-list-item-enterprise-logo-img">
                                                            <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-item-enterprise-logo-text">
                                                            {{ $professionnel->user->entreprises->last()->nom }}

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel slide" data-ride="carousel" id="{{ $professionnel->last_id }}">
                                                    <ol class="carousel-indicators">
                                                        @foreach(json_decode($professionnel->images) as $image)
                                                            <li class="{{ $loop->first ? 'active' : '' }}" data-target="#{{ $professionnel->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                        @endforeach
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        @foreach(json_decode($professionnel->images) as $image)
                                                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                                <img
                                                                    class="img-fluid"
                                                                    src="{{ asset('development/files/professionnel/429/') . '/' . $image }}"
                                                                    alt="Third Slide"
                                                                />
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <a class="carousel-control-prev" href="#{{ $professionnel->last_id }}" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#{{ $professionnel->last_id }}" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="page-list-panel-item-two-pro">
                                            <a href="{{ route('resultat.professionnel', [strtolower($professionnel->typeBien->nom) . '-'. $professionnel->id]) }}" style="text-decoration: none; color: inherit" target="_blank">
                                                <div class="page-list-panel-item-two-pro-head">
                                                    <div class="page-list-panel-item-two-head-left">
                                                        <div class="page-list-panel-item-two-head-left-box">
                                                            <div class="page-list-panel-item-two-head-left-box-left">
                                                                <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="page-list-panel-item-two-head-left-box-right">
                                                                {{ substr($professionnel->adresse, 0, 26) }} <br>
                                                                {{ substr($professionnel->adresse, 26, 50) }}
                                                                <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title">
                                                            {{ ucfirst($professionnel->typeBien->nom) }}
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">
                                                                {{ $professionnel->nombre_chambre }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="page-list-panel-item-two-pro-body">

                                                    <div class="page-list-panel-item-two-pro-body-box">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            @if($professionnel->venteActif)
                                                                Vente
                                                            @endif

                                                            @if($professionnel->locationActif)
                                                                Location
                                                            @endif

                                                            @if($professionnel->echangeActif)
                                                                Echange
                                                            @endif
                                                            <div class="page-list-panel-item-two-pro-body-content-image">
                                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                            </div>
                                                            <div class="page-list-panel-item-two-pro-body-content-price">
                                                                @if($professionnel->venteActif)
                                                                    {{ $professionnel->prix_vente }}
                                                                    <span class="text-uppercase">mad</span>
                                                                @endif

                                                                @if($professionnel->locationActif)
                                                                    @if($professionnel->prix_mois)
                                                                        {{ $professionnel->prix_mois }}
                                                                        <span> MAD/MOIS</span>
                                                                    @endif
                                                                    @if($professionnel->prix_jour)
                                                                        {{ $professionnel->prix_jour }}<span> MAD/JOUR</span>
                                                                    @endif
                                                                @endif

                                                                @if($professionnel->echangeActif)
                                                                    25/02/2020 - 30/02/2020
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="page-list-panel-item-two-pro-text">
                                                                                                                                        @if ($professionnel->surface_habitable)
                                                                                {{ $professionnel->surface_habitable }} m²
                                                                            @endif

                                                                            <!--@if ($professionnel->superficie_terrain)
                                                                                {{ $professionnel->superficie_terrain }} m²
                                                                            @endif -->

                                                                            @if ($professionnel->surface_totale)
                                                                                {{ $professionnel->surface_totale }} m² 
                                                                            @endif

                                                                            @if ($professionnel->surface_batiment)
                                                                                {{ $professionnel->surface_batiment }} m²
                                                                            @endif

                                                                            @if ($professionnel->surface_garage)
                                                                                {{ $professionnel->surface_garage }} m²
                                                                            @endif


                                                                            @if ($professionnel->surface_disponible_un)
                                                                                {{ $professionnel->surface_disponible_un }} m²
                                                                            @endif
                                                        </div>
                                                    </div>


                                                    <div class="page-list-item-two-pro-body-content-text">
                                                        {{ substr($professionnel->description, 0, 150) }}...
                                                    </div>


                                                </div>
                                                <div class="page-list-panel-item-two-pro-footer">
                                                    <div class="page-list-panel-item-two-body-box-threes">
                                                         @include('myhouse.share.criteres', ['particulier' => $professionnel])
                                                    </div>
                 
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            @endforeach

                        @endif

                    </div>


                </div>
            </div>
        </div>

        <div id = "liste-three" class="mt-28 mb-68 list-button">
            <div style="margin-top: 70px;">
                <div class="grid-container">


                    @if ($professionnels->count() <= 0)
                        <div class="no-result">
                            <p>
                                {{ __('myhouse/recherche/particulier/resultat.ak') }}
                            </p>
                        </div>
                    @else

                        @foreach($professionnels as $professionnel)

                            <div class="grid-item">
                                <div class="carouse">
                                    <a href="{{ route('resultat.professionnel', [strtolower($professionnel->typeBien->nom) . '-'. $professionnel->id]) }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
                                            <div class="page-list-item-enterprise-logoos">
                                                <div class="page-list-item-enterprise-logo-box">
                                                    <div class="page-list-item-enterprise-logo-img">
                                                        <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-text">
                                                        {{ $professionnel->user->entreprises->last()->nom }}

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel slide" data-ride="carousel" id="a{{ $professionnel->last_id }}">
                                                <ol class="carousel-indicators">
                                                    @foreach(json_decode($professionnel->images) as $image)
                                                        <li class="{{ $loop->first ? 'active' : '' }}" data-target="#a{{ $professionnel->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                    @endforeach
                                                </ol>
                                                <div class="carousel-inner">
                                                    @foreach(json_decode($professionnel->images) as $image)
                                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                            <img
                                                                class="img-fluid"
                                                                src="{{ asset('development/files/professionnel/400/') . '/' . $image }}"
                                                                alt="Third Slide"
                                                            />
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <a class="carousel-control-prev" href="#a{{ $professionnel->last_id }}" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#a{{ $professionnel->last_id }}" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ route('resultat.professionnel', [strtolower($professionnel->typeBien->nom) . '-'. $professionnel->id]) }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-body-three">
                                            <div class="carouse-body-three-head">
                                                <div class="page-list-panel-item-two-head-left-box">
                                                    <div class="page-list-panel-item-two-head-left-box-left">
                                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="page-list-panel-item-two-head-left-box-right">
                                                        {{ substr($professionnel->adresse, 0, 200) }}
                                                    </div>
                                                </div>
                                                <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">
                                                    <div>
                                                        300m du lieu de recherche
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="carouse-body-three-content">
                                                <div class="carouse-body-three-content-boxex">
                                                    <div class="carouse-body-three-content-boxex-next">
                                                        @if($professionnel->venteActif)
                                                            Vente
                                                        @endif

                                                        @if($professionnel->locationActif)
                                                            Location
                                                        @endif

                                                        @if($professionnel->echangeActif)
                                                            Echange
                                                        @endif
                                                        <div class="carouse-body-three-content-boxex-next-img">
                                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="25">
                                                        </div>
                                                        <div class="carouse-body-three-content-boxex-next-img-text">
                                                            @if($professionnel->venteActif)
                                                                {{ $professionnel->prix_vente }} <span>MAD</span>
                                                            @endif

                                                            @if($professionnel->locationActif)
                                                                @if($professionnel->prix_mois)
                                                                    {{ $professionnel->prix_mois }}<span> MAD/MOIS</span>
                                                                @endif
                                                                @if($professionnel->prix_jour)
                                                                    {{ $professionnel->prix_jour }}<span> MAD/JOUR</span>
                                                                @endif
                                                            @endif

                                                            @if($professionnel->echangeActif)
                                                                25/02/2020 - 30/02/2020
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carouse-body-content-boxexex">
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title">
                                                            {{ ucfirst($professionnel->typeBien->nom) }}
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">
                                                                {{ $professionnel->nombre_chambre }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carouse-body-content-boxexs">
                                                                                                                                   @if ($professionnel->surface_habitable)
                                                                                {{ $professionnel->surface_habitable }} m²
                                                                            @endif

                                                                            <!--@if ($professionnel->superficie_terrain)
                                                                                {{ $professionnel->superficie_terrain }} m²
                                                                            @endif -->

                                                                            @if ($professionnel->surface_totale)
                                                                                {{ $professionnel->surface_totale }} m² 
                                                                            @endif

                                                                            @if ($professionnel->surface_batiment)
                                                                                {{ $professionnel->surface_batiment }} m²
                                                                            @endif

                                                                            @if ($professionnel->surface_garage)
                                                                                {{ $professionnel->surface_garage }} m²
                                                                            @endif


                                                                            @if ($professionnel->surface_disponible_un)
                                                                                {{ $professionnel->surface_disponible_un }} m²
                                                                            @endif
                                                </div>
                                            </div>
                                            <div class="carouse-body-three-content-page">
                                                {{ substr($professionnel->description, 0, 120) }}...

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



                @if ($professionnels->count() <= 0)
                    <div class="no-result">
                        <p>
                            {{ __('myhouse/recherche/particulier/resultat.ak') }}
                        </p>
                    </div>
                @else

                    @foreach($professionnels as $professionnel)

                        <div class="grid-iteme">
                            <div class="carouse">
                                <a  href="{{ route('resultat.professionnel', [strtolower($professionnel->typeBien->nom) . '-'. $professionnel->id]) }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="carouse-image">
                                        <div class="page-list-item-enterprise-logos">
                                            <div class="page-list-item-enterprise-logo-box">
                                                <div class="page-list-item-enterprise-logo-img">
                                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-item-enterprise-logos-text">
                                                    {{ $professionnel->user->entreprises->last()->nom }}
                                                </div>
                                            </div>

                                        </div>
                                        <div class="slide">
                                            <div class="carousel slide" data-ride="carousel" id="c{{ $professionnel->last_id }}">
                                                <ol class="carousel-indicators">
                                                    @foreach(json_decode($professionnel->images) as $image)
                                                        <li class="{{ $loop->first ? 'active' : '' }}" data-target="#c{{ $professionnel->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                    @endforeach
                                                </ol>
                                                <div class="carousel-inner">
                                                    @foreach(json_decode($professionnel->images) as $image)
                                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                            <img
                                                                class="img-fluid"
                                                                src="{{ asset('development/files/professionnel/400/') . '/' . $image }}"
                                                                alt="Third Slide"
                                                            />
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <a class="carousel-control-prev" href="#c{{ $professionnel->last_id }}" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#c{{ $professionnel->last_id }}" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                                <a  href="{{ route('resultat.professionnel', [strtolower($professionnel->typeBien->nom) . '-'. $professionnel->id]) }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="carouse-with-body-five">
                                        <div class="carouse-with-body-five-head">
                                            <div class="page-list-panel-item-two-head-left-box">
                                                <div class="page-list-panel-item-two-head-left-box-left">
                                                    <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-panel-item-two-head-left-box-right">
                                                    {{ substr($professionnel->adresse, 0, 26) }} <br>
                                                    {{ substr($professionnel->adresse, 26, 50) }}
                                                </div>
                                            </div>
                                            <div class="carouse-with-body-five-head-type">
                                                {{ ucfirst($professionnel->typeBien->nom) }}
                                            </div>
                                            <div class="carouse-with-body-five-head-type-super">
                                                                                                                               @if ($professionnel->surface_habitable)
                                                                                {{ $professionnel->surface_habitable }} m²
                                                                            @endif

                                                                            <!--@if ($professionnel->superficie_terrain)
                                                                                {{ $professionnel->superficie_terrain }} m²
                                                                            @endif -->

                                                                            @if ($professionnel->surface_totale)
                                                                                {{ $professionnel->surface_totale }} m² 
                                                                            @endif

                                                                            @if ($professionnel->surface_batiment)
                                                                                {{ $professionnel->surface_batiment }} m²
                                                                            @endif

                                                                            @if ($professionnel->surface_garage)
                                                                                {{ $professionnel->surface_garage }} m²
                                                                            @endif


                                                                            @if ($professionnel->surface_disponible_un)
                                                                                {{ $professionnel->surface_disponible_un }} m²
                                                                            @endif
                                            </div>
                                        </div>
                                        <!-- <div class="carouse-with-body-five-content">
                                            300m du lieu de recherche
                                        </div> -->
                                        <div class="carouse-with-body-five-footer">
                                            <div class="carouse-body-three-content-boxex-next">
                                                @if($professionnel->venteActif)
                                                    Vente
                                                @endif

                                                @if($professionnel->locationActif)
                                                    Location
                                                @endif

                                                @if($professionnel->echangeActif)
                                                    Echange
                                                @endif
                                                <div class="carouse-body-three-content-boxex-next-img">
                                                    <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="25">
                                                </div>
                                                <div class="carouse-body-three-content-boxex-next-img-text">
                                                    @if($professionnel->venteActif)
                                                        {{ $professionnel->prix_vente }} <span>MAD</span>
                                                    @endif

                                                    @if($professionnel->locationActif)
                                                        @if($professionnel->prix_mois)
                                                            {{ $professionnel->prix_mois }}<span> MAD/MOIS</span>
                                                        @endif
                                                        @if($professionnel->prix_jour)
                                                            {{ $professionnel->prix_jour }}<span> MAD/JOUR</span>
                                                        @endif
                                                    @endif

                                                    @if($professionnel->echangeActif)
                                                        25/02/2020 - 30/02/2020
                                                    @endif
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
@stop

@extends('myhouse.front.template')


@section('title')
    Professionnel mixte
@stop


@section('header')
    @include('myhouse.front.pages.recherche.include.header')
@stop


@section('content')
    <div class="professionnel">
        <div class="overplay">
            <div class="row mt-25">
                <div class="page">
                    <div class="page-carte">
                        <div class="is-map">
                            <div class="map" id="map"></div>
                        </div>
                    </div>
                    <div class="page-liste">

                        @if ($professionnels->count() <= 0)
                            <div class="no-result">
                                <p>
                                    {{ __('myhouse/recherche/particulier/resultat.ak') }}
                                </p>
                            </div>
                        @else
          




                            @if (request()->get('transaction') === "location")




                                <div class="result-number">
                                    <p>
                                        {{ $professionnels->where('locationActif', 1)->count() }} {{ __('myhouse/recherche/particulier/resultat.al') }}
                                    </p>
                                </div>


                            @foreach($professionnels->where('locationActif', 1) as $professionnel)


                                <div class="page-list-panel">
                                    <div class="page-list-panel-item">
                                        <a href="{{ route('resultat.professionnel', [strtolower($professionnel->typeBien->nom) . '-'. $professionnel->id]) }}" target="_blank">
                                            <div class="page-list-item-enterprise-logoos">
                                                <div class="page-list-item-enterprise-logo-box">
                                                    <div class="page-list-item-enterprise-logo-img">
                                                        <img src="{{ asset('development/files/professionnel/entreprise/39') . '/' . $professionnel->user->entreprises->last()->images }}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-text">

                                                        {{ $professionnel->user->entreprises->last()->nom }}
 
                                                    </div>
                                                </div>
                                            </div>

                                            <!--<div class="page-list-item-enterprise-event">
                                                
                                                <div class="page-list-item-enterprise-event-promortion">
                                                    <img src="{{ asset('images/residential/single/menu/pn.svg') }}" alt="">
                                                </div>

                                            </div> -->

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


                            @endforeach


                            @elseif(request()->get('transaction') === "achat")



                                <div class="result-number">
                                    <p>
                                        {{ $professionnels->where('venteActif', 1)->count() }} {{ __('myhouse/recherche/particulier/resultat.al') }}
                                    </p>
                                </div>

                            
                           @foreach($professionnels->where('venteActif', 1) as $professionnel)


                                    <div class="page-list-panel">
                                        <div class="page-list-panel-item">
                                            <a href="{{ route('resultat.professionnel', [strtolower($professionnel->typeBien->nom) . '-'. $professionnel->id]) }}" target="_blank">
                                                <div class="page-list-item-enterprise-logoos">
                                                    <div class="page-list-item-enterprise-logo-box">
                                                        <div class="page-list-item-enterprise-logo-img">
                                                            <img src="{{ asset('development/files/professionnel/entreprise/39') . '/' . $professionnel->user->entreprises->last()->images }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-item-enterprise-logo-text">

                                                            {{ $professionnel->user->entreprises->last()->nom }}
    
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--<div class="page-list-item-enterprise-event">
                                                    
                                                    <div class="page-list-item-enterprise-event-promortion">
                                                        <img src="{{ asset('images/residential/single/menu/pn.svg') }}" alt="">
                                                    </div>

                                                </div> -->

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


                                @endforeach
                          @else

                            @foreach($professionnels as $professionnel)

                                <div class="page-list-panel">
                                    <div class="page-list-panel-item">
                                        <a href="{{ route('resultat.professionnel', [strtolower($professionnel->typeBien->nom) . '-'. $professionnel->id]) }}" target="_blank">
                                            <div class="page-list-item-enterprise-logoos">
                                                <div class="page-list-item-enterprise-logo-box">
                                                    <div class="page-list-item-enterprise-logo-img">
                                                        <img src="{{ asset('development/files/professionnel/entreprise/39') . '/' . $professionnel->user->entreprises->last()->images }}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-text">

                                                        {{ $professionnel->user->entreprises->last()->nom }}
 
                                                    </div>
                                                </div>
                                            </div>

                                            <!--<div class="page-list-item-enterprise-event">
                                                
                                                <div class="page-list-item-enterprise-event-promortion">
                                                    <img src="{{ asset('images/residential/single/menu/pn.svg') }}" alt="">
                                                </div>

                                            </div> -->

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


                            @endforeach
                            
                            @endif

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

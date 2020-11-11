@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/professionnel/agenda.aa') }}
@stop


@section('meta')
    <meta name = "page" content ='{{  str_replace("http://myhouse.com", "", request()->url())  }}'>
@endsection



@section('content')
    <div class="the-pp">
        <div class="menu-wrap">
            <div class="menu-wrap-content">
                <!-- X button -->
                <div class="menu-wrap-x-button">
                    <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                </div>
                <!-- End X button -->

            @include('myhouse.back.includes.professionnel.aside')

            <!-- List --> 

                <div class="menu-body pl-vars">
                    <div class="menu-body-title">{{ __('myhouse/back/menu/professionnel/agenda.ab') }}</div>
                    <div class="menu-body-hr"></div>
                    <div class="menu-body-subs">
                        <span class="menu-body-subs-one">{{ __('myhouse/back/menu/professionnel/agenda.ac') }}</span>
                        <span class="menu-body-subs-two">{{ auth()->user()->email    }}</span>
                    </div>
                @include('myhouse.back.menu.modules.particulier.calendar')

                    <div class="menu-body-content">





                @if ($agendas->count() == 0)
                    <div class="no-result">
                        <p>
                            {{ __('myhouse/back/menu/particulier/annonce.ao') }}
                        </p>
                    </div>
                @else

                    @foreach($agendas as $agenda)

                        <!--<div class="menu-body-content-item">
                            <div class="display-item">
                                <div class="page-list-panelle menu-encounter">
                                    <div class="page-list-panel-item">

                                        <div class="page-list-top">
                                            <div class="page-list-top-button">
                                                {{ __('myhouse/back/menu/professionnel/interesse.ad') }} 14/09/2019
                                            </div>
                                        </div>


                                        <a href="{{ route('resultat.professionnel', 'residence-alpe') }}" target="_blank">
                                            <div class="page-list-item-enterprise-logoos">
                                                <div class="page-list-item-enterprise-logo-box">
                                                    <div class="page-list-item-enterprise-logo-img">
                                                        <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-text">
                                                        Real Estate Immobilier
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel slide" data-ride="carousel" id="slider1">
                                                <ol class="carousel-indicators">
                                                    <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                                    <li data-target="#slider1" data-slide-to="1"></li>
                                                    <li data-target="#slider1" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img
                                                            class="img-fluid"
                                                            src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                            alt="First Slide"
                                                        />
                                                    </div>
                                                    <div class="carousel-item ">
                                                        <img
                                                            class="img-fluid"
                                                            src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                            alt="Second Slide"
                                                        />
                                                    </div>
                                                    <div class="carousel-item ">
                                                        <img
                                                            class="img-fluid"
                                                            src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                            alt="Third Slide"
                                                        />
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </a>


                                    </div>
                                    <div>
                                        <div class="must-use-top">
                                            <div class="page-list-top-share">
                                                <div class="page-list-top-share-content">
                                                    <div class="page-list-top-share-content-img">
                                                        <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                    </div>
                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/professionnel/interesse.ae') }}</div>
                                                </div>
                                                <div class="page-list-top-share-content">
                                                    <div class="page-list-top-share-content-img">
                                                        <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                    </div>
                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/professionnel/interesse.af') }}</div>
                                                </div>
                                                <div class="page-list-top-share-content">
                                                    <div class="page-list-top-share-content-img">
                                                        <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                    </div>
                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/professionnel/interesse.ag') }}</div>
                                                </div>
                                                <div class="page-list-top-share-content">
                                                    <div class="page-list-top-share-content-img">
                                                        <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                    </div>
                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/professionnel/interesse.ah') }}</div>
                                                </div>
                                                <div class="page-list-top-share-content">
                                                    <div class="page-list-top-share-content-img">
                                                        <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                    </div>
                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/professionnel/interesse.ai') }}</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="page-list-panel-item-two-pro">
                                            <a href="{{ route('resultat.professionnel', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                                                <div class="page-list-panel-item-two-pro-head">
                                                    <div class="page-list-panel-item-two-head-left">
                                                        <div class="page-list-panel-item-two-head-left-box">
                                                            <div class="page-list-panel-item-two-head-left-box-left">
                                                                <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="page-list-panel-item-two-head-left-box-right">
                                                                Casablanca Maarif
                                                                <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title">
                                                            Appartement
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="page-list-panel-item-two-pro-body">

                                                    <div class="page-list-panel-item-two-pro-body-box">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            Vente
                                                            <div class="page-list-panel-item-two-pro-body-content-image">
                                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                            </div>
                                                            <div class="page-list-panel-item-two-pro-body-content-price">
                                                                1.000.000
                                                                <span class="text-uppercase">mad</span>
                                                            </div>
                                                        </div>
                                                        <div class="page-list-panel-item-two-pro-text">
                                                            136 m2
                                                        </div>
                                                    </div>


                                                    <div class="page-list-item-two-pro-body-content-text">
                                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                                        voluptartem accusantium doloremque laudantium, totam rem
                                                    </div>


                                                </div>
                                                <div class="page-list-panel-item-two-pro-footer">
                                                    <div class="page-list-panel-item-two-body-box-threes">
                                                        <div class="page-list-panel-item-two-body-box-three-box">
                                                            Superficie Projet
                                                        </div>
                                                        <div class="page-list-panel-item-two-body-box-three-box">
                                                            Appart de 67 m2 à 150 m2
                                                        </div>
                                                        <div class="page-list-panel-item-two-body-box-three-box">
                                                            Forêt
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-threes">
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
                                </div>

                            </div>
                        </div> -->
                        <div class="menu-body-content-item">
                            <div class="display-item" id ="{{ $agenda->id }}">
                                <div class="page-list-panelle">
                                    <div class="page-list-panel-item">

                                        <div class="page-list-top">
                                            <div class="page-list-top-button">
                                                {{ __('myhouse/back/menu/professionnel/interesse.ad') }} 
                                                 {{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->created_at)->format('d m y')) }}
                                            </div>
                                        </div>


                                        <a href="{{ route('resultat.professionnel', [strtolower($agenda->typeBien->nom) . '-'. $agenda->id]) }}">
                                            <div class="page-list-item-enterprise-logoos">
                                                <div class="page-list-item-enterprise-logo-box">
                                                    <div class="page-list-item-enterprise-logo-img">
                                                        <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-text">
                                                        {{ $agenda->user->entreprises->last()->nom }}

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel slide" data-ride="carousel" id="{{ $agenda->last_id }}">
                                                <ol class="carousel-indicators">
                                                    
                                                    @foreach(json_decode($agenda->images) as $image)
                                                        <li class="{{ $loop->first ? 'active' : '' }}" data-target="#{{ $agenda->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                    @endforeach                                                    
                                                
                                                </ol>
                                                <div class="carousel-inner">
                                        

                                                    @foreach(json_decode($agenda->images) as $image)
                                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                            <img
                                                                class="img-fluid"
                                                                src="{{ asset('development/files/professionnel/429/') . '/' . $image }}"
                                                                alt="Third Slide"
                                                            />
                                                        </div>
                                                    @endforeach
                       
                                                </div>


                                                <a class="carousel-control-prev" href="#{{ $agenda->last_id }}" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#{{ $agenda->last_id }}" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </a>


                                    </div>
                                    <div>
                                        <div class="must-use-top">
                                            <div class="page-list-top-share">
                                                <div class="page-list-top-share-content">
                                                    <div class="page-list-top-share-content-img">
                                                        <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                    </div>
                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/professionnel/interesse.ae') }}</div>
                                                </div>
                                                <div class="page-list-top-share-content">
                                                    <div class="page-list-top-share-content-img">
                                                        <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                    </div>
                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/professionnel/interesse.af') }}</div>
                                                </div>
                                                <div class="page-list-top-share-content">
                                                    <div class="page-list-top-share-content-img">
                                                        <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                    </div>
                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/professionnel/interesse.ag') }}</div>
                                                </div>
                                                <div class="page-list-top-share-content">
                                                    <div class="page-list-top-share-content-img">
                                                        <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                    </div>
                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/professionnel/interesse.ah') }}</div>
                                                
                                                </div>
                                                
                                                <div>
                                                    <a href="{{ route("professionnel.annonce.uninteresse", $agenda->id) }}" style="text-decoration:none; color: inherit;">
                                                        <div class="page-list-top-share-content">
                                                            <div class="page-list-top-share-content-img">
                                                                <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                            </div>
                                                            <div class="page-list-top-share-content-text">
                                                                {{ __('myhouse/back/menu/particulier/interesse.ah') }}
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>


                                                <!--<div class="page-list-top-share-content">
                                                    <div class="page-list-top-share-content-img">
                                                        <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                    </div>
                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/professionnel/interesse.ai') }}</div>
                                                </div> -->

                                            </div>
                                        </div>
                                        <div class="page-list-panel-item-two-pro">
                                            <a href="{{ route('resultat.professionnel', [strtolower($agenda->typeBien->nom) . '-'. $agenda->id]) }}" style="text-decoration: none; color: inherit" >
                                                <div class="page-list-panel-item-two-pro-head">
                                                    <div class="page-list-panel-item-two-head-left">
                                                        <div class="page-list-panel-item-two-head-left-box">
                                                            <div class="page-list-panel-item-two-head-left-box-left">
                                                                <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="page-list-panel-item-two-head-left-box-right">

                                                                    {{ substr($agenda->adresse, 0, 26) }} <br>
                                                                    {{ substr($agenda->adresse, 26, 50) }}
                                                                <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title">
                                                              @isset($agenda->typeBien->nom)
                                                                        {{ ucfirst($agenda->typeBien->nom)  }}
                                                              @endisset
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">
                                                                {{ $agenda->nombre_chambre }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="page-list-panel-item-two-pro-body">

                                                    <div class="page-list-panel-item-two-pro-body-box">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            
                                                                        @if($agenda->venteActif)
                                                                            Vente
                                                                        @endif

                                                                        @if($agenda->locationActif)
                                                                            Location
                                                                        @endif

                                                                        @if($agenda->echangeActif)
                                                                            Echange
                                                                        @endif



                                                            <div class="page-list-panel-item-two-pro-body-content-image">
                                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                            </div>
                                                            <div class="page-list-panel-item-two-pro-body-content-price">
                                                                            @if($agenda->venteActif)
                                                                                {{ substr($agenda->prix_vente, 0, 3) }}.{{ substr($agenda->prix_vente, 3, 3) }}.{{ substr($agenda->prix_vente, 6, 3) }} <span>MAD</span>
                                                                            @endif

                                                                            @if($agenda->locationActif)
                                                                                @if($agenda->prix_mois)
                                                                                    {{ $agenda->prix_mois }}<span> MAD/MOIS</span>
                                                                                @endif
                                                                                @if($agenda->prix_jour)
                                                                                    {{ $agenda->prix_jour }}<span> MAD/JOUR</span>
                                                                                @endif
                                                                            @endif

                                                                            @if($agenda->echangeActif)
                                                                                25/02/2020 - 30/02/2020
                                                                            @endif
                                                            </div>
                                                        </div>
                                                        <div class="page-list-panel-item-two-pro-text">
                                                                @if ($agenda->surface_habitable)
                                                                    {{ $agenda->surface_habitable }} m²
                                                                @endif

                                                                <!--@if ($agenda->superficie_terrain)
                                                                    {{ $agenda->superficie_terrain }} m²
                                                                @endif -->

                                                                <!--@if ($agenda->surface_totale)
                                                                    {{ $agenda->surface_totale }} m² 
                                                                @endif -->

                                                                @if ($agenda->surface_batiment)
                                                                    {{ $agenda->surface_batiment }} m²
                                                                @endif

                                                                @if ($agenda->surface_garage)
                                                                    {{ $agenda->surface_garage }} m²
                                                                @endif


                                                                @if ($agenda->surface_disponible_un)
                                                                    {{ $agenda->surface_disponible_un }} m²
                                                                @endif                                                            
                                                        </div>
                                                    </div>


                                                    <div class="page-list-item-two-pro-body-content-text">
                                                        {{ substr($agenda->description, 0, 150) }}...
                                                    </div>


                                                </div>
                                                <div class="page-list-panel-item-two-pro-footer">
                                                    <div class="page-list-panel-item-two-body-box-threes">
                                                        @include('myhouse.share.criteres', ['particulier' => $agenda])
                                                    </div>
                                 
                                                </div>
                                            </a>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    @endforeach

                @endif



                    </div>
                </div>


                <!-- End List -->


            </div>
        </div>

    </div>
@stop


@section('scripts')
    <script src = "{{ asset('development/js/menu/agenda/professionnel/calendar.js') }}"></script>
    <script src = "{{ asset('development/js/calendar/ui.js') }}"></script>
    <script src = "{{ asset('development/js/calendar/notify.js') }}"></script>
@stop

@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/professionnel/interesse.aa') }}
@stop

@section('content')
    <div class="menu-wrap">
        <div class="menu-wrap-content">
            <!-- X button -->
            <div class="menu-wrap-x-button">
                <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
            </div>
            <!-- End X button -->

        @include('myhouse.back.includes.professionnel.aside', ['interesses' => $interesses])
        <!-- List -->

            <div class="the-pp">
                <div class="menu-body pl-var">


            @include('myhouse.front.includes.message')


                    <div class="menu-body-title">{{ __('myhouse/back/menu/professionnel/interesse.ab') }}</div>
                    <div class="menu-body-hr"></div>
                    @if ($user === 'professionnel')
                        <div class="menu-body-subs">
                            <span class="menu-body-subs-one">{{ __('myhouse/back/menu/professionnel/interesse.ac') }}</span>
                            <span class="menu-body-subs-two">{{ auth()->user()->email }}</span>
                        </div>
                    @endif
                    <div class="menu-body-content">



                @if ($interesses->count() > 0)


                   @foreach($interesses as $interesse)


                        <div class="menu-body-content-item">
                            <div class="display-item">
                                <div class="page-list-panelle">
                                    <div class="page-list-panel-item">

                                        <div class="page-list-top">
                                            <div class="page-list-top-button">
                                                {{ __('myhouse/back/menu/professionnel/interesse.ad') }} 
                                                 {{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->created_at)->format('d m y')) }}
                                            </div>
                                        </div>


                                        <a href="{{ route('resultat.professionnel', [strtolower($interesse->typeBien->nom) . '-'. $interesse->id]) }}">
                                            <div class="page-list-item-enterprise-logoos">
                                                <div class="page-list-item-enterprise-logo-box">
                                                    <div class="page-list-item-enterprise-logo-img">
                                                        <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-text">
                                                        {{ $interesse->user->entreprises->last()->nom }}

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel slide" data-ride="carousel" id="{{ $interesse->last_id }}">
                                                <ol class="carousel-indicators">
                                                    
                                                    @foreach(json_decode($interesse->images) as $image)
                                                        <li class="{{ $loop->first ? 'active' : '' }}" data-target="#{{ $interesse->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                    @endforeach                                                    
                                                
                                                </ol>
                                                <div class="carousel-inner">
                                        

                                                    @foreach(json_decode($interesse->images) as $image)
                                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                            <img
                                                                class="img-fluid"
                                                                src="{{ asset('development/files/professionnel/429/') . '/' . $image }}"
                                                                alt="Third Slide"
                                                            />
                                                        </div>
                                                    @endforeach
                       
                                                </div>


                                                <a class="carousel-control-prev" href="#{{ $interesse->last_id }}" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#{{ $interesse->last_id }}" role="button" data-slide="next">
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
                                                    <a href="{{ route("professionnel.annonce.uninteresse", $interesse->id) }}" style="text-decoration:none; color: inherit;">
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
                                            <a href="{{ route('resultat.professionnel', [strtolower($interesse->typeBien->nom) . '-'. $interesse->id]) }}" style="text-decoration: none; color: inherit" >
                                                <div class="page-list-panel-item-two-pro-head">
                                                    <div class="page-list-panel-item-two-head-left">
                                                        <div class="page-list-panel-item-two-head-left-box">
                                                            <div class="page-list-panel-item-two-head-left-box-left">
                                                                <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="page-list-panel-item-two-head-left-box-right">

                                                                    {{ substr($interesse->adresse, 0, 26) }} <br>
                                                                    {{ substr($interesse->adresse, 26, 50) }}
                                                                <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title">
                                                              @isset($interesse->typeBien->nom)
                                                                        {{ ucfirst($interesse->typeBien->nom)  }}
                                                              @endisset
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">
                                                                {{ $interesse->nombre_chambre }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="page-list-panel-item-two-pro-body">

                                                    <div class="page-list-panel-item-two-pro-body-box">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            
                                                                        @if($interesse->venteActif)
                                                                            Vente
                                                                        @endif

                                                                        @if($interesse->locationActif)
                                                                            Location
                                                                        @endif

                                                                        @if($interesse->echangeActif)
                                                                            Echange
                                                                        @endif



                                                            <div class="page-list-panel-item-two-pro-body-content-image">
                                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                            </div>
                                                            <div class="page-list-panel-item-two-pro-body-content-price">
                                                                            @if($interesse->venteActif)
                                                                                {{ substr($interesse->prix_vente, 0, 3) }}.{{ substr($interesse->prix_vente, 3, 3) }}.{{ substr($interesse->prix_vente, 6, 3) }} <span>MAD</span>
                                                                            @endif

                                                                            @if($interesse->locationActif)
                                                                                @if($interesse->prix_mois)
                                                                                    {{ $interesse->prix_mois }}<span> MAD/MOIS</span>
                                                                                @endif
                                                                                @if($interesse->prix_jour)
                                                                                    {{ $interesse->prix_jour }}<span> MAD/JOUR</span>
                                                                                @endif
                                                                            @endif

                                                                            @if($interesse->echangeActif)
                                                                                25/02/2020 - 30/02/2020
                                                                            @endif
                                                            </div>
                                                        </div>
                                                        <div class="page-list-panel-item-two-pro-text">
                                                                @if ($interesse->surface_habitable)
                                                                    {{ $interesse->surface_habitable }} m²
                                                                @endif

                                                                <!--@if ($interesse->superficie_terrain)
                                                                    {{ $interesse->superficie_terrain }} m²
                                                                @endif -->

                                                                <!--@if ($interesse->surface_totale)
                                                                    {{ $interesse->surface_totale }} m² 
                                                                @endif -->

                                                                @if ($interesse->surface_batiment)
                                                                    {{ $interesse->surface_batiment }} m²
                                                                @endif

                                                                @if ($interesse->surface_garage)
                                                                    {{ $interesse->surface_garage }} m²
                                                                @endif


                                                                @if ($interesse->surface_disponible_un)
                                                                    {{ $interesse->surface_disponible_un }} m²
                                                                @endif                                                            
                                                        </div>
                                                    </div>


                                                    <div class="page-list-item-two-pro-body-content-text">
                                                        {{ substr($interesse->description, 0, 150) }}...
                                                    </div>


                                                </div>
                                                <div class="page-list-panel-item-two-pro-footer">
                                                    <div class="page-list-panel-item-two-body-box-threes">
                                                        @include('myhouse.share.criteres', ['particulier' => $interesse])
                                                    </div>
                                 
                                                </div>
                                            </a>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                   @endforeach



                @else

                    <div class="no-result">
                        <p>
                            {{ __('myhouse/back/menu/particulier/annonce.an') }}
                        </p>
                    </div>

                @endif






                    </div>
                </div>

            </div>
            <!-- End List -->


        </div>
    </div>
@stop

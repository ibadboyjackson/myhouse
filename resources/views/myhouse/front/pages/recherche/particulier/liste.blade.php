@extends('myhouse.front.template')


@section('title')
    Particulier liste
@stop


@section('header')
    @include('myhouse.front.pages.recherche.include.header')
@stop


@section('content')
    <div class="overflay mixte">

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

                    <div class="display mb-5 has-mt"> 

                        @if ($particuliers->count() <= 0)
                            <div class="no-result">
                                <p>
                                    {{ __('myhouse/recherche/particulier/resultat.ak') }}
                                </p>
                            </div>
                        @else
                            <div class="result-number">
                                <p>
                                    {{ $particuliers->count() }} {{ __('myhouse/recherche/particulier/resultat.al') }}
                                </p>
                            </div>

                            @foreach($particuliers as $particulier)
                                <div class="display-item">
                                    <div class="page-list-panel">
                                        <div class="page-list-panel-item">
                                            <a href="{{ route('resultat.particulier', [$particulier->typeBien->nom .'-' . $particulier->id]) }}" target="_blank">

                                                <div class="carousel slide" data-ride="carousel" id="a{{ $particulier->last_id }}">
                                                    <ol class="carousel-indicators">
                                                        @foreach(json_decode($particulier->images) as $image)
                                                            <li class="{{ $loop->first ? 'active' : '' }}" data-target="#a{{ $particulier->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                        @endforeach
                                                    </ol>
                                                    <div class="carousel-inner">

                                                        @foreach(json_decode($particulier->images) as $image)
                                                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                                <img
                                                                    class="img-fluid"
                                                                    src="{{ asset('development/files/particulier/429/') . '/' . $image }}"
                                                                    alt="Third Slide"
                                                                />
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                    <a class="carousel-control-prev" href="#a{{ $particulier->last_id }}" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#a{{ $particulier->last_id }}" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="page-list-panel-item-two-pro">
                                            <a href="{{ route('resultat.particulier', [$particulier->typeBien->nom .'-' . $particulier->id]) }}" style="text-decoration: none; color: inherit" target="_blank">
                                                
                                                
                                                
                                                        <div class="page-list-panel-item-two-pro-head">
                                                            <div class="page-list-panel-item-two-head-left">
                                                                <div class="page-list-panel-item-two-head-left-box">
                                                                    <div class="page-list-panel-item-two-head-left-box-left">
                                                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid" width="10" height="10">
                                                                    </div>
                                                                    <div class="page-list-panel-item-two-head-left-box-right">
                                                                        {{ substr($particulier->adresse, 0, 38) }} <br>
                                                                    <strong>{{ ucfirst($particulier->quartier) }}</strong>, 
                                                                    <strong>{{ ucfirst($particulier->ville) }}</strong>

                                                                    <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="page-list-panel-item-two-body-box-item">
                                                                <div class="page-list-panel-item-two-body-box-item-title" style="font-weight: 600; color: #575757">

                                                                    @isset($particulier->typeBien->nom)
                                                                        {{ ucfirst($particulier->typeBien->nom)  }}
                                                                    @endisset


                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp">
                                                                        {{ $particulier->nombre_chambre }}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        
                                                        <div class="page-list-panel-item-two-pro-body">

                                                            <div class="page-list-panel-item-two-pro-body-box">

                                                                <div class="page-list-panel-item-two-pro-body-box-st">
                                                                    
                                                                    <div class="page-list-panel-item-two-pro-body-content">

                                                                             @if ($particulier->surface_habitable)

                                                                                @if (isset($particulier->typeBien->id) && $particulier->typeBien->nom === 'Plateau')
                                                                                    <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.az') }} {{ $particulier->surface_habitable }} m²</span>
                                                                                @else
                                                                                    <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.ay') }} {{ $particulier->surface_habitable }} m²</span>
                                                                                @endif

                                                                            @elseif($particulier->surface_garage)
                                                                                <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.ax') }} {{ $particulier->surface_garage }} m²</span>
                                                                            @elseif ($particulier->surface_total)
                                                                                <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.aw') }} {{ $particulier->surface_total }} m²</span>
                                                                            @elseif (isset($particulier->typeBien->id) && $particulier->typeBien->nom === 'Cité universitaire')
                                                                                <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.at') }}</span>
                                                                            @else
                                                                                <div style="color: transparent;">5</div>
                                                                            @endif


                                                                    
                                                                    </div>
                                                                    
                                                                    <div class="page-list-panel-item-two-pro-body-content-text d-flex justify-content-between">

                                                                        @if ($particulier->superficie_terrain)
                                                                            <div style="font-size: 14px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.aaa') }} {{ $particulier->superficie_terrain }} m²</div>
                                                                        @elseif(isset($particulier->typeBien->id) && $particulier->typeBien->nom === 'Cité universitaire')
                                                                            <div style="font-size: 14px; color: #868686;">
                                                                                <span style="font-size: 14px;">{{ __('myhouse/back/menu/particulier/annonce.au') }}  {{ $particulier->surface_disponible_un }} m²</span>
                                                                                <span style="font-size: 14px;">{{ __('myhouse/back/menu/particulier/annonce.av') }} {{ $particulier->surface_disponible_deux }} m²</span>
                                                                            </div>
                                                                        @else
                                                                            <div></div>
                                                                        @endif


                                                                    
                                                                        <div class="particulier-vente" style="color: #868686; font-weight: unset;">

                                                                            @if ($particulier->venteActif !=0 && $particulier->echangeActif !=0)
                                                                                <strong>Achat </strong>
                                                                            @elseif($particulier->venteActif !=0 && $particulier->locationActif !=0)
                                                                                <strong>Location </strong>
                                                                            @elseif($particulier->locationActif !=0 && $particulier->echangeActif !=0)
                                                                                @if ($particulier->echange_provisoir == 1)
                                                                                    <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                @endif

                                                                                @if ($particulier->echange_definitif == 1)

                                                                                    <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                @endif
                                                                            @elseif($particulier->echangeActif !=0 && $particulier->locationActif !=0 && $particulier->venteActif !=0)
                                                                                <strong>Achat </strong>
                                                                            @else

                                                                                @if ($particulier->venteActif != 0)
                                                                                    <strong>Achat </strong>
                                                                                    
                                                                                @endif

                                                                                @if ($particulier->locationActif != 0)
                                                                                    <strong>Location </strong>
                                                                                    
                                                                                @endif

                                                                                @if ($particulier->echangeActif != 0)

                                                                                    @if ($particulier->echange_provisoir == 1)
                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                    @endif

                                                                                    @if ($particulier->echange_definitif == 1)

                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                    @endif

                                                                                @endif

                                                                            @endif




















                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                
                                                                <div class="page-list-panel-item-two-pro-text" style="color: rgba(72, 172, 143, 0.62);">



                                                                            @if ($particulier->venteActif !=0 && $particulier->echangeActif !=0)
                                                                            
                                                                                 <strong>{{ $particulier->prix_vente }} <span style="font-size: 13px;">MAD</span> </strong>
                                                                            
                                                                            @elseif($particulier->venteActif !=0 && $particulier->locationActif !=0)
                                                                            

                                                                                    @if ($particulier->prix_mois != null && $particulier->prix_jour != null)

                                                                                    @else


                                                                                        @if ($particulier->prix_mois != null)

                                                                                            <strong>{{ $particulier->prix_mois }} <span style="font-size: 13px;">MAD/mois</span> </strong>

                                                                                        @endif

                                                                                        @if ($particulier->prix_jour != null)

                                                                                            <strong>{{ $particulier->prix_jour }} <span style="font-size: 13px;">MAD/jour</span> </strong>

                                                                                        @endif


                                                                                    @endif
                                                                            
                                                                            @elseif($particulier->locationActif !=0 && $particulier->echangeActif !=0)
                                                                            
                                                                                @if ($particulier->echange_provisoir == 1)
                                                                                    <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                @endif

                                                                                @if ($particulier->echange_definitif == 1)

                                                                                    <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                @endif
                                                                            
                                                                            @elseif($particulier->echangeActif !=0 && $particulier->locationActif !=0 && $particulier->venteActif !=0)
                                                                                strong>{{ ucfirst(__('myhouse/back/menu/particulier/annonce.as')) }}</strong>
                                                                            @else

                                                                  
                                                                                @if($particulier->venteActif)
                                                                                    <strong>{{ $particulier->prix_vente }} <span style="font-size: 13px;">MAD</span> </strong>
                                                                                @endif

                                                                                @if($particulier->locationActif)

                                                                                    @if ($particulier->prix_mois != null && $particulier->prix_jour != null)

                                                                                    @else


                                                                                        @if ($particulier->prix_mois != null)

                                                                                            <strong>{{ $particulier->prix_mois }} <span style="font-size: 13px;">MAD/mois</span> </strong>

                                                                                        @endif

                                                                                        @if ($particulier->prix_jour != null)

                                                                                            <strong>{{ $particulier->prix_jour }} <span style="font-size: 13px;">MAD/jour</span> </strong>

                                                                                        @endif


                                                                                    @endif
                                                                                    

                                                                                @endif
                                                                                

                                                                                @if ($particulier->echangeActif) 
                                                                                    <strong>{{ ucfirst(__('myhouse/back/menu/particulier/annonce.as')) }}</strong>
                                                                                @endif


                                                                            @endif    
                                                                                

                                                                </div>

                                                            </div>


                                                            <!-- <div class="page-list-item-two-pro-body-content-text">
                                                                {{ substr($particulier->description, 0, 92) }} (...)

                                                            </div> -->

                                                        </div>
                                                        


                                                <div class="page-list-panel-item-two-pro-footer">
                                                    <div class="page-list-panel-item-two-body-box-threes">
                                                        @include('myhouse.share.criteres', ['particulier' => $particulier])
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



        <!-- List three -->



        <div id = "liste-three" class="mt-28 mb-68 list-button">
            <div style="margin-top: 70px;">
                <div class="grid-container">


                    @if ($particuliers->count() <= 0)
                        <div class="no-result">
                            <p>
                                {{ __('myhouse/recherche/particulier/resultat.ak') }}
                            </p>
                        </div>
                    @else

                        @foreach($particuliers as $particulier)

                            <div class="grid-item">
                                <div class="carouse">
                                    <a href="{{ route('resultat.particulier', [$particulier->typeBien->nom .'-' . $particulier->id]) }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
                                            <div class="carousel slide" data-ride="carousel" id="b{{ $particulier->last_id }}">
                                                <ol class="carousel-indicators">
                                                    @foreach(json_decode($particulier->images) as $image)
                                                        <li class="{{ $loop->first ? 'active' : '' }}" data-target="#b{{ $particulier->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                    @endforeach
                                                </ol>
                                                <div class="carousel-inner">
                                                    @foreach(json_decode($particulier->images) as $image)
                                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                            <img
                                                                class="img-fluid"
                                                                src="{{ asset('development/files/particulier/400/') . '/' . $image }}"
                                                                alt="Third Slide"
                                                            />
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <a class="carousel-control-prev" href="#b{{ $particulier->last_id }}" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#b{{ $particulier->last_id }}" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ route('resultat.particulier', [$particulier->typeBien->nom .'-' . $particulier->id]) }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-body-three" style="max-width: 400px;">
                                            <div class="carouse-body-three-head">
                                                <div class="page-list-panel-item-two-head-left-box">
                                                    <div class="page-list-panel-item-two-head-left-box-left">
                                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="page-list-panel-item-two-head-left-box-right">
                                                        {{ substr($particulier->adresse, 0, 100) }}
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
                                                        <div>
                                                            
                                                                            @if ($particulier->venteActif !=0 && $particulier->echangeActif !=0)
                                                                                <strong>Achat </strong>
                                                                            @elseif($particulier->venteActif !=0 && $particulier->locationActif !=0)
                                                                                <strong>Location </strong>
                                                                            @elseif($particulier->locationActif !=0 && $particulier->echangeActif !=0)
                                                                                @if ($particulier->echange_provisoir == 1)
                                                                                    <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                @endif

                                                                                @if ($particulier->echange_definitif == 1)

                                                                                    <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                @endif
                                                                            @elseif($particulier->echangeActif !=0 && $particulier->locationActif !=0 && $particulier->venteActif !=0)
                                                                                <strong>Achat </strong>
                                                                            @else

                                                                                @if ($particulier->venteActif != 0)
                                                                                    <strong>Achat </strong>
                                                                                    
                                                                                @endif

                                                                                @if ($particulier->locationActif != 0)
                                                                                    <strong>Location </strong>
                                                                                    
                                                                                @endif

                                                                                @if ($particulier->echangeActif != 0)

                                                                                    @if ($particulier->echange_provisoir == 1)
                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                    @endif

                                                                                    @if ($particulier->echange_definitif == 1)

                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                    @endif

                                                                                @endif

                                                                            @endif
                                                        </div>
                                                        <div class="carouse-body-three-content-boxex-next-text">


                                                      


                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carouse-body-content-boxexex">
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title">
                                                            {{ ucfirst($particulier->typeBien->nom) }}
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">
                                                                {{ $particulier->nombre_chambre }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carouse-body-content-boxexs">
                                                                @if ($particulier->surface_habitable)
                                                                    {{ $particulier->surface_habitable }} m²
                                                                @endif

                                                                @if ($particulier->superficie_terrain)
                                                                    ,{{ $particulier->superficie_terrain }} m²
                                                                @endif

                                                                @if ($particulier->surface_totale)
                                                                    {{ $particulier->surface_totale }} m² 
                                                                @endif

                                                                @if ($particulier->surface_batiment)
                                                                    {{ $particulier->surface_batiment }} m²
                                                                @endif

                                                                @if ($particulier->surface_garage)
                                                                    {{ $particulier->surface_garage }} m²
                                                                @endif


                                                                @if ($particulier->surface_disponible_un)
                                                                    {{ $particulier->surface_disponible_un }} m²
                                                                @endif
                                                </div>
                                            </div>
                                            <div class="carouse-body-three-content-page">
                                                {{ substr($particulier->description, 0, 100) }}...
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







        <!-- Five -->

        <div id = "liste-five" class="mt-28 mb-68 list-button">
            <div class="grid-containers">


                @if ($particuliers->count() <= 0)
                    <div class="no-result">
                        <p>
                            {{ __('myhouse/recherche/particulier/resultat.ak') }}
                        </p>
                    </div>
                @else

                    @foreach($particuliers as $particulier)
                        <div class="grid-iteme">
                            <div class="carouse">
                                <a  href="{{ route('resultat.particulier', [$particulier->typeBien->nom .'-' . $particulier->id]) }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="carouse-image">
                                        <div class="slide">
                                            <div class="carousel slide" data-ride="carousel" id="c{{ $particulier->last_id }}">
                                                <ol class="carousel-indicators">
                                                    @foreach(json_decode($particulier->images) as $image)
                                                        <li class="{{ $loop->first ? 'active' : '' }}" data-target="#c{{ $particulier->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                    @endforeach
                                                </ol>
                                                <div class="carousel-inner">
                                                    @foreach(json_decode($particulier->images) as $image)
                                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                            <img
                                                                class="img-fluid"
                                                                src="{{ asset('development/files/particulier/400/') . '/' . $image }}"
                                                                alt="Third Slide"
                                                            />
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <a class="carousel-control-prev" href="#c{{ $particulier->last_id }}" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#c{{ $particulier->last_id }}" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                                <a  href="{{ route('resultat.particulier', [$particulier->typeBien->nom .'-' . $particulier->id]) }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="carouse-with-body-five">
                                        <div class="carouse-with-body-five-head">
                                            <div class="page-list-panel-item-two-head-left-box">
                                                <div class="page-list-panel-item-two-head-left-box-left">
                                                    <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-panel-item-two-head-left-box-right">
                                                    {{ substr($particulier->adresse, 0, 26) }} <br>
                                                    {{ substr($particulier->adresse, 26, 50) }}
                                                </div>
                                            </div>
                                            <div class="carouse-with-body-five-head-type">
                                                {{ ucfirst($particulier->typeBien->nom) }}

                                            </div>
                                            <div class="carouse-with-body-five-head-type-super">
                                                            @if ($particulier->surface_habitable)
                                                                    {{ $particulier->surface_habitable }} m²
                                                                @endif

                                                                @if ($particulier->superficie_terrain)
                                                                    {{ $particulier->superficie_terrain }} m²
                                                                @endif

                                                                @if ($particulier->surface_totale)
                                                                    {{ $particulier->surface_totale }} m² 
                                                                @endif

                                                                @if ($particulier->surface_batiment)
                                                                    {{ $particulier->surface_batiment }} m²
                                                                @endif

                                                                @if ($particulier->surface_garage)
                                                                    {{ $particulier->surface_garage }} m²
                                                                @endif


                                                                @if ($particulier->surface_disponible_un)
                                                                    {{ $particulier->surface_disponible_un }} m²
                                                                @endif
                                            </div>
                                        </div>
                                        <!-- <div class="carouse-with-body-five-content">
                                            300m du lieu de recherche
                                        </div> -->
                                        <div class="carouse-with-body-five-footer">
                                            <div class="carouse-body-three-content-boxex-next">
                                                                            @if ($particulier->venteActif !=0 && $particulier->echangeActif !=0)
                                                                                <strong>Achat </strong>
                                                                            @elseif($particulier->venteActif !=0 && $particulier->locationActif !=0)
                                                                                <strong>Location </strong>
                                                                            @elseif($particulier->locationActif !=0 && $particulier->echangeActif !=0)
                                                                                @if ($particulier->echange_provisoir == 1)
                                                                                    <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                @endif

                                                                                @if ($particulier->echange_definitif == 1)

                                                                                    <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                @endif
                                                                            @elseif($particulier->echangeActif !=0 && $particulier->locationActif !=0 && $particulier->venteActif !=0)
                                                                                <strong>Achat </strong>
                                                                            @else

                                                                                @if ($particulier->venteActif != 0)
                                                                                    <strong>Achat </strong>
                                                                                    
                                                                                @endif

                                                                                @if ($particulier->locationActif != 0)
                                                                                    <strong>Location </strong>
                                                                                    
                                                                                @endif

                                                                                @if ($particulier->echangeActif != 0)

                                                                                    @if ($particulier->echange_provisoir == 1)
                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                    @endif

                                                                                    @if ($particulier->echange_definitif == 1)

                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                    @endif

                                                                                @endif

                                                                            @endif
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-st">
                                                                            @if ($particulier->venteActif !=0 && $particulier->echangeActif !=0)
                                                                            
                                                                                 <strong>{{ $particulier->prix_vente }} <span style="font-size: 13px;">MAD</span> </strong>
                                                                            
                                                                            @elseif($particulier->venteActif !=0 && $particulier->locationActif !=0)
                                                                            

                                                                                    @if ($particulier->prix_mois != null && $particulier->prix_jour != null)

                                                                                    @else


                                                                                        @if ($particulier->prix_mois != null)

                                                                                            <strong>{{ $particulier->prix_mois }} <span style="font-size: 13px;">MAD/mois</span> </strong>

                                                                                        @endif

                                                                                        @if ($particulier->prix_jour != null)

                                                                                            <strong>{{ $particulier->prix_jour }} <span style="font-size: 13px;">MAD/jour</span> </strong>

                                                                                        @endif


                                                                                    @endif
                                                                            
                                                                            @elseif($particulier->locationActif !=0 && $particulier->echangeActif !=0)
                                                                            
                                                                                @if ($particulier->echange_provisoir == 1)
                                                                                    <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                @endif

                                                                                @if ($particulier->echange_definitif == 1)

                                                                                    <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                @endif
                                                                            
                                                                            @elseif($particulier->echangeActif !=0 && $particulier->locationActif !=0 && $particulier->venteActif !=0)
                                                                                strong>{{ ucfirst(__('myhouse/back/menu/particulier/annonce.as')) }}</strong>
                                                                            @else

                                                                  
                                                                                @if($particulier->venteActif)
                                                                                    <strong>{{ $particulier->prix_vente }} <span style="font-size: 13px;">MAD</span> </strong>
                                                                                @endif

                                                                                @if($particulier->locationActif)

                                                                                    @if ($particulier->prix_mois != null && $particulier->prix_jour != null)

                                                                                    @else


                                                                                        @if ($particulier->prix_mois != null)

                                                                                            <strong>{{ $particulier->prix_mois }} <span style="font-size: 13px;">MAD/mois</span> </strong>

                                                                                        @endif

                                                                                        @if ($particulier->prix_jour != null)

                                                                                            <strong>{{ $particulier->prix_jour }} <span style="font-size: 13px;">MAD/jour</span> </strong>

                                                                                        @endif


                                                                                    @endif
                                                                                    

                                                                                @endif
                                                                                

                                                                                @if ($particulier->echangeActif) 
                                                                                    <strong>{{ ucfirst(__('myhouse/back/menu/particulier/annonce.as')) }}</strong>
                                                                                @endif


                                                                            @endif    
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

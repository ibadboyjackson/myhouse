@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/particulier/annonce.aa') }}
@stop

@section('content')
<div style="position:relative;" class="you-css">
    @include('myhouse.front.includes.success')

    <div class="menu-wrap">
        <div class="menu-wrap-content">
            <!-- X button -->
            <a href="{{ $url }}" style="text-decoration: none; color: inherit">
                <div class="menu-wrap-x-button">
                    <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                </div>
            </a>




            <!-- End X button -->

        @include('myhouse.back.includes.particulier.aside', ['particuliers' => $particuliers])

        <!-- List -->
            <div class="menu-body pl-var">

                <div class="menu-body-title">{{ __('myhouse/back/menu/particulier/annonce.ab') }}</div>
                <div class="menu-body-hr"></div>





        <div class="d-flex justify-content-center mt-3">
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









<div class="menu-body-content">

            <div id = "liste-one" class="mt-28 mb-68 list-button liste-active">

                    @if($particuliers->count() <= 0)

                        <div class="no-result">
                            <p>
                                {{ __('myhouse/back/menu/particulier/annonce.aj') }}
                            </p>
                        </div>
                    @else

                        @foreach($particuliers as $particulier)


                            @if(! is_null($particulier->page))
                                <div class="menu-body-content-item">
                                    <div class="display-item">
                                        <div class="page-list-panelle">
                                            <div class="page-list-panel-item">

                                                <div class="page-list-top">
                                                    <div class="page-list-top-button">
                                                        {{ __('myhouse/back/menu/particulier/annonce.ac') }}
                                                        {{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->created_at)->format('d m y')) }}

                                                    </div>
                                                    <div class="page-list-top-share justify-content-end" style="border: unset !important; margin-right: 21px;">

                                                        <div>
                                                            <a href="{{ route('particulier.delete', ['id' => $particulier->id]) }}" style="text-decoration: none; color: inherit">
                                                                <div class="page-list-top-share-content">
                                                                    <div class="page-list-top-share-content-img">
                                                                        <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                                    </div>
                                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/particulier/annonce.af') }}</div>
                                                                </div>
                                                            </a>
                                                        </div>


                                                    </div>
                                                </div>
                                                <a href="{{ $particulier->uri }}" style="text-decoration: none; color: inherit">
                                                    <div class="banniere-annonce">
                                                        <div class="banniere-annonce-flash">
                                                            <div class="banniere-annonce-flash-title">
                                                                {{ __('myhouse/back/menu/particulier/annonce.ak') }}
                                                            </div>
                                                            <div class="banniere-annonce-flash-content">
                                                                {{ __('myhouse/back/menu/particulier/annonce.al') }} <br>
                                                                {{ __('myhouse/back/menu/particulier/annonce.am') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div style="height: 305px;">
                                                <div class="page-list-panel-item-two-top">
                                                </div>

                                                <div class="page-list-panel-item-two-pro">
                                                    <a href="{{ $particulier->uri }}" style="text-decoration: none; color: inherit">
                                                        <div class="page-list-panel-item-two-pro-head">
                                                            <div class="page-list-panel-item-two-head-left">
                                                                <div class="page-list-panel-item-two-head-left-box">
                                                                    <div class="page-list-panel-item-two-head-left-box-left">
                                                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                                    </div>
                                                                    <div class="page-list-panel-item-two-head-left-box-right">
                                                                        {{ substr($particulier->adresse, 0, 26) }} <br>
                                                                    {{ substr($particulier->adresse, 26, 50) }}
                                                                    <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="page-list-panel-item-two-body-box-item">
                                                                <div class="page-list-panel-item-two-body-box-item-title">

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

                                                                        @if($particulier->venteActif)
                                                                            Vente
                                                                        @endif

                                                                        @if($particulier->locationActif)
                                                                            Location
                                                                        @endif

                                                                        @if($particulier->echangeActif)
                                                                            Echange
                                                                        @endif

                                                                        <div class="page-list-panel-item-two-pro-body-content-text">

                                                                            @if($particulier->venteActif)
                                                                                {{ substr($particulier->prix_vente, 0, 3) }}.{{ substr($particulier->prix_vente, 3, 3) }}.{{ substr($particulier->prix_vente, 6, 3) }} MAD
                                                                            @endif

                                                                            @if($particulier->locationActif)
                                                                                @if($particulier->prix_mois)
                                                                                    {{ $particulier->prix_mois }}<span> MAD/MOIS</span>
                                                                                @endif
                                                                                @if($particulier->prix_jour)
                                                                                    {{ $particulier->prix_jour }}<span> MAD/JOUR</span>
                                                                                @endif
                                                                            @endif

                                                                            @if($particulier->echangeActif)
                                                                                25/02/2020 - 30/02/2020
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="page-list-panel-item-two-pro-text">


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


                                                            <div class="page-list-item-two-pro-body-content-text">
                                                                {{ substr($particulier->description, 0, 150) }}...
                                                            </div>


                                                        </div>
                                                        <div class="page-list-panel-item-two-pro-footer">
                                                            <div class="page-list-panel-item-two-body-box-threes">
                                                                @include('myhouse.share.criteres', ['particuliers' => $particulier])
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif



                            @if(! is_null($particulier->images)) 


                                    <div class="menu-body-content-item">
                                        <div class="display-item">
                                            <div class="page-list-panelle">
                                                <div class="page-list-panel-item">

                                                    <div class="page-list-top">
                                                        <div class="page-list-top-button">
                                                            {{ __('myhouse/back/menu/particulier/annonce.ac') }}
                                                            {{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->created_at)->format('d m y')) }}

                                                        </div>
                                                        <div class="page-list-top-share">

                                                            <div class="page-list-top-share-content">
                                                                <div class="page-list-top-share-content-img">
                                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                                </div>
                                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/particulier/annonce.ad') }}</div>
                                                            </div>
                                                            <div>
                                                                <a href="{{ route('particulier.edit', $particulier->id) }}" style="text-decoration: none; color: inherit">
                                                                    <div class="page-list-top-share-content">
                                                                        <div class="page-list-top-share-content-img">
                                                                            <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                                        </div>
                                                                        <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/particulier/annonce.ae') }}</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="{{ route('particulier.delete', ['id' => $particulier->id]) }}" style="text-decoration: none; color: inherit">
                                                                    <div class="page-list-top-share-content">
                                                                        <div class="page-list-top-share-content-img">
                                                                            <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                                        </div>
                                                                        <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/particulier/annonce.af') }}</div>
                                                                    </div>
                                                                </a>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <a href="{{ route('resultat.particulier', [strtolower($particulier->typeBien->nom) .'-' . $particulier->id]) }}" style="text-decoration: none; color: inherit" target="_blank">

                                                        <div class="carouse-image">

                                                            <div class="carousel slide" data-ride="carousel" id="{{ $particulier->last_id }}">

                                                                @if (isset($particulier->images))
                                                                
                                                                    <ol class="carousel-indicators">
                                                                
                                                                        @foreach(json_decode($particulier->images) as $image)
                                                                    
                                                                            <li class="{{ $loop->first ? 'active' : '' }}" data-target="#{{ $particulier->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                                    
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
                                                                @endif
                                                                <a class="carousel-control-prev" href="#{{ $particulier->last_id }}" role="button" data-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next" href="#{{ $particulier->last_id }}" role="button" data-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>


                                                <div style="height: 305px;">
                                                    
                                                    
                                                    <div class="page-list-panel-item-two-top">
                                                        <div class="page-list-panel-item-two-top-left">
                                                            {{ __('myhouse/back/menu/particulier/annonce.ag') }} AAZ5{{ \Illuminate\Support\Str::random(4) }}
                                                        </div>
                                                        <div class="page-list-panel-item-two-top-right">
                                                            
                                                            <span>{{ __('myhouse/back/menu/particulier/annonce.ap') }}  &nbsp;</span>
                                                            
                                                            @if ($particulier->online == 1)
                                                                <a href="{{ route('particulier.active.online', ['id' => $particulier->id]) }}" style="text-decoration: none; color: inherit">
                                                                    <span class="page-list-panel-active">{{ __('myhouse/back/menu/particulier/annonce.ah') }}</span>    -
                                                                </a>

                                                                <a href="{{ route('particulier.deactive.online', ['id' => $particulier->id]) }}" style="text-decoration: none; color: inherit">
                                                                    <span>{{ __('myhouse/back/menu/particulier/annonce.ai') }}</span>
                                                                </a>
                                                            @else
                                                                <a href="{{ route('particulier.active.online', ['id' => $particulier->id]) }}" style="text-decoration: none; color: inherit">
                                                                    <span class="">{{ __('myhouse/back/menu/particulier/annonce.ah') }}</span>    -
                                                                </a>

                                                                <a href="{{ route('particulier.deactive.online', ['id' => $particulier->id]) }}" style="text-decoration: none; color: inherit">
                                                                    <span class="page-list-panel-active">{{ __('myhouse/back/menu/particulier/annonce.ai') }}</span>
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="page-list-panel-item-two-pro">
                                                        <a href="{{ route('resultat.particulier', [strtolower($particulier->typeBien->nom) .'-' . $particulier->id]) }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                                            
                                                            
                                                            <div class="page-list-panel-item-two-pro-head">
                                                                <div class="page-list-panel-item-two-head-left">
                                                                    <div class="page-list-panel-item-two-head-left-box">
                                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid" width="10" height="10">
                                                                        </div>
                                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                                            {{ substr($particulier->adresse, 0, 38) }} <br>
                                                                        <strong>{{ ucfirst($particulier->quartier) }}</strong>, 
                                                                        <strong>{{ ucfirst(substr($particulier->ville, 0, 23)) }}</strong>

                                                                        <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="page-list-panel-item-two-body-box-item">
                                                                    <div class="page-list-panel-item-two-body-box-item-title">

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



                                                                        
                                                                            <div class="particulier-vente">


                                                                                @if ($particulier->venteActif && $particulier->locationActif && ! $particulier->echangeActif)

                                                                                    <div class="menu-info">
                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aaj') }}</strong>
                                                                                        <div class="menu-info-content">
                                                                                            <div class="menu-info-content-one">

                                                                                                @if($particulier->locationActif)
                                                                                                    
                                                                                                    @if ($particulier->prix_mois != null && $particulier->prix_jour != null)


                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ $particulier->prix_mois }} MAD/mois </strong>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <strong>{{ $particulier->prix_jour }} MAD/jour </strong>
                                                                                                            </div>

                                                                                                        
                                                                                                        </div>


                                                                                                    @else


                                                                                                        @if ($particulier->prix_mois != null)

                                                                                                            <div class = "menu-info-content-one-start">
                                                                                                                <div>
                                                                                                                    <strong>{{ $particulier->prix_mois }} MAD/mois </strong>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                        @endif

                                                                                                        @if ($particulier->prix_jour != null)

                                                                                                            <div class = "menu-info-content-one-start">
                                                                                                                <div>
                                                                                                                    <strong>{{ $particulier->prix_jour }} MAD/jour </strong>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                        @endif


                                                                                                    @endif
                                                                                                    

                                                                                                @endif

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                @elseif($particulier->venteActif && $particulier->echangeActif && ! $particulier->locationActif)
                                                                                    <div class="menu-info">
                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aah') }}</strong>


                                                                                        @if ($particulier->echange_provisoir != 0 && $particulier->echange_definitif != 0)

                                                                                            <div class="menu-info-content-s" style="min-width: 294px; top: -102px; left: -90px;">
                                                                                                <div class="menu-info-content-one">

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                        </div>
                                                                                                    </div> 

                                                                                                </div>
                                                                                            </div>

                                                                                        @elseif ($particulier->echange_provisoir != 0)
                                                                                        
                                                                                            <div class="menu-info-content-s" style="visibility: visible; min-width: 294px; top: -102px; left: -90px;">
                                                                                                <div class="menu-info-content-one">

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                        </div>
                                                                                                    </div> 

                                                                                                </div>
                                                                                            </div>

                                                                                        @elseif($particulier->echange_definitif != 0)

                                                                                            <div class = "menu-info-content-one-start">
                                                                                                <div>
                                                                                                    <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                </div>
                                                                                            </div>
                                                                                        @endif


                                                                                    </div>
                                                                                @elseif($particulier->locationActif && $particulier->echangeActif && ! $particulier->venteActif)
                                                                                    <div class="menu-info">
                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aah') }}</strong>


                                                                                        @if ($particulier->echange_provisoir != 0 && $particulier->echange_definitif != 0)

                                                                                            <div class="menu-info-content-s" style="min-width: 294px; top: -102px; left: -90px;">
                                                                                                <div class="menu-info-content-one">

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                        </div>
                                                                                                    </div> 

                                                                                                </div>
                                                                                            </div>

                                                                                        @elseif ($particulier->echange_provisoir != 0)
                                                                                        
                                                                                            <div class="menu-info-content-s" style="visibility: visible; min-width: 294px; top: -102px; left: -90px;">
                                                                                                <div class="menu-info-content-one">

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                        </div>
                                                                                                    </div> 

                                                                                                </div>
                                                                                            </div>

                                                                                        @elseif($particulier->echange_definitif != 0)

                                                                                            <div class = "menu-info-content-one-start">
                                                                                                <div>
                                                                                                    <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                </div>
                                                                                            </div>
                                                                                        @endif


                                                                                    </div>
                                                                                @elseif($particulier->locationActif && $particulier->echangeActif && $particulier->venteActif)
                                                                                    
                                                                                    <div class="d-flex">

                                                                                        <div>

                                                                                            <div class="menu-info">
                                                                                                <strong>{{ __('myhouse/back/menu/particulier/annonce.aaj') }}</strong>
                                                                                                <div class="menu-info-content" style="left: -60px; top: -100px;">
                                                                                                    <div class="menu-info-content-one">

                                                                                                        @if($particulier->locationActif)
                                                                                                            
                                                                                                            @if ($particulier->prix_mois != null && $particulier->prix_jour != null)


                                                                                                                <div class = "menu-info-content-one-start">
                                                                                                                    <div>
                                                                                                                        <strong>{{ $particulier->prix_mois }} MAD/mois </strong>
                                                                                                                    </div>
                                                                                                                    <div>
                                                                                                                        <strong>{{ $particulier->prix_jour }} MAD/jour </strong>
                                                                                                                    </div>

                                                                                                                
                                                                                                                </div>


                                                                                                            @else


                                                                                                                @if ($particulier->prix_mois != null)

                                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                                        <div>
                                                                                                                            <strong>{{ $particulier->prix_mois }} MAD/mois </strong>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                @endif

                                                                                                                @if ($particulier->prix_jour != null)

                                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                                        <div>
                                                                                                                            <strong>{{ $particulier->prix_jour }} MAD/jour </strong>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                @endif


                                                                                                            @endif
                                                                                                            

                                                                                                        @endif

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>,

                                                                                        <div class="menu-info ml-1">
                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aah') }}</strong>


                                                                                            @if ($particulier->echange_provisoir != 0 && $particulier->echange_definitif != 0)

                                                                                                <div class="menu-info-content-s" style="min-width: 294px; top: -102px; left: -90px;">
                                                                                                    <div class="menu-info-content-one">

                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                            </div>
                                                                                                        </div> 

                                                                                                    </div>
                                                                                                </div>

                                                                                            @elseif ($particulier->echange_provisoir != 0)
                                                                                            
                                                                                                <div class="menu-info-content-s" style="visibility: visible; min-width: 294px; top: -102px; left: -90px;">
                                                                                                    <div class="menu-info-content-one">

                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                            </div>
                                                                                                        </div> 

                                                                                                    </div>
                                                                                                </div>

                                                                                            @elseif($particulier->echange_definitif != 0)

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                    </div>
                                                                                                </div>
                                                                                            @endif

                                                                                        </div>
                                                                                

                                                                                    </div>

                                                                                
                                                                                @else


                                                                                    @if ($particulier->venteActif != 0)
                                                                                        <strong>Vente </strong>
                                                                                    @endif

                                                                                    @if ($particulier->locationActif != 0)


                                                                                        @if ($particulier->prix_mois != null && $particulier->prix_jour != null)


                                                                                            @if ($particulier->prix_jour != null)

                                                                                                <strong>{{ $particulier->prix_jour }} <span style="font-size: 13px;">MAD/jour</span> </strong>

                                                                                            @endif


                                                                                        @else

                                                                                            <strong>Location </strong>

                                                                                        @endif



                                                                                    
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
                                                                    
                                                                    <div class="page-list-panel-item-two-pro-text">




                                                                        @if ($particulier->venteActif && $particulier->locationActif && ! $particulier->echangeActif)
                                                                            <div class="menu-info">
                                                                                <strong>{{ __('myhouse/back/menu/particulier/annonce.aai') }}</strong>

                                                                                <div class="menu-info-content-s">
                                                                                    <div class="menu-info-content-one">
                                                                                        <div class = "menu-info-content-one-start">
                                                                                            <div>
                                                                                                <strong>{{ $particulier->prix_vente }} MAD </strong>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @elseif($particulier->venteActif && $particulier->echangeActif && ! $particulier->locationActif)
                                                                            <div class="menu-info">
                                                                                <strong>Vente</strong>

                                                                                <div class="menu-info-content-s">
                                                                                    <div class="menu-info-content-one">
                                                                                        <div class = "menu-info-content-one-start">
                                                                                            <div>
                                                                                                <strong>{{ $particulier->prix_vente }} MAD </strong>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @elseif($particulier->locationActif && $particulier->echangeActif && ! $particulier->venteActif)
                                                                                    <div class="menu-info">
                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aaj') }}</strong>
                                                                                        <div class="menu-info-content">
                                                                                            <div class="menu-info-content-one">

                                                                                                @if($particulier->locationActif)
                                                                                                    
                                                                                                    @if ($particulier->prix_mois != null && $particulier->prix_jour != null)


                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ $particulier->prix_mois }} MAD/mois </strong>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <strong>{{ $particulier->prix_jour }} MAD/jour </strong>
                                                                                                            </div>

                                                                                                        
                                                                                                        </div>


                                                                                                    @else


                                                                                                        @if ($particulier->prix_mois != null)

                                                                                                            <div class = "menu-info-content-one-start">
                                                                                                                <div>
                                                                                                                    <strong>{{ $particulier->prix_mois }} MAD/mois </strong>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                        @endif

                                                                                                        @if ($particulier->prix_jour != null)

                                                                                                            <div class = "menu-info-content-one-start">
                                                                                                                <div>
                                                                                                                    <strong>{{ $particulier->prix_jour }} MAD/jour </strong>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                        @endif


                                                                                                    @endif
                                                                                                    

                                                                                                @endif

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                        @elseif($particulier->locationActif && $particulier->echangeActif && $particulier->venteActif)
                                                                            <div class="menu-info">
                                                                                <strong>{{ __('myhouse/back/menu/particulier/annonce.aai') }}</strong>

                                                                                <div class="menu-info-content-s">
                                                                                    <div class="menu-info-content-one">
                                                                                        <div class = "menu-info-content-one-start">
                                                                                            <div>
                                                                                                <strong>{{ $particulier->prix_vente }} MAD </strong>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        @else

                                                                                @if($particulier->venteActif)
                                                                                    <strong>{{ $particulier->prix_vente }} <span style="font-size: 13px;">MAD</span>  </strong>
                                                                                @endif

                                                                                @if($particulier->locationActif)
                                                                                    
                                                                                    @if ($particulier->prix_mois != null && $particulier->prix_jour != null)


                                                                                        @if ($particulier->prix_mois != null)

                                                                                            <strong>{{ $particulier->prix_mois }} <span style="font-size: 13px;">MAD/mois</span> </strong>

                                                                                        @endif


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


                                                                <div class="page-list-item-two-pro-body-content-text">
                                                                    {{ substr($particulier->description, 0, 105) }} (...)

                                                                </div>

                                                            </div>
                                                            
                                                            <div class="page-list-panel-item-two-pro-footer">

                                                                <div class="page-list-panel-item-two-body-box-threes">

                                                            

                                                                @include('myhouse.share.criteres', ['particuliers' => $particulier])


                                                                </div>

                                                            </div> 

                                                    
                                                        </a>
                                                    </div>

    
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                            @endif


                        @endforeach
                </div>

                    @endif


                </div>
            </div>

            <!-- End List -->











        </div>
    </div>

    </div>
@stop

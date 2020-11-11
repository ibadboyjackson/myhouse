@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/particulier/interesse.aa') }}
@stop

@section('content')


<div style="position: relative;" class="you-css">

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

        @include('myhouse.back.includes.particulier.aside')




        <!-- List -->
            <div class="menu-body pl-var">


                <div class="menu-body-title">{{ __('myhouse/back/menu/particulier/interesse.ab') }}</div>
                <div class="menu-body-hr"></div>
                <div class="menu-body-content">
                    

                @if ($interesses->count() > 0)


                   @foreach($interesses as $interesse)


                    <div class="menu-body-content-item">
                        <div class="display-item">
                            <div class="page-list-panelle">
                                <div class="page-list-panel-item">

                                    <div class="page-list-top">
                                        <div class="page-list-top-button">
                                            {{ __('myhouse/back/menu/particulier/interesse.ac') }} 
                                            {{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->created_at)->format('d m y')) }}
                                        </div>
                                    </div>


                                    <a href="{{ route('resultat.particulier', [strtolower($interesse->typeBien->nom) . '-'. $interesse->id]) }}" style="text-decoration: none; color: inherit" >

                                         <div class="carousel slide" data-ride="carousel" id="{{ $interesse->last_id }}">

                                                            @if (isset($interesse->images))
                                                              
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
                                                                                src="{{ asset('development/files/particulier/400/') . '/' . $image }}"
                                                                                alt="Third Slide"
                                                                            />
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            @endif
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
                                        <div class="page-list-top-share" style="position: relative;">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/particulier/interesse.ad') }}</div>
                                            </div>
                                            
                                            

                                            <div style="position: relative;" class="menu-email">

                                                <div class="page-list-top-share-content">
                                                    <div class="page-list-top-share-content-img">
                                                        <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                    </div>
                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/particulier/interesse.ae') }}</div>
                                                </div>     

                                                <div class="menu-popups">{{ $interesse->user->email    }}</div>

                                            
                                            </div>


                                            
                                            
                                            <div style="position: relative;" class="menu-email">
                                            
                                                <div class="page-list-top-share-content">
                                                    <div class="page-list-top-share-content-img">
                                                        <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                    </div>
                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/particulier/interesse.af') }}</div>
                                                </div>

                                                <div class="menu-popup">{{ $interesse->user->telephone  }}</div>
                                            
                                            </div>





                                            <div style="position: relative;">
                                            
                                                <a href="{{ route('menu.messagerie', ['user' => 'particulier']) }}" style="text-decoration:none; color: inherit;">
                                                    <div class="page-list-top-share-content">
                                                        <div class="page-list-top-share-content-img">
                                                            <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                        </div>
                                                        <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/particulier/interesse.ag') }}</div>

                                                    </div>  

                                                </a>


                                            </div>
                                            <div>
                                                <a href="{{ route("particulier.annonce.uninteresse", $interesse->id) }}" style="text-decoration:none; color: inherit;">
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

                                        </div>
                                    </div>
                                    <div style="height: 305px;">

                                        <div class="page-list-panel-item-two-pro">
                                            <a href="{{ route('resultat.particulier', [strtolower($interesse->typeBien->nom) . '-'. $interesse->id]) }}" style="text-decoration: none; color: inherit"  >
                                                
                                                
                                                        <div class="page-list-panel-item-two-pro-head">
                                                            <div class="page-list-panel-item-two-head-left">
                                                                <div class="page-list-panel-item-two-head-left-box">
                                                                    <div class="page-list-panel-item-two-head-left-box-left">
                                                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid" width="10" height="10">
                                                                    </div>
                                                                    <div class="page-list-panel-item-two-head-left-box-right">
                                                                        {{ substr($interesse->adresse, 0, 38) }} <br>
                                                                    <strong>{{ ucfirst($interesse->quartier) }}</strong>, 
                                                                    <strong>{{ ucfirst($interesse->ville) }}</strong>

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

                                                                <div class="page-list-panel-item-two-pro-body-box-st">
                                                                    
                                                                    <div class="page-list-panel-item-two-pro-body-content">

                                                                             @if ($interesse->surface_habitable)

                                                                                @if (isset($interesse->typeBien->id) && $interesse->typeBien->nom === 'Plateau')
                                                                                    <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.az') }} {{ $interesse->surface_habitable }} m²</span>
                                                                                @else
                                                                                    <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.ay') }} {{ $interesse->surface_habitable }} m²</span>
                                                                                @endif

                                                                            @elseif($interesse->surface_garage)
                                                                                <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.ax') }} {{ $interesse->surface_garage }} m²</span>
                                                                            @elseif ($interesse->surface_total)
                                                                                <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.aw') }} {{ $interesse->surface_total }} m²</span>
                                                                            @elseif (isset($interesse->typeBien->id) && $interesse->typeBien->nom === 'Cité universitaire')
                                                                                <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.at') }}</span>
                                                                            @else
                                                                                <div style="color: transparent;">5</div>
                                                                            @endif

                                                                        
                                                                    
                                                                    </div>
                                                                    
                                                                    <div class="page-list-panel-item-two-pro-body-content-text d-flex justify-content-between">

                                                                        @if ($interesse->superficie_terrain)
                                                                            <div style="font-size: 14px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.aaa') }} {{ $interesse->superficie_terrain }} m²</div>
                                                                        @elseif(isset($interesse->typeBien->id) && $interesse->typeBien->nom === 'Cité universitaire')
                                                                            <div style="font-size: 14px; color: #868686;">
                                                                                <span style="font-size: 14px;">{{ __('myhouse/back/menu/particulier/annonce.au') }}  {{ $interesse->surface_disponible_un }} m²</span>
                                                                                <span style="font-size: 14px;">{{ __('myhouse/back/menu/particulier/annonce.av') }} {{ $interesse->surface_disponible_deux }} m²</span>
                                                                            </div>
                                                                        @else
                                                                            <div></div>
                                                                        @endif



                                                                    
                                                                        <div class="particulier-vente">


                                                                            @if ($interesse->venteActif && $interesse->locationActif && ! $interesse->echangeActif)

                                                                                <div class="menu-info">
                                                                                    <strong>{{ __('myhouse/back/menu/particulier/annonce.aaj') }}</strong>
                                                                                    <div class="menu-info-content">
                                                                                        <div class="menu-info-content-one">

                                                                                            @if($interesse->locationActif)
                                                                                                
                                                                                                @if ($interesse->prix_mois != null && $interesse->prix_jour != null)


                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ $interesse->prix_mois }} MAD/mois </strong>
                                                                                                        </div>
                                                                                                        <div>
                                                                                                            <strong>{{ $interesse->prix_jour }} MAD/jour </strong>
                                                                                                        </div>

                                                                                                    
                                                                                                    </div>


                                                                                                @else


                                                                                                    @if ($interesse->prix_mois != null)

                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ $interesse->prix_mois }} MAD/mois </strong>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    @endif

                                                                                                    @if ($interesse->prix_jour != null)

                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ $interesse->prix_jour }} MAD/jour </strong>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    @endif


                                                                                                @endif
                                                                                                

                                                                                            @endif

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            @elseif($interesse->venteActif && $interesse->echangeActif && ! $interesse->locationActif)
                                                                                <div class="menu-info">
                                                                                    <strong>{{ __('myhouse/back/menu/particulier/annonce.aah') }}</strong>


                                                                                    @if ($interesse->echange_provisoir != 0 && $interesse->echange_definitif != 0)

                                                                                        <div class="menu-info-content-s" style="min-width: 294px; top: -90px; left: 78px;">
                                                                                            <div class="menu-info-content-one">

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                    </div>
                                                                                                </div> 

                                                                                            </div>
                                                                                        </div>

                                                                                    @elseif ($interesse->echange_provisoir != 0)
                                                                                    
                                                                                        <div class="menu-info-content-s" style="visibility: visible; min-width: 294px; top: -90px; left: 78px;">
                                                                                            <div class="menu-info-content-one">

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                    </div>
                                                                                                </div> 

                                                                                            </div>
                                                                                        </div>

                                                                                    @elseif($interesse->echange_definitif != 0)

                                                                                        <div class = "menu-info-content-one-start">
                                                                                            <div>
                                                                                                <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif


                                                                                </div>
                                                                            @elseif($interesse->locationActif && $interesse->echangeActif && ! $interesse->venteActif)
                                                                                <div class="menu-info">
                                                                                    <strong>{{ __('myhouse/back/menu/particulier/annonce.aah') }}</strong>


                                                                                    @if ($interesse->echange_provisoir != 0 && $interesse->echange_definitif != 0)

                                                                                        <div class="menu-info-content-s" style="min-width: 294px; top: -90px; left: 78px;">
                                                                                            <div class="menu-info-content-one">

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                    </div>
                                                                                                </div> 

                                                                                            </div>
                                                                                        </div>

                                                                                    @elseif ($interesse->echange_provisoir != 0)
                                                                                    
                                                                                        <div class="menu-info-content-s" style="visibility: visible; min-width: 294px; top: -90px; left: 78px;">
                                                                                            <div class="menu-info-content-one">

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                    </div>
                                                                                                </div> 

                                                                                            </div>
                                                                                        </div>

                                                                                    @elseif($interesse->echange_definitif != 0)

                                                                                        <div class = "menu-info-content-one-start">
                                                                                            <div>
                                                                                                <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif


                                                                                </div>
                                                                            @elseif($interesse->locationActif && $interesse->echangeActif && $interesse->venteActif)
                                                                                
                                                                                <div class="d-flex">

                                                                                    <div>

                                                                                        <div class="menu-info">
                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aaj') }}</strong>
                                                                                            <div class="menu-info-content" style="left: 58px; top: -100px;">
                                                                                                <div class="menu-info-content-one">

                                                                                                    @if($interesse->locationActif)
                                                                                                        
                                                                                                        @if ($interesse->prix_mois != null && $interesse->prix_jour != null)


                                                                                                            <div class = "menu-info-content-one-start">
                                                                                                                <div>
                                                                                                                    <strong>{{ $interesse->prix_mois }} MAD/mois </strong>
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <strong>{{ $interesse->prix_jour }} MAD/jour </strong>
                                                                                                                </div>

                                                                                                            
                                                                                                            </div>


                                                                                                        @else


                                                                                                            @if ($interesse->prix_mois != null)

                                                                                                                <div class = "menu-info-content-one-start">
                                                                                                                    <div>
                                                                                                                        <strong>{{ $interesse->prix_mois }} MAD/mois </strong>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            @endif

                                                                                                            @if ($interesse->prix_jour != null)

                                                                                                                <div class = "menu-info-content-one-start">
                                                                                                                    <div>
                                                                                                                        <strong>{{ $interesse->prix_jour }} MAD/jour </strong>
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


                                                                                        @if ($interesse->echange_provisoir != 0 && $interesse->echange_definitif != 0)

                                                                                            <div class="menu-info-content-s" style="min-width: 294px; top: -90px; left: 78px;">
                                                                                                <div class="menu-info-content-one">

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                        </div>
                                                                                                    </div> 

                                                                                                </div>
                                                                                            </div>

                                                                                        @elseif ($interesse->echange_provisoir != 0)
                                                                                        
                                                                                            <div class="menu-info-content-s" style="visibility: visible; min-width: 294px; top: -90px; left: 78px;">
                                                                                                <div class="menu-info-content-one">

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($interesse->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                        </div>
                                                                                                    </div> 

                                                                                                </div>
                                                                                            </div>

                                                                                        @elseif($interesse->echange_definitif != 0)

                                                                                            <div class = "menu-info-content-one-start">
                                                                                                <div>
                                                                                                    <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                </div>
                                                                                            </div>
                                                                                        @endif

                                                                                    </div>
                                                                            

                                                                                </div>

                                                                            
                                                                            @else


                                                                                @if ($interesse->venteActif != 0)
                                                                                    <strong>Vente </strong>
                                                                                @endif

                                                                                @if ($interesse->locationActif != 0)


                                                                                    @if ($interesse->prix_mois != null && $interesse->prix_jour != null)


                                                                                        @if ($interesse->prix_jour != null)

                                                                                            <strong>{{ $interesse->prix_jour }} <span style="font-size: 13px;">MAD/jour</span> </strong>

                                                                                        @endif


                                                                                    @else

                                                                                        <strong>Location </strong>

                                                                                    @endif



                                                                                
                                                                                @endif

                                                                                @if ($interesse->echangeActif != 0)

                                                                                    @if ($interesse->echange_provisoir == 1)
                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                    @endif

                                                                                    @if ($interesse->echange_definitif == 1)

                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                    @endif

                                                                                @endif


                                                                            @endif

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                
                                                                <div class="page-list-panel-item-two-pro-text">




                                                                    @if ($interesse->venteActif && $interesse->locationActif && ! $interesse->echangeActif)
                                                                        <div class="menu-info">
                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aai') }}</strong>

                                                                            <div class="menu-info-content-s">
                                                                                <div class="menu-info-content-one">
                                                                                    <div class = "menu-info-content-one-start">
                                                                                        <div>
                                                                                            <strong>{{ $interesse->prix_vente }} MAD </strong>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif($interesse->venteActif && $interesse->echangeActif && ! $interesse->locationActif)
                                                                        <div class="menu-info">
                                                                            <strong>Vente</strong>

                                                                            <div class="menu-info-content-s">
                                                                                <div class="menu-info-content-one">
                                                                                    <div class = "menu-info-content-one-start">
                                                                                        <div>
                                                                                            <strong>{{ $interesse->prix_vente }} MAD </strong>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif($interesse->locationActif && $interesse->echangeActif && ! $interesse->venteActif)
                                                                                <div class="menu-info">
                                                                                    <strong>{{ __('myhouse/back/menu/particulier/annonce.aaj') }}</strong>
                                                                                    <div class="menu-info-content">
                                                                                        <div class="menu-info-content-one">

                                                                                            @if($interesse->locationActif)
                                                                                                
                                                                                                @if ($interesse->prix_mois != null && $interesse->prix_jour != null)


                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ $interesse->prix_mois }} MAD/mois </strong>
                                                                                                        </div>
                                                                                                        <div>
                                                                                                            <strong>{{ $interesse->prix_jour }} MAD/jour </strong>
                                                                                                        </div>

                                                                                                    
                                                                                                    </div>


                                                                                                @else


                                                                                                    @if ($interesse->prix_mois != null)

                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ $interesse->prix_mois }} MAD/mois </strong>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    @endif

                                                                                                    @if ($interesse->prix_jour != null)

                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ $interesse->prix_jour }} MAD/jour </strong>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    @endif


                                                                                                @endif
                                                                                                

                                                                                            @endif

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                    @elseif($interesse->locationActif && $interesse->echangeActif && $interesse->venteActif)
                                                                        <div class="menu-info">
                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aai') }}</strong>

                                                                            <div class="menu-info-content-s">
                                                                                <div class="menu-info-content-one">
                                                                                    <div class = "menu-info-content-one-start">
                                                                                        <div>
                                                                                            <strong>{{ $interesse->prix_vente }} MAD </strong>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    @else

                                                                            @if($interesse->venteActif)
                                                                                <strong>{{ $interesse->prix_vente }} <span style="font-size: 13px;">MAD</span>  </strong>
                                                                            @endif

                                                                            @if($interesse->locationActif)
                                                                                
                                                                                @if ($interesse->prix_mois != null && $interesse->prix_jour != null)


                                                                                    @if ($interesse->prix_mois != null)

                                                                                        <strong>{{ $interesse->prix_mois }} <span style="font-size: 13px;">MAD/mois</span> </strong>

                                                                                    @endif


                                                                                @else


                                                                                    @if ($interesse->prix_mois != null)

                                                                                        <strong>{{ $interesse->prix_mois }} <span style="font-size: 13px;">MAD/mois</span> </strong>

                                                                                    @endif

                                                                                    @if ($interesse->prix_jour != null)

                                                                                        <strong>{{ $interesse->prix_jour }} <span style="font-size: 13px;">MAD/jour</span> </strong>

                                                                                    @endif


                                                                                @endif
                                                                                

                                                                            @endif
                                                                            

                                                                            @if ($interesse->echangeActif) 
                                                                                <strong>{{ ucfirst(__('myhouse/back/menu/particulier/annonce.as')) }}</strong>
                                                                            @endif

                                                                    @endif



                                                                </div>

                                                            </div>


                                                            <div class="page-list-item-two-pro-body-content-text">
                                                                {{ substr($interesse->description, 0, 105) }} (...)

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

            <!-- End List -->


        </div>
    </div>

</div>



@stop

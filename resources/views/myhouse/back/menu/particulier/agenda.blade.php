@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/particulier/interesse.ai') }}
@stop



@section('meta')
    <meta name = "page" content ='{{  str_replace("http://myhouse.com", "", request()->url())  }}'>
@endsection



@section('content')

    @include('myhouse.front.includes.success')

<div style="position: relative;" class="you-css">
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
            <div class="menu-body pl-vars">
                <div class="menu-body-title">agenda</div>
                <div class="menu-body-hr"></div>

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

                        <div class="menu-body-content-item">
                            <div class="display-item" id ="{{ $agenda->id }}">
                                <div class="page-list-panelle">
                                    <div class="page-list-panel-item">

                                        <div class="page-list-top">
                                            <div class="page-list-top-button">
                                                {{ __('myhouse/back/menu/particulier/interesse.ac') }} 
                                                {{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->created_at)->format('d m y')) }}                                            
                                            </div>
                                        </div>

                                        <a href="{{ route('resultat.particulier', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">

                                        </a>
                                
                                        <div class="carousel slide" data-ride="carousel" id="{{ $agenda->last_id }}">

                                                                @if (isset($agenda->images))
                                                                
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
                                                                                    src="{{ asset('development/files/particulier/400/') . '/' . $image }}"
                                                                                    alt="Third Slide"
                                                                                />
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                @endif
                                                                <a class="carousel-control-prev" href="#{{ $agenda->last_id }}" role="button" data-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next" href="#{{ $agenda->last_id }}" role="button" data-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>        
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

                                                <div class="menu-popups">{{ $agenda->user->email    }}</div>

                                            
                                            </div>
                                            
                                            
                                            <div style="position: relative;" class="menu-email">
                                            
                                                <div class="page-list-top-share-content">
                                                    <div class="page-list-top-share-content-img">
                                                        <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                    </div>
                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/particulier/interesse.af') }}</div>
                                                </div>

                                                <div class="menu-popup">{{ $agenda->user->telephone  }}</div>
                                            
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
                                                <a href="{{ route("particulier.annonce.unagenda", $agenda->id) }}" style="text-decoration:none; color: inherit;">
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
                                                <a href="{{ route('resultat.particulier', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                                    
                                                    
                                                        <div class="page-list-panel-item-two-pro-head">
                                                            <div class="page-list-panel-item-two-head-left">
                                                                <div class="page-list-panel-item-two-head-left-box">
                                                                    <div class="page-list-panel-item-two-head-left-box-left">
                                                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid" width="10" height="10">
                                                                    </div>
                                                                    <div class="page-list-panel-item-two-head-left-box-right">
                                                                        {{ substr($agenda->adresse, 0, 38) }} <br>
                                                                    <strong>{{ ucfirst($agenda->quartier) }}</strong>, 
                                                                    <strong>{{ ucfirst($agenda->ville) }}</strong>

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

                                                                <div class="page-list-panel-item-two-pro-body-box-st">
                                                                    
                                                                    <div class="page-list-panel-item-two-pro-body-content">

                                                                             @if ($agenda->surface_habitable)

                                                                                @if (isset($agenda->typeBien->id) && $agenda->typeBien->nom === 'Plateau')
                                                                                    <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.az') }} {{ $agenda->surface_habitable }} m²</span>
                                                                                @else
                                                                                    <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.ay') }} {{ $agenda->surface_habitable }} m²</span>
                                                                                @endif

                                                                            @elseif($agenda->surface_garage)
                                                                                <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.ax') }} {{ $agenda->surface_garage }} m²</span>
                                                                            @elseif ($agenda->surface_total)
                                                                                <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.aw') }} {{ $agenda->surface_total }} m²</span>
                                                                            @elseif (isset($agenda->typeBien->id) && $agenda->typeBien->nom === 'Cité universitaire')
                                                                                <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.at') }}</span>
                                                                            @else
                                                                                <div style="color: transparent;">5</div>
                                                                            @endif

                                                                        
                                                                    
                                                                    </div>
                                                                    
                                                                    <div class="page-list-panel-item-two-pro-body-content-text d-flex justify-content-between">

                                                                        @if ($agenda->superficie_terrain)
                                                                            <div style="font-size: 14px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.aaa') }} {{ $agenda->superficie_terrain }} m²</div>
                                                                        @elseif(isset($agenda->typeBien->id) && $agenda->typeBien->nom === 'Cité universitaire')
                                                                            <div style="font-size: 14px; color: #868686;">
                                                                                <span style="font-size: 14px;">{{ __('myhouse/back/menu/particulier/annonce.au') }}  {{ $agenda->surface_disponible_un }} m²</span>
                                                                                <span style="font-size: 14px;">{{ __('myhouse/back/menu/particulier/annonce.av') }} {{ $agenda->surface_disponible_deux }} m²</span>
                                                                            </div>
                                                                        @else
                                                                            <div></div>
                                                                        @endif



                                                                    
                                                                        <div class="particulier-vente">


                                                                            @if ($agenda->venteActif && $agenda->locationActif && ! $agenda->echangeActif)

                                                                                <div class="menu-info">
                                                                                    <strong>{{ __('myhouse/back/menu/particulier/annonce.aaj') }}</strong>
                                                                                    <div class="menu-info-content">
                                                                                        <div class="menu-info-content-one">

                                                                                            @if($agenda->locationActif)
                                                                                                
                                                                                                @if ($agenda->prix_mois != null && $agenda->prix_jour != null)


                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ $agenda->prix_mois }} MAD/mois </strong>
                                                                                                        </div>
                                                                                                        <div>
                                                                                                            <strong>{{ $agenda->prix_jour }} MAD/jour </strong>
                                                                                                        </div>

                                                                                                    
                                                                                                    </div>


                                                                                                @else


                                                                                                    @if ($agenda->prix_mois != null)

                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ $agenda->prix_mois }} MAD/mois </strong>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    @endif

                                                                                                    @if ($agenda->prix_jour != null)

                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ $agenda->prix_jour }} MAD/jour </strong>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    @endif


                                                                                                @endif
                                                                                                

                                                                                            @endif

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            @elseif($agenda->venteActif && $agenda->echangeActif && ! $agenda->locationActif)
                                                                                <div class="menu-info">
                                                                                    <strong>{{ __('myhouse/back/menu/particulier/annonce.aah') }}</strong>


                                                                                    @if ($agenda->echange_provisoir != 0 && $agenda->echange_definitif != 0)

                                                                                        <div class="menu-info-content-s" style="min-width: 294px; top: -90px; left: 78px;">
                                                                                            <div class="menu-info-content-one">

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                    </div>
                                                                                                </div> 

                                                                                            </div>
                                                                                        </div>

                                                                                    @elseif ($agenda->echange_provisoir != 0)
                                                                                    
                                                                                        <div class="menu-info-content-s" style="visibility: visible; min-width: 294px; top: -90px; left: 78px;">
                                                                                            <div class="menu-info-content-one">

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                    </div>
                                                                                                </div> 

                                                                                            </div>
                                                                                        </div>

                                                                                    @elseif($agenda->echange_definitif != 0)

                                                                                        <div class = "menu-info-content-one-start">
                                                                                            <div>
                                                                                                <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif


                                                                                </div>
                                                                            @elseif($agenda->locationActif && $agenda->echangeActif && ! $agenda->venteActif)
                                                                                <div class="menu-info">
                                                                                    <strong>{{ __('myhouse/back/menu/particulier/annonce.aah') }}</strong>


                                                                                    @if ($agenda->echange_provisoir != 0 && $agenda->echange_definitif != 0)

                                                                                        <div class="menu-info-content-s" style="min-width: 294px; top: -90px; left: 78px;">
                                                                                            <div class="menu-info-content-one">

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                    </div>
                                                                                                </div> 

                                                                                            </div>
                                                                                        </div>

                                                                                    @elseif ($agenda->echange_provisoir != 0)
                                                                                    
                                                                                        <div class="menu-info-content-s" style="visibility: visible; min-width: 294px; top: -90px; left: 78px;">
                                                                                            <div class="menu-info-content-one">

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class = "menu-info-content-one-start">
                                                                                                    <div>
                                                                                                        <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                    </div>
                                                                                                </div> 

                                                                                            </div>
                                                                                        </div>

                                                                                    @elseif($agenda->echange_definitif != 0)

                                                                                        <div class = "menu-info-content-one-start">
                                                                                            <div>
                                                                                                <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif


                                                                                </div>
                                                                            @elseif($agenda->locationActif && $agenda->echangeActif && $agenda->venteActif)
                                                                                
                                                                                <div class="d-flex">

                                                                                    <div>

                                                                                        <div class="menu-info">
                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aaj') }}</strong>
                                                                                            <div class="menu-info-content" style="left: 58px; top: -100px;">
                                                                                                <div class="menu-info-content-one">

                                                                                                    @if($agenda->locationActif)
                                                                                                        
                                                                                                        @if ($agenda->prix_mois != null && $agenda->prix_jour != null)


                                                                                                            <div class = "menu-info-content-one-start">
                                                                                                                <div>
                                                                                                                    <strong>{{ $agenda->prix_mois }} MAD/mois </strong>
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <strong>{{ $agenda->prix_jour }} MAD/jour </strong>
                                                                                                                </div>

                                                                                                            
                                                                                                            </div>


                                                                                                        @else


                                                                                                            @if ($agenda->prix_mois != null)

                                                                                                                <div class = "menu-info-content-one-start">
                                                                                                                    <div>
                                                                                                                        <strong>{{ $agenda->prix_mois }} MAD/mois </strong>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            @endif

                                                                                                            @if ($agenda->prix_jour != null)

                                                                                                                <div class = "menu-info-content-one-start">
                                                                                                                    <div>
                                                                                                                        <strong>{{ $agenda->prix_jour }} MAD/jour </strong>
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


                                                                                        @if ($agenda->echange_provisoir != 0 && $agenda->echange_definitif != 0)

                                                                                            <div class="menu-info-content-s" style="min-width: 294px; top: -90px; left: 78px;">
                                                                                                <div class="menu-info-content-one">

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                        </div>
                                                                                                    </div> 

                                                                                                </div>
                                                                                            </div>

                                                                                        @elseif ($agenda->echange_provisoir != 0)
                                                                                        
                                                                                            <div class="menu-info-content-s" style="visibility: visible; min-width: 294px; top: -90px; left: 78px;">
                                                                                                <div class="menu-info-content-one">

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aae') }} </strong> <span style="color: rgba(87, 87, 87, 0.62); font-size: 13px;">{{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($agenda->echange_periode_deux)->format('d m y')) }}</span>
                                                                                                        </div>
                                                                                                    </div> 

                                                                                                </div>
                                                                                            </div>

                                                                                        @elseif($agenda->echange_definitif != 0)

                                                                                            <div class = "menu-info-content-one-start">
                                                                                                <div>
                                                                                                    <strong>{{ __('myhouse/back/menu/particulier/annonce.aaf') }} </strong>
                                                                                                </div>
                                                                                            </div>
                                                                                        @endif

                                                                                    </div>
                                                                            

                                                                                </div>

                                                                            
                                                                            @else


                                                                                @if ($agenda->venteActif != 0)
                                                                                    <strong>Vente </strong>
                                                                                @endif

                                                                                @if ($agenda->locationActif != 0)


                                                                                    @if ($agenda->prix_mois != null && $agenda->prix_jour != null)


                                                                                        @if ($agenda->prix_jour != null)

                                                                                            <strong>{{ $agenda->prix_jour }} <span style="font-size: 13px;">MAD/jour</span> </strong>

                                                                                        @endif


                                                                                    @else

                                                                                        <strong>Location </strong>

                                                                                    @endif



                                                                                
                                                                                @endif

                                                                                @if ($agenda->echangeActif != 0)

                                                                                    @if ($agenda->echange_provisoir == 1)
                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                    @endif

                                                                                    @if ($agenda->echange_definitif == 1)

                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                    @endif

                                                                                @endif


                                                                            @endif

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                
                                                                <div class="page-list-panel-item-two-pro-text">




                                                                    @if ($agenda->venteActif && $agenda->locationActif && ! $agenda->echangeActif)
                                                                        <div class="menu-info">
                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aai') }}</strong>

                                                                            <div class="menu-info-content-s">
                                                                                <div class="menu-info-content-one">
                                                                                    <div class = "menu-info-content-one-start">
                                                                                        <div>
                                                                                            <strong>{{ $agenda->prix_vente }} MAD </strong>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif($agenda->venteActif && $agenda->echangeActif && ! $agenda->locationActif)
                                                                        <div class="menu-info">
                                                                            <strong>Vente</strong>

                                                                            <div class="menu-info-content-s">
                                                                                <div class="menu-info-content-one">
                                                                                    <div class = "menu-info-content-one-start">
                                                                                        <div>
                                                                                            <strong>{{ $agenda->prix_vente }} MAD </strong>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif($agenda->locationActif && $agenda->echangeActif && ! $agenda->venteActif)
                                                                                <div class="menu-info">
                                                                                    <strong>{{ __('myhouse/back/menu/particulier/annonce.aaj') }}</strong>
                                                                                    <div class="menu-info-content">
                                                                                        <div class="menu-info-content-one">

                                                                                            @if($agenda->locationActif)
                                                                                                
                                                                                                @if ($agenda->prix_mois != null && $agenda->prix_jour != null)


                                                                                                    <div class = "menu-info-content-one-start">
                                                                                                        <div>
                                                                                                            <strong>{{ $agenda->prix_mois }} MAD/mois </strong>
                                                                                                        </div>
                                                                                                        <div>
                                                                                                            <strong>{{ $agenda->prix_jour }} MAD/jour </strong>
                                                                                                        </div>

                                                                                                    
                                                                                                    </div>


                                                                                                @else


                                                                                                    @if ($agenda->prix_mois != null)

                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ $agenda->prix_mois }} MAD/mois </strong>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    @endif

                                                                                                    @if ($agenda->prix_jour != null)

                                                                                                        <div class = "menu-info-content-one-start">
                                                                                                            <div>
                                                                                                                <strong>{{ $agenda->prix_jour }} MAD/jour </strong>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    @endif


                                                                                                @endif
                                                                                                

                                                                                            @endif

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                    @elseif($agenda->locationActif && $agenda->echangeActif && $agenda->venteActif)
                                                                        <div class="menu-info">
                                                                            <strong>{{ __('myhouse/back/menu/particulier/annonce.aai') }}</strong>

                                                                            <div class="menu-info-content-s">
                                                                                <div class="menu-info-content-one">
                                                                                    <div class = "menu-info-content-one-start">
                                                                                        <div>
                                                                                            <strong>{{ $agenda->prix_vente }} MAD </strong>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    @else

                                                                            @if($agenda->venteActif)
                                                                                <strong>{{ $agenda->prix_vente }} <span style="font-size: 13px;">MAD</span>  </strong>
                                                                            @endif

                                                                            @if($agenda->locationActif)
                                                                                
                                                                                @if ($agenda->prix_mois != null && $agenda->prix_jour != null)


                                                                                    @if ($agenda->prix_mois != null)

                                                                                        <strong>{{ $agenda->prix_mois }} <span style="font-size: 13px;">MAD/mois</span> </strong>

                                                                                    @endif


                                                                                @else


                                                                                    @if ($agenda->prix_mois != null)

                                                                                        <strong>{{ $agenda->prix_mois }} <span style="font-size: 13px;">MAD/mois</span> </strong>

                                                                                    @endif

                                                                                    @if ($agenda->prix_jour != null)

                                                                                        <strong>{{ $agenda->prix_jour }} <span style="font-size: 13px;">MAD/jour</span> </strong>

                                                                                    @endif


                                                                                @endif
                                                                                

                                                                            @endif
                                                                            

                                                                            @if ($agenda->echangeActif) 
                                                                                <strong>{{ ucfirst(__('myhouse/back/menu/particulier/annonce.as')) }}</strong>
                                                                            @endif

                                                                    @endif



                                                                </div>

                                                            </div>


                                                            <div class="page-list-item-two-pro-body-content-text">
                                                                {{ substr($agenda->description, 0, 105) }} (...)

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
                            

                    
                        
                        </div>
                    @endforeach

                @endif

 
                <!-- End List -->


            </div> </div>
    </div>
    </div>



@stop


@section('scripts')
    <script src = "{{ asset('development/js/menu/agenda/particulier/calendar.js') }}"></script>
    <script src = "{{ asset('development/js/calendar/ui.js') }}"></script>
    <script src = "{{ asset('development/js/calendar/notify.js') }}"></script>
@stop
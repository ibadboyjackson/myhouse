@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/particulier/annonce.aa') }}
@stop

@section('content')
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

               @include('myhouse.front.includes.message')

                <div class="menu-body-title">{{ __('myhouse/back/menu/particulier/annonce.ab') }}</div>
                <div class="menu-body-hr"></div>
                <div class="menu-body-content">

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
                                                                    {{ substr($particulier->adresse, 26, 50) }} <br>
                                                                    <strong>{{ ucfirst($particulier->quartier) }}</strong>
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
                                                                        <span style="font-size: 12px;">Surface habitable</span> {{ $particulier->surface_habitable }} <span style="font-size: 12px">m²</span>
                                                                    @endif

                                                              
                                                                    @if ($particulier->surface_totale)
                                                                        {{ $particulier->surface_totale }} <span style="font-size: 12px">m²</span>
                                                                    @endif

                                                                    @if ($particulier->surface_batiment)
                                                                        {{ $particulier->surface_batiment }} <span style="font-size: 12px">m²</span>
                                                                    @endif

                                                                    @if ($particulier->surface_garage)
                                                                        {{ $particulier->surface_garage }} <span style="font-size: 12px">m²</span>
                                                                    @endif


                                                                    @if ($particulier->surface_disponible_un)
                                                                        {{ $particulier->surface_disponible_un }} <span style="font-size: 12px">m²</span>
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
                        @endforeach

                    @endif


                </div>
            </div>

            <!-- End List -->




        </div>
    </div>
@stop

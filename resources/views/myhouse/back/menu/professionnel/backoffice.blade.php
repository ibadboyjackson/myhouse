@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/professionnel/backoffice.aa') }}
@stop

@section('content')
    <div class="professionnel">
        <div class="the-p">
            <div class="menu-wrap">
                <div class="menu-wrap-content">
                    <!-- X button -->
                    <div class="menu-wrap-x-button">
                        <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                    </div>
                    <!-- End X button -->

                @include('myhouse.back.includes.professionnel.aside')
                
                @include('myhouse.back.includes.professionnel.subscription')



                <!-- List -->


                    <div class="menu-body boussome">

                        <div style="margin-left: 534px;">
                            @include('myhouse.front.includes.message')

                        </div>

                        <div class="menu-body-title">{{ __('myhouse/back/menu/professionnel/backoffice.ab') }}</div>
                        <div class="menu-body-hm">
                            <div class="menu-body-hr"></div>
                            <div class="menu-body-subs">
                                <span class="menu-body-subs-one">{{ __('myhouse/back/menu/professionnel/backoffice.ac') }}</span>
                                <span class="menu-body-subs-two">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                        <div class="menu-body-content">

                            @if($professionnels->count() <= 0)
                                <div class="no-result">
                                    <p>
                                        {{ __('myhouse/back/menu/particulier/annonce.aj') }}
                                    </p>
                                </div>
                            @else

                                @foreach($professionnels as $professionnel)




                                    @if (! is_null($professionnel->page))
                                        <div class="menu-body-content-item">
                                            <div class="display-item">
                                                <div class="page-list-panelle">
                                                    <div class="page-list-panel-item">

                                                        <div class="page-list-top">
                                                            <div class="page-list-top-button">
                                                                {{ __('myhouse/back/menu/particulier/annonce.ac') }}
                                                                {{ str_replace(' ', '/', \Carbon\Carbon::parse($professionnel->created_at)->format('d m y')) }}

                                                            </div>
                                                            <div class="page-list-top-share justify-content-end" style="border: unset !important; margin-right: 21px;">

                                                                <div>
                                                                    <a href="{{ route('particulier.delete', ['id' => $professionnel->id]) }}" style="text-decoration: none; color: inherit">
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
                                                        <a href="{{ $professionnel->uri }}" style="text-decoration: none; color: inherit">
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
                                                            <a href="{{ $professionnel->uri }}" style="text-decoration: none; color: inherit">
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

                                                                            @isset($professionnel->typeBien->nom)
                                                                                {{ ucfirst($professionnel->typeBien->nom)  }}
                                                                            @endisset


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
                                                </div>
                                            </div>
                                        </div>
                                    @endif



                                    @if (! is_null($professionnel->images))
                                        <div class="menu-body-content-item">
                                            <div class="display-item">
                                                <div class="page-list-panelle">
                                                    <div class="page-list-panel-item">

                                                        <div class="page-list-top">
                                                            <div class="page-list-top-button">
                                                                {{ __('myhouse/back/menu/professionnel/backoffice.ad') }}
                                                                {{ str_replace(' ', '/', \Carbon\Carbon::parse($professionnel->created_at)->format('d m y')) }}
                                                            </div>
                                                            <div class="page-list-top-share">

                                                                <div class="page-list-top-share-content">
                                                                    <div class="page-list-top-share-content-img">
                                                                        <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                                    </div>
                                                                    <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/professionnel/backoffice.ae') }}</div>
                                                                </div>

                                                                <div>
                                                                    <a href="{{ route('professionnel.edit', ['id' => $professionnel->id]) }}" style="text-decoration: none; color: inherit">
                                                                        <div class="page-list-top-share-content">
                                                                            <div class="page-list-top-share-content-img">
                                                                                <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                                            </div>
                                                                            <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/professionnel/backoffice.af') }}</div>
                                                                        </div>
                                                                    </a>
                                                                </div>

                                                                <div>
                                                                    <a href="{{ route('professionnel.delete', ['id' => $professionnel->id]) }}" style="text-decoration: none; color: inherit">
                                                                        <div class="page-list-top-share-content">
                                                                            <div class="page-list-top-share-content-img">
                                                                                <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                                            </div>
                                                                            <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/professionnel/backoffice.ag') }}</div>
                                                                        </div>
                                                                    </a>
                                                                </div>


                                                            </div>
                                                        </div>


                                                        <a href="{{ route('resultat.professionnel', 'residence-alpe') }}">
                                                            <div class="page-list-item-enterprise-logoos">
                                                                <div class="page-list-item-enterprise-logo-box">
                                                                    <div class="page-list-item-enterprise-logo-img">
                                                                        <img src="{{ asset('development/files/professionnel/entreprise/39') . '/' . auth()->user()->entreprises->last()->images }}" alt="" class="img-fluid">
                                                                    </div>
                                                                    <div class="page-list-item-enterprise-logo-text">
                                                                        {{ auth()->user()->entreprises->last()->nom }}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="carousel slide" data-ride="carousel" id="{{ $professionnel->last_id }}">

                                                                <ol class="carousel-indicators">

                                                                    @isset($professionnel->images)
                                                                        @foreach(json_decode($professionnel->images) as $image)
                                                                            <li class="{{ $loop->first ? 'active' : '' }}" data-target="#{{ $professionnel->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                                        @endforeach
                                                                    @endisset


                                                                </ol>

                                                                <div class="carousel-inner">

                                                                    @isset($professionnel->images)
                                                                        @foreach(json_decode($professionnel->images) as $image)
                                                                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                                                <img
                                                                                    class="img-fluid"
                                                                                    src="{{ asset('development/files/professionnel/429/') . '/' . $image }}"
                                                                                    alt="Third Slide"
                                                                                />
                                                                            </div>
                                                                        @endforeach
                                                                    @endisset



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
                                                    <div class="page-list-panel-item-one">
                                                        <div class="page-list-panel-item-two-top">
                                                            <div class="page-list-panel-item-two-top-left">
                                                                {{ __('myhouse/back/menu/professionnel/backoffice.ah') }} AAZ5{{ \Illuminate\Support\Str::random(4) }}
                                                            </div>
                                                            <div class="page-list-panel-item-two-top-right">

                                                                @if ($professionnel->online == 1)
                                                                    <a href="{{ route('professionnel.active.online', ['id' => $professionnel->id]) }}" style="text-decoration: none; color: inherit">
                                                                        <span class="page-list-panel-active">{{ __('myhouse/back/menu/professionnel/backoffice.ai') }}</span>    -
                                                                    </a>

                                                                    <a href="{{ route('professionnel.deactive.online', ['id' => $professionnel->id]) }}" style="text-decoration: none; color: inherit">
                                                                        <span>{{ __('myhouse/back/menu/professionnel/backoffice.aj') }}</span>
                                                                    </a>
                                                                @else
                                                                    <a href="{{ route('professionnel.active.online', ['id' => $professionnel->id]) }}" style="text-decoration: none; color: inherit">
                                                                        <span class="">{{ __('myhouse/back/menu/professionnel/backoffice.ai') }}</span>    -
                                                                    </a>

                                                                    <a href="{{ route('professionnel.deactive.online', ['id' => $professionnel->id]) }}" style="text-decoration: none; color: inherit">
                                                                        <span class="page-list-panel-active">{{ __('myhouse/back/menu/professionnel/backoffice.aj') }}</span>
                                                                    </a>
                                                                @endif

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
                                                    <div class="portail">
                                                        <div class="portail-title">
                                                            <span class="portail-title-one">{{ __('myhouse/back/menu/professionnel/backoffice.ak') }}</span> - <span class="portail-title-two">{{ __('myhouse/back/menu/professionnel/backoffice.al') }}</span>
                                                            <span class="portail-title-three">{{ __('myhouse/back/menu/professionnel/backoffice.ap') }}</span>
                                                        </div>
                                                        <div class="portail-title">
                                                            <a href="#" style="text-decoration: none; color: inherit" data-toggle="modal" data-target="#promotion"><span class="portail-title-one">{{ __('myhouse/back/menu/professionnel/backoffice.ak') }}</span></a> - <span class="portail-title-two">{{ __('myhouse/back/menu/professionnel/backoffice.al') }}</span>
                                                            <span class="portail-title-three">{{ __('myhouse/back/menu/professionnel/backoffice.am') }}</span>
                                                        </div>

                                                        <div class="portail-hr"></div>
                                                        <div class="portail-title-next">
                                                            {{ __('myhouse/back/menu/professionnel/backoffice.an') }}
                                                        </div>
                                                        <div class="portail-content-map">
                                                            <div class="portail-content-map-first">{{ __('myhouse/back/menu/professionnel/backoffice.ao') }}</div>
                                                            <div class="portail-content-map-second">
                                                                <div class="portail-content-map-second-box">
                                                                    <div class="portail-content-map-second-box-item">
                                                                        <label for="#"></label>
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="portail-content-map-second-box-item">
                                                                        <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endif

        @include('myhouse.back.includes.generique.modal', ['professionnel_id' => $professionnel->id])

                                @endforeach


                            @endif


                        </div>
                    </div>

                    <!-- End List -->


                </div>
            </div>

        </div>





    </div>
@stop

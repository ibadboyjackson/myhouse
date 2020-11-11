@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/neuf/backoffice.aa') }}
@stop

@section('content')
    <div class="neuf">
        <div class="professionnel">
            <div class="menu-wrap">
                <div class="menu-wrap-content">
                    <!-- X button -->
                    <div class="menu-wrap-x-button">
                        <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                    </div>
                    <!-- End X button -->

                    @include('myhouse.back.includes.neuf.aside')

                    <div class="neuf">
                        @include('myhouse.back.includes.neuf.subscription')
                    </div>



                    <!-- List -->

                    <div class="menu-body">

                        <div style="margin-left: 534px;">
                            @include('myhouse.front.includes.message')

                        </div>

                        <div class="menu-body-title">{{ __('myhouse/back/menu/neuf/backoffice.ab') }}</div>
                        <div class="menu-body-hm">
                            <div class="menu-body-hr"></div>
                            <div class="menu-body-subs">
                                <span class="menu-body-subs-one">{{ __('myhouse/back/menu/neuf/backoffice.ac') }}</span>
                                <span class="menu-body-subs-two">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                        <div class="menu-body-content">

                            @if($neufs->count() <= 0)
                                <div class="no-result">
                                    <p>
                                        {{ __('myhouse/back/menu/particulier/annonce.aj') }}
                                    </p>
                                </div>
                            @else

                                @foreach($neufs as $neuf)
                                    <div class="menu-body-content-item" >
                                        <div class="display-item">
                                            <div class="page-list-panelle">
                                                <div class="page-list-panel-item">

                                                    <div class="page-list-top">
                                                        <div class="page-list-top-button">
                                                            {{ __('myhouse/back/menu/neuf/backoffice.ad') }}
                                                            {{ str_replace(' ', '/', \Carbon\Carbon::parse($neuf->created_at)->format('d m y')) }}
                                                        </div>
                                                        <div class="page-list-top-share">

                                                            <div class="page-list-top-share-content">
                                                                <div class="page-list-top-share-content-img">
                                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                                </div>
                                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/backoffice.ae') }}</div>
                                                            </div>

                                                            <div>
                                                                <a href="{{ route('neuf.edit', ['id' => $neuf->id]) }}" style="text-decoration: none; color: inherit">
                                                                    <div class="page-list-top-share-content">
                                                                        <div class="page-list-top-share-content-img">
                                                                            <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                                        </div>
                                                                        <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/backoffice.af') }}</div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div>
                                                                <a href="{{ route('neuf.delete', ['id' => $neuf->id]) }}" style="text-decoration: none; color: inherit">
                                                                    <div class="page-list-top-share-content">
                                                                        <div class="page-list-top-share-content-img">
                                                                            <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                                        </div>
                                                                        <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/backoffice.ag') }}</div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <!-- Should be fired -->
                                                    <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                                        <div class="page-list-item-enterprise-logo">
                                                            <div class="page-list-item-enterprise-logo-box">
                                                                <div class="page-list-item-enterprise-logo-img">
                                                                    <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                                </div>
                                                                <div class="page-list-item-enterprise-logo-text">
                                                                    {{ auth()->user()->entreprises()->first()->nom }}
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="carousel slide" data-ride="carousel herman" id="{{ $neuf->last_id }}">

                                                            <ol class="carousel-indicators">
                                                                @foreach(json_decode($neuf->medias) as $image)
                                                                    <li class="{{ $loop->first ? 'active' : '' }}" data-target="#{{ $neuf->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                                @endforeach
                                                            </ol>

                                                            <div class="carousel-inner">
                                                                @foreach(json_decode($neuf->medias) as $image)
                                                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                                        <img
                                                                            class="img-fluid"
                                                                            src="{{ asset('development/files/neuf/429/') . '/' . $image }}"
                                                                            alt="Third Slide"
                                                                        />
                                                                    </div>
                                                                @endforeach
                                                            </div>

                                                            <a class="carousel-control-prev" href="#{{ $neuf->last_id }}" role="button" data-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#{{ $neuf->last_id }}" role="button" data-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                    </a>

                                                    <!-- Should be fired -->


                                                </div>
                                                <div class="page-list-panel-item-one">
                                                    <div class="page-list-panel-item-two-top">
                                                        <div class="page-list-panel-item-two-top-left">
                                                            {{ __('myhouse/back/menu/neuf/backoffice.ah') }} AAZ5{{ \Illuminate\Support\Str::random(4) }}
                                                        </div>
                                                        <div class="page-list-panel-item-two-top-right">

                                                            @if ($neuf->online == 1)
                                                                <a href="{{ route('neuf.active.online', ['id' => $neuf->id]) }}" style="text-decoration: none; color: inherit">
                                                                    <span class="page-list-panel-active">{{ __('myhouse/back/menu/neuf/backoffice.ai') }}</span>    -
                                                                </a>

                                                                <a href="{{ route('neuf.deactive.online', ['id' => $neuf->id]) }}" style="text-decoration: none; color: inherit">
                                                                    <span>{{ __('myhouse/back/menu/neuf/backoffice.aj') }}</span>
                                                                </a>
                                                            @else
                                                                <a href="{{ route('neuf.active.online', ['id' => $neuf->id]) }}" style="text-decoration: none; color: inherit">
                                                                    <span class="">{{ __('myhouse/back/menu/neuf/backoffice.ai') }}</span>    -
                                                                </a>

                                                                <a href="{{ route('neuf.deactive.online', ['id' => $neuf->id]) }}" style="text-decoration: none; color: inherit">
                                                                    <span class="page-list-panel-active">{{ __('myhouse/back/menu/neuf/backoffice.aj') }}</span>
                                                                </a>
                                                            @endif

                                                        </div>
                                                    </div>

                                                    <!-- Should be fired -->
                                                    <div class="page-list-panel-item-two">
                                                        <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                                            <div class="page-list-panel-item-two-head">
                                                                <div class="page-list-panel-item-two-head-left">
                                                                    <div class="page-list-panel-item-two-head-left-box">
                                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                                        </div>
                                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                                            {{ substr($neuf->adresse, 0, 26) }} <br>
                                                                            {{ substr($neuf->adresse, 26, 50) }}
                                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="page-list-panel-item-two-head-right">
                                                                    <span class="text-panel-item-grays">{{ $neuf->nom_projet }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="page-list-panel-item-two-body">
                                                                <div class="page-list-panel-item-two-body-box-one">

                                                                    @if ($neuf->appartement)
                                                                        <div class="page-list-panel-item-two-body-box-item">
                                                                            <div class="page-list-panel-item-two-body-box-item-title-ts">

                                                                                Appartements résidentiel

                                                                                <div class="page-list-panel-item-two-body-box-item-title-sp">
                                                                                    {{ $neuf->nombre_chambre_de_appartement }}
                                                                                    à
                                                                                    {{ $neuf->nombre_chambre_a_appartement }}
                                                                                    chambres
                                                                                </div>
                                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                                    <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                                            {{ $neuf->prix_vente_de_appartement }}
                                                                                            <span class="text-sp-mad"> MAD </span>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($neuf->villa)
                                                                            <div class="page-list-panel-item-two-body-box-item">
                                                                                <div class="page-list-panel-item-two-body-box-item-title-ts">

                                                                                    Villas résidentiel

                                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp">
                                                                                        {{ $neuf->nombre_chambre_de_villa }}
                                                                                        à
                                                                                        {{ $neuf->nombre_chambre_a_villa }}
                                                                                        chambres
                                                                                    </div>
                                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                                        <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                                                {{ $neuf->prix_vente_de_villa }}
                                                                                                <span class="text-sp-mad"> MAD </span>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    @if ($neuf->maison)
                                                                            <div class="page-list-panel-item-two-body-box-item">
                                                                                <div class="page-list-panel-item-two-body-box-item-title-ts">

                                                                                    Villas résidentiel

                                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp">
                                                                                        {{ $neuf->nombre_chambre_de_maison}}
                                                                                        à
                                                                                        {{ $neuf->nombre_chambre_a_maison }}
                                                                                        chambres
                                                                                    </div>
                                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                                        <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                                                {{ $neuf->prix_vente_de_maison }}
                                                                                                <span class="text-sp-mad"> MAD </span>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                </div>




                                                                <div class="page-list-panel-item-two-body-box-two">
                                                                    <div class="page-list-panel-item-two-body-box-two-ts">
                                                                        {{ substr($neuf->description, 0, 150) }}...
                                                                    </div>
                                                                </div>
                                                                <div class="page-list-panel-item-two-body-box-three">
                                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                                        Superficie Projet {{ $neuf->superficie }} m²
                                                                    </div>
                                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                                        Appart de
                                                                        {{ $neuf->superficie_de_appartement }} m² à
                                                                        {{ $neuf->superficie_a_appartement }} m²
                                                                    </div>
                                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                                        Forêt
                                                                    </div>
                                                                </div>
                                                                <div class="page-list-panel-item-two-body-box-three">
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
                                                    <!-- Should be fired -->


                                                </div>




                                                <div class="portail">
                                                    <div class="portail-title">
                                                        <span class="portail-title-one">{{ __('myhouse/back/menu/neuf/backoffice.ak') }}</span> - <span class="portail-title-two">{{ __('myhouse/back/menu/neuf/backoffice.al') }}</span>
                                                        <span class="portail-title-three">{{ __('myhouse/back/menu/neuf/backoffice.am') }}</span>
                                                    </div>
                                                    <div class="portail-title">
                                                        <a href="#" style="text-decoration: none; color: inherit" data-toggle="modal" data-target="#promotion"><span class="portail-title-one">{{ __('myhouse/back/menu/neuf/backoffice.ak') }}</span></a> - <span class="portail-title-two">{{ __('myhouse/back/menu/neuf/backoffice.al') }}</span>
                                                        <span class="portail-title-three"> {{ __('myhouse/back/menu/neuf/backoffice.an') }}</span>
                                                    </div>

                                                    <div class="portail-hr"></div>
                                                    <div class="portail-title-next">
                                                        {{ __('myhouse/back/menu/neuf/backoffice.ao') }}
                                                    </div>
                                                    <div class="portail-content-map">
                                                        <div class="portail-content-map-seconds">
                                                            <div class="portail-content-map-second-boxs">
                                                                <div>
                                                                    <div class="portail-content-map-second-box-item">
                                                                        <div class="portail-content-map-firsts">{{ __('myhouse/back/menu/neuf/backoffice.ap') }}</div>
                                                                        <label for="#"></label>
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
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
                                @endforeach

                            @endif






                        </div>
                    </div>

                    <!-- End List -->


                </div>
            </div>
            <!--include('myhouse.back.includes.generique.modal') -->
        </div>
    </div>
@stop

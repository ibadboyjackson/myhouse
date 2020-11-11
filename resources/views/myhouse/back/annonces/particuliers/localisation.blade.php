@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/particulier/localisation.aa') }}
@stop

@section('style')
    
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('development/css/ui.css') }}">
    <link rel="stylesheet" href="{{ asset('development/css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('development/css/loaders.css') }}">

@stop

@section('content')
    <form action="{{ route('particulier.postlocalisation') }}" method="get" id="transform">

    <div class="particulier" style="position: relative">

    @include('myhouse.front.includes.criteresmessage')


        <div class="c-page">
            @if (auth()->user()->particulier->last()->page === 'localisation')
                <div class="transaction-block" id="transaction-block">
                    <div class="transaction-block-content">
                        <div class="transaction-block-content-x" id="transaction-close">
                            <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                        </div>
                        <div class="transaction-block-content-title">Votre annonce est sauvegardée</div>
                        <div class="transaction-block-content-body">
                            Retrouvez l'annonce dans votre menu pour la <br> réactiver et continuer
                        </div>
                        <div class="transaction-block-content-hr"></div>
                        <div class="transaction-bock-footer" id="transaction-closes">
                            FERMER
                        </div>
                    </div>
                </div>
            @endif
            <div class="ca-page">


                <div class="ca-page-item">
                    @include('myhouse.back.annonces.modules.particulier.left')
                </div>

                <div class="ca-page-item">
                    <div class="ca-page-item-second">
                        @include('myhouse.back.annonces.modules.particulier.progress')

                        <div class="ca-page-item-third-connexion">
                                <div class="ca-page-item-third-types-box" style="position: relative">

                                    <input type="hidden" name="id" value="{{ $id }}">

                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                        {{ __('myhouse/back/annonces/particulier/localisation.ab') }}
                                    </div>
                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                    <div class="ca-page-item-third-type-boxe">

                                        <div class="ca-page-item-third-type-box-input" style="font-family: inherit;">
                                            <input type="search" value="{{ $particulier->adresse }}" name="adresse" autocomplete="off" id="input-search" required class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/localisation.am') }}">
                                        </div>
                                    
                                        <div class="ca-page-item-third-type-box-input-local">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" value="{{ $particulier->pays }}" name="pays" id="country" required class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/localisation.ao') }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" value="{{ $particulier->ville }}" name="ville" id="city" required class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/localisation.an') }}">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <input type="text" value="{{ $particulier->quartier }}" name="quartier"  id="district" required class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/localisation.ap') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Loader start here -->



                                            <div class="loader" id = "loader"></div>

                                            <div class="loaders" id = "loaders"></div>



                                        <!-- Loader stop here -->


                                        <div class="ca-page-item-third-type-box-map">
                                            <div class="ca-page-item-third-type-box-map-text">
                                                <!--
                                                <div class="ca-page-item-third-type-box-map-text-box">
                                                    <div class="ca-page-item-third-type-box-map-text-box-first">
                                                        {{ __('myhouse/back/annonces/particulier/localisation.ac') }}
                                                    </div>
                                                    <div class="ca-page-item-third-type-box-map-text-box-second">
                                                        {{ __('myhouse/back/annonces/particulier/localisation.ad') }}
                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-type-box-map-text-box">
                                                    <div class="ca-page-item-third-type-box-map-text-box-first">
                                                        {{ __('myhouse/back/annonces/particulier/localisation.ae') }}
                                                    </div>
                                                    <div class="ca-page-item-third-type-box-map-text-box-second">
                                                        {{ __('myhouse/back/annonces/particulier/localisation.af') }}
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="ca-page-item-third-type-box-map-map">
                                                <div id="map" class="map"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="yt_b text-center">
                                        <a href = "{{ $particulier->critereurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                            <i class="fa fa-chevron-left"></i>
                                        </a>
                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/localisation.ag') }}</button>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>


                <div class="ca-page-item">

                                <a href="{{ $url }}">
                                    <div class="menu-wrap-x-buttons">
                                        <img src="{{ asset('images/residential/single/x.svg') }}" alt="" class="float-right">
                                    </div>
                                </a>


                    <div class="ca-page-item-third">

                        <div class="ca-page-item-thirds-thumbs">
                            <img src="{{ asset('images/residential/single/astro.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="ca-page-item-third-text pt-3 text-center">
                            {{ __('myhouse/back/annonces/particulier/localisation.ah') }} <br> {{ __('myhouse/back/annonces/particulier/localisation.ai') }}
                        </div>
                    </div>
                    <div class="ca-page-item-third-text-b">
                        {{ __('myhouse/back/annonces/particulier/localisation.aj') }} <br>
                        {{ __('myhouse/back/annonces/particulier/localisation.ak') }} <br>
                        {{ __('myhouse/back/annonces/particulier/localisation.al') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="{{ asset('development/js/localisation/localisation.js') }}"></script>
    <script src="{{ asset('development/js/drag.js') }}"></script>
    <script src="{{ asset('development/js/localisation/maps.js') }}"></script>


    <script src="{{ asset('development/js/level.js') }}"></script>
    <script src="{{ asset('development/js/errors/errors.js') }}"></script>

@endsection


@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/professionnel/localisation.aa') }}
@stop

@section('style')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('development/css/ui.css') }}">
@stop


@section('content')

<form action="{{ route('professionnel.payement') }}" method="get" id = "transform">

    <div class="c-page">

                @isset(auth()->user()->professionnel->last()->page)
                    @if (auth()->user()->professionnel->last()->page === 'localisation')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>
                                <div class="transaction-block-content-title">{{ __('myhouse/back/annonces/professionnel/critere.aa') }}</div>
                                <div class="transaction-block-content-body">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ab') }} <br> {{ __('myhouse/back/annonces/professionnel/critere.ac') }}
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ad') }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endisset

        <div class="ca-page">
            
            <div class="ca-page-item">
                @include('myhouse.back.annonces.modules.professionnel.left')
            </div>

            <div class="ca-page-item">
                <div class="ca-page-item-seconds">

                    @include('myhouse.back.annonces.modules.professionnel.progress')



                        <input type="hidden" name="id" value="{{ request()->get('id')  }}">

                        <div class="ca-page-item-third-connexion">
                            <div class="ca-page-item-third-types-box">

                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                    {{ __('myhouse/back/annonces/professionnel/localisation.ab') }}
                                </div>
                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                <div class="ca-page-item-third-type-boxe">
                                    <div class="ca-page-item-third-type-box-input">
                                        <input type="search" name="adresse" value="{{ $professionnel->adresse }}" autocomplete="off" id="input-search" required class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/localisation.am') }}">
                                    </div>
                                    <div class="ca-page-item-third-type-box-input-local">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="pays" value="{{ $professionnel->pays }}" id="country" required class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/localisation.ao') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="ville" id="city" value="{{ $professionnel->ville }}" required class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/localisation.an') }}">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <input type="text" name="quartier" value="{{ $professionnel->quartier }}" id="district" required class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/localisation.ap') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-third-type-box-map">
                                        <div class="ca-page-item-third-type-box-map-text">
                                        <!--
                                            <div class="ca-page-item-third-type-box-map-text-box">
                                                <div class="ca-page-item-third-type-box-map-text-box-first">
                                                    {{ __('myhouse/back/annonces/professionnel/localisation.ac') }}
                                                </div>
                                                <div class="ca-page-item-third-type-box-map-text-box-second">
                                                    {{ __('myhouse/back/annonces/professionnel/localisation.ad') }}
                                                </div>
                                            </div>
                                            <div class="ca-page-item-third-type-box-map-text-box">
                                                <div class="ca-page-item-third-type-box-map-text-box-first">
                                                    {{ __('myhouse/back/annonces/professionnel/localisation.ae') }}
                                                </div>
                                                <div class="ca-page-item-third-type-box-map-text-box-second">
                                                    {{ __('myhouse/back/annonces/professionnel/localisation.af') }}
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="ca-page-item-third-type-box-map-map">
                                            <div id="map" class="map"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="yt_b text-center">
                                    <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                        <i class="fa fa-chevron-left"></i>
                                     </a>
                                    <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/professionnel/localisation.ag') }}</button>
                                </div>

                            </div>

                        </div>


                    </form>
                </div>
            </div>
            <div class="ca-page-item">
                <div class="ca-page-item-third">

                    <a href="{{ $url }}">
                        <div class="ca-page-item-third-button-x clearfix">
                             <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                        </div>
                    </a>

                    <div class="ca-page-item-third-thumb">
                        <img src="{{ asset('images/residential/single/astro.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="ca-page-item-third-text pt-3 text-center">
                        {{ __('myhouse/back/annonces/professionnel/localisation.ah') }} <br>
                        {{ __('myhouse/back/annonces/professionnel/localisation.ai') }}
                    </div>
                    <div class="ca-page-item-third-text-text">
                        {{ __('myhouse/back/annonces/professionnel/localisation.aj') }} <br>
                        {{ __('myhouse/back/annonces/professionnel/localisation.ak') }} <br>
                        {{ __('myhouse/back/annonces/professionnel/localisation.al') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('scripts')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('development/js/here.js') }}"></script>
    <script src="{{ asset('development/js/drag.js') }}"></script>

    <script src="{{ asset('development/js/level.js') }}"></script>

@endsection

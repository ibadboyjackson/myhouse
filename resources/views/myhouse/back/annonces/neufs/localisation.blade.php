@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/neuf/localisation.aa') }}
@stop

@section('content')
    <div class="annonce">
        <div class="c-page a-neuf">
            <div class="ca-page">
                <div class="ca-page-item">
                    @include('myhouse.back.annonces.modules.neuf.left')
                </div>
                <div class="ca-page-item">
                    <div class="ca-page-item-second">

                        @include('myhouse.back.annonces.modules.neuf.progress')


                        <form action="{{ route('neuf.type') }}" method="get">

                            <input type="hidden" name="id" value="{{ request()->get('id') }}">

                            <div class="ca-page-item-third-connexion">
                                <div class="ca-page-item-third-connexion-box">

                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                        {{ __('myhouse/back/annonces/neuf/localisation.ab') }}
                                    </div>
                                    <div class="ca-page-item-third-connexion-box-title-hr"></div>


                                </div>
                            </div>
                            <div class="ca-page-item-third-type-boxe">
                                <div class="ca-page-item-third-type-box-input">
                                    <input type="text" name="adresse" required class="form-control" placeholder="{{ __('myhouse/back/annonces/neuf/localisation.am') }}">
                                </div>
                                <div class="ca-page-item-third-type-box-input-local">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="ville" required class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/localisation.an') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="pays" required class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/localisation.ao') }}">
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <input type="text" name="quartier" required class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/localisation.ap') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="ca-page-item-third-type-box-map">
                                    <div class="ca-page-item-third-type-box-map-text">
                                        <div class="ca-page-item-third-type-box-map-text-box">
                                            <div class="ca-page-item-third-type-box-map-text-box-first">
                                                {{ __('myhouse/back/annonces/neuf/localisation.ac') }}
                                            </div>
                                            <div class="ca-page-item-third-type-box-map-text-box-second">
                                                {{ __('myhouse/back/annonces/neuf/localisation.ad') }}
                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-type-box-map-text-box">
                                            <div class="ca-page-item-third-type-box-map-text-box-first">
                                                {{ __('myhouse/back/annonces/neuf/localisation.ae') }}
                                            </div>
                                            <div class="ca-page-item-third-type-box-map-text-box-second">
                                                {{ __('myhouse/back/annonces/neuf/localisation.af') }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-third-type-box-map-map">
                                        <div id="map" class="map"></div>
                                    </div>
                                </div>
                            </div>



                            <div class="ca-page-item-second-footer">
                                <button class="btn btn-prev mr-2">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-connections" type="submit">{{ __('myhouse/back/annonces/neuf/localisation.ag') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="ca-page-item">
                    <div class="ca-page-item-third">
                        <div class="ca-page-item-third-button-x clearfix">
                            <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                        </div>

                        <div class="ca-page-item-third-thumb">
                            <img src="{{ asset('images/residential/single/d2.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="ca-page-item-third-text pt-3 text-center">
                            {{ __('myhouse/back/annonces/neuf/localisation.ah') }} <br>
                            {{ __('myhouse/back/annonces/neuf/localisation.ai') }}
                        </div>
                        <div class="ca-page-item-third-text-text">
                            {{ __('myhouse/back/annonces/neuf/localisation.aj') }}<br>
                            {{ __('myhouse/back/annonces/neuf/localisation.ak') }} <br>
                            {{ __('myhouse/back/annonces/neuf/localisation.al') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop


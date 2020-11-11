@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/professionnel/payement.aa') }}
@stop

@section('content')
    <div class="wh-pay">
        <div class="payment">
            <div class="c-page">
                <div class="ca-page">
                    <div class="ca-page-item">
                        @include('myhouse.back.annonces.modules.professionnel.left')
                    </div>
                    <div class="ca-page-item">
                        <div class="ca-page-item-seconds">

                            @include('myhouse.back.annonces.modules.professionnel.progress')


                            <form action="{{ route('professionnel.success') }}" method="get">
                                <div class="ca-page-item-third-connexion">
                                    <div class="ca-page-item-third-typess-box">

                                        <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                            {{ __('myhouse/back/annonces/professionnel/payement.ab') }}
                                        </div>
                                        <div class="ca-page-item-third-connexion-box-hr"></div>
                                        <div class="ca-page-item-third-connexion-box-title-next">
                                            {{ __('myhouse/back/annonces/professionnel/payement.ac') }}
                                        </div>

                                        <div class="ca-page-item-third-type-boxe">

                                            <div class="ca-page-item-third-type-creadit-card">

                                                <div class="ca-page-item-third-type-creadit-card-item">
                                                    <div class="ca-page-item-third-type-creadit-card-head">
                                                        <div class="ca-page-item-third-type-creadit-card-number">
                                                            1
                                                        </div>
                                                        <div class="ca-page-item-third-type-creadit-card-title">
                                                            {{ __('myhouse/back/annonces/professionnel/payement.ad') }}
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-third-type-creadit-card-body">
                                                        <div class="ca-page-item-third-type-creadit-card-body-img">
                                                            <img src="{{ asset('images/residential/single/cb1.svg') }}" alt="">
                                                        </div>
                                                        <div class="ca-page-item-third-type-creadit-card-body-input">
                                                            <div>
                                                                <input type="radio" id="cb1" name="cb" checked="">
                                                                <label for="cb1"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-third-type-creadit-card-height"></div>
                                                </div>

                                                <div class="ca-page-item-third-type-creadit-card-item">
                                                    <div class="ca-page-item-third-type-creadit-card-head">
                                                        <div class="ca-page-item-third-type-creadit-card-number">
                                                            2
                                                        </div>
                                                        <div class="ca-page-item-third-type-creadit-card-title">
                                                            {{ __('myhouse/back/annonces/professionnel/payement.ae') }}
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-third-type-creadit-card-body">
                                                        <div class="ca-page-item-third-type-creadit-card-body-img">
                                                            <img src="{{ asset('images/residential/single/cb2.svg') }}" alt="">
                                                        </div>
                                                        <div class="ca-page-item-third-type-creadit-card-body-input">
                                                            <div>
                                                                <input type="radio" id="cb2" name="cb" checked="">
                                                                <label for="cb2"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-third-type-creadit-card-height"></div>
                                                </div>

                                                <div class="ca-page-item-third-type-creadit-card-item">
                                                    <div class="ca-page-item-third-type-creadit-card-head">
                                                        <div class="ca-page-item-third-type-creadit-card-number">
                                                            3
                                                        </div>
                                                        <div class="ca-page-item-third-type-creadit-card-title">
                                                            {{ __('myhouse/back/annonces/professionnel/payement.af') }}
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-third-type-creadit-card-body">
                                                        <div class="ca-page-item-third-type-creadit-card-body-rib">
                                                            <div style="width: 100%">
                                                                <div class="ca-page-item-third-type-creadit-card-body-rib-text">{{ __('myhouse/back/annonces/professionnel/payement.ag') }}</div>
                                                                <div class="ca-page-item-third-type-creadit-card-body-rib-box">
                                                                    <span>1234</span>
                                                                    <span>5678</span>
                                                                    <span>3456</span>
                                                                    <span>2456</span>
                                                                    <span>2345</span>
                                                                    <span>4567</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-third-type-creadit-card-body-input">
                                                            <div>
                                                                <input type="radio" id="cb3" name="cb" checked="">
                                                                <label for="cb3"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="yt_b text-center">
                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                            <i class="fa fa-chevron-left"></i>
                                        </a>
                                            <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/professionnel/payement.ah') }}</button>
                                        </div>

                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                    <div class="ca-page-item">
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop

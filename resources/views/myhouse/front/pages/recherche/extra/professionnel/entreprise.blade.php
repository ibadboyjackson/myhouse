@extends('myhouse.front.template')

@section('title')
    {{ $entreprise->nom }}
@stop

@section('content')
    <div class="the-professionnelle">
        <div class="the-page pb-5">
            <div class="the-page-mt">
                <div class="the-page-close-button">
                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" style='cursor: pointer;'>
                          <img src="http://myhouse.com/images/residential/single/x.svg" alt="">
                    </a>
                </div>
                <div class="the-page-website">
                    <div class="the-page-website-box">
                        <div class="the-page-website-img">
                            <img src="{{ asset('images/residential/single/menu/web.svg') }}" alt="">
                        </div>
                        <div class="the-page-website-text">{{ __('myhouse/recherche/professionnel/entreprise.aa') }}</div>
                    </div>
                    <div class="the-page-website-link">{{ $entreprise->siteweb }}</div>
                </div>



                <!-- With grid -->

                <div class="the-page-grids">
                    <div class="the-page-grid-containers">
                        <div class="the-page-grid-container-item">
                            <div class="the-page-printable">
                                <div class="the-page-printable-box-one">
                                    <div class="the-page-printable-box-one-img">
                                        <img src="{{ asset('images/residential/single/menu/pdf.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-printable-box-one-text">
                                        {{ __('myhouse/recherche/professionnel/entreprise.ab') }}
                                    </div>
                                </div>
                                <div class="the-page-printable-box-two">
                                    <div class="the-page-printable-box-two-img">
                                        <img src="{{ asset('images/residential/single/menu/share.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-printable-box-two-text">{{ __('myhouse/recherche/professionnel/entreprise.ac') }}</div>
                                </div>
                            </div>
                            <div class="the-page-thumbnail">
                                <img src="{{ asset('images/residential/single/menu/enterprise.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="the-page-content-bottom">
                                <div class="the-page-content-bottom-box-one">
                                    <div class="the-page-content-bottom-box-one-box">
                                        <div class="the-page-content-bottom-box-one-box-img">
                                            <img src="{{ asset('images/residential/single/menu/msg.svg') }}" alt="">
                                        </div>
                                        <div class="the-page-content-bottom-box-one-box-text">
                                            {{ __('myhouse/recherche/professionnel/entreprise.ad') }}
                                        </div>
                                    </div>
                                    <div class="the-page-content-bottom-box-one-email">
                                        {{ $entreprise->email }} <br>
                                        {{ $entreprise->email }}
                                    </div>
                                </div>
                                <div class="the-page-content-bottom-box-two">
                                    <div class="the-page-content-bottom-box-one-box">
                                        <div class="the-page-content-bottom-box-one-box-img">
                                            <img src="{{ asset('images/residential/single/menu/spo.svg') }}" alt="">
                                        </div>
                                        <div class="the-page-content-bottom-box-one-box-text">
                                            {{ __('myhouse/recherche/professionnel/entreprise.ae') }}
                                        </div>
                                    </div>
                                    <div class="the-page-content-bottom-box-two-content">
                                        <div class="the-page-content-bottom-box-two-content-title">{{ __('myhouse/recherche/professionnel/entreprise.af') }}</div>
                                        {{ $entreprise->telephone }} <br>
                                        {{ $entreprise->telephone_un }}
                                        <div class="the-page-content-bottom-box-two-content-title">{{ __('myhouse/recherche/professionnel/entreprise.ag') }}</div>
                                        {{ $entreprise->telephone_deux }} <br>
                                        {{ $entreprise->telephone_trois }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="the-page-grid-container-item">
                            <div class="the-page-head">
                                <div>
                                    <div class="the-page-head-title" style="padding-top: 31px;">
                                        {{ $entreprise->nom }}
                                    </div>
                                    <div class="the-page-head-hr"></div>
                                </div>
                            </div>
                            <div class="enterprise-presentation">
                                <div class="enterprise-presentation-title">
                                    {{ __('myhouse/recherche/professionnel/entreprise.ah') }}
                                </div>
                                <div class="enterprise-presentation-hr"></div>
                                <div class="enterprise-presentation-body">
                                    {{ $entreprise->description }}
                                </div>
                            </div>
                            @include('myhouse.front.pages.recherche.extra.modules.discover')
                        </div>
                        <div class="the-page-grid-container-item">
                            <div class="enterprise-log">
                                <div class="enterprise-log-img">
                                    <img src="{{ asset('images/residential/single/menu/enlo.svg') }}" alt="">
                                </div>
                                <div class="enterprise-log-text">
                                    {{ $entreprise->adresse }} <br>
                                    Youssoufi de la Sole <br>
                                    Casablanca <br>
                                    Maroc
                                </div>
                            </div>
                            <div class="content-button">{{ __('myhouse/recherche/professionnel/entreprise.ai') }}</div>
                            <div class="content-map">
                                <div class="map" id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@stop

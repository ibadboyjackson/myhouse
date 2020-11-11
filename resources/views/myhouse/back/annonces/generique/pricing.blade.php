@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/generique/pricing.aa') }}
@stop

@section('content')
    <div class="page-rise-mt">
        <div class="page-rise">

            <a href="{{ $url }}">
                <div class="menu-wrap-x-button">
                    <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                </div>
            </a>

            <div class="page-rise-block">
                <div class="page-rise-block-item">
                    @include('myhouse.back.annonces.modules.support')
                </div>
                <div class="page-rise-block-item">
                    <div class="page-rise-head">
                        <div class="page-rise-title">
                            {{ __('myhouse/back/annonces/generique/pricing.ab') }}
                        </div>
                        <div class="page-rise-title-hr"></div>
                        <div class="page-rise-title-info">
                            {{ __('myhouse/back/annonces/generique/pricing.ac') }}
                        </div>
                    </div>
                    <div class="page-rise-body">
                        <div class="page-rise-body-box">
                            <div class="page-rise-body-box-item">
                                <div class="page-rise-body-box-circle">
                                    <div class="page-rise-body-box-circle-text">{{ __('myhouse/back/annonces/generique/pricing.ad') }}</div>
                                </div>
                                <div class="page-rise-body-box-annonce pg-green text-uppercase" style="padding-top: 27px;">
                                    {{ __('myhouse/back/annonces/generique/pricing.ae') }}
                                </div>
                                <a href="{{ route('particulier.url') }}" style="text-decoration: none; color: inherit">
                                    <div class="page-rise-body-box-annonce-buttons">
                                        {{ __('myhouse/back/annonces/generique/pricing.af') }}
                                    </div>
                                </a>
                            </div>
                            <div class="page-rise-body-box-item">
                                <div class="page-rise-r">
                                    <div class="page-rise-body-box-price">
                                        {{ __('myhouse/back/annonces/generique/pricing.ag') }}
                                    </div>
                                    <div class="page-rise-body-box-circle">
                                        <div class="page-rise-body-box-circle-text">{{ __('myhouse/back/annonces/generique/pricing.ah') }}</div>
                                    </div>
                                    <div class="page-rise-body-box-annonce pg-gray" style="margin-top: 13px; font-size: 15px">
                                        <span class="text-uppercase"> {{ __('myhouse/back/annonces/generique/pricing.ai') }} </span> {{ __('myhouse/back/annonces/generique/pricing.aj') }}
                                    </div>
                                    <div class="page-rise-body-box-annonce pg-green text-uppercase" style="margin-top: -2px;">
                                        {{ __('myhouse/back/annonces/generique/pricing.ak') }}
                                    </div>

                                    <div class="page-rise-body-box-marketings">

                                        <div class="page-rise-body-box-marketing-box">
                                            <div class="page-rise-body-box-marketing-box-item">
                                                <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                            </div>
                                            <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                                {{ __('myhouse/back/annonces/generique/pricing.al') }}
                                            </div>
                                        </div>
                                        <div class="page-rise-body-box-marketing-box">
                                            <div class="page-rise-body-box-marketing-box-item">
                                                <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                            </div>
                                            <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                                {{ __('myhouse/back/annonces/generique/pricing.am') }}
                                            </div>
                                        </div>
                                        <div class="page-rise-body-box-marketing-box">
                                            <div class="page-rise-body-box-marketing-box-item">
                                                <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                            </div>
                                            <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                                {{ __('myhouse/back/annonces/generique/pricing.an') }}
                                            </div>
                                        </div>
                                        <div class="page-rise-body-box-marketing-box">
                                            <div class="page-rise-body-box-marketing-box-item">
                                                <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                            </div>
                                            <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                                {{ __('myhouse/back/annonces/generique/pricing.ao') }}
                                            </div>
                                        </div>
                                        <div class="page-rise-body-box-marketing-box">
                                            <div class="page-rise-body-box-marketing-box-item">
                                                <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                            </div>
                                            <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                                {{ __('myhouse/back/annonces/generique/pricing.ap') }}
                                            </div>
                                        </div>
                                        <div class="page-rise-body-box-marketing-box">
                                            <div class="page-rise-body-box-marketing-box-item">
                                                <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                            </div>
                                            <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                                {{ __('myhouse/back/annonces/generique/pricing.aq') }}
                                            </div>
                                        </div>


                                    </div>
                                    <div class="page-rise-body-box-marketing-other text-green">
                                        {{ __('myhouse/back/annonces/generique/pricing.ar') }}
                                    </div>
                                    <a href="{{ route('professionnel.url') }}" style="text-decoration: none; color: inherit">
                                        <div class="page-rise-body-box-annonce-button">
                                            {{ __('myhouse/back/annonces/generique/pricing.as') }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="page-rise-body-box-item">
                                <div class="page-rise-r">
                                    <div class="page-rise-body-box-price">
                                        {{ __('myhouse/back/annonces/generique/pricing.at') }}
                                    </div>
                                    <div class="page-rise-body-box-circle">
                                        <div class="page-rise-body-box-circle-text">{{ __('myhouse/back/annonces/generique/pricing.au') }}</div>
                                    </div>
                                    <div class="page-rise-body-box-annonce pg-gray" style="margin-top: 13px; font-size: 15px">
                                        <span class="text-uppercase"> {{ __('myhouse/back/annonces/generique/pricing.av') }} </span> {{ __('myhouse/back/annonces/generique/pricing.aw') }}
                                    </div>
                                    <div class="page-rise-body-box-annonce pg-green text-uppercase" style="margin-top: -2px;">
                                        {{ __('myhouse/back/annonces/generique/pricing.ax') }}
                                    </div>

                                    <div class="page-rise-body-box-marketing">

                                        <div class="page-rise-body-box-marketing-box">
                                            <div class="page-rise-body-box-marketing-box-item">
                                                <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                            </div>
                                            <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                                {{ __('myhouse/back/annonces/generique/pricing.ay') }}
                                            </div>
                                        </div>
                                        <div class="page-rise-body-box-marketing-box">
                                            <div class="page-rise-body-box-marketing-box-item">
                                                <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                            </div>
                                            <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                                {{ __('myhouse/back/annonces/generique/pricing.az') }}
                                            </div>
                                        </div>
                                        <div class="page-rise-body-box-marketing-box">
                                            <div class="page-rise-body-box-marketing-box-item">
                                                <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                            </div>
                                            <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                                {{ __('myhouse/back/annonces/generique/pricing.aaa') }}
                                            </div>
                                        </div>
                                        <div class="page-rise-body-box-marketing-box">
                                            <div class="page-rise-body-box-marketing-box-item">
                                                <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                            </div>
                                            <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                                {{ __('myhouse/back/annonces/generique/pricing.aab') }}
                                            </div>
                                        </div>
                                        <div class="page-rise-body-box-marketing-box">
                                            <div class="page-rise-body-box-marketing-box-item">
                                                <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                            </div>
                                            <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                                {{ __('myhouse/back/annonces/generique/pricing.aac') }}
                                            </div>
                                        </div>


                                    </div>
                                    <div class="page-rise-body-box-marketing-other text-green" style="margin-top: 35px;">
                                        {{ __('myhouse/back/annonces/generique/pricing.aad') }}
                                    </div>

                                    <a href="{{ route('neuf.service', ['url' => $url]) }}" style="text-decoration: none; color: inherit">
                                        <div class="page-rise-body-box-annonce-button">
                                            {{ __('myhouse/back/annonces/generique/pricing.aae') }}
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-rise-block-item">
                    @include('myhouse.back.annonces.modules.abonne')
                </div>
            </div>
        </div>
    </div>

    @stop

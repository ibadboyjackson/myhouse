@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/particulier/service.aa') }}
@stop

@section('content')
    <div class="page-rise-mt">
        <div class="page-rise">
            <a href="{{ $url }}">
                <div class="menu-wrap-x-button">
                    <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                </div>
            </a>
            <div class="particulier">
                <div class="page-rise-block">
                    <div class="page-rise-block-item">
                        @include('myhouse.back.annonces.modules.support')
                    </div>

                    <div class="page-rise-block-item">

                        <div class="page-rise-head">

                        @include('myhouse.front.includes.message')

                            <div class="page-rise-title">
                                {{ __('myhouse/back/annonces/particulier/service.ab') }}
                            </div>
                            <div class="page-rise-title-hr"></div>
                            <div class="page-rise-title-info">
                                {{ __('myhouse/back/annonces/particulier/service.ac') }}
                            </div>
                        </div>

                        <div class="page-rise-body">
                            <div class="page-rise-body-service-mt">
                                <div class="page-rise-body-service">
                                    <div class="page-rise-body-service-left">
                                        <div class="page-rise-body-service-left-head">
                                            {{ __('myhouse/back/annonces/particulier/service.ad') }}
                                        </div>
                                        <div class="page-rise-body-service-left-body">

                                            <div class="page-rise-body-service-left-title">
                                                {{ __('myhouse/back/annonces/particulier/service.ae') }}
                                            </div>

                                            <div class="page-rise-body-service-left-content">
                                                {{ __('myhouse/back/annonces/particulier/service.af') }}
                                            </div>
                                            <div class="page-rise-body-service-left-content">
                                                {{ __('myhouse/back/annonces/particulier/service.ag') }}
                                            </div>
                                            <div class="page-rise-body-service-left-content">
                                                {{ __('myhouse/back/annonces/particulier/service.ah') }}
                                            </div>

                                            <div class="page-rise-body-service-left-title">
                                                {{ __('myhouse/back/annonces/particulier/service.ai') }}
                                            </div>

                                            <div class="page-rise-body-service-left-content">
                                                {{ __('myhouse/back/annonces/particulier/service.aj') }}
                                            </div>
                                            <div class="page-rise-body-service-left-content">
                                                {{ __('myhouse/back/annonces/particulier/service.ak') }}
                                            </div>
                                            <div class="page-rise-body-service-left-content">
                                                {{ __('myhouse/back/annonces/particulier/service.al') }}
                                            </div>


                                            <div class="page-rise-body-service-left-title">
                                                {{ __('myhouse/back/annonces/particulier/service.am') }}
                                            </div>

                                            <div class="page-rise-body-service-left-content">
                                                {{ __('myhouse/back/annonces/particulier/service.an') }}
                                            </div>
                                            <div class="page-rise-body-service-left-content">
                                                {{ __('myhouse/back/annonces/particulier/service.ao') }}
                                            </div>
                                            <div class="page-rise-body-service-left-content">
                                                {{ __('myhouse/back/annonces/particulier/service.ap') }}
                                            </div>
                                            <div class="page-rise-body-service-left-content">
                                                {{ __('myhouse/back/annonces/particulier/service.aq') }}
                                            </div>
                                            <div class="page-rise-body-service-left-content">
                                                {{ __('myhouse/back/annonces/particulier/service.ar') }}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="page-rise-body-service-right">
                                        <div class="page-rise-body-service-right-head">
                                            {{ __('myhouse/back/annonces/particulier/service.as') }}
                                        </div>

                                        <div class="page-rise-body-service-right-title">
                                            <div style="visibility: hidden">test</div>
                                        </div>

                                        <div class="page-rise-body-service-right-content">
                                            <div class="text-green">{{ __('myhouse/back/annonces/particulier/service.at') }}</div>
                                        </div>
                                        <div class="page-rise-body-service-right-content">
                                            <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-service-right-content">
                                            <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                        </div>

                                        <div class="page-rise-body-service-right-title">
                                            <div style="visibility: hidden">test</div>
                                        </div>

                                        <div class="page-rise-body-service-right-content">
                                            <img src="{{ asset('images/residential/single/invalid.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-service-right-content">
                                            <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-service-right-content">
                                            <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                        </div>

                                        <div class="page-rise-body-service-right-title">
                                            <div style="visibility: hidden">test</div>
                                        </div>

                                        <div class="page-rise-body-service-right-content">
                                            <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-service-right-content">
                                            <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-service-right-content">
                                            <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-service-right-content">
                                            <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-service-right-content">
                                            <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                        </div>


                                    </div>
                                </div>


                                <div class="service-button">
                                    <div>
                                        <a href="{{ route('pricing') }}" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                            <i class="fa fa-chevron-left"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{ route('particulier.transaction') }}" style="text-decoration: none; color: inherit">
                                            <div class="page-rise-body-button text-uppercase">
                                                {{ __('myhouse/back/annonces/particulier/service.au') }}
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
    </div>
@stop

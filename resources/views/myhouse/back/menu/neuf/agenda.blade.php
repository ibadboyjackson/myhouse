@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/neuf/agenda.aa') }}
@stop

@section('content')
    <div class="menu-wrap">
        <div class="menu-wrap-content">
            <!-- X button -->
            <div class="menu-wrap-x-button">
                <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
            </div>
            <!-- End X button -->

        @include('myhouse.back.includes.neuf.aside')


        <!-- List -->

            <div class="menu-body ag-user">
                <div class="menu-body-title">{{ __('myhouse/back/menu/neuf/agenda.ab') }}</div>
                <div class="menu-body-hr"></div>
                <div class="menu-body-subs">
                    <span class="menu-body-subs-one">{{ __('myhouse/back/menu/neuf/agenda.ac') }}</span>
                    <span class="menu-body-subs-two">abderazakjamo@hotmail.com</span>
                </div>

                <!-- Calendar -->
                @include('myhouse.back.menu.modules.calendar')
                <!-- Calendar -->


                <div class="menu-body-content">
                    <div class="menu-body-content-item">
                        <div class="display-item">
                            <div class="page-list-panelle menu-encounter">

                                <div class="page-list-panel-item">
                                    <div class="page-list-top">
                                        <div class="page-list-top-button">
                                            {{ __('myhouse/back/menu/neuf/interesse.ad') }} 14/09/2019
                                        </div>
                                    </div>
                                    <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                        <div class="page-list-item-enterprise-logo">
                                            <div class="page-list-item-enterprise-logo-box">
                                                <div class="page-list-item-enterprise-logo-img">
                                                    <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-item-enterprise-logo-text">
                                                    Real Estate Immobilier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel slide" data-ride="carousel herman" id="slider1">
                                            <ol class="carousel-indicators">
                                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                                <li data-target="#slider1" data-slide-to="1"></li>
                                                <li data-target="#slider1" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="First Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Second Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </a>
                                </div>


                                <div>
                                    <div class="must-use-top">
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ae') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.af') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ag') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ah') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ai') }}</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two">
                                        <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                            <div class="page-list-panel-item-two-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-head-right">
                                                    <span class="text-panel-item-grays">Résidence Val fleuri</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-body">
                                                <div class="page-list-panel-item-two-body-box-one">
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        1.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        7.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain commercial
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        2.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="page-list-panel-item-two-body-box-two">
                                                    <div class="page-list-panel-item-two-body-box-two-ts">
                                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                                        accusantium doloremque laudantium, totam rem
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three">
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Superficie Projet _____m2
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Appart de 67 m2 à 150 m2
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
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="menu-body-content-item">
                        <div class="display-item">
                            <div class="page-list-panelle">

                                <div class="page-list-panel-item">
                                    <div class="page-list-top">
                                        <div class="page-list-top-button">
                                            {{ __('myhouse/back/menu/neuf/interesse.ad') }} 14/09/2019
                                        </div>
                                    </div>
                                    <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                        <div class="page-list-item-enterprise-logo">
                                            <div class="page-list-item-enterprise-logo-box">
                                                <div class="page-list-item-enterprise-logo-img">
                                                    <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-item-enterprise-logo-text">
                                                    Real Estate Immobilier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel slide" data-ride="carousel herman" id="slider1">
                                            <ol class="carousel-indicators">
                                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                                <li data-target="#slider1" data-slide-to="1"></li>
                                                <li data-target="#slider1" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="First Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Second Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </a>
                                </div>


                                <div>
                                    <div class="must-use-top">
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ae') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.af') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ag') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ah') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ai') }}</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two">
                                        <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                            <div class="page-list-panel-item-two-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-head-right">
                                                    <span class="text-panel-item-grays">Résidence Val fleuri</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-body">
                                                <div class="page-list-panel-item-two-body-box-one">
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        1.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        7.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain commercial
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        2.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="page-list-panel-item-two-body-box-two">
                                                    <div class="page-list-panel-item-two-body-box-two-ts">
                                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                                        accusantium doloremque laudantium, totam rem
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three">
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Superficie Projet _____m2
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Appart de 67 m2 à 150 m2
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
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="menu-body-content-item">
                        <div class="display-item">
                            <div class="page-list-panelle">

                                <div class="page-list-panel-item">
                                    <div class="page-list-top">
                                        <div class="page-list-top-button">
                                            {{ __('myhouse/back/menu/neuf/interesse.ad') }} 14/09/2019
                                        </div>
                                    </div>
                                    <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                        <div class="page-list-item-enterprise-logo">
                                            <div class="page-list-item-enterprise-logo-box">
                                                <div class="page-list-item-enterprise-logo-img">
                                                    <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-item-enterprise-logo-text">
                                                    Real Estate Immobilier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel slide" data-ride="carousel herman" id="slider1">
                                            <ol class="carousel-indicators">
                                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                                <li data-target="#slider1" data-slide-to="1"></li>
                                                <li data-target="#slider1" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="First Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Second Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </a>
                                </div>


                                <div>
                                    <div class="must-use-top">
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ae') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.af') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ag') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ah') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ai') }}</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two">
                                        <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                            <div class="page-list-panel-item-two-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-head-right">
                                                    <span class="text-panel-item-grays">Résidence Val fleuri</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-body">
                                                <div class="page-list-panel-item-two-body-box-one">
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        1.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        7.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain commercial
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        2.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="page-list-panel-item-two-body-box-two">
                                                    <div class="page-list-panel-item-two-body-box-two-ts">
                                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                                        accusantium doloremque laudantium, totam rem
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three">
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Superficie Projet _____m2
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Appart de 67 m2 à 150 m2
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
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="menu-body-content-item">
                        <div class="display-item">
                            <div class="page-list-panelle">

                                <div class="page-list-panel-item">
                                    <div class="page-list-top">
                                        <div class="page-list-top-button">
                                            {{ __('myhouse/back/menu/neuf/interesse.ad') }} 14/09/2019
                                        </div>
                                    </div>
                                    <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                        <div class="page-list-item-enterprise-logo">
                                            <div class="page-list-item-enterprise-logo-box">
                                                <div class="page-list-item-enterprise-logo-img">
                                                    <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-item-enterprise-logo-text">
                                                    Real Estate Immobilier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel slide" data-ride="carousel herman" id="slider1">
                                            <ol class="carousel-indicators">
                                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                                <li data-target="#slider1" data-slide-to="1"></li>
                                                <li data-target="#slider1" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="First Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Second Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </a>
                                </div>


                                <div>
                                    <div class="must-use-top">
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ae') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.af') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ag') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ah') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ai') }}</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two">
                                        <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                            <div class="page-list-panel-item-two-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-head-right">
                                                    <span class="text-panel-item-grays">Résidence Val fleuri</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-body">
                                                <div class="page-list-panel-item-two-body-box-one">
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        1.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        7.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain commercial
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        2.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="page-list-panel-item-two-body-box-two">
                                                    <div class="page-list-panel-item-two-body-box-two-ts">
                                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                                        accusantium doloremque laudantium, totam rem
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three">
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Superficie Projet _____m2
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Appart de 67 m2 à 150 m2
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
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="menu-body-content-item">
                        <div class="display-item">
                            <div class="page-list-panelle">

                                <div class="page-list-panel-item">
                                    <div class="page-list-top">
                                        <div class="page-list-top-button">
                                            {{ __('myhouse/back/menu/neuf/interesse.ad') }} 14/09/2019
                                        </div>
                                    </div>
                                    <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                        <div class="page-list-item-enterprise-logo">
                                            <div class="page-list-item-enterprise-logo-box">
                                                <div class="page-list-item-enterprise-logo-img">
                                                    <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-item-enterprise-logo-text">
                                                    Real Estate Immobilier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel slide" data-ride="carousel herman" id="slider1">
                                            <ol class="carousel-indicators">
                                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                                <li data-target="#slider1" data-slide-to="1"></li>
                                                <li data-target="#slider1" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="First Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Second Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </a>
                                </div>


                                <div>
                                    <div class="must-use-top">
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ae') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.af') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ag') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ah') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ai') }}</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two">
                                        <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                            <div class="page-list-panel-item-two-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-head-right">
                                                    <span class="text-panel-item-grays">Résidence Val fleuri</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-body">
                                                <div class="page-list-panel-item-two-body-box-one">
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        1.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        7.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain commercial
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        2.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="page-list-panel-item-two-body-box-two">
                                                    <div class="page-list-panel-item-two-body-box-two-ts">
                                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                                        accusantium doloremque laudantium, totam rem
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three">
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Superficie Projet _____m2
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Appart de 67 m2 à 150 m2
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
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="menu-body-content-item">
                        <div class="display-item">
                            <div class="page-list-panelle">

                                <div class="page-list-panel-item">
                                    <div class="page-list-top">
                                        <div class="page-list-top-button">
                                            {{ __('myhouse/back/menu/neuf/interesse.ad') }} 14/09/2019
                                        </div>
                                    </div>
                                    <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                        <div class="page-list-item-enterprise-logo">
                                            <div class="page-list-item-enterprise-logo-box">
                                                <div class="page-list-item-enterprise-logo-img">
                                                    <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-item-enterprise-logo-text">
                                                    Real Estate Immobilier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel slide" data-ride="carousel herman" id="slider1">
                                            <ol class="carousel-indicators">
                                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                                <li data-target="#slider1" data-slide-to="1"></li>
                                                <li data-target="#slider1" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="First Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Second Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </a>
                                </div>


                                <div>
                                    <div class="must-use-top">
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ae') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.af') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ag') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ah') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ai') }}</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two">
                                        <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                            <div class="page-list-panel-item-two-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-head-right">
                                                    <span class="text-panel-item-grays">Résidence Val fleuri</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-body">
                                                <div class="page-list-panel-item-two-body-box-one">
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        1.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        7.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain commercial
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        2.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="page-list-panel-item-two-body-box-two">
                                                    <div class="page-list-panel-item-two-body-box-two-ts">
                                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                                        accusantium doloremque laudantium, totam rem
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three">
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Superficie Projet _____m2
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Appart de 67 m2 à 150 m2
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
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="menu-body-content-item">
                        <div class="display-item">
                            <div class="page-list-panelle">

                                <div class="page-list-panel-item">
                                    <div class="page-list-top">
                                        <div class="page-list-top-button">
                                            {{ __('myhouse/back/menu/neuf/interesse.ad') }} 14/09/2019
                                        </div>
                                    </div>
                                    <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                        <div class="page-list-item-enterprise-logo">
                                            <div class="page-list-item-enterprise-logo-box">
                                                <div class="page-list-item-enterprise-logo-img">
                                                    <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-item-enterprise-logo-text">
                                                    Real Estate Immobilier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel slide" data-ride="carousel herman" id="slider1">
                                            <ol class="carousel-indicators">
                                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                                <li data-target="#slider1" data-slide-to="1"></li>
                                                <li data-target="#slider1" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="First Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Second Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </a>
                                </div>


                                <div>
                                    <div class="must-use-top">
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ae') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.af') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ag') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ah') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ai') }}</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two">
                                        <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                            <div class="page-list-panel-item-two-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-head-right">
                                                    <span class="text-panel-item-grays">Résidence Val fleuri</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-body">
                                                <div class="page-list-panel-item-two-body-box-one">
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        1.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        7.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain commercial
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        2.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="page-list-panel-item-two-body-box-two">
                                                    <div class="page-list-panel-item-two-body-box-two-ts">
                                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                                        accusantium doloremque laudantium, totam rem
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three">
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Superficie Projet _____m2
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Appart de 67 m2 à 150 m2
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
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="menu-body-content-item">
                        <div class="display-item">
                            <div class="page-list-panelle">

                                <div class="page-list-panel-item">
                                    <div class="page-list-top">
                                        <div class="page-list-top-button">
                                            {{ __('myhouse/back/menu/neuf/interesse.ad') }} 14/09/2019
                                        </div>
                                    </div>
                                    <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                        <div class="page-list-item-enterprise-logo">
                                            <div class="page-list-item-enterprise-logo-box">
                                                <div class="page-list-item-enterprise-logo-img">
                                                    <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-item-enterprise-logo-text">
                                                    Real Estate Immobilier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel slide" data-ride="carousel herman" id="slider1">
                                            <ol class="carousel-indicators">
                                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                                <li data-target="#slider1" data-slide-to="1"></li>
                                                <li data-target="#slider1" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="First Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Second Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </a>
                                </div>


                                <div>
                                    <div class="must-use-top">
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ae') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.af') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ag') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ah') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ai') }}</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two">
                                        <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                            <div class="page-list-panel-item-two-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-head-right">
                                                    <span class="text-panel-item-grays">Résidence Val fleuri</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-body">
                                                <div class="page-list-panel-item-two-body-box-one">
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        1.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        7.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain commercial
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        2.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="page-list-panel-item-two-body-box-two">
                                                    <div class="page-list-panel-item-two-body-box-two-ts">
                                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                                        accusantium doloremque laudantium, totam rem
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three">
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Superficie Projet _____m2
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Appart de 67 m2 à 150 m2
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
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="menu-body-content-item">
                        <div class="display-item">
                            <div class="page-list-panelle">

                                <div class="page-list-panel-item">
                                    <div class="page-list-top">
                                        <div class="page-list-top-button">
                                            {{ __('myhouse/back/menu/neuf/interesse.ad') }} 14/09/2019
                                        </div>
                                    </div>
                                    <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                        <div class="page-list-item-enterprise-logo">
                                            <div class="page-list-item-enterprise-logo-box">
                                                <div class="page-list-item-enterprise-logo-img">
                                                    <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-item-enterprise-logo-text">
                                                    Real Estate Immobilier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel slide" data-ride="carousel herman" id="slider1">
                                            <ol class="carousel-indicators">
                                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                                <li data-target="#slider1" data-slide-to="1"></li>
                                                <li data-target="#slider1" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="First Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Second Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </a>
                                </div>


                                <div>
                                    <div class="must-use-top">
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ae') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.af') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ag') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ah') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ai') }}</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two">
                                        <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                            <div class="page-list-panel-item-two-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-head-right">
                                                    <span class="text-panel-item-grays">Résidence Val fleuri</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-body">
                                                <div class="page-list-panel-item-two-body-box-one">
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        1.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        7.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain commercial
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        2.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="page-list-panel-item-two-body-box-two">
                                                    <div class="page-list-panel-item-two-body-box-two-ts">
                                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                                        accusantium doloremque laudantium, totam rem
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three">
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Superficie Projet _____m2
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Appart de 67 m2 à 150 m2
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
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="menu-body-content-item">
                        <div class="display-item">
                            <div class="page-list-panelle">

                                <div class="page-list-panel-item">
                                    <div class="page-list-top">
                                        <div class="page-list-top-button">
                                            {{ __('myhouse/back/menu/neuf/interesse.ad') }} 14/09/2019
                                        </div>
                                    </div>
                                    <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                        <div class="page-list-item-enterprise-logo">
                                            <div class="page-list-item-enterprise-logo-box">
                                                <div class="page-list-item-enterprise-logo-img">
                                                    <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-item-enterprise-logo-text">
                                                    Real Estate Immobilier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel slide" data-ride="carousel herman" id="slider1">
                                            <ol class="carousel-indicators">
                                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                                <li data-target="#slider1" data-slide-to="1"></li>
                                                <li data-target="#slider1" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="First Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Second Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </a>
                                </div>


                                <div>
                                    <div class="must-use-top">
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ae') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.af') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ag') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ah') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ai') }}</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two">
                                        <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                            <div class="page-list-panel-item-two-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-head-right">
                                                    <span class="text-panel-item-grays">Résidence Val fleuri</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-body">
                                                <div class="page-list-panel-item-two-body-box-one">
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        1.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        7.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain commercial
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        2.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="page-list-panel-item-two-body-box-two">
                                                    <div class="page-list-panel-item-two-body-box-two-ts">
                                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                                        accusantium doloremque laudantium, totam rem
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three">
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Superficie Projet _____m2
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Appart de 67 m2 à 150 m2
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
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="menu-body-content-item">
                        <div class="display-item">
                            <div class="page-list-panelle">

                                <div class="page-list-panel-item">
                                    <div class="page-list-top">
                                        <div class="page-list-top-button">
                                            {{ __('myhouse/back/menu/neuf/interesse.ad') }} 14/09/2019
                                        </div>
                                    </div>
                                    <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                        <div class="page-list-item-enterprise-logo">
                                            <div class="page-list-item-enterprise-logo-box">
                                                <div class="page-list-item-enterprise-logo-img">
                                                    <img src="{{ asset('images/residential/real.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="page-list-item-enterprise-logo-text">
                                                    Real Estate Immobilier
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel slide" data-ride="carousel herman" id="slider1">
                                            <ol class="carousel-indicators">
                                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                                <li data-target="#slider1" data-slide-to="1"></li>
                                                <li data-target="#slider1" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="First Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Second Slide"
                                                    />
                                                </div>
                                                <div class="carousel-item ">
                                                    <img
                                                        class="d-block img-fluid mx-auto"
                                                        src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                        alt="Third Slide"
                                                    />
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 14px;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 14px;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </a>
                                </div>


                                <div>
                                    <div class="must-use-top">
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ae') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.af') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ag') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ah') }}</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">{{ __('myhouse/back/menu/neuf/interesse.ai') }}</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two">
                                        <a href="{{ route('resultat.neuf', 'residence-du-val-de-marne') }}" target="_blank" style="text-decoration: none; color: inherit">
                                            <div class="page-list-panel-item-two-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-head-right">
                                                    <span class="text-panel-item-grays">Résidence Val fleuri</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-body">
                                                <div class="page-list-panel-item-two-body-box-one">
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        1.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain résidentiel
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        7.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-item">
                                                        <div class="page-list-panel-item-two-body-box-item-title-ts">
                                                            Terrain commercial
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                                            <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                                                <img src="{{ asset('images/residential/single/menu/pris.svg') }}" alt="" class="img-fluid" width="90" height="22">

                                                                <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text">
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-one">à partir de</div>
                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp-yu-text-two">
                                                                        2.000.000 <span class="text-sp-mad"> MAD </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="page-list-panel-item-two-body-box-two">
                                                    <div class="page-list-panel-item-two-body-box-two-ts">
                                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                                        accusantium doloremque laudantium, totam rem
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-three">
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Superficie Projet _____m2
                                                    </div>
                                                    <div class="page-list-panel-item-two-body-box-three-box">
                                                        Appart de 67 m2 à 150 m2
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
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>


            <!-- End List -->


        </div>
    </div>
@stop

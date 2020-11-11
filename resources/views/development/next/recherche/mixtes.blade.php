<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> MyHouse </title>

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('development/css/header.css') }}">

    <!-- CDN LINK -->
    <link href='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('development/css/select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg-test">

@include('development.includes.nav')

@include('development.next.recherche.include.head')


<div class="overplay">
    <div class="row mt-25">
        <div class="page">
            <div class="page-carte">
                <div class="is-map">
                    <div class="map" id="map"></div>
                </div>
            </div>
            <div class="page-liste">
                <div class="page-list-panel">
                    <div class="page-list-panel-item">

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

                        <div class="carousel slide" data-ride="carousel" id="slider1">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                <li data-target="#slider1" data-slide-to="1"></li>
                                <li data-target="#slider1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="First Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Second Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Third Slide"
                                    />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="page-list-panel-item-two">
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
                                <span class="text-panel-item-gray">Résidence</span> <span class="text-panel-item-green">Val fleuri</span>
                                <div class="page-list-panel-item-two-head-right-sp">
                                    Livraison immédiate
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body">
                            <div class="page-list-panel-item-two-body-box">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Appartement
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Villa
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Commerce
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                            <div class="page-list-panel-item-two-body-box-one">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title-ts">
                                        Terrain résidentiel
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    accusantium doloremque laudantium, totam rem aperiam, eaque quae ab illo inven (...)
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
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    3 apparts par étage
                                </div>
                            </div>
                            <div class="page-list-panel-item-two-body-box-three">
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Villa de 500 à 1200 m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Supérette
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Superficie Projet _____m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Appart de 67 m2 à 150 m2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-list-panel">
                    <div class="page-list-panel-item">

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

                        <div class="carousel slide" data-ride="carousel" id="slider1">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                <li data-target="#slider1" data-slide-to="1"></li>
                                <li data-target="#slider1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="First Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Second Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Third Slide"
                                    />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="page-list-panel-item-two">
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
                                <span class="text-panel-item-gray">Résidence</span> <span class="text-panel-item-green">Val fleuri</span>
                                <div class="page-list-panel-item-two-head-right-sp">
                                    Livraison immédiate
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body">
                            <div class="page-list-panel-item-two-body-box">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Appartement
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Villa
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Commerce
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                            <div class="page-list-panel-item-two-body-box-one">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title-ts">
                                        Terrain résidentiel
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    accusantium doloremque laudantium, totam rem aperiam, eaque quae ab illo inven (...)
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
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    3 apparts par étage
                                </div>
                            </div>
                            <div class="page-list-panel-item-two-body-box-three">
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Villa de 500 à 1200 m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Supérette
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Superficie Projet _____m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Appart de 67 m2 à 150 m2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-list-panel">
                    <div class="page-list-panel-item">

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

                        <div class="carousel slide" data-ride="carousel" id="slider1">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                <li data-target="#slider1" data-slide-to="1"></li>
                                <li data-target="#slider1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="First Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Second Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Third Slide"
                                    />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="page-list-panel-item-two">
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
                                <span class="text-panel-item-gray">Résidence</span> <span class="text-panel-item-green">Val fleuri</span>
                                <div class="page-list-panel-item-two-head-right-sp">
                                    Livraison immédiate
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body">
                            <div class="page-list-panel-item-two-body-box">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Appartement
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Villa
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Commerce
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                            <div class="page-list-panel-item-two-body-box-one">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title-ts">
                                        Terrain résidentiel
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    accusantium doloremque laudantium, totam rem aperiam, eaque quae ab illo inven (...)
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
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    3 apparts par étage
                                </div>
                            </div>
                            <div class="page-list-panel-item-two-body-box-three">
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Villa de 500 à 1200 m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Supérette
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Superficie Projet _____m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Appart de 67 m2 à 150 m2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-list-panel">
                    <div class="page-list-panel-item">

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

                        <div class="carousel slide" data-ride="carousel" id="slider1">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                <li data-target="#slider1" data-slide-to="1"></li>
                                <li data-target="#slider1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="First Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Second Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Third Slide"
                                    />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="page-list-panel-item-two">
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
                                <span class="text-panel-item-gray">Résidence</span> <span class="text-panel-item-green">Val fleuri</span>
                                <div class="page-list-panel-item-two-head-right-sp">
                                    Livraison immédiate
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body">
                            <div class="page-list-panel-item-two-body-box">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Appartement
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Villa
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Commerce
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                            <div class="page-list-panel-item-two-body-box-one">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title-ts">
                                        Terrain résidentiel
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    accusantium doloremque laudantium, totam rem aperiam, eaque quae ab illo inven (...)
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
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    3 apparts par étage
                                </div>
                            </div>
                            <div class="page-list-panel-item-two-body-box-three">
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Villa de 500 à 1200 m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Supérette
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Superficie Projet _____m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Appart de 67 m2 à 150 m2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-list-panel">
                    <div class="page-list-panel-item">

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

                        <div class="carousel slide" data-ride="carousel" id="slider1">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                <li data-target="#slider1" data-slide-to="1"></li>
                                <li data-target="#slider1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="First Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Second Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Third Slide"
                                    />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="page-list-panel-item-two">
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
                                <span class="text-panel-item-gray">Résidence</span> <span class="text-panel-item-green">Val fleuri</span>
                                <div class="page-list-panel-item-two-head-right-sp">
                                    Livraison immédiate
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body">
                            <div class="page-list-panel-item-two-body-box">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Appartement
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Villa
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Commerce
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                            <div class="page-list-panel-item-two-body-box-one">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title-ts">
                                        Terrain résidentiel
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    accusantium doloremque laudantium, totam rem aperiam, eaque quae ab illo inven (...)
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
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    3 apparts par étage
                                </div>
                            </div>
                            <div class="page-list-panel-item-two-body-box-three">
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Villa de 500 à 1200 m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Supérette
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Superficie Projet _____m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Appart de 67 m2 à 150 m2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-list-panel">
                    <div class="page-list-panel-item">

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

                        <div class="carousel slide" data-ride="carousel" id="slider1">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                <li data-target="#slider1" data-slide-to="1"></li>
                                <li data-target="#slider1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="First Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Second Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Third Slide"
                                    />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="page-list-panel-item-two">
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
                                <span class="text-panel-item-gray">Résidence</span> <span class="text-panel-item-green">Val fleuri</span>
                                <div class="page-list-panel-item-two-head-right-sp">
                                    Livraison immédiate
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body">
                            <div class="page-list-panel-item-two-body-box">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Appartement
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Villa
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Commerce
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                            <div class="page-list-panel-item-two-body-box-one">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title-ts">
                                        Terrain résidentiel
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    accusantium doloremque laudantium, totam rem aperiam, eaque quae ab illo inven (...)
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
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    3 apparts par étage
                                </div>
                            </div>
                            <div class="page-list-panel-item-two-body-box-three">
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Villa de 500 à 1200 m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Supérette
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Superficie Projet _____m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Appart de 67 m2 à 150 m2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-list-panel">
                    <div class="page-list-panel-item">

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

                        <div class="carousel slide" data-ride="carousel" id="slider1">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                <li data-target="#slider1" data-slide-to="1"></li>
                                <li data-target="#slider1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="First Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Second Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Third Slide"
                                    />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="page-list-panel-item-two">
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
                                <span class="text-panel-item-gray">Résidence</span> <span class="text-panel-item-green">Val fleuri</span>
                                <div class="page-list-panel-item-two-head-right-sp">
                                    Livraison immédiate
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body">
                            <div class="page-list-panel-item-two-body-box">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Appartement
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Villa
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Commerce
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                            <div class="page-list-panel-item-two-body-box-one">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title-ts">
                                        Terrain résidentiel
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    accusantium doloremque laudantium, totam rem aperiam, eaque quae ab illo inven (...)
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
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    3 apparts par étage
                                </div>
                            </div>
                            <div class="page-list-panel-item-two-body-box-three">
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Villa de 500 à 1200 m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Supérette
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Superficie Projet _____m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Appart de 67 m2 à 150 m2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-list-panel">
                    <div class="page-list-panel-item">

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

                        <div class="carousel slide" data-ride="carousel" id="slider1">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                <li data-target="#slider1" data-slide-to="1"></li>
                                <li data-target="#slider1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="First Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Second Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Third Slide"
                                    />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="page-list-panel-item-two">
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
                                <span class="text-panel-item-gray">Résidence</span> <span class="text-panel-item-green">Val fleuri</span>
                                <div class="page-list-panel-item-two-head-right-sp">
                                    Livraison immédiate
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body">
                            <div class="page-list-panel-item-two-body-box">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Appartement
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Villa
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Commerce
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                            <div class="page-list-panel-item-two-body-box-one">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title-ts">
                                        Terrain résidentiel
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    accusantium doloremque laudantium, totam rem aperiam, eaque quae ab illo inven (...)
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
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    3 apparts par étage
                                </div>
                            </div>
                            <div class="page-list-panel-item-two-body-box-three">
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Villa de 500 à 1200 m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Supérette
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Superficie Projet _____m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Appart de 67 m2 à 150 m2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-list-panel">
                    <div class="page-list-panel-item">

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

                        <div class="carousel slide" data-ride="carousel" id="slider1">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                <li data-target="#slider1" data-slide-to="1"></li>
                                <li data-target="#slider1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="First Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Second Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Third Slide"
                                    />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="page-list-panel-item-two">
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
                                <span class="text-panel-item-gray">Résidence</span> <span class="text-panel-item-green">Val fleuri</span>
                                <div class="page-list-panel-item-two-head-right-sp">
                                    Livraison immédiate
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body">
                            <div class="page-list-panel-item-two-body-box">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Appartement
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Villa
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Commerce
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                            <div class="page-list-panel-item-two-body-box-one">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title-ts">
                                        Terrain résidentiel
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    accusantium doloremque laudantium, totam rem aperiam, eaque quae ab illo inven (...)
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
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    3 apparts par étage
                                </div>
                            </div>
                            <div class="page-list-panel-item-two-body-box-three">
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Villa de 500 à 1200 m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Supérette
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Superficie Projet _____m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Appart de 67 m2 à 150 m2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-list-panel">
                    <div class="page-list-panel-item">

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

                        <div class="carousel slide" data-ride="carousel" id="slider1">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                <li data-target="#slider1" data-slide-to="1"></li>
                                <li data-target="#slider1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="First Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Second Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/mix.png') }}"
                                        alt="Third Slide"
                                    />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="page-list-panel-item-two">
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
                                <span class="text-panel-item-gray">Résidence</span> <span class="text-panel-item-green">Val fleuri</span>
                                <div class="page-list-panel-item-two-head-right-sp">
                                    Livraison immédiate
                                </div>
                            </div>
                        </div>
                        <div class="page-list-panel-item-two-body">
                            <div class="page-list-panel-item-two-body-box">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Appartement
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Villa
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">3 à 5 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    <div class="page-list-panel-item-two-body-box-item-title">
                                        Commerce
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">20 à 130 m2</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                            <div class="page-list-panel-item-two-body-box-one">
                                <div class="page-list-panel-item-two-body-box-item">
                                    <div class="page-list-panel-item-two-body-box-item-title-ts">
                                        Terrain résidentiel
                                        <div class="page-list-panel-item-two-body-box-item-title-sp">2 à 4 chambres</div>
                                        <div class="page-list-panel-item-two-body-box-item-title-sp-yu-ts">
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                            <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">

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
                                    accusantium doloremque laudantium, totam rem aperiam, eaque quae ab illo inven (...)
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
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    3 apparts par étage
                                </div>
                            </div>
                            <div class="page-list-panel-item-two-body-box-three">
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Villa de 500 à 1200 m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Supérette
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Superficie Projet _____m2
                                </div>
                                <div class="page-list-panel-item-two-body-box-three-box">
                                    Appart de 67 m2 à 150 m2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>



<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>

<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('development/js/apps.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>



<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<script src='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js'></script>
<script src="{{ asset('js/map.js') }}"></script>
</body>
</html>


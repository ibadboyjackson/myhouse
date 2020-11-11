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

    <link rel="stylesheet" href="{{ asset('development/css/select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg-test">

@include('development.includes.nav')

@include('development.next.recherche.include.head')



<div class="overflay">

    <div class="button-sps" id="button-sp">
        <i class="fas fa-caret-right button-sp-ds"></i>
    </div>


    <div class="d-flex justify-content-center mt-91">
        <div class="d-flex icon mt-2">
            <a href="" id="list-one-button" class="active-hover-two">
                <div class="menu-icon-two is-active" id ="icon-one">
                    <div class="menu-icon-centers-line"></div>
                </div>
            </a>
            <a href="" id="list-two-button" class="active-hover active-mr">
                <div class="menu-icon" id ="icon-two">
                    <div class="menus-icon-center">
                        <div class="boxes d-flex justify-content-center">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="boxes d-flex justify-content-center">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="boxes d-flex justify-content-center">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="" id="list-three-button" class="active-hover">
                <div class="menu-icon" id ="icon-three">
                    <div class="menus-icons-center">
                        <div class="boxes d-flex justify-content-center">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="boxes d-flex justify-content-center">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="boxes d-flex justify-content-center">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div id = "liste-one" class="mt-28 mb-68 list-button liste-active">

        <div class="container-fluid">

            <div class="marge">

                <div class="display mb-5">

                    <div class="display-item">
                        <div class="page-list-panel">
                            <div class="page-list-panel-item">
                                <a href="{{ route('resultats', 'residence-alpe') }}" target="_blank">
                                    <div class="page-list-item-enterprise-logoos">
                                        <div class="page-list-item-enterprise-logo-box">
                                            <div class="page-list-item-enterprise-logo-img">
                                                <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
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
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="First Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="Second Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
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
                                </a>
                            </div>

                            <div class="page-list-panel-item-two-pro">
                                <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="page-list-panel-item-two-pro-head">
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
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="page-list-panel-item-two-pro-body">

                                        <div class="page-list-panel-item-two-pro-body-box">
                                            <div class="page-list-panel-item-two-pro-body-content">
                                                Vente
                                                <div class="page-list-panel-item-two-pro-body-content-image">
                                                    <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                </div>
                                                <div class="page-list-panel-item-two-pro-body-content-price">
                                                    1.000.000
                                                    <span class="text-uppercase">mad</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-pro-text">
                                                136 m2
                                            </div>
                                        </div>


                                        <div class="page-list-item-two-pro-body-content-text">
                                            Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                            voluptartem accusantium doloremque laudantium, totam rem
                                        </div>


                                    </div>
                                    <div class="page-list-panel-item-two-pro-footer">
                                        <div class="page-list-panel-item-two-body-box-threes">
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Superficie Projet
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Appart de 67 m2 à 150 m2
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Forêt
                                            </div>
                                        </div>
                                        <div class="page-list-panel-item-two-body-box-threes">
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




















                    <div class="display-item">
                        <div class="page-list-panel">
                            <div class="page-list-panel-item">
                                <a href="{{ route('resultats', 'residence-alpe') }}" target="_blank">
                                    <div class="page-list-item-enterprise-logoos">
                                        <div class="page-list-item-enterprise-logo-box">
                                            <div class="page-list-item-enterprise-logo-img">
                                                <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
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
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="First Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="Second Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
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
                                </a>
                            </div>

                            <div class="page-list-panel-item-two-pro">
                                <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="page-list-panel-item-two-pro-head">
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
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="page-list-panel-item-two-pro-body">

                                        <div class="page-list-panel-item-two-pro-body-box">
                                            <div class="page-list-panel-item-two-pro-body-content">
                                                Vente
                                                <div class="page-list-panel-item-two-pro-body-content-image">
                                                    <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                </div>
                                                <div class="page-list-panel-item-two-pro-body-content-price">
                                                    1.000.000
                                                    <span class="text-uppercase">mad</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-pro-text">
                                                136 m2
                                            </div>
                                        </div>


                                        <div class="page-list-item-two-pro-body-content-text">
                                            Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                            voluptartem accusantium doloremque laudantium, totam rem
                                        </div>


                                    </div>
                                    <div class="page-list-panel-item-two-pro-footer">
                                        <div class="page-list-panel-item-two-body-box-threes">
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Superficie Projet
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Appart de 67 m2 à 150 m2
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Forêt
                                            </div>
                                        </div>
                                        <div class="page-list-panel-item-two-body-box-threes">
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
                    <div class="display-item">
                        <div class="page-list-panel">
                            <div class="page-list-panel-item">
                                <a href="{{ route('resultats', 'residence-alpe') }}" target="_blank">
                                    <div class="page-list-item-enterprise-logoos">
                                        <div class="page-list-item-enterprise-logo-box">
                                            <div class="page-list-item-enterprise-logo-img">
                                                <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
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
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="First Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="Second Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
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
                                </a>
                            </div>

                            <div class="page-list-panel-item-two-pro">
                                <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="page-list-panel-item-two-pro-head">
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
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="page-list-panel-item-two-pro-body">

                                        <div class="page-list-panel-item-two-pro-body-box">
                                            <div class="page-list-panel-item-two-pro-body-content">
                                                Vente
                                                <div class="page-list-panel-item-two-pro-body-content-image">
                                                    <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                </div>
                                                <div class="page-list-panel-item-two-pro-body-content-price">
                                                    1.000.000
                                                    <span class="text-uppercase">mad</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-pro-text">
                                                136 m2
                                            </div>
                                        </div>


                                        <div class="page-list-item-two-pro-body-content-text">
                                            Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                            voluptartem accusantium doloremque laudantium, totam rem
                                        </div>


                                    </div>
                                    <div class="page-list-panel-item-two-pro-footer">
                                        <div class="page-list-panel-item-two-body-box-threes">
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Superficie Projet
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Appart de 67 m2 à 150 m2
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Forêt
                                            </div>
                                        </div>
                                        <div class="page-list-panel-item-two-body-box-threes">
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
                    <div class="display-item">
                        <div class="page-list-panel">
                            <div class="page-list-panel-item">
                                <a href="{{ route('resultats', 'residence-alpe') }}" target="_blank">
                                    <div class="page-list-item-enterprise-logoos">
                                        <div class="page-list-item-enterprise-logo-box">
                                            <div class="page-list-item-enterprise-logo-img">
                                                <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
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
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="First Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="Second Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
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
                                </a>
                            </div>

                            <div class="page-list-panel-item-two-pro">
                                <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="page-list-panel-item-two-pro-head">
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
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="page-list-panel-item-two-pro-body">

                                        <div class="page-list-panel-item-two-pro-body-box">
                                            <div class="page-list-panel-item-two-pro-body-content">
                                                Vente
                                                <div class="page-list-panel-item-two-pro-body-content-image">
                                                    <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                </div>
                                                <div class="page-list-panel-item-two-pro-body-content-price">
                                                    1.000.000
                                                    <span class="text-uppercase">mad</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-pro-text">
                                                136 m2
                                            </div>
                                        </div>


                                        <div class="page-list-item-two-pro-body-content-text">
                                            Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                            voluptartem accusantium doloremque laudantium, totam rem
                                        </div>


                                    </div>
                                    <div class="page-list-panel-item-two-pro-footer">
                                        <div class="page-list-panel-item-two-body-box-threes">
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Superficie Projet
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Appart de 67 m2 à 150 m2
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Forêt
                                            </div>
                                        </div>
                                        <div class="page-list-panel-item-two-body-box-threes">
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
                    <div class="display-item">
                        <div class="page-list-panel">
                            <div class="page-list-panel-item">
                                <a href="{{ route('resultats', 'residence-alpe') }}" target="_blank">
                                    <div class="page-list-item-enterprise-logoos">
                                        <div class="page-list-item-enterprise-logo-box">
                                            <div class="page-list-item-enterprise-logo-img">
                                                <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
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
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="First Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="Second Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
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
                                </a>
                            </div>

                            <div class="page-list-panel-item-two-pro">
                                <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="page-list-panel-item-two-pro-head">
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
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="page-list-panel-item-two-pro-body">

                                        <div class="page-list-panel-item-two-pro-body-box">
                                            <div class="page-list-panel-item-two-pro-body-content">
                                                Vente
                                                <div class="page-list-panel-item-two-pro-body-content-image">
                                                    <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                </div>
                                                <div class="page-list-panel-item-two-pro-body-content-price">
                                                    1.000.000
                                                    <span class="text-uppercase">mad</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-pro-text">
                                                136 m2
                                            </div>
                                        </div>


                                        <div class="page-list-item-two-pro-body-content-text">
                                            Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                            voluptartem accusantium doloremque laudantium, totam rem
                                        </div>


                                    </div>
                                    <div class="page-list-panel-item-two-pro-footer">
                                        <div class="page-list-panel-item-two-body-box-threes">
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Superficie Projet
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Appart de 67 m2 à 150 m2
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Forêt
                                            </div>
                                        </div>
                                        <div class="page-list-panel-item-two-body-box-threes">
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
                    <div class="display-item">
                        <div class="page-list-panel">
                            <div class="page-list-panel-item">
                                <a href="{{ route('resultats', 'residence-alpe') }}" target="_blank">
                                    <div class="page-list-item-enterprise-logoos">
                                        <div class="page-list-item-enterprise-logo-box">
                                            <div class="page-list-item-enterprise-logo-img">
                                                <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
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
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="First Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="Second Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
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
                                </a>
                            </div>

                            <div class="page-list-panel-item-two-pro">
                                <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="page-list-panel-item-two-pro-head">
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
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="page-list-panel-item-two-pro-body">

                                        <div class="page-list-panel-item-two-pro-body-box">
                                            <div class="page-list-panel-item-two-pro-body-content">
                                                Vente
                                                <div class="page-list-panel-item-two-pro-body-content-image">
                                                    <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                </div>
                                                <div class="page-list-panel-item-two-pro-body-content-price">
                                                    1.000.000
                                                    <span class="text-uppercase">mad</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-pro-text">
                                                136 m2
                                            </div>
                                        </div>


                                        <div class="page-list-item-two-pro-body-content-text">
                                            Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                            voluptartem accusantium doloremque laudantium, totam rem
                                        </div>


                                    </div>
                                    <div class="page-list-panel-item-two-pro-footer">
                                        <div class="page-list-panel-item-two-body-box-threes">
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Superficie Projet
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Appart de 67 m2 à 150 m2
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Forêt
                                            </div>
                                        </div>
                                        <div class="page-list-panel-item-two-body-box-threes">
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
                    <div class="display-item">
                        <div class="page-list-panel">
                            <div class="page-list-panel-item">
                                <a href="{{ route('resultats', 'residence-alpe') }}" target="_blank">
                                    <div class="page-list-item-enterprise-logoos">
                                        <div class="page-list-item-enterprise-logo-box">
                                            <div class="page-list-item-enterprise-logo-img">
                                                <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
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
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="First Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="Second Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
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
                                </a>
                            </div>

                            <div class="page-list-panel-item-two-pro">
                                <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="page-list-panel-item-two-pro-head">
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
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="page-list-panel-item-two-pro-body">

                                        <div class="page-list-panel-item-two-pro-body-box">
                                            <div class="page-list-panel-item-two-pro-body-content">
                                                Vente
                                                <div class="page-list-panel-item-two-pro-body-content-image">
                                                    <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                </div>
                                                <div class="page-list-panel-item-two-pro-body-content-price">
                                                    1.000.000
                                                    <span class="text-uppercase">mad</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-pro-text">
                                                136 m2
                                            </div>
                                        </div>


                                        <div class="page-list-item-two-pro-body-content-text">
                                            Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                            voluptartem accusantium doloremque laudantium, totam rem
                                        </div>


                                    </div>
                                    <div class="page-list-panel-item-two-pro-footer">
                                        <div class="page-list-panel-item-two-body-box-threes">
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Superficie Projet
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Appart de 67 m2 à 150 m2
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Forêt
                                            </div>
                                        </div>
                                        <div class="page-list-panel-item-two-body-box-threes">
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
                    <div class="display-item">
                        <div class="page-list-panel">
                            <div class="page-list-panel-item">
                                <a href="{{ route('resultats', 'residence-alpe') }}" target="_blank">
                                    <div class="page-list-item-enterprise-logoos">
                                        <div class="page-list-item-enterprise-logo-box">
                                            <div class="page-list-item-enterprise-logo-img">
                                                <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
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
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="First Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="Second Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
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
                                </a>
                            </div>

                            <div class="page-list-panel-item-two-pro">
                                <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="page-list-panel-item-two-pro-head">
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
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="page-list-panel-item-two-pro-body">

                                        <div class="page-list-panel-item-two-pro-body-box">
                                            <div class="page-list-panel-item-two-pro-body-content">
                                                Vente
                                                <div class="page-list-panel-item-two-pro-body-content-image">
                                                    <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                </div>
                                                <div class="page-list-panel-item-two-pro-body-content-price">
                                                    1.000.000
                                                    <span class="text-uppercase">mad</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-pro-text">
                                                136 m2
                                            </div>
                                        </div>


                                        <div class="page-list-item-two-pro-body-content-text">
                                            Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                            voluptartem accusantium doloremque laudantium, totam rem
                                        </div>


                                    </div>
                                    <div class="page-list-panel-item-two-pro-footer">
                                        <div class="page-list-panel-item-two-body-box-threes">
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Superficie Projet
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Appart de 67 m2 à 150 m2
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Forêt
                                            </div>
                                        </div>
                                        <div class="page-list-panel-item-two-body-box-threes">
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
                    <div class="display-item">
                        <div class="page-list-panel">
                            <div class="page-list-panel-item">
                                <a href="{{ route('resultats', 'residence-alpe') }}" target="_blank">
                                    <div class="page-list-item-enterprise-logoos">
                                        <div class="page-list-item-enterprise-logo-box">
                                            <div class="page-list-item-enterprise-logo-img">
                                                <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
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
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="First Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="Second Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
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
                                </a>
                            </div>

                            <div class="page-list-panel-item-two-pro">
                                <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="page-list-panel-item-two-pro-head">
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
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="page-list-panel-item-two-pro-body">

                                        <div class="page-list-panel-item-two-pro-body-box">
                                            <div class="page-list-panel-item-two-pro-body-content">
                                                Vente
                                                <div class="page-list-panel-item-two-pro-body-content-image">
                                                    <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                </div>
                                                <div class="page-list-panel-item-two-pro-body-content-price">
                                                    1.000.000
                                                    <span class="text-uppercase">mad</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-pro-text">
                                                136 m2
                                            </div>
                                        </div>


                                        <div class="page-list-item-two-pro-body-content-text">
                                            Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                            voluptartem accusantium doloremque laudantium, totam rem
                                        </div>


                                    </div>
                                    <div class="page-list-panel-item-two-pro-footer">
                                        <div class="page-list-panel-item-two-body-box-threes">
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Superficie Projet
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Appart de 67 m2 à 150 m2
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Forêt
                                            </div>
                                        </div>
                                        <div class="page-list-panel-item-two-body-box-threes">
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
                    <div class="display-item">
                        <div class="page-list-panel">
                            <div class="page-list-panel-item">
                                <a href="{{ route('resultats', 'residence-alpe') }}" target="_blank">
                                    <div class="page-list-item-enterprise-logoos">
                                        <div class="page-list-item-enterprise-logo-box">
                                            <div class="page-list-item-enterprise-logo-img">
                                                <img src="{{ asset('images/residential/single/menu/real.png') }}" alt="" class="img-fluid">
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
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="First Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
                                                    alt="Second Slide"
                                                />
                                            </div>
                                            <div class="carousel-item ">
                                                <img
                                                    class="img-fluid"
                                                    src="{{ asset('images/residential/single/menu/pro.png') }}"
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
                                </a>
                            </div>

                            <div class="page-list-panel-item-two-pro">
                                <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="page-list-panel-item-two-pro-head">
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
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="page-list-panel-item-two-pro-body">

                                        <div class="page-list-panel-item-two-pro-body-box">
                                            <div class="page-list-panel-item-two-pro-body-content">
                                                Vente
                                                <div class="page-list-panel-item-two-pro-body-content-image">
                                                    <img src="{{ asset('images/residential/yu.svg') }}" alt="" class="img-fluid" width="90" height="22">
                                                </div>
                                                <div class="page-list-panel-item-two-pro-body-content-price">
                                                    1.000.000
                                                    <span class="text-uppercase">mad</span>
                                                </div>
                                            </div>
                                            <div class="page-list-panel-item-two-pro-text">
                                                136 m2
                                            </div>
                                        </div>


                                        <div class="page-list-item-two-pro-body-content-text">
                                            Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                            voluptartem accusantium doloremque laudantium, totam rem
                                        </div>


                                    </div>
                                    <div class="page-list-panel-item-two-pro-footer">
                                        <div class="page-list-panel-item-two-body-box-threes">
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Superficie Projet
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Appart de 67 m2 à 150 m2
                                            </div>
                                            <div class="page-list-panel-item-two-body-box-three-box">
                                                Forêt
                                            </div>
                                        </div>
                                        <div class="page-list-panel-item-two-body-box-threes">
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
    <div id = "liste-three" class="mt-28 mb-68 list-button">
        <div style="margin-top: 70px;">
            <div class="grid-container">

                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carouse">
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-image">
                                <div class="page-list-item-enterprise-logoos">
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
                        </a>
                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                            <div class="carouse-body-three">
                                <div class="carouse-body-three-head">
                                    <div class="page-list-panel-item-two-head-left-box">
                                        <div class="page-list-panel-item-two-head-left-box-left">
                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="page-list-panel-item-two-head-left-box-right">
                                            Casablanca Maarif
                                        </div>
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right-sp">
                                        <div>
                                            300m du lieu de recherche
                                        </div>
                                    </div>
                                </div>
                                <div class="carouse-body-three-content">
                                    <div class="carouse-body-three-content-boxex">
                                        <div class="carouse-body-three-content-boxex-next">
                                            Vente
                                            <div class="carouse-body-three-content-boxex-next-img">
                                                <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                            </div>
                                            <div class="carouse-body-three-content-boxex-next-img-text">
                                                1.000.000 <span>MAD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexex">
                                        <div class="page-list-panel-item-two-body-box-item">
                                            <div class="page-list-panel-item-two-body-box-item-title">
                                                Appartement
                                                <div class="page-list-panel-item-two-body-box-item-title-sp">2 chambres</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carouse-body-content-boxexs">
                                        136 m2
                                    </div>
                                </div>
                                <div class="carouse-body-three-content-page">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptartem accusantium doloremque laudantium, totam
                                    rem  sit voluptartem accusantium
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id = "liste-five" class="mt-28 mb-68 list-button">
        <div class="grid-containers">

            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-image">
                            <div class="page-list-item-enterprise-logos">
                                <div class="page-list-item-enterprise-logo-box">
                                    <div class="page-list-item-enterprise-logo-img">
                                        <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-item-enterprise-logos-text">
                                        Real Estate
                                    </div>
                                </div>

                            </div>
                            <div class="slide">
                                <div class="carousel slide" data-ride="carousel" id="slider1">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                        <li data-target="#slider1" data-slide-to="1"></li>
                                        <li data-target="#slider1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}  "
                                                alt="First Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
                                                src="{{ asset('images/residential/mix.png') }}"
                                                alt="Second Slide"
                                            />
                                        </div>
                                        <div class="carousel-item ">
                                            <img
                                                class="img-fluid"
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
                        </div>
                    </a>
                    <a  href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank">
                        <div class="carouse-with-body-five">
                            <div class="carouse-with-body-five-head">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                                <div class="carouse-with-body-five-head-type">
                                    Appartement
                                </div>
                                <div class="carouse-with-body-five-head-type-super">
                                    136 m2
                                </div>
                            </div>
                            <div class="carouse-with-body-five-content">
                                300m du lieu de recherche
                            </div>
                            <div class="carouse-with-body-five-footer">
                                <div class="carouse-body-three-content-boxex-next">
                                    Vente
                                    <div class="carouse-body-three-content-boxex-next-img">
                                        <img src="{{ asset('images/residential/yu.svg') }}" alt="" width="90" height="22">
                                    </div>
                                    <div class="carouse-body-three-content-boxex-next-img-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
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

</body>
</html>



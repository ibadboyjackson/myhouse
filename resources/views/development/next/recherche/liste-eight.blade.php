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
            <a href="{{ route('liste') }}" class="active-hover-two">
                <div class="menu-icon-two">
                    <div class="menu-icon-centers-line"></div>
                </div>
            </a>
            <a href="{{ route('liste-five') }}" class="active-hover active-mr">
                <div class="menu-icon ">
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
            <a href="{{ route('liste-eight') }}" class="active-hover">
                <div class="menu-icon is-active">
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
    <div class="mt-28 mb-68">
        <div class="grid-containers">

            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Commerce</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Villa</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="grid-iteme">
                <div class="carouse">
                    <div class="carouse-image">
                        <div class="page-list-item-enterprise-logos">
                            <div class="page-list-item-enterprise-logo-box">
                                <div class="page-list-item-enterprise-logo-img">
                                    <img src="{{ asset('images/residential/rest.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="page-list-item-enterprise-logos-text">
                                    Real Estate Immobilier
                                </div>
                            </div>
                            <div class="page-list-item-enterprise-logo-box-name">
                                <span>
                                    Résidence VAL <br>
                                </span>
                            </div>

                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/residential/mix.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="carouse-with-body">
                        <div class="clearfix mx-1">
                            <div class="float-left">
                                <div class="page-list-panel-item-two-head-left-box">
                                    <div class="page-list-panel-item-two-head-left-box-left">
                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="page-list-panel-item-two-head-left-box-right">
                                        Casablanca Maarif
                                    </div>
                                </div>
                            </div>
                            <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                        </div>
                        <div class="carouse-with-body-two">
                            Prix à partir de
                        </div>
                        <div class="carouse-with-footer">
                            <div class="carouse-body-content-box">
                                <div class="carouse-body-content-box-title">Appartement</div>
                                <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
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

</body>
</html>

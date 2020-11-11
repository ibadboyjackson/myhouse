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


<div class="overclay">
    <div class="row mt-25">
        <div class="mixte">
            <div class="row">
                <div class="col-md-6 d-sm-none d-md-block pr-0">
                    <div class="is-map">
                        <div class="map" id="map"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" style="overflow-y: auto">
                    <div class="is-list ml-2">
                        <div class="row pb-67">
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="row pb-67">
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="row pb-67">
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="row pb-67">
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="row pb-67">
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="row pb-67">
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="row pb-67">
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="row pb-67">
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="row pb-67">
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="row pb-67">
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('single') }}" target="_blank">
                                    <div class="list-box">
                                        <div class="list-box-img text-center">
                                            <img src="{{ asset('images/residential/im.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="list-box-desc">
                                            <div class="float-left">
                                                <div class="list-box-title mt-1">Appartement  Maârif</div>
                                                <div class="list-box-title-month"><span class="content-st">Location</span> 12.000 MAD/mois</div>
                                                <div class="list-box-title-day">1.000 MAD/jour</div>
                                            </div>
                                            <div class="float-right">
                                                <div class="list-box-type-desc mt-1 mr-3">
                                                    Surface habitable 120 m2 <br>
                                                    Surface du terrain 1300m2 <br>
                                                    300m du lieu de recherche
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


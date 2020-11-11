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

@include('development.next.include.myhouseNav')





<!-- Overlay -->

<div class="overplay mt-89">
    <div class="d-flex justify-content-end mr-4 mt-3">
        <img src="{{ asset('images/residential/x.svg') }}" alt="">
    </div>
    <div class="wraps">
        <div class="wrap-five">
            <div class="wrap-five-item">
                @include('development.includes.aside')
                <div class="sidebar-button" id="sidebar-button">
                    <i class="fas fa-caret-right button-sp-ds"></i>
                </div>
            </div>
            <div class="wrap-five-item">
                <div class="row d-flex justify-content-center ">
                    <div class="d-flex icon">
                        <a href="{{ route('annonce') }}" class="active-hover">
                            <div class="list-icon">
                                <span class="hamburgers"></span>
                            </div>
                        </a>
                        <a href="{{ route('annonce-three') }}" class="active-hover-two">
                            <div class="menu-icon-two">
                                <div class="menu-icon-center">
                                    <div class="box d-flex justify-content-center">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="box d-flex justify-content-center">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="box d-flex justify-content-center">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('annonce-five') }}" class="active-hover">
                            <div class="menu-icon is-active">
                                <div class="menu-icon-center">
                                    <div class="box d-flex justify-content-center">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="box d-flex justify-content-center">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="box d-flex justify-content-center">
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

                <div class="five pb-5">
                    <div class="section">
                        <div class="content-desc-block d-flex justify-content-center mt-20">
                            <div class="conference">
                                <div class="conference-block ml-99 mt-01">
                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Partager</span>
                                </div>
                                <div class="conference-block ml-100 mt-01">
                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Modifier</span>
                                </div>
                                <div class="conference-block ml-101 mt-01">
                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">supprimer</span>
                                </div>
                            </div>
                        </div>

                        <div class="section-belong">
                            <a href="#" class="section-belong-acive">Activé</a> -
                            <a href="#">Désactivée</a>
                        </div>
                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>
                        <div class="clearfix">
                            <hr class="page-title-hr float-left">
                        </div>
                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="content-desc">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="content-desc-title text-capitalize">Appartement  Maârif</span>
                                    <span class="content-desc-title-price-month text-capitalize"> <span class="content-st"> Location </span>12.000 MAD/mois</span>
                                    <span class="content-desc-title-price-day text-capitalize text-right">1.000 MAD/jour</span>
                                </div>
                            </div>
                            <div class="agent-type-text">Surface habitable 120 m2</div>

                        </div>
                        <div class="content-desc-publish-date">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="content-desc-block d-flex justify-content-center mt-20">
                            <div class="conference">
                                <div class="conference-block ml-99 mt-01">
                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Partager</span>
                                </div>
                                <div class="conference-block ml-100 mt-01">
                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Modifier</span>
                                </div>
                                <div class="conference-block ml-101 mt-01">
                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">supprimer</span>
                                </div>
                            </div>
                        </div>

                        <div class="section-belong">
                            <a href="#" class="section-belong-acive">Activé</a> -
                            <a href="#">Désactivée</a>
                        </div>
                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>
                        <div class="clearfix">
                            <hr class="page-title-hr float-left">
                        </div>
                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="content-desc">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="content-desc-title text-capitalize">Appartement  Maârif</span>
                                    <span class="content-desc-title-price-month text-capitalize"> <span class="content-st"> Location </span>12.000 MAD/mois</span>
                                    <span class="content-desc-title-price-day text-capitalize text-right">1.000 MAD/jour</span>
                                </div>
                            </div>
                            <div class="agent-type-text">Surface habitable 120 m2</div>

                        </div>
                        <div class="content-desc-publish-date">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="content-desc-block d-flex justify-content-center mt-20">
                            <div class="conference">
                                <div class="conference-block ml-99 mt-01">
                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Partager</span>
                                </div>
                                <div class="conference-block ml-100 mt-01">
                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Modifier</span>
                                </div>
                                <div class="conference-block ml-101 mt-01">
                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">supprimer</span>
                                </div>
                            </div>
                        </div>

                        <div class="section-belong">
                            <a href="#" class="section-belong-acive">Activé</a> -
                            <a href="#">Désactivée</a>
                        </div>
                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>
                        <div class="clearfix">
                            <hr class="page-title-hr float-left">
                        </div>
                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="content-desc">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="content-desc-title text-capitalize">Appartement  Maârif</span>
                                    <span class="content-desc-title-price-month text-capitalize"> <span class="content-st"> Location </span>12.000 MAD/mois</span>
                                    <span class="content-desc-title-price-day text-capitalize text-right">1.000 MAD/jour</span>
                                </div>
                            </div>
                            <div class="agent-type-text">Surface habitable 120 m2</div>

                        </div>
                        <div class="content-desc-publish-date">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="content-desc-block d-flex justify-content-center mt-20">
                            <div class="conference">
                                <div class="conference-block ml-99 mt-01">
                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Partager</span>
                                </div>
                                <div class="conference-block ml-100 mt-01">
                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Modifier</span>
                                </div>
                                <div class="conference-block ml-101 mt-01">
                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">supprimer</span>
                                </div>
                            </div>
                        </div>

                        <div class="section-belong">
                            <a href="#" class="section-belong-acive">Activé</a> -
                            <a href="#">Désactivée</a>
                        </div>
                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>
                        <div class="clearfix">
                            <hr class="page-title-hr float-left">
                        </div>
                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="content-desc">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="content-desc-title text-capitalize">Appartement  Maârif</span>
                                    <span class="content-desc-title-price-month text-capitalize"> <span class="content-st"> Location </span>12.000 MAD/mois</span>
                                    <span class="content-desc-title-price-day text-capitalize text-right">1.000 MAD/jour</span>
                                </div>
                            </div>
                            <div class="agent-type-text">Surface habitable 120 m2</div>

                        </div>
                        <div class="content-desc-publish-date">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="content-desc-block d-flex justify-content-center mt-20">
                            <div class="conference">
                                <div class="conference-block ml-99 mt-01">
                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Partager</span>
                                </div>
                                <div class="conference-block ml-100 mt-01">
                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Modifier</span>
                                </div>
                                <div class="conference-block ml-101 mt-01">
                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">supprimer</span>
                                </div>
                            </div>
                        </div>

                        <div class="section-belong">
                            <a href="#" class="section-belong-acive">Activé</a> -
                            <a href="#">Désactivée</a>
                        </div>
                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>
                        <div class="clearfix">
                            <hr class="page-title-hr float-left">
                        </div>
                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="content-desc">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="content-desc-title text-capitalize">Appartement  Maârif</span>
                                    <span class="content-desc-title-price-month text-capitalize"> <span class="content-st"> Location </span>12.000 MAD/mois</span>
                                    <span class="content-desc-title-price-day text-capitalize text-right">1.000 MAD/jour</span>
                                </div>
                            </div>
                            <div class="agent-type-text">Surface habitable 120 m2</div>

                        </div>
                        <div class="content-desc-publish-date">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>


                    <div class="section">
                        <div class="content-desc-block d-flex justify-content-center mt-20">
                            <div class="conference">
                                <div class="conference-block ml-99 mt-01">
                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Partager</span>
                                </div>
                                <div class="conference-block ml-100 mt-01">
                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Modifier</span>
                                </div>
                                <div class="conference-block ml-101 mt-01">
                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">supprimer</span>
                                </div>
                            </div>
                        </div>

                        <div class="section-belong">
                            <a href="#" class="section-belong-acive">Activé</a> -
                            <a href="#">Désactivée</a>
                        </div>
                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>
                        <div class="clearfix">
                            <hr class="page-title-hr float-left">
                        </div>
                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="content-desc">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="content-desc-title text-capitalize">Appartement  Maârif</span>
                                    <span class="content-desc-title-price-month text-capitalize"> <span class="content-st"> Location </span>12.000 MAD/mois</span>
                                    <span class="content-desc-title-price-day text-capitalize text-right">1.000 MAD/jour</span>
                                </div>
                            </div>
                            <div class="agent-type-text">Surface habitable 120 m2</div>

                        </div>
                        <div class="content-desc-publish-date">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="content-desc-block d-flex justify-content-center mt-20">
                            <div class="conference">
                                <div class="conference-block ml-99 mt-01">
                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Partager</span>
                                </div>
                                <div class="conference-block ml-100 mt-01">
                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Modifier</span>
                                </div>
                                <div class="conference-block ml-101 mt-01">
                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">supprimer</span>
                                </div>
                            </div>
                        </div>

                        <div class="section-belong">
                            <a href="#" class="section-belong-acive">Activé</a> -
                            <a href="#">Désactivée</a>
                        </div>
                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>
                        <div class="clearfix">
                            <hr class="page-title-hr float-left">
                        </div>
                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="content-desc">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="content-desc-title text-capitalize">Appartement  Maârif</span>
                                    <span class="content-desc-title-price-month text-capitalize"> <span class="content-st"> Location </span>12.000 MAD/mois</span>
                                    <span class="content-desc-title-price-day text-capitalize text-right">1.000 MAD/jour</span>
                                </div>
                            </div>
                            <div class="agent-type-text">Surface habitable 120 m2</div>

                        </div>
                        <div class="content-desc-publish-date">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="content-desc-block d-flex justify-content-center mt-20">
                            <div class="conference">
                                <div class="conference-block ml-99 mt-01">
                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Partager</span>
                                </div>
                                <div class="conference-block ml-100 mt-01">
                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Modifier</span>
                                </div>
                                <div class="conference-block ml-101 mt-01">
                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">supprimer</span>
                                </div>
                            </div>
                        </div>

                        <div class="section-belong">
                            <a href="#" class="section-belong-acive">Activé</a> -
                            <a href="#">Désactivée</a>
                        </div>
                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>
                        <div class="clearfix">
                            <hr class="page-title-hr float-left">
                        </div>
                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="content-desc">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="content-desc-title text-capitalize">Appartement  Maârif</span>
                                    <span class="content-desc-title-price-month text-capitalize"> <span class="content-st"> Location </span>12.000 MAD/mois</span>
                                    <span class="content-desc-title-price-day text-capitalize text-right">1.000 MAD/jour</span>
                                </div>
                            </div>
                            <div class="agent-type-text">Surface habitable 120 m2</div>

                        </div>
                        <div class="content-desc-publish-date">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="content-desc-block d-flex justify-content-center mt-20">
                            <div class="conference">
                                <div class="conference-block ml-99 mt-01">
                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Partager</span>
                                </div>
                                <div class="conference-block ml-100 mt-01">
                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Modifier</span>
                                </div>
                                <div class="conference-block ml-101 mt-01">
                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">supprimer</span>
                                </div>
                            </div>
                        </div>

                        <div class="section-belong">
                            <a href="#" class="section-belong-acive">Activé</a> -
                            <a href="#">Désactivée</a>
                        </div>
                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>
                        <div class="clearfix">
                            <hr class="page-title-hr float-left">
                        </div>
                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="content-desc">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="content-desc-title text-capitalize">Appartement  Maârif</span>
                                    <span class="content-desc-title-price-month text-capitalize"> <span class="content-st"> Location </span>12.000 MAD/mois</span>
                                    <span class="content-desc-title-price-day text-capitalize text-right">1.000 MAD/jour</span>
                                </div>
                            </div>
                            <div class="agent-type-text">Surface habitable 120 m2</div>

                        </div>
                        <div class="content-desc-publish-date">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="content-desc-block d-flex justify-content-center mt-20">
                            <div class="conference">
                                <div class="conference-block ml-99 mt-01">
                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Partager</span>
                                </div>
                                <div class="conference-block ml-100 mt-01">
                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">Modifier</span>
                                </div>
                                <div class="conference-block ml-101 mt-01">
                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                    <span class="conference-text text-capitalize">supprimer</span>
                                </div>
                            </div>
                        </div>

                        <div class="section-belong">
                            <a href="#" class="section-belong-acive">Activé</a> -
                            <a href="#">Désactivée</a>
                        </div>
                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>
                        <div class="clearfix">
                            <hr class="page-title-hr float-left">
                        </div>
                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="content-desc">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="content-desc-title text-capitalize">Appartement  Maârif</span>
                                    <span class="content-desc-title-price-month text-capitalize"> <span class="content-st"> Location </span>12.000 MAD/mois</span>
                                    <span class="content-desc-title-price-day text-capitalize text-right">1.000 MAD/jour</span>
                                </div>
                            </div>
                            <div class="agent-type-text">Surface habitable 120 m2</div>

                        </div>
                        <div class="content-desc-publish-date">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Overlay -->





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


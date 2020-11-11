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
        <div class="three">
            <div class="three-item">
                @include('development.includes.aside')
                <div class="sidebar-button" id="sidebar-button">
                    <i class="fas fa-caret-right button-sp-ds"></i>
                </div>
            </div>
            <div class="three-item mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="d-flex">
                        <a href="{{ route('annonce') }}" class="active-hover">
                            <div class="list-icon">
                                <span class="hamburgers"></span>
                            </div>
                        </a>
                        <a href="{{ route('annonce-three') }}" class="active-hover-two">
                            <div class="menu-icon-two is-active">
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
                            <div class="menu-icon">
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




                <div class="section-mov mt-91">
                    <div class="section">
                        <div class="d-flex justify-content-between section-first">
                            <div class="content-desc-block d-flex justify-content-center">
                                <div class="conference">
                                    <div class="conference-block ml-93 mt-0">
                                        <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Partager</span>
                                    </div>
                                    <div class="conference-block ml-94 mt-0">
                                        <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Modifier</span>
                                    </div>
                                    <div class="conference-block ml-95 mt-0">
                                        <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">supprimer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="section-belong">
                                <a href="#" class="section-belong-acive">Activé</a> -
                                <a href="#">Désactivée</a>
                            </div>
                        </div>

                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>

                        <div class="clearfix page-title-r">
                            <hr class="page-title-hr float-left">
                        </div>


                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="content-desc">

                            <span class="content-desc-title text-capitalize">Appartement  Maârif</span> <br>
                            <span class="content-desc-title-price-month text-capitalize"> <span class="content-st">Location </span>12.000 MAD/mois</span>
                            <span class="content-desc-title-price-day text-capitalize">1.000 MAD/jour</span>

                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="content-desc-title-next mt-1">
                                        <span class="content-st">Vente</span> 1.200.000 MAD/mois
                                    </div>
                                    <div class="content-desc-title-next">
                                        <span class="content-st">Échange</span> Provisoire
                                    </div>
                                </div>
                                <div class="float-right content-ft">
                                    <div class="content-desc-title-prev">
                                        Surface habitable 120 m²
                                    </div>
                                    <div class="content-desc-title-prev">
                                        Surface du terrain 1300 m²
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="content-desc-paragraph">
                            <p>
                                Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                iste natus error sit voluptartem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi ropeior
                            </p>
                        </div>
                        <div class="content-desc-publish-date text-center mt-3 pb-4">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="d-flex justify-content-between section-first">
                            <div class="content-desc-block d-flex justify-content-center">
                                <div class="conference">
                                    <div class="conference-block ml-93 mt-0">
                                        <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Partager</span>
                                    </div>
                                    <div class="conference-block ml-94 mt-0">
                                        <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Modifier</span>
                                    </div>
                                    <div class="conference-block ml-95 mt-0">
                                        <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">supprimer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="section-belong">
                                <a href="#" class="section-belong-acive">Activé</a> -
                                <a href="#">Désactivée</a>
                            </div>
                        </div>

                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>

                        <div class="clearfix page-title-r">
                            <hr class="page-title-hr float-left">
                        </div>


                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="content-desc">

                            <span class="content-desc-title text-capitalize">Appartement  Maârif</span> <br>
                            <span class="content-desc-title-price-month text-capitalize"> <span class="content-st">Location </span>12.000 MAD/mois</span>
                            <span class="content-desc-title-price-day text-capitalize">1.000 MAD/jour</span>

                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="content-desc-title-next mt-1">
                                        <span class="content-st">Vente</span> 1.200.000 MAD/mois
                                    </div>
                                    <div class="content-desc-title-next">
                                        <span class="content-st">Échange</span> Provisoire
                                    </div>
                                </div>
                                <div class="float-right content-ft">
                                    <div class="content-desc-title-prev">
                                        Surface habitable 120 m²
                                    </div>
                                    <div class="content-desc-title-prev">
                                        Surface du terrain 1300 m²
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="content-desc-paragraph">
                            <p>
                                Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                iste natus error sit voluptartem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi ropeior
                            </p>
                        </div>
                        <div class="content-desc-publish-date text-center mt-3 pb-4">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="d-flex justify-content-between section-first">
                            <div class="content-desc-block d-flex justify-content-center">
                                <div class="conference">
                                    <div class="conference-block ml-93 mt-0">
                                        <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Partager</span>
                                    </div>
                                    <div class="conference-block ml-94 mt-0">
                                        <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Modifier</span>
                                    </div>
                                    <div class="conference-block ml-95 mt-0">
                                        <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">supprimer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="section-belong">
                                <a href="#" class="section-belong-acive">Activé</a> -
                                <a href="#">Désactivée</a>
                            </div>
                        </div>

                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>

                        <div class="clearfix page-title-r">
                            <hr class="page-title-hr float-left">
                        </div>


                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="content-desc">

                            <span class="content-desc-title text-capitalize">Appartement  Maârif</span> <br>
                            <span class="content-desc-title-price-month text-capitalize"> <span class="content-st">Location </span>12.000 MAD/mois</span>
                            <span class="content-desc-title-price-day text-capitalize">1.000 MAD/jour</span>

                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="content-desc-title-next mt-1">
                                        <span class="content-st">Vente</span> 1.200.000 MAD/mois
                                    </div>
                                    <div class="content-desc-title-next">
                                        <span class="content-st">Échange</span> Provisoire
                                    </div>
                                </div>
                                <div class="float-right content-ft">
                                    <div class="content-desc-title-prev">
                                        Surface habitable 120 m²
                                    </div>
                                    <div class="content-desc-title-prev">
                                        Surface du terrain 1300 m²
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="content-desc-paragraph">
                            <p>
                                Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                iste natus error sit voluptartem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi ropeior
                            </p>
                        </div>
                        <div class="content-desc-publish-date text-center mt-3 pb-4">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>

                    <div class="section">
                        <div class="d-flex justify-content-between section-first">
                            <div class="content-desc-block d-flex justify-content-center">
                                <div class="conference">
                                    <div class="conference-block ml-93 mt-0">
                                        <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Partager</span>
                                    </div>
                                    <div class="conference-block ml-94 mt-0">
                                        <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Modifier</span>
                                    </div>
                                    <div class="conference-block ml-95 mt-0">
                                        <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">supprimer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="section-belong">
                                <a href="#" class="section-belong-acive">Activé</a> -
                                <a href="#">Désactivée</a>
                            </div>
                        </div>

                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>

                        <div class="clearfix page-title-r">
                            <hr class="page-title-hr float-left">
                        </div>


                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="content-desc">

                            <span class="content-desc-title text-capitalize">Appartement  Maârif</span> <br>
                            <span class="content-desc-title-price-month text-capitalize"> <span class="content-st">Location </span>12.000 MAD/mois</span>
                            <span class="content-desc-title-price-day text-capitalize">1.000 MAD/jour</span>

                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="content-desc-title-next mt-1">
                                        <span class="content-st">Vente</span> 1.200.000 MAD/mois
                                    </div>
                                    <div class="content-desc-title-next">
                                        <span class="content-st">Échange</span> Provisoire
                                    </div>
                                </div>
                                <div class="float-right content-ft">
                                    <div class="content-desc-title-prev">
                                        Surface habitable 120 m²
                                    </div>
                                    <div class="content-desc-title-prev">
                                        Surface du terrain 1300 m²
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="content-desc-paragraph">
                            <p>
                                Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                iste natus error sit voluptartem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi ropeior
                            </p>
                        </div>
                        <div class="content-desc-publish-date text-center mt-3 pb-4">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="d-flex justify-content-between section-first">
                            <div class="content-desc-block d-flex justify-content-center">
                                <div class="conference">
                                    <div class="conference-block ml-93 mt-0">
                                        <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Partager</span>
                                    </div>
                                    <div class="conference-block ml-94 mt-0">
                                        <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Modifier</span>
                                    </div>
                                    <div class="conference-block ml-95 mt-0">
                                        <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">supprimer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="section-belong">
                                <a href="#" class="section-belong-acive">Activé</a> -
                                <a href="#">Désactivée</a>
                            </div>
                        </div>

                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>

                        <div class="clearfix page-title-r">
                            <hr class="page-title-hr float-left">
                        </div>


                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="content-desc">

                            <span class="content-desc-title text-capitalize">Appartement  Maârif</span> <br>
                            <span class="content-desc-title-price-month text-capitalize"> <span class="content-st">Location </span>12.000 MAD/mois</span>
                            <span class="content-desc-title-price-day text-capitalize">1.000 MAD/jour</span>

                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="content-desc-title-next mt-1">
                                        <span class="content-st">Vente</span> 1.200.000 MAD/mois
                                    </div>
                                    <div class="content-desc-title-next">
                                        <span class="content-st">Échange</span> Provisoire
                                    </div>
                                </div>
                                <div class="float-right content-ft">
                                    <div class="content-desc-title-prev">
                                        Surface habitable 120 m²
                                    </div>
                                    <div class="content-desc-title-prev">
                                        Surface du terrain 1300 m²
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="content-desc-paragraph">
                            <p>
                                Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                iste natus error sit voluptartem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi ropeior
                            </p>
                        </div>
                        <div class="content-desc-publish-date text-center mt-3 pb-4">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="d-flex justify-content-between section-first">
                            <div class="content-desc-block d-flex justify-content-center">
                                <div class="conference">
                                    <div class="conference-block ml-93 mt-0">
                                        <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Partager</span>
                                    </div>
                                    <div class="conference-block ml-94 mt-0">
                                        <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Modifier</span>
                                    </div>
                                    <div class="conference-block ml-95 mt-0">
                                        <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">supprimer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="section-belong">
                                <a href="#" class="section-belong-acive">Activé</a> -
                                <a href="#">Désactivée</a>
                            </div>
                        </div>

                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>

                        <div class="clearfix page-title-r">
                            <hr class="page-title-hr float-left">
                        </div>


                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="content-desc">

                            <span class="content-desc-title text-capitalize">Appartement  Maârif</span> <br>
                            <span class="content-desc-title-price-month text-capitalize"> <span class="content-st">Location </span>12.000 MAD/mois</span>
                            <span class="content-desc-title-price-day text-capitalize">1.000 MAD/jour</span>

                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="content-desc-title-next mt-1">
                                        <span class="content-st">Vente</span> 1.200.000 MAD/mois
                                    </div>
                                    <div class="content-desc-title-next">
                                        <span class="content-st">Échange</span> Provisoire
                                    </div>
                                </div>
                                <div class="float-right content-ft">
                                    <div class="content-desc-title-prev">
                                        Surface habitable 120 m²
                                    </div>
                                    <div class="content-desc-title-prev">
                                        Surface du terrain 1300 m²
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="content-desc-paragraph">
                            <p>
                                Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                iste natus error sit voluptartem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi ropeior
                            </p>
                        </div>
                        <div class="content-desc-publish-date text-center mt-3 pb-4">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>


                    <div class="section">
                        <div class="d-flex justify-content-between section-first">
                            <div class="content-desc-block d-flex justify-content-center">
                                <div class="conference">
                                    <div class="conference-block ml-93 mt-0">
                                        <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Partager</span>
                                    </div>
                                    <div class="conference-block ml-94 mt-0">
                                        <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Modifier</span>
                                    </div>
                                    <div class="conference-block ml-95 mt-0">
                                        <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">supprimer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="section-belong">
                                <a href="#" class="section-belong-acive">Activé</a> -
                                <a href="#">Désactivée</a>
                            </div>
                        </div>

                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>

                        <div class="clearfix page-title-r">
                            <hr class="page-title-hr float-left">
                        </div>


                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="content-desc">

                            <span class="content-desc-title text-capitalize">Appartement  Maârif</span> <br>
                            <span class="content-desc-title-price-month text-capitalize"> <span class="content-st">Location </span>12.000 MAD/mois</span>
                            <span class="content-desc-title-price-day text-capitalize">1.000 MAD/jour</span>

                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="content-desc-title-next mt-1">
                                        <span class="content-st">Vente</span> 1.200.000 MAD/mois
                                    </div>
                                    <div class="content-desc-title-next">
                                        <span class="content-st">Échange</span> Provisoire
                                    </div>
                                </div>
                                <div class="float-right content-ft">
                                    <div class="content-desc-title-prev">
                                        Surface habitable 120 m²
                                    </div>
                                    <div class="content-desc-title-prev">
                                        Surface du terrain 1300 m²
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="content-desc-paragraph">
                            <p>
                                Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                iste natus error sit voluptartem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi ropeior
                            </p>
                        </div>
                        <div class="content-desc-publish-date text-center mt-3 pb-4">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="d-flex justify-content-between section-first">
                            <div class="content-desc-block d-flex justify-content-center">
                                <div class="conference">
                                    <div class="conference-block ml-93 mt-0">
                                        <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Partager</span>
                                    </div>
                                    <div class="conference-block ml-94 mt-0">
                                        <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Modifier</span>
                                    </div>
                                    <div class="conference-block ml-95 mt-0">
                                        <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">supprimer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="section-belong">
                                <a href="#" class="section-belong-acive">Activé</a> -
                                <a href="#">Désactivée</a>
                            </div>
                        </div>

                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>

                        <div class="clearfix page-title-r">
                            <hr class="page-title-hr float-left">
                        </div>


                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="content-desc">

                            <span class="content-desc-title text-capitalize">Appartement  Maârif</span> <br>
                            <span class="content-desc-title-price-month text-capitalize"> <span class="content-st">Location </span>12.000 MAD/mois</span>
                            <span class="content-desc-title-price-day text-capitalize">1.000 MAD/jour</span>

                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="content-desc-title-next mt-1">
                                        <span class="content-st">Vente</span> 1.200.000 MAD/mois
                                    </div>
                                    <div class="content-desc-title-next">
                                        <span class="content-st">Échange</span> Provisoire
                                    </div>
                                </div>
                                <div class="float-right content-ft">
                                    <div class="content-desc-title-prev">
                                        Surface habitable 120 m²
                                    </div>
                                    <div class="content-desc-title-prev">
                                        Surface du terrain 1300 m²
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="content-desc-paragraph">
                            <p>
                                Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                iste natus error sit voluptartem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi ropeior
                            </p>
                        </div>
                        <div class="content-desc-publish-date text-center mt-3 pb-4">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                    <div class="section">
                        <div class="d-flex justify-content-between section-first">
                            <div class="content-desc-block d-flex justify-content-center">
                                <div class="conference">
                                    <div class="conference-block ml-93 mt-0">
                                        <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Partager</span>
                                    </div>
                                    <div class="conference-block ml-94 mt-0">
                                        <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">Modifier</span>
                                    </div>
                                    <div class="conference-block ml-95 mt-0">
                                        <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                        <span class="conference-text text-capitalize">supprimer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="section-belong">
                                <a href="#" class="section-belong-acive">Activé</a> -
                                <a href="#">Désactivée</a>
                            </div>
                        </div>

                        <div class="page-title">
                            <span>Duplex de charme</span><br>
                        </div>

                        <div class="clearfix page-title-r">
                            <hr class="page-title-hr float-left">
                        </div>


                        <div class="image-bg">
                            <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="content-desc">

                            <span class="content-desc-title text-capitalize">Appartement  Maârif</span> <br>
                            <span class="content-desc-title-price-month text-capitalize"> <span class="content-st">Location </span>12.000 MAD/mois</span>
                            <span class="content-desc-title-price-day text-capitalize">1.000 MAD/jour</span>

                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="content-desc-title-next mt-1">
                                        <span class="content-st">Vente</span> 1.200.000 MAD/mois
                                    </div>
                                    <div class="content-desc-title-next">
                                        <span class="content-st">Échange</span> Provisoire
                                    </div>
                                </div>
                                <div class="float-right content-ft">
                                    <div class="content-desc-title-prev">
                                        Surface habitable 120 m²
                                    </div>
                                    <div class="content-desc-title-prev">
                                        Surface du terrain 1300 m²
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="content-desc-paragraph">
                            <p>
                                Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                                iste natus error sit voluptartem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi ropeior
                            </p>
                        </div>
                        <div class="content-desc-publish-date text-center mt-3 pb-4">
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

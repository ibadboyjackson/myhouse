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
    <link rel="stylesheet" href="{{ asset('development/css/owl-theme.css') }}">

    <!-- CDN LINK -->
    <link href='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('development/css/select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

</head>
<body class="bg-test">

@include('development.includes.nav')

<div class="overtlay mt-89">
    <div class="single-grid">
        <div class="grid-items">
            <div class="user-description">
                <div class="user-first">
                    Toutes les offres
                </div>
                <div class="user-second">
                    Appartements
                </div>
                <div class="user-third">
                    à partir de
                </div>
                <div class="user-fourth">
                    790.000
                </div>
                <div class="user-hr"></div>

                <div class="user-second mt-3">
                    Villas
                </div>
                <div class="user-third">
                    à partir de
                </div>
                <div class="user-fourth">
                    900.000
                </div>
                <div class="user-hr"></div>

                <div class="user-second mt-3">
                    Terrains
                </div>
                <div class="user-third">
                    à partir de
                </div>
                <div class="user-fourth">
                    40.000
                </div>
                <div class="user-hr"></div>

                <div class="user-second mt-3">
                    Commerces
                </div>
                <div class="user-third">
                    à partir de
                </div>
                <div class="user-fourth">
                    80.000
                </div>
                <div class="user-hr"></div>
            </div>
            <div class="user-calendar">
                <div class="calendar">
                    <div class="calendar-title text-center">Visiter</div>
                    <div class="calendar-icon text-center mt-2">
                        <img src="http://myhouse.com/images/residential/menu/list/parents.svg" alt="">
                    </div>
                    <div class="calendar-month-year text-center">
                        <div class="row justify-content-center">
                            <div class="calendar-prev">
                                <img src="http://myhouse.com/images/residential/menu/list/prev.svg" alt="" class="img-fluid">
                            </div>
                            <div class="calendar-text text-capitalize">décembre 2019</div>
                            <div class="calendar-next">
                                <img src="http://myhouse.com/images/residential/menu/list/next.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="calendar-days d-flex justify-content-around">
                        <div class="sunday">Di</div>
                        <div class="monday">Lu</div>
                        <div class="tuesday">Ma</div>
                        <div class="wednesday">Me</div>
                        <div class="thursday">Je</div>
                        <div class="friday">Ve</div>
                        <div class="saturday">Sa</div>
                    </div>
                    <div class="calendar-days-numbers d-flex justify-content-around">
                        <div class="none">
                            <span class="text-day">-</span>
                        </div>
                        <div class="one">
                            <span class="text-day">1</span>
                        </div>
                        <div class="two">
                            <span class="text-day">2</span>
                        </div>
                        <div class="three">
                            <span class="text-day">3</span>
                        </div>
                        <div class="four">
                            <span class="text-day">4</span>
                        </div>
                        <div class="six">
                            <span class="text-day">6</span>
                        </div>
                    </div>
                    <div class="calendar-days-numbers d-flex justify-content-around">
                        <div class="seven">
                            <span class="text-day">7</span>
                        </div>
                        <div class="eight">
                            <span class="text-day">8</span>
                        </div>
                        <div class="nine">
                            <span class="text-day">9</span>
                        </div>
                        <div class="ten">
                            <span class="text-day">10</span>
                        </div>
                        <div class="eleven">
                            <span class="text-day">11</span>
                        </div>
                        <div class="twelve">
                            <span class="text-day">12</span>
                        </div>
                        <div class="thirteen">
                            <span class="text-day">13</span>
                        </div>
                    </div>
                    <div class="calendar-days-numbers d-flex justify-content-around">
                        <div class="fourteen">
                            <span class="text-day">14</span>
                        </div>
                        <div class="fifteen">
                            <span class="text-day">15</span>
                        </div>
                        <div class="sixteen">
                            <span class="text-day">16</span>
                        </div>
                        <div class="seventeen">
                            <span class="text-day">17</span>
                        </div>
                        <div class="eighteen">
                            <span class="text-day">18</span>
                        </div>
                        <div class="nineteen">
                            <span class="text-day">19</span>
                        </div>
                        <div class="twenty">
                            <span class="text-day">20</span>
                        </div>
                    </div>
                    <div class="calendar-days-numbers d-flex justify-content-around">
                        <div class="twenty-one">
                            <span class="text-day">21</span>
                        </div>
                        <div class="twenty-two">
                            <span class="text-day">22</span>
                        </div>
                        <div class="twenty-three">
                            <span class="text-day">23</span>
                        </div>
                        <div class="twenty-four">
                            <span class="text-day">24</span>
                        </div>
                        <div class="twenty-five">
                            <span class="text-day">25</span>
                        </div>
                        <div class="twenty-six">
                            <span class="text-day">26</span>
                        </div>
                        <div class="twenty-seven">
                            <span class="text-day">27</span>
                        </div>
                    </div>
                    <div class="calendar-days-numbers d-flex justify-content-around">
                        <div class="twenty-eight">
                            <span class="text-day">28</span>
                        </div>
                        <div class="twenty-nine">
                            <span class="text-day">29</span>
                        </div>
                        <div class="thirty">
                            <span class="text-day">30</span>
                        </div>
                        <div class="thirty-one">
                            <span class="text-day">31</span>
                        </div>
                        <div class="none">
                            <span class="text-day">-</span>
                        </div>
                        <div class="none">
                            <span class="text-day">-</span>
                        </div>
                        <div class="none">
                            <span class="text-day">-</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="grid-items">
            <div class="d-flex">
                <div class="with-agendas mr-t1">
                    <div class="conference">
                        <div class="conference-block ml-135 mt-11">
                            <img src="http://myhouse.com/images/residential/menu/share.svg" alt="" class="desc-img">
                            <span class="conference-text text-capitalize">Partager</span>
                        </div>
                        <div class="conference-block ml-136 mt-11">
                            <img src="http://myhouse.com/images/residential/menu/list/mail.svg" alt="" class="desc-img">
                            <span class="conference-text text-capitalize">Mail</span>
                        </div>
                        <div class="conference-block ml-137 mt-11">
                            <img src="http://myhouse.com/images/residential/menu/list/call.svg" alt="" class="desc-img">
                            <span class="conference-text text-capitalize">Appeler</span>
                        </div>
                        <div class="conference-block ml-138 mt-11">
                            <img src="http://myhouse.com/images/residential/menu/list/chat-room.svg" alt="" class="desc-img">
                            <span class="conference-text text-capitalize">Chat room</span>
                        </div>
                        <div class="conference-block ml-139 mt-11">
                            <img src="http://myhouse.com/images/residential/menu/delete.svg" alt="" class="desc-img">
                            <span class="conference-text text-capitalize">supprimer</span>
                        </div>
                    </div>
                </div>
                <div class="single-title mr-t1">
                    <div class="single-with-title">
                        Les résidences du soleil
                    </div>
                    <div class="single-with-desc">
                        <div class="clearfix">
                            <div class="float-left single-left">
                                Appartement 135m²
                            </div>
                            <div class="float-right single-right">
                                Prix 1.790.000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="medias">
                <div id="sync2" class="owl-carousel">
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                    </div>
                </div>
                <div id="sync1" class="owl-carousel">
                    <div class="item">
                        <div class="sync-text rounded-pill">
                            <i class="fa fa-heart"></i>
                            ça m'intéresse
                        </div>
                        <video controls class="d-block w-100">
                            <source src="{{ asset('videos/demo.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/residential/items.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="media-description">
                <div class="media-real-desc">
                    <div class="media-desc-title">
                        Vivez l'instant nature
                    </div>
                    <div class="media-desc-hr"></div>
                    <div class="media-desc-content">
                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                        voluptartem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                        et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem aperiam, eaque ipsa quae
                        ab illo inventore veritatis et quasi ropeior architecto beatae vitae doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae
                        vitae. Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                        sit voluptartem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                        et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                        illo inventore veritatis et quasi ropeior architecto beatae vitae doloremque laudantium, totam rem aperiam, eaque
                        ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae
                    </div>
                    <div class="media-desc-content-bottom">
                        rem aperiam, eaque ipsa quae ab illo inventore
                        rem aperiam, eaque ipsa quae ab illo inventore
                        rem aperiam, eaque ipsa quae ab illo inventore
                        rem aperiam, eaque ipsa quae ab illo inventore
                        rem aperiam, eaque ipsa quae ab illo inventore
                        rem aperiam, eaque ipsa quae ab illo inventore
                    </div>
                    <div class="media-desc-content-date float-right">
                        <div class="content-desc-publish-date mt-3">
                            <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-desc-utility">
                <div class="media-desc-box">Description</div>
                <div class="row pt_yt ml-0 mr-0">
                    <div class="col-md-3">
                        <div class="pt_ytt text-center text-uppercase">
                            <img src="http://myhouse.com/images/residential/global.svg" alt="">
                            global
                        </div>
                        <div class="pc-y">
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Livraison immédiate
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Superficie 120 m2
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Sur un niveau
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Situé au 2e étage
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    3 appart(s) par étage
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    7 étage(s) par immeuble
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pt_ytt text-center text-uppercase">
                            <img src="http://myhouse.com/images/residential/interieur.svg" alt="">
                            intérieur
                        </div>
                        <div class="pc-y">
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Cuisine américaine
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Cuisine équipée
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    2 Chambres
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Dressing
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    2 Salle(s) de bain
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    2 Salon(s)
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Terrasse(s)
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Jardin privatif
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Cour/Patio
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Buanderie
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Cheminée
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Climatisation
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Chauffe-eau
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pt_ytt text-center text-uppercase">
                            <img src="http://myhouse.com/images/residential/exterieur.svg" alt="">
                            extérieur
                        </div>
                        <div class="pc-y">
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Espaces verts
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Gardiennage
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    1 Place(s) voiture
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Box
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Piscine
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Terrains de sport
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Salle de fitness
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Aire de jeux
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Supérette
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    École
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Mosquée
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Shopping
                                </div>
                            </div>
                            <div class="pc_yt">
                                <div class="pc_ytt" style="padding-left: 10px;">
                                    Restaurant/Café
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pt_ytt text-center text-uppercase">
                            <img src="http://myhouse.com/images/residential/proche.svg" alt="">
                            proche de ...
                        </div>
                        <div class="pc-y">
                            <div class="d-flex dsf sing">
                                <div class="pe_yt" style="padding-left: 10px;">
                                    <div>Plage</div>
                                </div>
                                <div class="pe_ytt text-center">
                                    100m
                                </div>
                            </div>
                            <div class="d-flex dsf sing">
                                <div class="pe_yt" style="padding-left: 10px;">
                                    <div>Campagne</div>
                                </div>
                                <div class="pe_ytt text-center">
                                    200m
                                </div>
                            </div>
                            <div class="d-flex dsf sing">
                                <div class="pe_yt" style="padding-left: 10px;">
                                    <div>Golf</div>
                                </div>
                                <div class="pe_ytt text-center">
                                    2km
                                </div>
                            </div>
                            <div class="d-flex dsf sing">
                                <div class="pe_yt" style="padding-left: 10px;">
                                    <div>Forêt</div>
                                </div>
                                <div class="pe_ytt text-center">
                                    800m
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="disponibilite">
                <div class="media-desc-box text-capitalize">Type de biens</div>
            </div>
            <div class="media-user">
                Nos appartements
            </div>
            <div class="row justify-content-center" style="margin-top: 26px;">
                <div class="media-descript-content">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
            </div>

            <div class="media-user">
                Nos villas
            </div>
            <div class="row justify-content-center" style="margin-top: 26px;">
                <div class="media-descript-content">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
            </div>

            <div class="media-user">
                Nos terrains
            </div>
            <div class="row justify-content-center" style="margin-top: 26px;">
                <div class="media-descript-content">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
            </div>

            <div class="media-user">
                Nos commerces
            </div>
            <div class="row justify-content-center mb-5" style="margin-top: 26px;">
                <div class="media-descript-content">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
                <div class="media-descript-content mt-2">
                    67m2   |  2 chambre(s)   |   Rez-de-haussée    |  Duplex  |    2 salle(s) de bain    |  2 salon(s)   |   Dressing   |   Jardin privatif  |   Cheminée
                </div>
            </div>
        </div>
        <div class="grid-items">
            <div class="d-flex mr-t justify-content-center  ">
                <div class="username">
                    Agence Real<br>Estate Morocco
                    <div class="userinfo">
                        <button class="btn btn-userinfo">En savoir plus sur nous</button>
                    </div>
                </div>
                <div class="user-logo">
                    <img src="{{ asset('images/residential/user-logo.svg') }}" alt="">
                </div>
            </div>
            <div class="user-projects">Découvrir tous nos projets</div>
            <div class="carte-infos text-center">
                <div>Ville: Casablanca</div>
                <div>Région: Casablanca-Settat</div>
                <div>Quartier : Aïn Diab</div>
                <div>Adresse : 33, rue de la Mer Rouge</div>
            </div>
            <div class="content-map">
                <div class="map" id="map"></div>
            </div>
            <div class="media-quarter">
                <div class="media-desc-box text-capitalize">Le quartier</div>
                <div class="media-quater d-flex justify-content-center">
                    <div class="quater">
                        <div class="quater-content">
                            <div class="a">
                                <div class="clearfix">
                                    <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                                </div>
                                <div class="clearfix">
                                    <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                                </div>
                                <div class="clearfix">
                                    <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                                </div>
                                <div class="clearfix">
                                    <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                                </div>

                            </div>
                            <div class="b mt-3">
                                <div class="clearfix">
                                    <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                                </div>
                                <div class="clearfix">
                                    <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                                </div>
                                <div class="clearfix">
                                    <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                                </div>
                                <div class="clearfix">
                                    <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                                </div>

                            </div>
                            <div class="c mt-3">
                                <div class="clearfix">
                                    <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                                </div>
                                <div class="clearfix">
                                    <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                                </div>
                                <div class="clearfix">
                                    <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                                </div>
                                <div class="clearfix">
                                    <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
                                </div>

                            </div>
                            <div class="d mt-3">
                                <div class="clearfix">
                                    <span class="float-left">Supermarché Marjane</span> <span class="quater-distance float-right">1km</span>
                                </div>
                                <div class="clearfix">
                                    <span class="float-left">Ecole Jabr ibn Najou</span> <span class="quater-distance float-right">300m</span>
                                </div>
                                <div class="clearfix">
                                    <span class="float-left">Clinique La Santé  </span> <span class="quater-distance float-right">500m</span>
                                </div>
                                <div class="clearfix">
                                    <span class="float-left">Café Bellevue</span> <span class="quater-distance float-right">300m</span>
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
<script src="{{ asset('development/js/owl.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js'></script>
<script src="{{ asset('js/map.js') }}"></script>


<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</body>
</html>


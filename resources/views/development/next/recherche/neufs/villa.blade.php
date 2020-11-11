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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

</head>
<body class="bg-test">

@include('development.next.include.myhouseNav')


<div class="the-page pb-5">
    <div class="the-page-mt">
        <div class="the-page-close-button">
            <img src="{{ asset('images/residential/x.svg') }}" alt="">
        </div>
        <div class="the-page-head">
            <div>
                <div class="the-page-head-title">
                    Résidence du val de marne
                </div>
                <div class="the-page-head-hr"></div>
            </div>
        </div>
        <div class="the-page-contact">

            <div class="the-page-contact-box">

                <div class="the-page-contact-box-content">
                    <div class="the-page-contact-box-content-img">
                        <img src="{{ asset('images/residential/single/c1.svg') }}" alt="">
                    </div>
                    <div class="the-page-contact-box-content-text">Partager</div>
                </div>
                <div class="the-page-contact-box-content">
                    <div class="the-page-contact-box-content-img">
                        <img src="{{ asset('images/residential/single/c2.svg') }}" alt="">
                    </div>
                    <div class="the-page-contact-box-content-text">Mail</div>
                </div>
                <div class="the-page-contact-box-content">
                    <div class="the-page-contact-box-content-img">
                        <img src="{{ asset('images/residential/single/c3.svg') }}" alt="">
                    </div>
                    <div class="the-page-contact-box-content-text">Appeler</div>
                </div>
                <div class="the-page-contact-box-content">
                    <div class="the-page-contact-box-content-img">
                        <img src="{{ asset('images/residential/single/c4.svg') }}" alt="">
                    </div>
                    <div class="the-page-contact-box-content-text">Chat room</div>
                </div>

            </div>
        </div>

        <div class="the-page-enterprise-logo">

            <div class="the-page-enterprise-logo-box">

                <div class="the-page-enterprise-logo-box-img">
                    <img src="{{ asset('images/residential/single/logo.svg') }}" alt="">
                </div>

                <div class="the-page-enterprise-logo-box-content">

                    <div class="the-page-enterprise-logo-box-content-text">
                        Agence Real <br>
                        Estate Morocco
                    </div>
                    <div class="the-page-enterprise-logo-box-content-button">
                        <div class="the-page-enterprise-logo-box-content-button-button">En savoir plus</div>
                    </div>

                </div>

            </div>

        </div>

        <!-- With grid -->

        <div class="the-page-grid">
            <div class="the-page-grid-container">
                <div class="the-page-grid-container-item">
                    <div class="calendars">
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




                <div class="the-page-grid-container-item">
                    <div class="medias-button">
                        <div class="the-page-suggestion-type-button" style="margin-top: -20px !important;">Villas</div>
                    </div>
                    <div class="medias">
                        <div class="the-page-grid-container-number">6/20</div>
                        <div id="sync2" class="owl-carousel">
                            <div class="item">
                                <img src="{{ asset('images/residential/single/6.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/2.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/3.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/4.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/5.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/6.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/3.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/5.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/1.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/6.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/2.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/1.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/5.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/1.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/2.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/1.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/3.png') }}" alt=""  class="img-fluid">
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
                                    <img src="{{ asset('images/residential/single/heart.svg') }}" alt="">
                                    ça m'intéresse
                                </div>
                                <video controls class="d-block w-100">
                                    <source src="{{ asset('videos/demo.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                            <div class="item">
                                <img src="{{ asset('images/residential/single/7.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="media-barre">
                        <div class="medias-bare-item">
                            <div class="medias-bare-last">
                                <div>
                                    167m2 |   Rez-de-chaussée | 2 chambre(s)
                                </div>
                                <div>
                                    2 salle(s) de bain |  2 salon(s)
                                </div>
                                <div>
                                    Dressing  |   Jardin privatif  | Cheminée
                                </div>
                            </div>
                        </div>
                        <div class="medias-bare-item">
                            <div class="madias-bare-img">
                                <img src="{{ asset('images/residential/single/media.svg') }}" alt="">
                                <div class="madias-bare-text">
                                    1.000.000 <span>MAD</span>
                                </div>
                            </div>
                        </div>
                        <div class="medias-bare-item">
                            <a href="" style="text-decoration: none; color: inherit">
                                <div class="media-barre-button">
                                    Voir l'annonce
                                </div>
                            </a>
                        </div>
                    </div>

                </div>




                <div class="the-page-grid-container-item">
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



<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<script src='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js'></script>
<script src="{{ asset('js/map.js') }}"></script>
</body>
</html>


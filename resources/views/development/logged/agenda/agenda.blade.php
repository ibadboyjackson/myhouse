<!doctype html>
<!--/
                        _   _       _a_a
            _   _     _{.`=`.}_    {/ ''\_
      _    {.`'`.}   {.'  _  '.}  {|  ._oo)
     { \  {/ .-. \} {/  .' '.  \} {/  |
~^~^~`~^~`~^~`~^~`~^~^~`^~^~`^~^~^~^~^~^~`^~~`MyHouse.ma
/-->
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
        <div class="agenda">
            <div class="agenda-item">
                @include('development.includes.aside')
                <div class="sidebar-button" id="sidebar-button">
                    <i class="fas fa-caret-right button-sp-ds"></i>
                </div>
            </div>
            <div class="agenda-item mb-5">
                <div class="row mt-91 mr-40">
                        <div class="row justify-content-end has-agenda">
                            <div class="section section-active mb-50">
                                <div class="content-desc-block with-agenda d-flex justify-content-center mt-3">
                                    <div class="conference">
                                        <div class="conference-block ml-99 mt-0">
                                            <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                            <span class="conference-text text-capitalize">Partager</span>
                                        </div>
                                        <div class="conference-block ml-106 mt-0">
                                            <img src="{{  asset('images/residential/menu/list/mail.svg') }}" alt="" class="desc-img">
                                            <span class="conference-text text-capitalize">Mail</span>
                                        </div>
                                        <div class="conference-block ml-105 mt-0">
                                            <img src="{{  asset('images/residential/menu/list/call.svg') }}" alt="" class="desc-img">
                                            <span class="conference-text text-capitalize">Appeler</span>
                                        </div>
                                        <div class="conference-block ml-104 mt-0">
                                            <img src="{{  asset('images/residential/menu/list/chat-room.svg') }}" alt="" class="desc-img">
                                            <span class="conference-text text-capitalize">Chat room</span>
                                        </div>
                                        <div class="conference-block ml-103 mt-0">
                                            <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                            <span class="conference-text text-capitalize">supprimer</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="page-title">
                                    <span>Duplex de charme</span><br>
                                </div>

                                <div class="clearfix page-title-r">
                                    <hr class="page-title-hr float-left">
                                </div>


                                <div class="image-bg">
                                    <img src="{{ asset('images/residential/menu/image-bg.png') }}" alt="" class="img-fluid">
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
                                <div class="content-desc-publish-date text-center mt-3">
                                    <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                                </div>
                            </div>
                            <div class="section mb-50">
                                <div class="content-desc-block with-agenda d-flex justify-content-center mt-3">
                                    <div class="conference">
                                        <div class="conference-block ml-99 mt-0">
                                            <img src="{{  asset('images/residential/menu/share.svg') }}" alt="" class="desc-img">
                                            <span class="conference-text text-capitalize">Partager</span>
                                        </div>
                                        <div class="conference-block ml-106 mt-0">
                                            <img src="{{  asset('images/residential/menu/list/mail.svg') }}" alt="" class="desc-img">
                                            <span class="conference-text text-capitalize">Mail</span>
                                        </div>
                                        <div class="conference-block ml-105 mt-0">
                                            <img src="{{  asset('images/residential/menu/list/call.svg') }}" alt="" class="desc-img">
                                            <span class="conference-text text-capitalize">Appeler</span>
                                        </div>
                                        <div class="conference-block ml-104 mt-0">
                                            <img src="{{  asset('images/residential/menu/list/chat-room.svg') }}" alt="" class="desc-img">
                                            <span class="conference-text text-capitalize">Chat room</span>
                                        </div>
                                        <div class="conference-block ml-103 mt-0">
                                            <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="" class="desc-img">
                                            <span class="conference-text text-capitalize">supprimer</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="page-title">
                                    <span>Duplex de charme</span><br>
                                </div>

                                <div class="clearfix page-title-r">
                                    <hr class="page-title-hr float-left">
                                </div>


                                <div class="image-bg">
                                    <img src="{{ asset('images/residential/menu/image-bg.png') }}" alt="" class="img-fluid">
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
                                <div class="content-desc-publish-date text-center mt-3">
                                    <button class="btn btn-light btn-publish">Publié le 14/09/2019</button>
                                </div>
                            </div>
                        </div>

                    <div class="col-md-3">
                        <div class="calendar">
                            <div class="calendar-title text-center">Mes visites</div>
                            <div class="calendar-icon text-center mt-2">
                                <img src="{{ asset('images/residential/menu/list/parents.svg') }}" alt="">
                            </div>
                            <div class="calendar-month-year text-center">
                                <div class="row justify-content-center">
                                    <div class="calendar-prev">
                                        <img src="{{ asset('images/residential/menu/list/prev.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="calendar-text text-capitalize">décembre 2019</div>
                                    <div class="calendar-next">
                                        <img src="{{ asset('images/residential/menu/list/next.svg') }}" alt="">
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
                                <div class="fives">
                                    <span class="text-day">5</span>
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
                                <div class="seventeen text-day-active">
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

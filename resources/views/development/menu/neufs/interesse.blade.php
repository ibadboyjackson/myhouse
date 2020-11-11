@include('development.menu.include.head')
@include('development.next.include.myhouseNav')


<div class="menu-wrap">
    <div class="menu-wrap-content">
        <!-- X button -->
        <div class="menu-wrap-x-button">
            <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
        </div>
        <!-- End X button -->

    @include('development.menu.include.neuf.aside')

    <!-- List -->

    <div class="the-pp">
        <div class="menu-body">
            <div class="menu-body-title">ça m'intéresse</div>
            <div class="menu-body-hr"></div>
            @if ($user === 'neuf')
                <div class="menu-body-subs">
                    <span class="menu-body-subs-one">Compte Manager</span>
                    <span class="menu-body-subs-two">abderazakjamo@hotmail.com</span>
                </div>
            @endif
            <div class="menu-body-content">

                <div class="menu-body-content-item">
                    <div class="display-item">
                        <div class="page-list-panelle">
                            <div class="page-list-panel-item">

                                <div class="page-list-top">
                                    <div class="page-list-top-button">
                                        Publié le 14/09/2019
                                    </div>
                                </div>


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
                            <div>
                                <div class="must-use-top">
                                    <div class="page-list-top-share">
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Partager</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Mail</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Appeler</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Chat room</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Retirer</div>
                                        </div>

                                    </div>
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
                <div class="menu-body-content-item">
                    <div class="display-item">
                        <div class="page-list-panelle">
                            <div class="page-list-panel-item">

                                <div class="page-list-top">
                                    <div class="page-list-top-button">
                                        Publié le 14/09/2019
                                    </div>
                                </div>


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
                            <div>
                                <div class="must-use-top">
                                    <div class="page-list-top-share">
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Partager</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Mail</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Appeler</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Chat room</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Retirer</div>
                                        </div>

                                    </div>
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
                <div class="menu-body-content-item">
                    <div class="display-item">
                        <div class="page-list-panelle">
                            <div class="page-list-panel-item">

                                <div class="page-list-top">
                                    <div class="page-list-top-button">
                                        Publié le 14/09/2019
                                    </div>
                                </div>


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
                            <div>
                                <div class="must-use-top">
                                    <div class="page-list-top-share">
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Partager</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Mail</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Appeler</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Chat room</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Retirer</div>
                                        </div>

                                    </div>
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
                <div class="menu-body-content-item">
                    <div class="display-item">
                        <div class="page-list-panelle">
                            <div class="page-list-panel-item">

                                <div class="page-list-top">
                                    <div class="page-list-top-button">
                                        Publié le 14/09/2019
                                    </div>
                                </div>


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
                            <div>
                                <div class="must-use-top">
                                    <div class="page-list-top-share">
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Partager</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Mail</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Appeler</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Chat room</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Retirer</div>
                                        </div>

                                    </div>
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
                <div class="menu-body-content-item">
                    <div class="display-item">
                        <div class="page-list-panelle">
                            <div class="page-list-panel-item">

                                <div class="page-list-top">
                                    <div class="page-list-top-button">
                                        Publié le 14/09/2019
                                    </div>
                                </div>


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
                            <div>
                                <div class="must-use-top">
                                    <div class="page-list-top-share">
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Partager</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Mail</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Appeler</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Chat room</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Retirer</div>
                                        </div>

                                    </div>
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
                <div class="menu-body-content-item">
                    <div class="display-item">
                        <div class="page-list-panelle">
                            <div class="page-list-panel-item">

                                <div class="page-list-top">
                                    <div class="page-list-top-button">
                                        Publié le 14/09/2019
                                    </div>
                                </div>


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
                            <div>
                                <div class="must-use-top">
                                    <div class="page-list-top-share">
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Partager</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Mail</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Appeler</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Chat room</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Retirer</div>
                                        </div>

                                    </div>
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
                <div class="menu-body-content-item">
                    <div class="display-item">
                        <div class="page-list-panelle">
                            <div class="page-list-panel-item">

                                <div class="page-list-top">
                                    <div class="page-list-top-button">
                                        Publié le 14/09/2019
                                    </div>
                                </div>


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
                            <div>
                                <div class="must-use-top">
                                    <div class="page-list-top-share">
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Partager</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Mail</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Appeler</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Chat room</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Retirer</div>
                                        </div>

                                    </div>
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
                <div class="menu-body-content-item">
                    <div class="display-item">
                        <div class="page-list-panelle">
                            <div class="page-list-panel-item">

                                <div class="page-list-top">
                                    <div class="page-list-top-button">
                                        Publié le 14/09/2019
                                    </div>
                                </div>


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
                            <div>
                                <div class="must-use-top">
                                    <div class="page-list-top-share">
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Partager</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Mail</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Appeler</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Chat room</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Retirer</div>
                                        </div>

                                    </div>
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
                <div class="menu-body-content-item">
                    <div class="display-item">
                        <div class="page-list-panelle">
                            <div class="page-list-panel-item">

                                <div class="page-list-top">
                                    <div class="page-list-top-button">
                                        Publié le 14/09/2019
                                    </div>
                                </div>


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
                            <div>
                                <div class="must-use-top">
                                    <div class="page-list-top-share">
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Partager</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Mail</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Appeler</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Chat room</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Retirer</div>
                                        </div>

                                    </div>
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
                <div class="menu-body-content-item">
                    <div class="display-item">
                        <div class="page-list-panelle">
                            <div class="page-list-panel-item">

                                <div class="page-list-top">
                                    <div class="page-list-top-button">
                                        Publié le 14/09/2019
                                    </div>
                                </div>


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
                            <div>
                                <div class="must-use-top">
                                    <div class="page-list-top-share">
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Partager</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Mail</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Appeler</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Chat room</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Retirer</div>
                                        </div>

                                    </div>
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
                <div class="menu-body-content-item">
                    <div class="display-item">
                        <div class="page-list-panelle">
                            <div class="page-list-panel-item">

                                <div class="page-list-top">
                                    <div class="page-list-top-button">
                                        Publié le 14/09/2019
                                    </div>
                                </div>


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
                            <div>
                                <div class="must-use-top">
                                    <div class="page-list-top-share">
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Partager</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s4.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Mail</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Appeler</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s6.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Chat room</div>
                                        </div>
                                        <div class="page-list-top-share-content">
                                            <div class="page-list-top-share-content-img">
                                                <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                            </div>
                                            <div class="page-list-top-share-content-text">Retirer</div>
                                        </div>

                                    </div>
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

    </div>
        <!-- End List -->


    </div>
</div>









@include('development.menu.include.footer')




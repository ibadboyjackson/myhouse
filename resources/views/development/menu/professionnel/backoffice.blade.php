@include('development.menu.include.head')
@include('development.next.include.myhouseNav')



<div class="professionnel">
<div class="the-p">
    <div class="menu-wrap">
        <div class="menu-wrap-content">
            <!-- X button -->
            <div class="menu-wrap-x-button">
                <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
            </div>
            <!-- End X button -->
            <div class="menu-wrap-content-top">
                <div class="menu-wrap-content-top-head">SAV</div>
                <div class="menu-wrap-content-top-hr"></div>
                <div class="menu-wrap-content-top-footer">
                    <div class="menu-wrap-content-top-footer-text">002125224565</div>
                    <div class="menu-wrap-content-top-footer-box">
                        <div class="menu-wrap-content-top-footer-box-img">
                            <img src="{{ asset('images/residential/single/menu/chat.svg') }}" alt="">
                        </div>
                        <div class="menu-wrap-content-top-footer-box-text">Chat room</div>
                    </div>
                </div>
            </div>
        @include('development.menu.include.professionnel.aside')
        @include('development.menu.include.professionnel.subscription')



        <!-- List -->

            <div class="menu-body">
                <div class="menu-body-title">BACK-OFFICE PROFESSIONNELS</div>
                <div class="menu-body-hm">
                    <div class="menu-body-hr"></div>
                    <div class="menu-body-subs">
                        <span class="menu-body-subs-one">Compte Manager</span>
                        <span class="menu-body-subs-two">abderazakjamo@hotmail.com</span>
                    </div>
                </div>
                <div class="menu-body-content">

                    <div class="menu-body-content-item">
                        <div class="display-item">
                            <div class="page-list-panelle">
                                <div class="page-list-panel-item">

                                    <div class="page-list-top">
                                        <div class="page-list-top-button">
                                            Publié le 14/09/2019
                                        </div>
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Partager</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Modifier</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Supprimer</div>
                                            </div>
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
                                <div class="page-list-panel-item-one">
                                    <div class="page-list-panel-item-two-top">
                                        <div class="page-list-panel-item-two-top-left">
                                            Référence AAZ500000
                                        </div>
                                        <div class="page-list-panel-item-two-top-right">
                                            <span class="page-list-panel-active">Activé </span>    -
                                            <span> Désactivé</span>
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
                                <div class="portail">
                                    <div class="portail-title">
                                        <span class="portail-title-one">Ajouter</span> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three">du Portail PARTICULIERS</span>
                                    </div>
                                    <div class="portail-title">
                                        <a href="#" style="text-decoration: none; color: inherit" data-toggle="modal" data-target="#promotion"><span class="portail-title-one">Ajouter</span></a> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three"> Promotions & Cadeaux</span>
                                    </div>

                                    <div class="portail-hr"></div>
                                    <div class="portail-title-next">
                                        Couleur du Repère Map en couleur différenciée ( 3 jours)
                                    </div>
                                    <div class="portail-content-map">
                                        <div class="portail-content-map-first">Activer</div>
                                        <div class="portail-content-map-second">
                                            <div class="portail-content-map-second-box">
                                                <div class="portail-content-map-second-box-item">
                                                    <label for="#"></label>
                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                </div>
                                                <div class="portail-content-map-second-box-item">
                                                    <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Partager</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Modifier</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Supprimer</div>
                                            </div>
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
                                <div class="page-list-panel-item-one">
                                    <div class="page-list-panel-item-two-top">
                                        <div class="page-list-panel-item-two-top-left">
                                            Référence AAZ500000
                                        </div>
                                        <div class="page-list-panel-item-two-top-right">
                                            <span class="page-list-panel-active">Activé </span>    -
                                            <span> Désactivé</span>
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
                                <div class="portail">
                                    <div class="portail-title">
                                        <span class="portail-title-one">Ajouter</span> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three">du Portail PARTICULIERS</span>
                                    </div>
                                    <div class="portail-title">
                                        <a href="#" style="text-decoration: none; color: inherit" data-toggle="modal" data-target="#promotion"><span class="portail-title-one">Ajouter</span></a> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three"> Promotions & Cadeaux</span>
                                    </div>

                                    <div class="portail-hr"></div>
                                    <div class="portail-title-next">
                                        Couleur du Repère Map en couleur différenciée ( 3 jours)
                                    </div>
                                    <div class="portail-content-map">
                                        <div class="portail-content-map-first">Activer</div>
                                        <div class="portail-content-map-second">
                                            <div class="portail-content-map-second-box">
                                                <div class="portail-content-map-second-box-item">
                                                    <label for="#"></label>
                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                </div>
                                                <div class="portail-content-map-second-box-item">
                                                    <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Partager</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Modifier</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Supprimer</div>
                                            </div>
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
                                <div class="page-list-panel-item-one">
                                    <div class="page-list-panel-item-two-top">
                                        <div class="page-list-panel-item-two-top-left">
                                            Référence AAZ500000
                                        </div>
                                        <div class="page-list-panel-item-two-top-right">
                                            <span class="page-list-panel-active">Activé </span>    -
                                            <span> Désactivé</span>
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
                                <div class="portail">
                                    <div class="portail-title">
                                        <span class="portail-title-one">Ajouter</span> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three">du Portail PARTICULIERS</span>
                                    </div>
                                    <div class="portail-title">
                                        <a href="#" style="text-decoration: none; color: inherit" data-toggle="modal" data-target="#promotion"><span class="portail-title-one">Ajouter</span></a> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three"> Promotions & Cadeaux</span>
                                    </div>

                                    <div class="portail-hr"></div>
                                    <div class="portail-title-next">
                                        Couleur du Repère Map en couleur différenciée ( 3 jours)
                                    </div>
                                    <div class="portail-content-map">
                                        <div class="portail-content-map-first">Activer</div>
                                        <div class="portail-content-map-second">
                                            <div class="portail-content-map-second-box">
                                                <div class="portail-content-map-second-box-item">
                                                    <label for="#"></label>
                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                </div>
                                                <div class="portail-content-map-second-box-item">
                                                    <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Partager</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Modifier</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Supprimer</div>
                                            </div>
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
                                <div class="page-list-panel-item-one">
                                    <div class="page-list-panel-item-two-top">
                                        <div class="page-list-panel-item-two-top-left">
                                            Référence AAZ500000
                                        </div>
                                        <div class="page-list-panel-item-two-top-right">
                                            <span class="page-list-panel-active">Activé </span>    -
                                            <span> Désactivé</span>
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
                                <div class="portail">
                                    <div class="portail-title">
                                        <span class="portail-title-one">Ajouter</span> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three">du Portail PARTICULIERS</span>
                                    </div>
                                    <div class="portail-title">
                                        <a href="#" style="text-decoration: none; color: inherit" data-toggle="modal" data-target="#promotion"><span class="portail-title-one">Ajouter</span></a> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three"> Promotions & Cadeaux</span>
                                    </div>

                                    <div class="portail-hr"></div>
                                    <div class="portail-title-next">
                                        Couleur du Repère Map en couleur différenciée ( 3 jours)
                                    </div>
                                    <div class="portail-content-map">
                                        <div class="portail-content-map-first">Activer</div>
                                        <div class="portail-content-map-second">
                                            <div class="portail-content-map-second-box">
                                                <div class="portail-content-map-second-box-item">
                                                    <label for="#"></label>
                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                </div>
                                                <div class="portail-content-map-second-box-item">
                                                    <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Partager</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Modifier</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Supprimer</div>
                                            </div>
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
                                <div class="page-list-panel-item-one">
                                    <div class="page-list-panel-item-two-top">
                                        <div class="page-list-panel-item-two-top-left">
                                            Référence AAZ500000
                                        </div>
                                        <div class="page-list-panel-item-two-top-right">
                                            <span class="page-list-panel-active">Activé </span>    -
                                            <span> Désactivé</span>
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
                                <div class="portail">
                                    <div class="portail-title">
                                        <span class="portail-title-one">Ajouter</span> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three">du Portail PARTICULIERS</span>
                                    </div>
                                    <div class="portail-title">
                                        <a href="#" style="text-decoration: none; color: inherit" data-toggle="modal" data-target="#promotion"><span class="portail-title-one">Ajouter</span></a> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three"> Promotions & Cadeaux</span>
                                    </div>

                                    <div class="portail-hr"></div>
                                    <div class="portail-title-next">
                                        Couleur du Repère Map en couleur différenciée ( 3 jours)
                                    </div>
                                    <div class="portail-content-map">
                                        <div class="portail-content-map-first">Activer</div>
                                        <div class="portail-content-map-second">
                                            <div class="portail-content-map-second-box">
                                                <div class="portail-content-map-second-box-item">
                                                    <label for="#"></label>
                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                </div>
                                                <div class="portail-content-map-second-box-item">
                                                    <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Partager</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Modifier</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Supprimer</div>
                                            </div>
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
                                <div class="page-list-panel-item-one">
                                    <div class="page-list-panel-item-two-top">
                                        <div class="page-list-panel-item-two-top-left">
                                            Référence AAZ500000
                                        </div>
                                        <div class="page-list-panel-item-two-top-right">
                                            <span class="page-list-panel-active">Activé </span>    -
                                            <span> Désactivé</span>
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
                                <div class="portail">
                                    <div class="portail-title">
                                        <span class="portail-title-one">Ajouter</span> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three">du Portail PARTICULIERS</span>
                                    </div>
                                    <div class="portail-title">
                                        <a href="#" style="text-decoration: none; color: inherit" data-toggle="modal" data-target="#promotion"><span class="portail-title-one">Ajouter</span></a> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three"> Promotions & Cadeaux</span>
                                    </div>

                                    <div class="portail-hr"></div>
                                    <div class="portail-title-next">
                                        Couleur du Repère Map en couleur différenciée ( 3 jours)
                                    </div>
                                    <div class="portail-content-map">
                                        <div class="portail-content-map-first">Activer</div>
                                        <div class="portail-content-map-second">
                                            <div class="portail-content-map-second-box">
                                                <div class="portail-content-map-second-box-item">
                                                    <label for="#"></label>
                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                </div>
                                                <div class="portail-content-map-second-box-item">
                                                    <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Partager</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Modifier</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Supprimer</div>
                                            </div>
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
                                <div class="page-list-panel-item-one">
                                    <div class="page-list-panel-item-two-top">
                                        <div class="page-list-panel-item-two-top-left">
                                            Référence AAZ500000
                                        </div>
                                        <div class="page-list-panel-item-two-top-right">
                                            <span class="page-list-panel-active">Activé </span>    -
                                            <span> Désactivé</span>
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
                                <div class="portail">
                                    <div class="portail-title">
                                        <span class="portail-title-one">Ajouter</span> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three">du Portail PARTICULIERS</span>
                                    </div>
                                    <div class="portail-title">
                                        <a href="#" style="text-decoration: none; color: inherit" data-toggle="modal" data-target="#promotion"><span class="portail-title-one">Ajouter</span></a> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three"> Promotions & Cadeaux</span>
                                    </div>

                                    <div class="portail-hr"></div>
                                    <div class="portail-title-next">
                                        Couleur du Repère Map en couleur différenciée ( 3 jours)
                                    </div>
                                    <div class="portail-content-map">
                                        <div class="portail-content-map-first">Activer</div>
                                        <div class="portail-content-map-second">
                                            <div class="portail-content-map-second-box">
                                                <div class="portail-content-map-second-box-item">
                                                    <label for="#"></label>
                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                </div>
                                                <div class="portail-content-map-second-box-item">
                                                    <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Partager</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Modifier</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Supprimer</div>
                                            </div>
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
                                <div class="page-list-panel-item-one">
                                    <div class="page-list-panel-item-two-top">
                                        <div class="page-list-panel-item-two-top-left">
                                            Référence AAZ500000
                                        </div>
                                        <div class="page-list-panel-item-two-top-right">
                                            <span class="page-list-panel-active">Activé </span>    -
                                            <span> Désactivé</span>
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
                                <div class="portail">
                                    <div class="portail-title">
                                        <span class="portail-title-one">Ajouter</span> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three">du Portail PARTICULIERS</span>
                                    </div>
                                    <div class="portail-title">
                                        <a href="#" style="text-decoration: none; color: inherit" data-toggle="modal" data-target="#promotion"><span class="portail-title-one">Ajouter</span></a> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three"> Promotions & Cadeaux</span>
                                    </div>

                                    <div class="portail-hr"></div>
                                    <div class="portail-title-next">
                                        Couleur du Repère Map en couleur différenciée ( 3 jours)
                                    </div>
                                    <div class="portail-content-map">
                                        <div class="portail-content-map-first">Activer</div>
                                        <div class="portail-content-map-second">
                                            <div class="portail-content-map-second-box">
                                                <div class="portail-content-map-second-box-item">
                                                    <label for="#"></label>
                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                </div>
                                                <div class="portail-content-map-second-box-item">
                                                    <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Partager</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Modifier</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Supprimer</div>
                                            </div>
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
                                <div class="page-list-panel-item-one">
                                    <div class="page-list-panel-item-two-top">
                                        <div class="page-list-panel-item-two-top-left">
                                            Référence AAZ500000
                                        </div>
                                        <div class="page-list-panel-item-two-top-right">
                                            <span class="page-list-panel-active">Activé </span>    -
                                            <span> Désactivé</span>
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
                                <div class="portail">
                                    <div class="portail-title">
                                        <span class="portail-title-one">Ajouter</span> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three">du Portail PARTICULIERS</span>
                                    </div>
                                    <div class="portail-title">
                                        <a href="#" style="text-decoration: none; color: inherit" data-toggle="modal" data-target="#promotion"><span class="portail-title-one">Ajouter</span></a> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three"> Promotions & Cadeaux</span>
                                    </div>

                                    <div class="portail-hr"></div>
                                    <div class="portail-title-next">
                                        Couleur du Repère Map en couleur différenciée ( 3 jours)
                                    </div>
                                    <div class="portail-content-map">
                                        <div class="portail-content-map-first">Activer</div>
                                        <div class="portail-content-map-second">
                                            <div class="portail-content-map-second-box">
                                                <div class="portail-content-map-second-box-item">
                                                    <label for="#"></label>
                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                </div>
                                                <div class="portail-content-map-second-box-item">
                                                    <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Partager</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Modifier</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Supprimer</div>
                                            </div>
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
                                <div class="page-list-panel-item-one">
                                    <div class="page-list-panel-item-two-top">
                                        <div class="page-list-panel-item-two-top-left">
                                            Référence AAZ500000
                                        </div>
                                        <div class="page-list-panel-item-two-top-right">
                                            <span class="page-list-panel-active">Activé </span>    -
                                            <span> Désactivé</span>
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
                                <div class="portail">
                                    <div class="portail-title">
                                        <span class="portail-title-one">Ajouter</span> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three">du Portail PARTICULIERS</span>
                                    </div>
                                    <div class="portail-title">
                                        <a href="#" style="text-decoration: none; color: inherit" data-toggle="modal" data-target="#promotion"><span class="portail-title-one">Ajouter</span></a> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three"> Promotions & Cadeaux</span>
                                    </div>

                                    <div class="portail-hr"></div>
                                    <div class="portail-title-next">
                                        Couleur du Repère Map en couleur différenciée ( 3 jours)
                                    </div>
                                    <div class="portail-content-map">
                                        <div class="portail-content-map-first">Activer</div>
                                        <div class="portail-content-map-second">
                                            <div class="portail-content-map-second-box">
                                                <div class="portail-content-map-second-box-item">
                                                    <label for="#"></label>
                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                </div>
                                                <div class="portail-content-map-second-box-item">
                                                    <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="page-list-top-share">
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s1.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Partager</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s2.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Modifier</div>
                                            </div>
                                            <div class="page-list-top-share-content">
                                                <div class="page-list-top-share-content-img">
                                                    <img src="{{ asset('images/residential/single/menu/s3.svg') }}" alt="">
                                                </div>
                                                <div class="page-list-top-share-content-text">Supprimer</div>
                                            </div>
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
                                <div class="page-list-panel-item-one">
                                    <div class="page-list-panel-item-two-top">
                                        <div class="page-list-panel-item-two-top-left">
                                            Référence AAZ500000
                                        </div>
                                        <div class="page-list-panel-item-two-top-right">
                                            <span class="page-list-panel-active">Activé </span>    -
                                            <span> Désactivé</span>
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
                                <div class="portail">
                                    <div class="portail-title">
                                        <span class="portail-title-one">Ajouter</span> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three">du Portail PARTICULIERS</span>
                                    </div>
                                    <div class="portail-title">
                                        <a href="#" style="text-decoration: none; color: inherit" data-toggle="modal" data-target="#promotion"><span class="portail-title-one">Ajouter</span></a> - <span class="portail-title-two">Retirer</span>
                                        <span class="portail-title-three"> Promotions & Cadeaux</span>
                                    </div>

                                    <div class="portail-hr"></div>
                                    <div class="portail-title-next">
                                        Couleur du Repère Map en couleur différenciée ( 3 jours)
                                    </div>
                                    <div class="portail-content-map">
                                        <div class="portail-content-map-first">Activer</div>
                                        <div class="portail-content-map-second">
                                            <div class="portail-content-map-second-box">
                                                <div class="portail-content-map-second-box-item">
                                                    <label for="#"></label>
                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                </div>
                                                <div class="portail-content-map-second-box-item">
                                                    <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
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

            <!-- End List -->


        </div>
    </div>

</div>

    <!-- Modal First -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="" class="close" data-dismiss="modal" aria-label="Close">
                        <div class="modal-body-x-button">
                            <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                        </div>
                    </a>

                    <div class="modal-body-title">MULTIPLES UTILISATEURS</div>
                    <div class="modal-body-desc">Ajoutez des utilisateurs et choisissez leurs types de comptes </div>
                    <div class="modal-body-content">
                        <div class="modal-body-content-left">
                            <div class="field">
                                    <label for="doge" class="field-label">nom d'utilisateur (trice)</label>
                                    <input type="email" id="email" name="doge" class="field-input">
                                </div>
                            <div class="field">
                                    <label for="doge" class="field-label">ville</label>
                                    <input type="email" id="email" name="doge" class="field-input">
                                </div>
                            <div class="field">
                                <label for="doge" class="field-label">mot de passe</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                            <div class="field">
                                <label for="doge" class="field-label">email ou mobile</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>

                        </div>
                        <div class="modal-body-content-right">
                            <div class="field">
                                <label for="doge" class="field-label">email</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                            <div class="field">
                                <label for="doge" class="field-label">pays</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                            <div class="field">
                                <label for="doge" class="field-label">téléphone (2) (facultatif)</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                            <div class="field">
                                <label for="doge" class="field-label">confirmer le mot de passe</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                        </div>
                    </div>
                    <div class="modal-body-content-foot">
                        <div class="modal-body-content-foot-title">Type de compte</div>
                        <div class="modal-body-content-foot-content">
                            <div class="modal-body-content-foot-content-item">
                                <div class="modal-body-content-foot-content-item-one">
                                    <input type="radio" id="admin" name="admin" checked>
                                    <label for="admin"></label>
                                </div>
                                <div class="modal-body-content-foot-content-item-two">ADJOINT</div>
                                <div class="modal-body-content-foot-content-item-three">
                                    Créer des campagnes push Mobile
                                    Créer/Supprimer des pages entreprise
                                    Créer des campagnes bannière
                                    Créer des Campagnes emailing
                                    Créer des repères map en couleur différenciée
                                    Créer/Modifier/Supprimer des annonces
                                </div>
                            </div>
                            <div class="modal-body-content-foot-content-item">
                                <div class="modal-body-content-foot-content-item-one">
                                    <input type="radio" id="admin1" name="admin">
                                    <label for="admin1"></label>
                                </div>
                                <div class="modal-body-content-foot-content-item-two">Manager</div>
                                <div class="modal-body-content-foot-content-item-three">
                                    Ajouter/Supprimer des entreprises
                                    Ajouter/Retirer des utilisateurs
                                    Créer des campagnes push Mobile
                                    Créer/Supprimer des pages entreprise
                                    Créer des campagnes bannière
                                    Créer des Campagnes emailing
                                    Créer des repères map en couleur différenciée
                                    Créer/Modifier/Supprimer des annonces
                                </div>
                            </div>
                            <div class="modal-body-content-foot-content-item">
                                <div class="modal-body-content-foot-content-item-one">
                                    <input type="radio" id="admin2" name="admin">
                                    <label for="admin2"></label>
                                </div>
                                <div class="modal-body-content-foot-content-item-two">ASSISTANT</div>
                                <div class="modal-body-content-foot-content-item-three">
                                    Créer/Modifier/Supprimer des annonces
                                </div>
                            </div>
                        </div>
                        <div class="modal-body-content-foot-fix">
                            <div class="pc-checkbox">
                                <input type="checkbox" name="#" id="condition">
                                <label for="condition">
                                    J'ai lu et j'accepte les termes et conditions
                                </label>
                            </div>
                        </div>
                        <div class="modal-body-coontent-foot-button">ENVOYER</div>
                        <div class="modal-body-coontent-foot-terms">Termes & Charte</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal First -->

    <!-- Modal two -->
    <div class="modal fade" id="modals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <a href="" class="close" data-dismiss="modal" aria-label="Close">
                        <div class="modal-body-x-button">
                            <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                        </div>
                    </a>

                    <div class="modal-body-title">MULTIPLES UTILISATEURS</div>
                    <div class="modal-body-desc">Ajoutez des utilisateurs et choisissez leurs types de comptes </div>

                    <div class="modal-body-box">
                        <div class="modal-body-box-title">Le compte a été créé</div>
                        <div class="modal-body-box-img">
                            <img src="{{ asset('images/residential/single/menu/ok.svg') }}" alt="">
                        </div>
                    </div>
                    <a href="" data-dismiss="modal" aria-label="Close" style="text-decoration: none; color: inherit">
                        <div class="modal-body-coontent-foot-buttons">fermer</div>
                    </a>


                </div>

            </div>
        </div>
    </div>
    <!-- End Modal two -->

    <!-- Modal three -->
        <div class="modal fade" id="promotion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <a href="" class="close" data-dismiss="modal" aria-label="Close">
                        <div class="modal-body-x-button">
                            <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                        </div>
                    </a>

                    <div class="modal-body-title text-uppercase">Promotions & cadeaux</div>
                    <div class="modal-body-desc">L'accroche PROMOTIONS & CADEAUX contenant votre texte sera intégrée à votre annonce </div>

                    <div class="modal-body-content-box">
                        <div class="modal-body-content-box-title">Format à suivre</div>
                        <div class="modal-body-content-box-block">
                            <div class="modal-body-content-box-block-abs">
                                <img src="{{ asset('images/residential/single/menu/promo.svg') }}" alt="">
                            </div>
                            <div class="modal-body-content-box-block-st">
                                <div class="modal-body-content-box-block-first">Frais de notaire offerts!</div>
                                <div class="modal-body-content-box-block-second">Contactez-nous vite!</div>
                                <div class="modal-body-content-box-block-three">Offre limitée aux 10 premiers</div>
                                <div class="modal-body-content-box-block-four">Louez, achetez l'esprit tranquille</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body-content-boxes">
                        <div class="modal-body-content-boxes-title">
                            Décrire la promotion ou le cadeau  <span>20 mots</span>
                        </div>
                        <div class="modal-body-content-boxes-block">
                            <div class="modal-body-content-boxes-b">
                                <div class="modal-body-content-boxes-block-title">Ligne 1</div>
                                <div class="modal-body-content-boxes-block-flex">
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="frais" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="de" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="notaire" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="offers!" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body-content-boxes-b">
                                <div class="modal-body-content-boxes-block-title">Ligne 2</div>
                                <div class="modal-body-content-boxes-block-flex">
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="Contactez-nous" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="vite!" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body-content-boxes-b">
                                <div class="modal-body-content-boxes-block-title">Ligne 3</div>
                                <div class="modal-body-content-boxes-block-flex">
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="Offre" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="limitée" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="aux" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="10" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="premiers" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body-content-boxes-b">
                                <div class="modal-body-content-boxes-block-title">Ligne 4</div>
                                <div class="modal-body-content-boxes-block-flex">
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="Louez" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="achetez" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="l'esprit" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="tranquille" class="form-control">
                                    </div>
                                    <div class="modal-body-content-boxes-block-flex-input">
                                        <input type="text" name="#" id="" placeholder="" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <a href="" data-toggle="modal" data-target="#p" style="text-decoration: none; color: inherit">
                        <div class="modal-body-coontent-foot-buttons">Continuer</div>
                    </a>


                </div>

            </div>
        </div>
    </div>
    <!-- End Modal three -->

    <!-- Modal four -->
    <div class="modal fade" id="p" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <a href="" class="close" data-dismiss="modal" aria-label="Close">
                        <div class="modal-body-x-button">
                            <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                        </div>
                    </a>

                    <div class="modal-body-title text-uppercase">Promotions & cadeaux</div>
                    <div class="modal-body-desc">L'accroche PROMOTIONS & CADEAUX contenant votre texte sera intégrée à votre annonce </div>

                    <div class="modal-body-content-box">
                        <div class="modal-body-content-box-title">Votre accroche est prête</div>
                        <div class="modal-body-content-box-blocks">
                            <div class="modal-body-content-box-block-abs">
                                <img src="{{ asset('images/residential/single/menu/promo.svg') }}" alt="">
                            </div>
                            <div class="modal-body-content-box-block-sts">
                                <div class="modal-body-content-box-block-first">Votre salon meublé !</div>
                                <div class="modal-body-content-box-block-second">Contactez-nous vite!</div>
                                <div class="modal-body-content-box-block-three">Offre limitée aux 10 premiers</div>
                                <div class="modal-body-content-box-block-four">Nous vous attendons nombreux aujourd'hui</div>
                            </div>
                        </div>
                    </div>

                    <div class="button-button">
                        <div>
                            <button data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                            </button>
                        </div>
                        <div>
                            <a href=""  style="text-decoration: none; color: inherit">
                                <div class="modal-body-coontent-foots-buttons">Créer la campagne</div>
                            </a>
                        </div>
                    </div>


                    <div style="visibility: hidden" class="modal-body-content-boxes">
                            <div class="modal-body-content-boxes-title">
                                Décrire la promotion ou le cadeau  <span>20 mots</span>
                            </div>
                            <div class="modal-body-content-boxes-block">
                                <div class="modal-body-content-boxes-b">
                                    <div class="modal-body-content-boxes-block-title">Ligne 1</div>
                                    <div class="modal-body-content-boxes-block-flex">
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="frais" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="de" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="notaire" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="offers!" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body-content-boxes-b">
                                    <div class="modal-body-content-boxes-block-title">Ligne 2</div>
                                    <div class="modal-body-content-boxes-block-flex">
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="Contactez-nous" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="vite!" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body-content-boxes-b">
                                    <div class="modal-body-content-boxes-block-title">Ligne 3</div>
                                    <div class="modal-body-content-boxes-block-flex">
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="Offre" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="limitée" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="aux" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="10" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="premiers" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body-content-boxes-b">
                                    <div class="modal-body-content-boxes-block-title">Ligne 4</div>
                                    <div class="modal-body-content-boxes-block-flex">
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="Louez" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="achetez" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="l'esprit" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="tranquille" class="form-control">
                                        </div>
                                        <div class="modal-body-content-boxes-block-flex-input">
                                            <input type="text" name="#" id="" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                </div>

            </div>
        </div>
    </div>

    <!-- End Modal four -->

    <!-- Modal five -->
    <!-- End Modal five -->


</div>










@include('development.menu.include.footer')




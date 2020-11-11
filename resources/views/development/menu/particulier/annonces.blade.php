@include('development.menu.include.head')
@include('development.next.include.myhouseNav')


<div class="menu-wrap">
    <div class="menu-wrap-content">
        <!-- X button -->
            <div class="menu-wrap-x-button">
                <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
            </div>
        <!-- End X button -->

    @include('development.menu.include.particulier.aside')


    <!-- List -->

            <div class="menu-body pl-var">
                <div class="menu-body-title">mes annonces</div>
                <div class="menu-body-hr"></div>
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
                                    <a href="{{ route('results', 'residence-du-marine') }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
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



                                </div>
                                <div style="height: 305px;">
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
                                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                        <div class="page-list-panel-item-two-pro-head">
                                            <div class="page-list-panel-item-two-head-left">
                                                <div class="page-list-panel-item-two-head-left-box">
                                                    <div class="page-list-panel-item-two-head-left-box-left">
                                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="page-list-panel-item-two-head-left-box-right">
                                                        Casablanca Maarif
                                                        <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
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
                                                <div class="page-list-panel-item-two-pro-body-box-st">
                                                    <div class="page-list-panel-item-two-pro-body-content">
                                                        Vente
                                                        <div class="page-list-panel-item-two-pro-body-content-text">
                                                            12.000 <span>MAD/MOIS</span>
                                                        </div>


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
                                    <a href="{{ route('results', 'residence-du-marine') }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
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



                                </div>
                                <div style="height: 305px;">
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
                                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                            <div class="page-list-panel-item-two-pro-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
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
                                                    <div class="page-list-panel-item-two-pro-body-box-st">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            Vente
                                                            <div class="page-list-panel-item-two-pro-body-content-text">
                                                                12.000 <span>MAD/MOIS</span>
                                                            </div>


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
                                    <a href="{{ route('results', 'residence-du-marine') }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
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



                                </div>
                                <div style="height: 305px;">
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
                                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                            <div class="page-list-panel-item-two-pro-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
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
                                                    <div class="page-list-panel-item-two-pro-body-box-st">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            Vente
                                                            <div class="page-list-panel-item-two-pro-body-content-text">
                                                                12.000 <span>MAD/MOIS</span>
                                                            </div>


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
                                    <a href="{{ route('results', 'residence-du-marine') }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
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



                                </div>
                                <div style="height: 305px;">
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
                                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                            <div class="page-list-panel-item-two-pro-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
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
                                                    <div class="page-list-panel-item-two-pro-body-box-st">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            Vente
                                                            <div class="page-list-panel-item-two-pro-body-content-text">
                                                                12.000 <span>MAD/MOIS</span>
                                                            </div>


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
                                    <a href="{{ route('results', 'residence-du-marine') }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
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



                                </div>
                                <div style="height: 305px;">
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
                                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                            <div class="page-list-panel-item-two-pro-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
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
                                                    <div class="page-list-panel-item-two-pro-body-box-st">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            Vente
                                                            <div class="page-list-panel-item-two-pro-body-content-text">
                                                                12.000 <span>MAD/MOIS</span>
                                                            </div>


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
                                    <a href="{{ route('results', 'residence-du-marine') }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
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



                                </div>
                                <div style="height: 305px;">
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
                                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                            <div class="page-list-panel-item-two-pro-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
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
                                                    <div class="page-list-panel-item-two-pro-body-box-st">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            Vente
                                                            <div class="page-list-panel-item-two-pro-body-content-text">
                                                                12.000 <span>MAD/MOIS</span>
                                                            </div>


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
                                    <a href="{{ route('results', 'residence-du-marine') }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
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



                                </div>
                                <div style="height: 305px;">
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
                                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                            <div class="page-list-panel-item-two-pro-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
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
                                                    <div class="page-list-panel-item-two-pro-body-box-st">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            Vente
                                                            <div class="page-list-panel-item-two-pro-body-content-text">
                                                                12.000 <span>MAD/MOIS</span>
                                                            </div>


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
                                    <a href="{{ route('results', 'residence-du-marine') }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
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



                                </div>
                                <div style="height: 305px;">
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
                                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                            <div class="page-list-panel-item-two-pro-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
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
                                                    <div class="page-list-panel-item-two-pro-body-box-st">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            Vente
                                                            <div class="page-list-panel-item-two-pro-body-content-text">
                                                                12.000 <span>MAD/MOIS</span>
                                                            </div>


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
                                    <a href="{{ route('results', 'residence-du-marine') }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
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



                                </div>
                                <div style="height: 305px;">
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
                                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                            <div class="page-list-panel-item-two-pro-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
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
                                                    <div class="page-list-panel-item-two-pro-body-box-st">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            Vente
                                                            <div class="page-list-panel-item-two-pro-body-content-text">
                                                                12.000 <span>MAD/MOIS</span>
                                                            </div>


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
                                    <a href="{{ route('results', 'residence-du-marine') }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
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



                                </div>
                                <div style="height: 305px;">
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
                                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                            <div class="page-list-panel-item-two-pro-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
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
                                                    <div class="page-list-panel-item-two-pro-body-box-st">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            Vente
                                                            <div class="page-list-panel-item-two-pro-body-content-text">
                                                                12.000 <span>MAD/MOIS</span>
                                                            </div>


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
                                    <a href="{{ route('results', 'residence-du-marine') }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
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



                                </div>
                                <div style="height: 305px;">
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
                                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                            <div class="page-list-panel-item-two-pro-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
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
                                                    <div class="page-list-panel-item-two-pro-body-box-st">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            Vente
                                                            <div class="page-list-panel-item-two-pro-body-content-text">
                                                                12.000 <span>MAD/MOIS</span>
                                                            </div>


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
                                    <a href="{{ route('results', 'residence-du-marine') }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
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



                                </div>
                                <div style="height: 305px;">
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
                                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                            <div class="page-list-panel-item-two-pro-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
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
                                                    <div class="page-list-panel-item-two-pro-body-box-st">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            Vente
                                                            <div class="page-list-panel-item-two-pro-body-content-text">
                                                                12.000 <span>MAD/MOIS</span>
                                                            </div>


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
                                    <a href="{{ route('results', 'residence-du-marine') }}" style="text-decoration: none; color: inherit" target="_blank">
                                        <div class="carouse-image">
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



                                </div>
                                <div style="height: 305px;">
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
                                        <a href="{{ route('resultats', 'residence-alpe') }}" style="text-decoration: none; color: inherit" target="_blank"  >
                                            <div class="page-list-panel-item-two-pro-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            Casablanca Maarif
                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
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
                                                    <div class="page-list-panel-item-two-pro-body-box-st">
                                                        <div class="page-list-panel-item-two-pro-body-content">
                                                            Vente
                                                            <div class="page-list-panel-item-two-pro-body-content-text">
                                                                12.000 <span>MAD/MOIS</span>
                                                            </div>


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

        <!-- End List -->


    </div>
</div>









@include('development.menu.include.footer')




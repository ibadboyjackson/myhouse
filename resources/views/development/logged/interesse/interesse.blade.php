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
        <div class="with-wrap">
            <div class="with-wrap-item">
                @include('development.includes.aside')
                <div class="sidebar-button" id="sidebar-button">
                    <i class="fas fa-caret-right button-sp-ds"></i>
                </div>
            </div>
            <div class="with-wrap-item">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row d-flex justify-content-center">
                            <div class="d-flex">
                                <a href="{{ route('interesse') }}" class="active-hover">
                                    <div class="list-icon">
                                        <span class="hamburgers"></span>
                                    </div>
                                </a>
                                <a href="{{ route('interesse-three') }}" class="active-hover-two">
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
                                <a href="{{ route('interesse-five') }}" class="active-hover">
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

                    </div>
                </div>
                <div class="mr-134">
                    <div class="with-square mb-g">
                        <div class="square">
                            <div class="square-title">
                                Duplex de charme
                                <hr class="description-hr">
                            </div>
                            <div class="bg-image">
                                <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="text-description">
                                <div class="ml-1">
                                    <span class="title">Appartement Maârif </span>
                                    <span class="price mt-1"> Location 12.000 MAD/mois <br> <span class="price-next"> 1.000 MAD/jour</span></span>

                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="price mt-1"> Vente 1.200.000 MAD/mois</span>
                                            <span class="price mt-1"> Échange Provisoire</span>
                                        </div>
                                        <div class="float-right mr-2">
                                            <span class="price-m mt-1"> Surface habitable 120 m2</span>
                                            <span class="price-m"> Surface du terrain 1300m2</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <div class="description-nav">
                                <div class="description-a">
                                    <a href="#" class="description-a-active">Activé</a> -
                                    <a href="#">Désactivée</a>
                                </div>
                            </div>
                            <div class="top-m">
                                <div class="content-description">
                                    <div class="clearfix">
                                        <div class="d-flex justify-content-center">
                                            <div class="conference">
                                                <div class="conference-block ml-2">
                                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">Partager</span>
                                                </div>
                                                <div class="conference-block ml-56">
                                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">Modifier</span>
                                                </div>
                                                <div class="conference-block ml-57">
                                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">supprimer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="description-paragraph">
                                    <p class="paragraph">
                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                        sit voluptartem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem aperiam,
                                        eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae doloremque laudantium,
                                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae
                                        dicta sunt.doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                        ropeior architecto beatae vitae vitae doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                        inventore veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae
                                    </p>
                                    <div class="paragraph-date float-right">
                                        <button class="btn btn-paragraph text-capitalize">Publié le 14/09/2019</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="with-square mb-g">
                        <div class="square">
                            <div class="square-title">
                                Duplex de charme
                                <hr class="description-hr">
                            </div>
                            <div class="bg-image">
                                <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="text-description">
                                <div class="ml-1">
                                    <span class="title">Appartement Maârif </span>
                                    <span class="price mt-1"> Location 12.000 MAD/mois <br> <span class="price-next"> 1.000 MAD/jour</span></span>

                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="price mt-1"> Vente 1.200.000 MAD/mois</span>
                                            <span class="price mt-1"> Échange Provisoire</span>
                                        </div>
                                        <div class="float-right mr-2">
                                            <span class="price-m mt-1"> Surface habitable 120 m2</span>
                                            <span class="price-m"> Surface du terrain 1300m2</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <div class="description-nav">
                                <div class="description-a">
                                    <a href="#" class="description-a-active">Activé</a> -
                                    <a href="#">Désactivée</a>
                                </div>
                            </div>
                            <div class="top-m">
                                <div class="content-description">
                                    <div class="clearfix">
                                        <div class="d-flex justify-content-center">
                                            <div class="conference">
                                                <div class="conference-block ml-2">
                                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">Partager</span>
                                                </div>
                                                <div class="conference-block ml-56">
                                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">Modifier</span>
                                                </div>
                                                <div class="conference-block ml-57">
                                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">supprimer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="description-paragraph">
                                    <p class="paragraph">
                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                        sit voluptartem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem aperiam,
                                        eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae doloremque laudantium,
                                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae
                                        dicta sunt.doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                        ropeior architecto beatae vitae vitae doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                        inventore veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae
                                    </p>
                                    <div class="paragraph-date float-right">
                                        <button class="btn btn-paragraph text-capitalize">Publié le 14/09/2019</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="with-square mb-g">
                        <div class="square">
                            <div class="square-title">
                                Duplex de charme
                                <hr class="description-hr">
                            </div>
                            <div class="bg-image">
                                <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="text-description">
                                <div class="ml-1">
                                    <span class="title">Appartement Maârif </span>
                                    <span class="price mt-1"> Location 12.000 MAD/mois <br> <span class="price-next"> 1.000 MAD/jour</span></span>

                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="price mt-1"> Vente 1.200.000 MAD/mois</span>
                                            <span class="price mt-1"> Échange Provisoire</span>
                                        </div>
                                        <div class="float-right mr-2">
                                            <span class="price-m mt-1"> Surface habitable 120 m2</span>
                                            <span class="price-m"> Surface du terrain 1300m2</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <div class="description-nav">
                                <div class="description-a">
                                    <a href="#" class="description-a-active">Activé</a> -
                                    <a href="#">Désactivée</a>
                                </div>
                            </div>
                            <div class="top-m">
                                <div class="content-description">
                                    <div class="clearfix">
                                        <div class="d-flex justify-content-center">
                                            <div class="conference">
                                                <div class="conference-block ml-2">
                                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">Partager</span>
                                                </div>
                                                <div class="conference-block ml-56">
                                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">Modifier</span>
                                                </div>
                                                <div class="conference-block ml-57">
                                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">supprimer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="description-paragraph">
                                    <p class="paragraph">
                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                        sit voluptartem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem aperiam,
                                        eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae doloremque laudantium,
                                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae
                                        dicta sunt.doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                        ropeior architecto beatae vitae vitae doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                        inventore veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae
                                    </p>
                                    <div class="paragraph-date float-right">
                                        <button class="btn btn-paragraph text-capitalize">Publié le 14/09/2019</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="with-square mb-g">
                        <div class="square">
                            <div class="square-title">
                                Duplex de charme
                                <hr class="description-hr">
                            </div>
                            <div class="bg-image">
                                <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="text-description">
                                <div class="ml-1">
                                    <span class="title">Appartement Maârif </span>
                                    <span class="price mt-1"> Location 12.000 MAD/mois <br> <span class="price-next"> 1.000 MAD/jour</span></span>

                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="price mt-1"> Vente 1.200.000 MAD/mois</span>
                                            <span class="price mt-1"> Échange Provisoire</span>
                                        </div>
                                        <div class="float-right mr-2">
                                            <span class="price-m mt-1"> Surface habitable 120 m2</span>
                                            <span class="price-m"> Surface du terrain 1300m2</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <div class="description-nav">
                                <div class="description-a">
                                    <a href="#" class="description-a-active">Activé</a> -
                                    <a href="#">Désactivée</a>
                                </div>
                            </div>
                            <div class="top-m">
                                <div class="content-description">
                                    <div class="clearfix">
                                        <div class="d-flex justify-content-center">
                                            <div class="conference">
                                                <div class="conference-block ml-2">
                                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">Partager</span>
                                                </div>
                                                <div class="conference-block ml-56">
                                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">Modifier</span>
                                                </div>
                                                <div class="conference-block ml-57">
                                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">supprimer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="description-paragraph">
                                    <p class="paragraph">
                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                        sit voluptartem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem aperiam,
                                        eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae doloremque laudantium,
                                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae
                                        dicta sunt.doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                        ropeior architecto beatae vitae vitae doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                        inventore veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae
                                    </p>
                                    <div class="paragraph-date float-right">
                                        <button class="btn btn-paragraph text-capitalize">Publié le 14/09/2019</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="with-square mb-g">
                        <div class="square">
                            <div class="square-title">
                                Duplex de charme
                                <hr class="description-hr">
                            </div>
                            <div class="bg-image">
                                <img src="{{ asset('images/residential/items.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="text-description">
                                <div class="ml-1">
                                    <span class="title">Appartement Maârif </span>
                                    <span class="price mt-1"> Location 12.000 MAD/mois <br> <span class="price-next"> 1.000 MAD/jour</span></span>

                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="price mt-1"> Vente 1.200.000 MAD/mois</span>
                                            <span class="price mt-1"> Échange Provisoire</span>
                                        </div>
                                        <div class="float-right mr-2">
                                            <span class="price-m mt-1"> Surface habitable 120 m2</span>
                                            <span class="price-m"> Surface du terrain 1300m2</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <div class="description-nav">
                                <div class="description-a">
                                    <a href="#" class="description-a-active">Activé</a> -
                                    <a href="#">Désactivée</a>
                                </div>
                            </div>
                            <div class="top-m">
                                <div class="content-description">
                                    <div class="clearfix">
                                        <div class="d-flex justify-content-center">
                                            <div class="conference">
                                                <div class="conference-block ml-2">
                                                    <img src="{{  asset('images/residential/menu/share.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">Partager</span>
                                                </div>
                                                <div class="conference-block ml-56">
                                                    <img src="{{  asset('images/residential/menu/edit.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">Modifier</span>
                                                </div>
                                                <div class="conference-block ml-57">
                                                    <img src="{{  asset('images/residential/menu/delete.svg') }}" alt="">
                                                    <span class="conference-text text-capitalize">supprimer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="description-paragraph">
                                    <p class="paragraph">
                                        Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                        sit voluptartem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem aperiam,
                                        eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae doloremque laudantium,
                                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae
                                        dicta sunt.doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                        ropeior architecto beatae vitae vitae doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                        inventore veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae vitae
                                    </p>
                                    <div class="paragraph-date float-right">
                                        <button class="btn btn-paragraph text-capitalize">Publié le 14/09/2019</button>
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

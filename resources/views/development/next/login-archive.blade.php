
























































































































<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> MyHouse </title>

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('development/css/style.css') }}">

    <!-- CDN LINK -->

    <link rel="stylesheet" href="{{ asset('development/css/select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg-test">

<!-- Navigation -->
<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
    <div class="container-fluid fluid">
        <a href="#" class="navbar-brand logo">
            <img src="{{ asset('development/images/logo.svg') }}" alt="">
        </a>
        <button
            class="navbar-toggler"
            data-toggle="collapse"
            data-target="#navbarNav"
        ><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="navbarNav">
            <!-- search -->
            <input type="search" class="form-control rounded-pill myHouse-search-1" placeholder="Casablanca">
            <!-- images -->
            <div class="mr-auto ml-5 d-flex">
                <div class="nav-item mr-50">
                    <div class="d-block im-1">
                        <img src="{{ asset('images/residential/flagT.svg') }}" alt="" class="site-img">
                    </div>
                    <div class="d-block mr-1 im-1-1">
                        <img src="{{ asset('images/residential/flag.svg') }}" alt=""><br>
                        <span class="t-b">Francais</span>
                    </div>
                </div>
                <div class="nav-item mr-50">
                    <div class="d-block"></div>
                    <div class="d-block im-2">
                        <img src="{{ asset('images/residential/currency.svg') }}" alt=""><br>
                        <span class="t-b-1">€</span>
                    </div>
                </div>
                <div class="nav-item">
                    <div class="d-block"></div>
                    <div class="d-block im-2">
                        <img src="{{ asset('images/residential/measure.svg') }}" alt=""><br>
                        <span class="t-b-2">m²</span>
                    </div>
                </div>
            </div>
            <!-- images -->

            <div class="d-flex flex-row-reverse navbar-nav ml-auto">
                <div class="menu mt-2 nav-item">
                    <span class="hamburger">
                    <span class="menu-text">Menu</span>
                </span>
                </div>
                <div class="connection nav-item">
                    <img src="{{ asset('development/images/connexion.svg') }}" alt="">
                    <span class="text-connection">Se connecter</span>
                </div>

                <div class="button mr-7 d-flex nav-item">
                    <button class="btn btn-light align-self-center mr-5 text-center rounded-pill myHouse-red btn-first">Déposer une annonce</button>
                    <button class="btn btn-light align-self-center rounded-pill myHouse-red btn-second">Service utiles</button>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Navigation -->

<!-- HEADER -->
<div class="wrap mt-89">
    <header class="header">
        <form action="#">
            <div class="row mx-1 mt-0">
                <div class="col-lg-5 col-dx-12 col-ds-12 col-sm-12">
                    <div class="around">
                        <div class="block-1">
                          <span class="myHouse-circle">
                             <span class="myHouse-circle-text">1</span>
                          </span>
                            <span class="myHouse-hr"></span>
                            <span class="myHouse-circle-1">
                                <span class="myHouse-circle-text">2</span>
                            </span>
                            <span class="myHouse-circle-2">
                                <span class="myHouse-circle-text">3</span>
                              </span>
                            <select class="selectpicker myHouse-select">

                                <option data-content="<img src='{{ asset('images/residential/location.svg') }}' class='myHouse-image-1'> &nbsp; &nbsp;&nbsp;&nbsp;     <span class='custom-txt-1'> LOCATION</span> "></option>
                                <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1-1'>  ACHAT </span> "></option>
                                <option data-content="<img src='{{ asset('images/residential/terrain.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1'>   ECHANGE </span> "></option>

                            </select>

                            <select class="selectpicker myHouse-select" title="Choisissez">
                                <option data-content="<img src='{{ asset('images/residential/residential.svg') }}' class='myHouse-image-2-1'> &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-1'> RESIDENTIEL </span> "></option>
                                <option data-content="<img src='{{ asset('images/residential/commercial.svg') }}' class='myHouse-image-2-2'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-2'>  COMMERCIAL </span> "></option>
                                <option data-content="<img src='{{ asset('images/residential/terrain.svg') }}' class='myHouse-image-2-3'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-3'>   TERRAIN </span> "></option>
                            </select>

                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple" >
                                <option value="cheese">Appartement</option>
                                <option value="aa">Cabanon et Chalet</option>
                                <option value="tomatoes">Villa</option>
                                <option value="mozarella">Maison</option>
                                <option value="mushrooms">Riad</option>
                                <option value="pepperoni">Ferme</option>
                                <option value="c">Camping</option>
                                <option value="v">Chambre chez l'habitant</option>
                                <option value="r">Club et Village</option>
                                <option value="b">Maison d'hôte et Auberge </option>
                                <option value="u">Hôtel et Appart-hôtel</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-dx-12 col-ds-12 col-sm-12 d-flex">
                    <div class="myHouse-feature" style="width: 50%">
                        <span class="p-sm-f">
                            <span class="myHouse-three-text">Mode de recherche</span>
                            <span class="myHouse-three mt-27">
                                <a class="myHouse-three-link-1" href="#"></a>
                                <a class="myHouse-three-link-2 myHouse-three-link-active" href="#"></a>
                                <a class="myHouse-three-link-3" href="#"></a>
                            </span>
                            <span class="legend">
                                <span class="myHouse-three-text-left mr-3">Carte</span>
                                <span class="myHouse-three-text-middle  myHouse-three-text-active">Mixte</span>
                                <span class="myHouse-three-text-right ml-3">Liste</span>
                            </span>
                        </span>
                    </div>
                    <div style="width: 50%">
                        <div class="slider">
                            <div class="slider-wrap">
                                <span class="unit text-uppercase myHouse-red">mad</span>
                                <input class="input-range" data-slider-id='ex12cSlider' type="text" data-slider-tooltip="always" data-slider-step="1" data-slider-value="0, 73" data-slider-min="0" data-slider-max="100" data-slider-range="true" data-slider-tooltip_split="true" />
                                <span class="slider-text text-uppercase myHouse-red">budget</span>
                            </div>
                            <div class="slider-wrap-2">
                                <span class="unit text-lowercase myHouse-red">m²</span>
                                <input class="input-range" id="range" data-slider-id='ex12cSlider' type="text" data-slider-tooltip="always" data-slider-step="1" data-slider-value="0, 85" data-slider-min="0" data-slider-max="100" data-slider-range="true" data-slider-tooltip_split="true" />
                                <span class="slider-text text-uppercase myHouse-red">surface</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-dx-12 col-lg-4  col-ds-12 col-sm-12">
                    <div class="row mx-2 mx-lg-0 third-block">
                        <div class="dropdown-menus rounded-pill text-center t">
                            <span class="dropdown-toggle myHouse-caret"></span>
                            <span>critères</span>
                        </div>
                        <div class="input-search">
                            <input type="text" class="form-control rounded-pill small-text" style="width: 229px; height: 46px; margin-left: 10px;" placeholder="Mot-clés">
                        </div>
                        <div class="p-top">
                            <span class="checkboxes d-block">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                    Particulier
                                </label>
                            </span>
                            <span class="checkboxes d-block has-check">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                    Professionnel
                                </label>
                            </span>
                        </div>
                        <span class="myHouse-sort" id="myHouse-sort">
                            <span class="myHouse-sort-image">
                                <img src="{{ asset('images/residential/sort.svg') }}" alt="">
                            </span>
                            <span class="myHouse-sort-text">Tri</span>
                        </span>
                    </div>
                </div>
            </div>
        </form>
    </header>
</div>

<!-- HEADER -->

<!-- Overlay -->

<div class="overlay">
    <div class="d-flex justify-content-end mr-4 mt-3">
        <img src="{{ asset('images/residential/x.svg') }}" alt="">
    </div>
    <div class="row justify-content-center">
        <div class="panel mt-57 rounded mx-sm-auto  ">
            <div class="panel-title text-center mt-4 text-uppercase">se connecter</div>
            <div class="col-md-6 offset-sm-4 mt-5 fbt">
                <div class="field">
                    <label for="doge" class="field-label">email ou mobile</label>
                    <input type="text" id="doge" name="doge" class="field-input">
                </div>
                <div class="field">
                    <label for="doge" class="field-label">mot de passe</label>
                    <input type="password" id="doge" name="doge" class="field-input">
                    <a href="#" class="show-password">
                        <img src="{{ asset('images/residential/eye.svg') }}" alt="">
                    </a>
                </div>
                <div class="mt-5 lg-check">
                    <label for="">
                        <input type="checkbox">
                        Se souvenir de moi
                    </label>
                    <span class="password float-right">
                        <a href="#">Identifiants oubliés ?</a>
                    </span>
                    <div class="text-center mt-5">
                        <div class="inscription text-uppercase">
                            <a href="#">s'inscrire</a>
                        </div>
                        <div class="lg-connection mt-4">
                            <button class="btn btn-light btn-connections">se connecter</button>
                        </div>
                        <div class="mt-5 conditions">Conditions Générales & Charte de Confidentialité </div>
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


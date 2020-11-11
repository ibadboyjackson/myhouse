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
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- CDN LINK -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg-test">

<!-- Navigation -->


<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a href="/" class="navbar-brand logo">
            <img src="{{ asset('development/images/logo.svg') }}" alt="">
        </a>
        <button
            class="navbar-toggler"
            data-toggle="collapse"
            data-target="#navbarNav"
        ><span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse"  id="navbarNav">
            <div class="mr-auto ml-4 d-sm-none d-md-block">
                <input type="search" class="form-control rounded-pill myHouse-search-1" placeholder="Search">
            </div>
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

                <div class="button mr-5 d-flex nav-item">
                    <button class="btn btn-light align-self-center mr-3 rounded-pill myHouse-red">Déposer une annonce</button>
                    <button class="btn btn-light align-self-center rounded-pill myHouse-red">Service utiles</button>
                </div>
            </div>
        </div>

    </div>
</nav>

<!-- HEADER -->

<div class="wrap mt-89">
    <header class="header">
        <form action="#">
            <div class="row mx-1">
                <div class="col-md-5 col-sm-12">
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

                        <option data-content="<img src='{{ asset('images/residential/location.svg') }}' class='myHouse-image'> &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt'> LOCATION</span> "></option>
                        <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt'>  ACHAT </span> "></option>
                        <option data-content="<img src='{{ asset('images/residential/terrain.svg') }}' class='myHouse-image'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt'>   ECHANGE </span> "></option>

                    </select>

                    <select class="selectpicker myHouse-select">

                        <option data-content="<img src='{{ asset('images/residential/location.svg') }}' class='myHouse-image'> &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt'> RESIDENTIEL </span> "></option>
                        <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt'>  COMMERCIAL </span> "></option>
                        <option data-content="<img src='{{ asset('images/residential/terrain.svg') }}' class='myHouse-image'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt'>   TERRAIN </span> "></option>

                    </select>

                    <select name="{" id="myHouse-checkbox-select" multiple ="multiple">

                        <option value="cheese">Appartement</option>
                        <option value="tomatoes">Villa</option>
                        <option value="mozarella">Maison</option>
                        <option value="mushrooms">Riad</option>
                        <option value="pepperoni">Ferme</option>
                        <option value="onions">Camping</option>

                    </select>


                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="row">
                        <div class="myHouse-feature">
                            <span class="myHouse-three-text">Mode de recherche</span>
                            <span class="myHouse-three mt-27">
                                <a class="myHouse-three-link-1" href="#"></a>
                                <a class="myHouse-three-link-2 myHouse-three-link-active" href="#"></a>
                                <a class="myHouse-three-link-3" href="#"></a>
                             </span>
                            <span class="legend">
                                <span class="myHouse-three-text-left mr-2">Carte</span>
                                <span class="myHouse-three-text-middle  myHouse-three-text-active">Mixte</span>
                                <span class="myHouse-three-text-right ml-2">Liste</span>
                             </span>
                        </div>
                        <div class="slider">
                            <div class="slider-wrap">
                                <span class="unit text-uppercase myHouse-red">mad</span>
                                <input class="input-range" data-slider-id='ex12cSlider' type="text" data-slider-tooltip="always" data-slider-step="1" data-slider-value="0, 100" data-slider-min="0" data-slider-max="100" data-slider-range="true" data-slider-tooltip_split="true" />
                                <span class="slider-text text-uppercase myHouse-red">budget</span>
                            </div>
                            <div class="slider-wrap-2">
                                <span class="unit text-lowercase myHouse-red">m²</span>
                                <input class="input-range" id="range" data-slider-id='ex12cSlider' type="text" data-slider-tooltip="always" data-slider-step="1" data-slider-value="0, 100" data-slider-min="0" data-slider-max="100" data-slider-range="true" data-slider-tooltip_split="true" />
                                <span class="slider-text text-uppercase myHouse-red">surface</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div style="width: 100%; height: 100%" class="bg-dark"></div>
                </div>
            </div>
        </form>
    </header>
</div>

<!-- HEADER -->





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

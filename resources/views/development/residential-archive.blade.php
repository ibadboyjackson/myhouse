<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> MyHouse </title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">


    <link rel="stylesheet" href="{{ asset('development/css/residentialTest.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .multiselect-container>li>a>label {
            padding: 4px 20px 3px 20px;
        }
    </style>
</head>
<body>


<!-- NavBar -->

<nav class="navbar navbar-expand-lg navbar-light myHouse-navigation">
    <a class="navbar-brand myHouse-navigation-brand" href="/">
        <img src=" {{ asset('development/images/logo.svg') }} " alt="MyHouse-logo">
    </a>



    <nav class="navbar navbar-expand-sm">
        <div class="navbar-nav">
            <form action="#">
                <div class="form-group">
                    <input type="search" class="form-control myHouse-search-first-input" placeholder="Tapez ici vos lieux de recherche Ex. Casablanca, Maarif, Bd de Biarritz">
                </div>
            </form>


            <div class="icons">

            </div>
        </div>
    </nav>




    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav flex-row ml-md-auto d-none d-md-flex" style="margin : 0 20px; position: relative">

        <div class="myHouse-buttons text">
            <span class="btn-right">
                <a href="#">Déposer une annonce</a>
            </span>
            <span class="btn-left">
                <a href="#">Services utiles</a>
            </span>
        </div>

        <div class="connexion">
            <img src="{{ asset('development/images/connexion.png') }}" alt="">
            <span class="text-connexion">Se connecter</span>
        </div>

        <div class="myHouse-hamburger">
            <div class="hamburger">
                <span></span>
                <div class="text-hamburger">Menu</div>
            </div>
        </div>

    </div>

</nav>

<!-- Header -->

<div class="myHouse-header">
    <div class="container-fluid">
        <span class="myHouse-circle">
            <span class="myHouse-circle-text">1</span>
        </span>
        <span class="myHouse-hr"></span>
        <span class="myHouse-circle-1">
            <span class="myHouse-circle-text">2</span>
        </span>
        <span class="myHouse-circle-3">
            <span class="myHouse-circle-text">3</span>
        </span>
        <div class="form">
            <form action="#" method="get">

                <select class="selectpicker myHouse-select">

                    <option data-content="<img src='{{ asset('images/residential/location.svg') }}' class='myHouse-image'> &nbsp; &nbsp;&nbsp;&nbsp; LOCATION "></option>
                    <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image'>  &nbsp; &nbsp;&nbsp;&nbsp; ACHAT "></option>
                    <option data-content="<img src='{{ asset('images/residential/terrain.svg') }}' class='myHouse-image'>  &nbsp; &nbsp;&nbsp;&nbsp; ECHANGE "></option>

                </select>

                <select class="selectpicker myHouse-select">

                    <option data-content="<img src='' class='myHouse-image'>  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Choisissez "></option>
                    <option data-content="<img src='{{ asset('images/residential/location.svg') }}' class='myHouse-image'>  &nbsp; &nbsp;&nbsp;&nbsp; LOCATION "></option>
                    <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image'>  &nbsp; &nbsp;&nbsp;&nbsp; ACHAT "></option>
                    <option data-content="<img src='{{ asset('images/residential/terrain.svg') }}' class='myHouse-image'>  &nbsp; &nbsp;&nbsp;&nbsp; ECHANGE "></option>

                </select>

                <select name="{" id="myHouse-checkbox-select" multiple ="multiple">

                    <option value="cheese">Appartement</option>
                    <option value="tomatoes">Villa</option>
                    <option value="mozarella">Maison</option>
                    <option value="mushrooms">Riad</option>
                    <option value="pepperoni">Ferme</option>
                    <option value="onions">Camping</option>

                </select>

                <span class="child-1">Mode de recherche</span>

                <span class="myHouse-three">
                    <a class="myHouse-three-link-1" href="#" id="link-1"></a>
                    <a class="myHouse-three-link-2 myHouse-three-link-active" href="#" id="link-2"></a>
                    <a class="myHouse-three-link-3" href="#" id="link-3"></a>
                </span>

                <span class="child-2">Carte</span>
                <span class="child-3  myHouse-three-text-active">Mixte</span>
                <span class="child-4">Liste</span>

                <span class="slider-wrapper">
                    <input class="input-range" data-slider-id='ex12cSlider' type="text" data-slider-tooltip="always" data-slider-step="1" data-slider-value="10, 80" data-slider-min="0" data-slider-max="100" data-slider-range="true" data-slider-tooltip_split="true" />
                </span>

                <span class="slider-2">
                    <span class="slider-wrapper">
                        <input class="input-ranges" data-slider-id='ex12cSlider' type="text" data-slider-tooltip="always" data-slider-step="1" data-slider-value="20, 90" data-slider-min="0" data-slider-max="100" data-slider-range="true" data-slider-tooltip_split="true" />
                    </span>
                </span>

                <span class="checkboxes">
                    <label>
                        <input type="checkbox" value="" checked>
                        Particulier
                    </label>
                </span>
                <span class="checkboxes next">
                    <label>
                        <input type="checkbox" value="" checked>
                        Professionnel
                    </label>
                </span>

                <span class="myHouse-sort" id="myHouse-sort">
                    <span class="myHouse-sort-image">
                        <img src="{{ asset('images/residential/sort.svg') }}" alt="">
                    </span>
                    <span class="myHouse-sort-text">Tri</span>

                    <span class="myHouse-sort-dropdown" id="myHouse-sort-dropdown">
                        <span class="myHouse-sort-link">
                            <span class="one">
                                <input type="radio" id="test1" name="radio-group" checked>
                                <label for="test1">Date de mise en ligne</label>
                            </span>
                            <span class="one">
                                <input type="radio" id="test2" name="radio-group" >
                                <label for="test2">Date de mise à jour</label>
                            </span>
                            <span class="one">
                                <input type="radio" id="test3" name="radio-group" >
                                <label for="test3">Distance du centre-ville</label>
                            </span>
                            <span class="one">
                                <input type="radio" id="test4" name="radio-group" >
                                <label for="test4">Distance de mon lieu de recherche</label>
                            </span>
                            <span class="one">
                                <input type="radio" id="test5" name="radio-group" >
                                <label for="test5">Prix croissant</label>
                            </span>
                            <span class="one">
                                <input type="radio" id="test6" name="radio-group" >
                                <label for="test6">Prix décroissant</label>
                            </span>
                            <span class="one">
                                <input type="radio" id="test7" name="radio-group" >
                                <label for="test7">Surface croissante</label>
                            </span>
                            <span class="one">
                                <input type="radio" id="test8" name="radio-group" >
                                <label for="test8">Surface décroissante</label>
                            </span>
                        </span>
                    </span>

                </span>

                <span class="myHouse-search-input-2">
                    <input type="search" class="form-control" placeholder="Mots-clés">
                </span>

                <span class="myHouse-filters" id="myHouse-filters">
                    <span class="myHouse-filters-text">Critères</span>
                    <span class="dropdown-toggle myHouse-caret"></span>

                    <span class="myHouse-filters-dropdown" id="myHouse-filters-dropdown">

                        <span class="row">
                            <span class="col-md-4 log">
                                <span class="cover">
                                    <span class="dropdown-image-1">
                                        <img src="{{ asset('images/residential/room.svg') }}" alt="">
                                    </span>
                                    <span class="slider-wrapper green">
                                         <input id="input-range-check" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                    </span>
                                    <span class="text-bottom">Chambre à coucher</span>
                                </span>
                            </span>

                            <span class="col-md-4 log">
                                <span class="cover">
                                    <span class="dropdown-image-1">
                                        <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                    </span>
                                    <span class="log-content">
                                        <span class="log-content-check">
                                            <label>
                                                <input type="checkbox">
                                                Meublé
                                            </label>
                                        </span>
                                        <span class="log-content-check-1">
                                            <label>
                                                <input type="checkbox">
                                                Non meublé
                                            </label>
                                        </span>
                                    </span>
                                </span>
                            </span>

                            <span class="col-md-4 log mdr">
                                <span class="cover">
                                    <span class="dropdown-image-1">
                                        <img src="{{ asset('images/residential/bathroom.svg') }}" alt="">
                                    </span>
                                    <span class="slider-wrapper green">
                                         <input id="myHouse-range" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                    </span>
                                    <span class="text-bottom-1">Salle de bain</span>
                                </span>
                            </span>
                        </span>

                        <span class="row">
                            <span class="col-md-3 downtown">
                                <span class="sky">
                                    <span class="box"><input type="checkbox"></span>
                                    <span class="image-1">
                                        <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                    </span>
                                        <span class="text-bottoms">Longue durée</span>
                                </span>
                            </span>
                            <span class="col-md-3 downtown">
                                <span class="sky">
                                    <span class="box"><input type="checkbox"></span>
                                    <span class="image-2">
                                        <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                    </span>
                                    <span class="text-bottoms">Courte durée</span>
                                </span>
                            </span>
                            <span class="col-md-3 downtown">
                                <span class="sky">
                                    <span class="box"><input type="checkbox"></span>
                                    <span class="image-3">
                                        <img src="{{ asset('images/residential/friendship.svg') }}" alt="">
                                    </span>
                                    <span class="text-bottom">Colocation</span>
                                </span>
                            </span>
                            <span class="col-md-3 downtown">
                                <span class="sky">
                                    <span class="box"><input type="checkbox"></span>
                                    <span class="image-4">
                                        <img src="{{ asset('images/residential/student.svg') }}" alt="">
                                    </span>
                                    <span class="text-bottom">Etudiants</span>
                                </span>
                            </span>
                        </span>

                    </span>

                </span>

            </form>
        </div>
    </div>
</div>



<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>

<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('development/js/app.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>



<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</body>
</html>

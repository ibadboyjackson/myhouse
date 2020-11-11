<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> MyHouse </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('development/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>


<!-- NavBar -->

<nav class="navbar navbar-expand-lg navbar-light myHouse-navigation">
    <a class="navbar-brand myHouse-navigation-brand" href="/">
        <img src=" {{ asset('development/images/logo.svg') }} " alt="MyHouse-logo" class="myHouse-logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav flex-row ml-md-auto d-none d-md-flex" style="margin : 0 20px; position: relative">

        <div class="myHouse-buttons">
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

<!-- Body -->

<div class="wrap">
    <div class="container">
        <div class="col-md-12">
            <form action="#">
                <div class="form-group myHouse-search-first">
                    <input type="search" class="form-control myHouse-search-first-input" placeholder="Taper ici vos lieux de recherche : Casablanca, Maarif, Bd de Biarritz">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="section_one_p1">
    <div class="container-fluid">
        <div class="row myHouse-row-1">
            <div class="col-lg-4 col-md-4 col-sm-12 center-div">
                <span class="myHouse-button-transaction-1">
                    <a href="{{ route('residential') }}" class="myHouse-button-transaction-1-link-1">Location</a>
                </span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12  center-div">
                <span class="myHouse-button-transaction-2">
                    <a href="#" class="myHouse-button-transaction-2-link-1">Achat</a>
                </span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12  center-div">
                <span class="myHouse-button-transaction-3">
                    <a href="#" class="myHouse-button-transaction-2-link-1">échange</a>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="section_two_p1">
    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <p>MyHouse est un portail intelligent de géolocalisation immobilière pour l'ensemble des transactions des professionnels et des particuliers.
                    MyHouse embarque des outils exclusifs de marketing et de communication web et mobile.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section_three_p1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 center-div">
                <div class="myHouse-three">
                    <img src="{{ asset('development/images/1.png') }}" alt="" class="img-fluid myHouse-person-1">
                    <div class="head">
                        <h6>Gratuit entre particuliers</h6>
                        <p class="p-head">
                            Vous êtes un particulier et vous souhaitez vendre, louer ou échanger votre bien. Déposez votre annonce immobilière gratuitement et sans frais aucun sur MyHouse. Profitez d'outils innovants pour entrer en relation avec les personnes intéressées par votre offre. Ca coûte 0 DHS et ça le restera toujours ! Commencez l'expérience MyHouse...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 center-div">
                <img src="{{ asset('images/residential/person.svg') }}" alt="" class="img-fluid myHouse-person">
                <div class="head">
                    <h6>Service complet</h6>
                    <p class="p-head">
                        Pour les professionnels de l'immobilier et les particuliers MyHouse propose un service complet et adapté. Téléchargez photographies et vidéos de votre bien, mettez tous les atouts de votre côté pour accélérer votre transaction: messagerie live, outils statistiques, événementiels programmables en deux clics, e-marketing, et plus encore !
                    </p>
                </div>
            </div>
            <div class="col-lg-4 center-div">
                <img src="{{ asset('development/images/3.png') }}" alt="" class="img-fluid myHouse-person">
                <div class="head">
                    <h6>Simple et pratique</h6>
                    <p class="p-head">
                        Vous êtes un particulier et vous souhaitez vendre, louer ou échanger votre bien. Déposez votre annonce immobilière gratuitement et sans frais aucun sur MyHouse. Profitez d'outils innovants pour entrer en relation avec les personnes intéressées par votre offre. Ca coûte 0 DHS et ça le restera toujours ! Commencez l'expérience MyHouse...
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section_four_p1">
    <div class="row">
        <div class="col-md-12 center-div">
            <img src="{{ asset('development/images/bg_1.png') }}" alt="" class="img-fluid">
        </div>
    </div>
</div>

<div class="section_five_p1">
    <div class="section_six_p1">
        <div class="container-fluid">
            <div class="row myHouse-row-2">
                <div class="col-lg-6 center-div myHouse-div">
                    <p> Questions fréquentes ?</p>
                    <span class="myHouse-button-transaction-4">
                        <a href="#" class="myHouse-button-transaction-4-link-1">Faq</a>
                    </span>
                </div>
                <div class="col-lg-6 center-div myHouse-div">
                    <p>Question moins fréquentes ?</p>
                    <span class="myHouse-button-transaction-5">
                        <a href="#" class="myHouse-button-transaction-5-link-1">Contact</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section_seven_p1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 myHouse-hr">
                <div class="text-center myHouse-foot">
                    <h1> MyHouse </h1>
                </div>

                <p class="m-txt">By Geomark</p>

                <div class="txt-bottom">
                    <p>
                        Service Client: +212607440000 <br>
                        Du lundi au samedi, de 8h00 à 19h00.
                    </p>
                    <p>
                        Courriel: rp@myhouse.ma
                    </p>
                    <p>
                        Adresse postale: 265, Boulevard Zerktouni, <br>
                        Etage 9, N°92, Casablanca, Maroc.
                    </p>
                </div>

            </div>


            <div class="col-lg-8">
                <div class="txt-col-lg-8 text-center">
                    <h1>Plan du site</h1>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('development/js/app.js') }}"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</body>
</html>

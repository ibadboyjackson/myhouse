
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> MyHouse </title>

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('development/css/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('development/css/iosCheckbox.css') }} " />

    <!-- CDN LINK -->
    <link href='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('development/css/select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

@include('development.next.include.myhouseNav')

<div class="annonce">
    <div class="c-page">
        <div class="ca-page">
            <div class="ca-page-item">
                <div class="ca-page-item-first">
                    <div class="ca-page-item-first-img">
                        <img src="{{ asset('images/residential/building.svg') }}" alt="building" class="img-fluid">
                    </div>
                    <div class="ca-page-item-first-text">projet neuf</div>
                </div>
                <div class="pa-info">
                    <div class="pa-info-left">
                        Sauvegarder l'annonce <br>
                        et continuer plus tard
                    </div>
                    <div class="pa-info-right">
                        <input type="checkbox" class="ios">
                    </div>
                </div>
                <div class="pa-info-first">
                    <div class="pa-info-hr"></div>
                    <div class="pa-info-first-text">
                        Compte <span>abderazakjamo@hotmail.com</span>
                    </div>
                    <div class="pa-info-hr"></div>
                    <div class="pa-info-desc">
                        <div class="pa-info-desc-type-one">
                            <div class="pa-info-desc-type-one-left">Votre abonnement</div>
                            <div class="pa-info-desc-type-one-right">Pack 6</div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Annonces PROJET</div>
                            <div class="pa-info-desc-type-two-right">
                                <span class="text-red">1</span> /1
                            </div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Annonces BIEN IMMOBILIER</div>
                            <div class="pa-info-desc-type-two-right">
                                <span class="text-red">1</span> /200
                            </div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Vidéos HD</div>
                            <div class="pa-info-desc-type-two-right">
                                <span class="text-red">3</span> /10
                            </div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Photos</div>
                            <div class="pa-info-desc-type-two-right">
                                <span class="text-red">15</span> /100
                            </div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Push mobile</div>
                            <div class="pa-info-desc-type-two-right">
                                10
                            </div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Journées Portes Ouvertes</div>
                            <div class="pa-info-desc-type-two-right">
                                10
                            </div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Jeu Chasse au Trésor</div>
                            <div class="pa-info-desc-type-two-right">
                                10
                            </div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Repère map 2x plus grand</div>
                            <div class="pa-info-desc-type-two-right">
                                10x15 jours
                            </div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Repère map en couleur</div>
                            <div class="pa-info-desc-type-two-right">
                                10x15 jours
                            </div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Bannière 300 x 600 px page d'accueil</div>
                            <div class="pa-info-desc-type-two-right">
                                10x 3 jours
                            </div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Bannière 300 x 600 px page LISTE</div>
                            <div class="pa-info-desc-type-two-right">
                                10x 3 jours
                            </div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Rectangle 336 x 280 px page d'accueil</div>
                            <div class="pa-info-desc-type-two-right">
                                10x 3 jours
                            </div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Rectangle 336 x 280 px page LISTE</div>
                            <div class="pa-info-desc-type-two-right">
                                10x 3 jours
                            </div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Bannière 970 x 90 px page d'accueil</div>
                            <div class="pa-info-desc-type-two-right">
                                10x 3 jours
                            </div>
                        </div>
                    </div>
                    <div class="pa-info-hr"></div>
                    <div class="pa-info-desc">
                        <div class="pa-info-desc-type-one">
                            <div class="pa-info-desc-type-one-left">Projet en cours de publication</div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left"> <span class="text-green">Projet</span> Les Jardins de l'Andalousie et de Grenade</div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left"> <span class="text-green">Entreprise</span> Benchekroun Immobilier Palmeraie</div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left"> <span class="text-green">Email</span> benchekrounimmobilier@palmeraie.com</div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">
                                <span class="text-green">Téléphone(s)</span> 21266778899, 212522343434, 21267889978
                            </div>
                        </div>
                    </div>
                    <div class="pa-info-hr"></div>
                </div>
            </div>
            <div class="ca-page-item">
                <div class="ca-page-item-second">
                    <div class="ca-page-item-second-title">
                        <span class="ca-page-item-second-title-first">VOTRE ANNONCE</span>
                        <span class="ca-page-item-second-title-second">PROJET NEUF</span>
                    </div>
                    <div class="ca-page-item-second-round">
                        <div class="ca-page-hr"></div>
                        <div class="ca-page-item-second-round-block">
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">1</div>
                                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Connexion</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">2</div>
                                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Abonnement</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">3</div>
                                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Enregistrement</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">4</div>
                                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Description</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">5</div>
                                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Critères</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">6</div>
                                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Annonce <br> PROJET</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle rounded-circle ca-page-bg-active">7</div>
                                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Médias</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">8</div>
                                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Localisation</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">9</div>
                                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Annonces <br> BIEN</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle">10</div>
                                <div class="ca-page-item-second-round-block-rounded-text">Paiement</div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('last.payment') }}" method="get">
                        <div class="ca-page-item-third-connexion">
                            <div class="ca-page-item-third-connexion-box">

                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                    Annonce bien immobilier
                                </div>
                                <div class="ca-page-item-third-connexion-box-title-hr"></div>
                            </div>
                        </div>
                        <div class="ca-page-item-third-with-body">
                            <div class="ca-page-item-third-with-body-head">
                                <div class="ca-page-item-third-with-body-head-title">Sélectionnez un type de bien</div>

                                <div class="ca-page-item-third-with-body-head-box">


                                    <div class="ca-page-item-third-with-body-head-box-item" id = "appartement">
                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                            <span class="ca-page-item-third-with-body-head-box-item-box-span bien-actif" id = "appa"></span>
                                        </div>
                                        <div class="ca-page-item-third-with-body-head-box-item-text">Appartement</div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-head-box-item" id = "villa">
                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                            <span class="ca-page-item-third-with-body-head-box-item-box-span" id = "vil"></span>
                                        </div>
                                        <div class="ca-page-item-third-with-body-head-box-item-text">Villa</div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-head-box-item" id = "maison">
                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                            <span class="ca-page-item-third-with-body-head-box-item-box-span" id = "mai"></span>
                                        </div>
                                        <div class="ca-page-item-third-with-body-head-box-item-text">Maison</div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-head-box-item" id = "riad">
                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                            <span class="ca-page-item-third-with-body-head-box-item-box-span" id = "ria"></span>
                                        </div>
                                        <div class="ca-page-item-third-with-body-head-box-item-text">Riad</div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-head-box-item" id = "bureau">
                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                            <span class="ca-page-item-third-with-body-head-box-item-box-span" id = "bur"></span>
                                        </div>
                                        <div class="ca-page-item-third-with-body-head-box-item-text">Bureau</div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-head-box-item" id = "plateau">
                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                            <span class="ca-page-item-third-with-body-head-box-item-box-span " id = "plat"></span>
                                        </div>
                                        <div class="ca-page-item-third-with-body-head-box-item-text">Plateau</div>
                                    </div>

                                    <!-- Second zone -->

                                    <!--
                                    <div class="ca-page-item-third-with-body-head-box-item" id = "chalet">
                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                            <span class="ca-page-item-third-with-body-head-box-item-box-span " id = "cha"></span>
                                        </div>
                                        <div class="ca-page-item-third-with-body-head-box-item-text">Cabanon/Chalet</div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-head-box-item" id = "commerce">
                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                            <span class="ca-page-item-third-with-body-head-box-item-box-span " id = "com"></span>
                                        </div>
                                        <div class="ca-page-item-third-with-body-head-box-item-text">Commerce</div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-head-box-item" id = "residentiel">
                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                            <span class="ca-page-item-third-with-body-head-box-item-box-span " id = "res"></span>
                                        </div>
                                        <div class="ca-page-item-third-with-body-head-box-item-text">Résidentiel</div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-head-box-item" id = "commercial">
                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                            <span class="ca-page-item-third-with-body-head-box-item-box-span " id = "comm"></span>
                                        </div>
                                        <div class="ca-page-item-third-with-body-head-box-item-text">Commercial</div>
                                    </div> -->



                                </div>

                                <div class="ca-page-item-third-with-body-head-box-hr"></div>
                            </div>

                            <div class="ca-page-item-third-with-body-content">

                                <!-- Appartement -->
                                   <div id = "the-appartement" class="musts-change must-change-show">

                                        <div class="ca-page-item-third-with-body-content-price-box">
                                            <div class="ca-page-item-third-with-body-content-price-box-title">Prix de vente du bien</div>
                                            <div class="ca-page-item-third-with-body-content-price">
                                                <div class="ca-page-item-third-with-body-content-price-item">
                                                    <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                                </div>
                                                <div class="ca-page-item-third-with-body-content-price-item">
                                                    <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                                </div>
                                                <div class="ca-page-item-third-with-body-content-price-item">
                                                    <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                                </div>
                                                <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                    MAD
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-with-body-content-right">

                                            <div class="ca-page-item-second-body-card">
                                                <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border ">
                                                    <div class="ca-page-item-second-body-card-item-head">
                                                        <div class="ca-page-item-second-body-card-item-head-img">
                                                            <img src="{{ asset('images/residential/ic.svg') }}" alt="">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-head-text text-uppercase">global</div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body">
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">Livraison immediate</option>
                                                                <option value="#">Livraison immediate</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <input type="text" class="form-control yt-input" placeholder="Surface habitable_____m2">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#"> Sur un niveau</option>
                                                                <option value="#">Sur un niveau</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">Situé au 2e étage</option>
                                                                <option value="#">Situé au 2e étage</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border-tbt">
                                                    <div class="ca-page-item-second-body-card-item-head">
                                                        <div class="ca-page-item-second-body-card-item-head-img">
                                                            <img src="{{ asset('images/residential/it.svg') }}" alt="">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-head-text text-uppercase">intérieur</div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body">
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">Cuisine américaine</option>
                                                                <option value="#">Cuisine américaine</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Cuisine équipée
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">2 chambres</option>
                                                                <option value="#">2 chambres</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Dressing
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">2 salle(s) de bain</option>
                                                                <option value="#">2 salle(s) de bain</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">2 salon (s)</option>
                                                                <option value="#">2 salon (s)</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Terrasse(s)
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Jardin privatif
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Cour/Patio
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Buanderie
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Cheminée
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Climatisation
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Chauffe-eau
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ca-page-item-third-type-boxe">
                                                <div class="ca-page-item-third-type-boxe-upload">
                                                    <div class="upload-img text-center">
                                                        <label for="file-upload" class="custom-file-upload">
                                                            <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                        </label>
                                                        <input id="file-upload" type="file">
                                                        <div class="upload-text">ENVOYER Médias</div>
                                                        <div class="up-text">Télécharger 1 fichier à la fois</div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="ca-page-item-third-type-boxe-upload-results">

                                                <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                                <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                                <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                                <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                                <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                                <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                                <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                                <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            </div>



                                        </div>
                                        <div class="ca-page-item-second-subscription">
                                            <div class="ca-page-item-second-body">
                                                <div class="ca-page-item-second-body-annonce-box">
                                                    <textarea cols="30" rows="17" class="form-control" placeholder="Tapez votre texte"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pc-checkbox">
                                            <input type="checkbox" name="#" id="publish">
                                            <label for="publish">
                                                Publier cette annonce dans le portail PARTICULIERS
                                            </label>
                                        </div>

                                    </div>
                                <!-- End Appartement -->

                                <!-- Villa -->
                                <div id = "the-villa" class="musts-change">

                                    <div class="ca-page-item-third-with-body-content-price-box">
                                        <div class="ca-page-item-third-with-body-content-price-box-title">Prix de vente du bien</div>
                                        <div class="ca-page-item-third-with-body-content-price">
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                MAD
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-content-right">

                                        <div class="ca-page-item-second-body-card">
                                            <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border">
                                                <div class="ca-page-item-second-body-card-item-head">
                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                        <img src="{{ asset('images/residential/single/v4.svg') }}" alt="" width="32" height="32">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">global</div>
                                                </div>
                                                <div class="ca-page-item-second-body-card-item-body">
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Sur plan</option>
                                                            <option value="#">Sur plan</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <input type="text" class="form-control yt-input" placeholder="Surface habitable_____m2">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <input type="text" class="form-control yt-input" placeholder="Superficie terrain  _____m2">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#"> R+1+Sous-sol</option>
                                                            <option value="#">R+1+Sous-sol</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Jumelée</option>
                                                            <option value="#">Jumelée</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border-tbt ">
                                                <div class="ca-page-item-second-body-card-item-head">
                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                        <img src="{{ asset('images/residential/single/ii.svg') }}" alt="" width="32" height="32">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">intérieur</div>
                                                </div>
                                                <div class="ca-page-item-second-body-card-item-body">
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Cuisine américaine</option>
                                                            <option value="#">Cuisine américaine</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cuisine équipée
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2 chambres</option>
                                                            <option value="#">2 chambres</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Dressing
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2 salle(s) de bain</option>
                                                            <option value="#">2 salle(s) de bain</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2 salon (s)</option>
                                                            <option value="#">2 salon (s)</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Terrasse(s)
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Piscine
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cour/Patio
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Buanderie
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cheminée
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Climatisation
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Chauffage
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Jaccuzi
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Hamam beldi
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cave
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Chauffe-eau
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ca-page-item-third-type-boxe">
                                            <div class="ca-page-item-third-type-boxe-upload">
                                                <div class="upload-img text-center">
                                                    <label for="file-upload" class="custom-file-upload">
                                                        <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                    </label>
                                                    <input id="file-upload" type="file">
                                                    <div class="upload-text">ENVOYER Médias</div>
                                                    <div class="up-text">Télécharger 1 fichier à la fois</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-type-boxe-upload-results">

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                        </div>



                                    </div>
                                    <div class="ca-page-item-second-subscription">
                                        <div class="ca-page-item-second-body">
                                            <div class="ca-page-item-second-body-annonce-box">
                                                <textarea cols="30" rows="17" class="form-control" placeholder="Tapez votre texte"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pc-checkbox">
                                        <input type="checkbox" name="#" id="publish">
                                        <label for="publish">
                                            Publier cette annonce dans le portail PARTICULIERS
                                        </label>
                                    </div>

                                </div>
                                <!-- End Villa -->

                                <!-- Maison -->
                                <div id = "the-maison" class="musts-change">

                                    <div class="ca-page-item-third-with-body-content-price-box">
                                        <div class="ca-page-item-third-with-body-content-price-box-title">Prix de vente du bien</div>
                                        <div class="ca-page-item-third-with-body-content-price">
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                MAD
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-content-right">

                                        <div class="ca-page-item-second-body-card">
                                            <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border">
                                                <div class="ca-page-item-second-body-card-item-head">
                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                        <img src="{{ asset('images/residential/single/m4.svg') }}" alt="" width="32" height="32">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">global</div>
                                                </div>
                                                <div class="ca-page-item-second-body-card-item-body">
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Sur plan</option>
                                                            <option value="#">Sur plan</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <input type="text" class="form-control yt-input" placeholder="Surface terrain  _____m2">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <input type="text" class="form-control yt-input" placeholder="Surface habitable_____m2">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#"> Aménagement R+2</option>
                                                            <option value="#">Aménagement R+2</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border-tbt">
                                                <div class="ca-page-item-second-body-card-item-head">
                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                        <img src="{{ asset('images/residential/single/ii.svg') }}" alt="" width="32" height="32">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">intérieur</div>
                                                </div>
                                                <div class="ca-page-item-second-body-card-item-body">
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Cuisine américaine</option>
                                                            <option value="#">Cuisine américaine</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cuisine équipée
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2 chambres</option>
                                                            <option value="#">2 chambres</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Dressing
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2 salle(s) de bain</option>
                                                            <option value="#">2 salle(s) de bain</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2 salon (s)</option>
                                                            <option value="#">2 salon (s)</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Terrasse(s)
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Jardin privatif
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cour/Patio
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Buanderie
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cheminée
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Climatisation
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Chauffage
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Chauffe-eau
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cave
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ca-page-item-third-type-boxe">
                                            <div class="ca-page-item-third-type-boxe-upload">
                                                <div class="upload-img text-center">
                                                    <label for="file-upload" class="custom-file-upload">
                                                        <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                    </label>
                                                    <input id="file-upload" type="file">
                                                    <div class="upload-text">ENVOYER Médias</div>
                                                    <div class="up-text">Télécharger 1 fichier à la fois</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-type-boxe-upload-results">

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                        </div>



                                    </div>
                                    <div class="ca-page-item-second-subscription">
                                        <div class="ca-page-item-second-body">
                                            <div class="ca-page-item-second-body-annonce-box">
                                                <textarea cols="30" rows="17" class="form-control" placeholder="Tapez votre texte"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pc-checkbox">
                                        <input type="checkbox" name="#" id="publish">
                                        <label for="publish">
                                            Publier cette annonce dans le portail PARTICULIERS
                                        </label>
                                    </div>

                                </div>

                                <!-- End Maison -->

                                <!-- Bureau -->
                                <div id = "the-bureau" class="musts-change">

                                    <div class="ca-page-item-third-with-body-content-price-box">
                                        <div class="ca-page-item-third-with-body-content-price-box-title">Prix de vente du bien</div>
                                        <div class="ca-page-item-third-with-body-content-price">
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                MAD
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-content-right">

                                        <div class="ca-page-item-second-body-card">
                                            <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border">
                                                <div class="ca-page-item-second-body-card-item-head">
                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                        <img src="{{ asset('images/residential/single/g7.svg') }}" alt="" width="32" height="32">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">global</div>
                                                </div>
                                                <div class="ca-page-item-second-body-card-item-body">
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2ème main</option>
                                                            <option value="#">2ème main</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <input type="text" class="form-control yt-input" placeholder="Surface______m2">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Implanté dans un(e) Centre d'affaires</option>
                                                            <option value="#">Implanté dans un(e) Centre d'affaires</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Situé aux 2e/3e étages</option>
                                                            <option value="#">Situé aux 2e/3e étages</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">7 étage(s) par immeuble</option>
                                                            <option value="#">7 étage(s) par immeuble</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border-tbt">
                                                <div class="ca-page-item-second-body-card-item-head">
                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                        <img src="{{ asset('images/residential/single/i1.svg') }}" alt="" width="32" height="32">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">intérieur</div>
                                                </div>
                                                <div class="ca-page-item-second-body-card-item-body">
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Nombre de pièce(s) 12</option>
                                                            <option value="#">Nombre de pièce(s) 12</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <input type="text" class="form-control yt-input" placeholder="Hauteur sous plafond__m²">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Internet
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                WC/Sanitaires
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Chauffe-eau
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Balcon(s)
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Coin cuisine
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cour/Patio
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Climatisation
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Chauffage
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ca-page-item-third-type-boxe">
                                            <div class="ca-page-item-third-type-boxe-upload">
                                                <div class="upload-img text-center">
                                                    <label for="file-upload" class="custom-file-upload">
                                                        <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                    </label>
                                                    <input id="file-upload" type="file">
                                                    <div class="upload-text">ENVOYER Médias</div>
                                                    <div class="up-text">Télécharger 1 fichier à la fois</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-type-boxe-upload-results">

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                        </div>



                                    </div>
                                    <div class="ca-page-item-second-subscription">
                                        <div class="ca-page-item-second-body">
                                            <div class="ca-page-item-second-body-annonce-box">
                                                <textarea cols="30" rows="17" class="form-control" placeholder="Tapez votre texte"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pc-checkbox">
                                        <input type="checkbox" name="#" id="publish">
                                        <label for="publish">
                                            Publier cette annonce dans le portail PARTICULIERS
                                        </label>
                                    </div>

                                </div>
                                <!-- End Bureau -->

                                <!-- Plateau -->
                                <div id = "the-plateau" class="musts-change">

                                    <div class="ca-page-item-third-with-body-content-price-box">
                                        <div class="ca-page-item-third-with-body-content-price-box-title">Prix de vente du bien</div>
                                        <div class="ca-page-item-third-with-body-content-price">
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                MAD
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-content-right">

                                        <div class="ca-page-item-second-body-card">
                                            <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border">
                                                <div class="ca-page-item-second-body-card-item-head">
                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                        <img src="{{ asset('images/residential/single/g7.svg') }}" alt="" width="32" height="32">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">global</div>
                                                </div>
                                                <div class="ca-page-item-second-body-card-item-body">
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2ème main</option>
                                                            <option value="#">2ème main</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <input type="text" class="form-control yt-input" placeholder="Surface______m²">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Implanté dans un(e) IT space</option>
                                                            <option value="#">Implanté dans un(e) IT space</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Situé au RDC</option>
                                                            <option value="#">Situé au RDC</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">7 étage(s) par immeuble</option>
                                                            <option value="#">7 étage(s) par immeuble</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Coworking
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Domiciliation
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border-tbt">
                                                <div class="ca-page-item-second-body-card-item-head">
                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                        <img src="{{ asset('images/residential/single/i1.svg') }}" alt="" width="32" height="32">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">intérieur</div>
                                                </div>
                                                <div class="ca-page-item-second-body-card-item-body">
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Open space
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Nombre de box 12</option>
                                                            <option value="#">Nombre de box 12</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Salle de réunion  2</option>
                                                            <option value="#">Salle de réunion  2</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <input type="text" class="form-control yt-input" placeholder="Hauteur sous plafond__m²">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Internet
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                WC/Sanitaires
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Chauffe-eau
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Balcon(s)
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Coin cuisine
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cour/Patio
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Climatisation
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Chauffage
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ca-page-item-third-type-boxe">
                                            <div class="ca-page-item-third-type-boxe-upload">
                                                <div class="upload-img text-center">
                                                    <label for="file-upload" class="custom-file-upload">
                                                        <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                    </label>
                                                    <input id="file-upload" type="file">
                                                    <div class="upload-text">ENVOYER Médias</div>
                                                    <div class="up-text">Télécharger 1 fichier à la fois</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-type-boxe-upload-results">

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                        </div>



                                    </div>
                                    <div class="ca-page-item-second-subscription">
                                        <div class="ca-page-item-second-body">
                                            <div class="ca-page-item-second-body-annonce-box">
                                                <textarea cols="30" rows="17" class="form-control" placeholder="Tapez votre texte"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pc-checkbox">
                                        <input type="checkbox" name="#" id="publish">
                                        <label for="publish">
                                            Publier cette annonce dans le portail PARTICULIERS
                                        </label>
                                    </div>

                                </div>
                                <!-- End Plateau -->

                                <!-- Riad -->
                                <div id = "the-riad" class="musts-change">

                                    <div class="ca-page-item-third-with-body-content-price-box">
                                        <div class="ca-page-item-third-with-body-content-price-box-title">Prix de vente du bien</div>
                                        <div class="ca-page-item-third-with-body-content-price">
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                MAD
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-content-right">

                                        <div class="ca-page-item-second-body-card">
                                            <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border">
                                                <div class="ca-page-item-second-body-card-item-head">
                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                        <img src="{{ asset('images/residential/single/r4.svg') }}" alt="" width="32" height="32">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">global</div>
                                                </div>
                                                <div class="ca-page-item-second-body-card-item-body">
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">En Construction</option>
                                                            <option value="#">En Construction</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <input type="text" class="form-control yt-input" placeholder="Surface habitable_____m2">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#"> R+1</option>
                                                            <option value="#">R+1</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border-tbt">
                                                <div class="ca-page-item-second-body-card-item-head">
                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                        <img src="{{ asset('images/residential/single/ii.svg') }}" alt="" width="32" height="32">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">intérieur</div>
                                                </div>
                                                <div class="ca-page-item-second-body-card-item-body">
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Cuisine américaine</option>
                                                            <option value="#">Cuisine américaine</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cuisine équipée
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2 chambres</option>
                                                            <option value="#">2 chambres</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Dressing
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2 salle(s) de bain</option>
                                                            <option value="#">2 salle(s) de bain</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2 salon (s)</option>
                                                            <option value="#">2 salon (s)</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Terrasse(s)
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Jardin privatif
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cour/Patio
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Buanderie
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cheminée
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Climatisation
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Chauffe-eau
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ca-page-item-third-type-boxe">
                                            <div class="ca-page-item-third-type-boxe-upload">
                                                <div class="upload-img text-center">
                                                    <label for="file-upload" class="custom-file-upload">
                                                        <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                    </label>
                                                    <input id="file-upload" type="file">
                                                    <div class="upload-text">ENVOYER Médias</div>
                                                    <div class="up-text">Télécharger 1 fichier à la fois</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-type-boxe-upload-results">

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                        </div>



                                    </div>
                                    <div class="ca-page-item-second-subscription">
                                        <div class="ca-page-item-second-body">
                                            <div class="ca-page-item-second-body-annonce-box">
                                                <textarea cols="30" rows="17" class="form-control" placeholder="Tapez votre texte"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pc-checkbox">
                                        <input type="checkbox" name="#" id="publish">
                                        <label for="publish">
                                            Publier cette annonce dans le portail PARTICULIERS
                                        </label>
                                    </div>

                                </div>
                                <!-- End Riad -->


























                                <!-- Chalet -->
                                <div id = "the-chalet" class="musts-change">

                                    <div class="ca-page-item-third-with-body-content-price-box">
                                        <div class="ca-page-item-third-with-body-content-price-box-title">Prix de vente du bien</div>
                                        <div class="ca-page-item-third-with-body-content-price">
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                MAD
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-content-right">

                                        <div class="ca-page-item-second-body-card">
                                            <div class="ca-page-item-second-body-card-item">
                                                <div class="ca-page-item-second-body-card-item-head">
                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                        <img src="{{ asset('images/residential/single/ch4.svg') }}" alt="" width="32" height="32">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">global</div>
                                                </div>
                                                <div class="ca-page-item-second-body-card-item-body">
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Neuf</option>
                                                            <option value="#">Neuf</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <input type="text" class="form-control yt-input" placeholder="Surface habitable_____m2">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <input type="text" class="form-control yt-input" placeholder="Superficie terrain  _____m2">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#"> R+1</option>
                                                            <option value="#">R+1</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#"> En bois</option>
                                                            <option value="#">En bois</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item">
                                                <div class="ca-page-item-second-body-card-item-head">
                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                        <img src="{{ asset('images/residential/single/ii.svg') }}" alt="" width="32" height="32">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">intérieur</div>
                                                </div>
                                                <div class="ca-page-item-second-body-card-item-body">
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">Cuisine américaine</option>
                                                            <option value="#">Cuisine américaine</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cuisine équipée
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2 chambres</option>
                                                            <option value="#">2 chambres</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Dressing
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2 salle(s) de bain</option>
                                                            <option value="#">2 salle(s) de bain</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <select name="#" id="" class="form-control yt-select">
                                                            <option value="#">2 salon (s)</option>
                                                            <option value="#">2 salon (s)</option>
                                                        </select>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Terrasse(s)
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cour/Patio
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Buanderie
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cheminée
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Climatisation
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Chauffage
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Chauffe-eau
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                Cave
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                <input type="checkbox" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ca-page-item-third-type-boxe">
                                            <div class="ca-page-item-third-type-boxe-upload">
                                                <div class="upload-img text-center">
                                                    <label for="file-upload" class="custom-file-upload">
                                                        <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                    </label>
                                                    <input id="file-upload" type="file">
                                                    <div class="upload-text">ENVOYER Médias</div>
                                                    <div class="up-text">Télécharger 1 fichier à la fois</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-type-boxe-upload-results">

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                        </div>



                                    </div>
                                    <div class="ca-page-item-second-subscription">
                                        <div class="ca-page-item-second-body">
                                            <div class="ca-page-item-second-body-annonce-box">
                                                <textarea cols="30" rows="17" class="form-control" placeholder="Tapez votre texte"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pc-checkbox">
                                        <input type="checkbox" name="#" id="publish">
                                        <label for="publish">
                                            Publier cette annonce dans le portail PARTICULIERS
                                        </label>
                                    </div>

                                </div>
                                <!-- End Chalet -->

                                <!-- Commerce -->
                                <div id = "the-commerce" class="musts-change">

                                    <div class="ca-page-item-third-with-body-content-price-box">
                                        <div class="ca-page-item-third-with-body-content-price-box-title">Prix de vente du bien</div>
                                        <div class="ca-page-item-third-with-body-content-price">
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                MAD
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-content-right">

                                        <div class="must-use-one">
                                            <div class="ca-page-item-second-body-card">
                                                <div class="ca-page-item-second-body-card-item">
                                                    <div class="ca-page-item-second-body-card-item-head">
                                                        <div class="ca-page-item-second-body-card-item-head-img">
                                                            <img src="{{ asset('images/residential/single/g6.svg') }}" alt="" width="32" height="32">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-head-text text-uppercase">global</div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body">
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">2ème main</option>
                                                                <option value="#">2ème main</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">Sans fonds de commerce</option>
                                                                <option value="#">Sans fonds de commerce</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <input type="text" class="form-control yt-input" placeholder="Surface totale _____m2">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Sous-pente ___m2
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Terrasse___m2
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">Nombre de pièce(s) 3</option>
                                                                <option value="#">Nombre de pièce(s) 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <input type="text" class="form-control yt-input" placeholder="Longueur façade___m2">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <input type="text" class="form-control yt-input" placeholder="Hauteur plafond____m2">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">Implanté dans un(e) Centre commercial</option>
                                                                <option value="#">Implanté dans un(e) Centre commercial</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">Situé au 1er étage</option>
                                                                <option value="#">Situé au 1er étage</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Angle de rue
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    WC/Sanitaires
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">5 Place(s) véhicule</option>
                                                                <option value="#">5 Place(s) véhicule</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Mezzanine
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Alarme
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ca-page-item-third-type-boxe">
                                            <div class="ca-page-item-third-type-boxe-upload">
                                                <div class="upload-img text-center">
                                                    <label for="file-upload" class="custom-file-upload">
                                                        <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                    </label>
                                                    <input id="file-upload" type="file">
                                                    <div class="upload-text">ENVOYER Médias</div>
                                                    <div class="up-text">Télécharger 1 fichier à la fois</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-type-boxe-upload-results">

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                        </div>



                                    </div>
                                    <div class="ca-page-item-second-subscription">
                                        <div class="ca-page-item-second-body">
                                            <div class="ca-page-item-second-body-annonce-box">
                                                <textarea cols="30" rows="17" class="form-control" placeholder="Tapez votre texte"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pc-checkbox">
                                        <input type="checkbox" name="#" id="publish">
                                        <label for="publish">
                                            Publier cette annonce dans le portail PARTICULIERS
                                        </label>
                                    </div>

                                </div>
                                <!-- End Commerce -->

                                <!-- Commercial -->
                                <div id = "the-commercial" class="musts-change">

                                    <div class="ca-page-item-third-with-body-content-price-box">
                                        <div class="ca-page-item-third-with-body-content-price-box-title">Prix de vente du bien</div>
                                        <div class="ca-page-item-third-with-body-content-price">
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                MAD
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-content-right">

                                        <div class="must-use-one">
                                            <div class="ca-page-item-second-body-card">
                                                <div class="ca-page-item-second-body-card-item">
                                                    <div class="ca-page-item-second-body-card-item-head">
                                                        <div class="ca-page-item-second-body-card-item-head-img">
                                                            <img src="{{ asset('images/residential/single/gg2.svg') }}" alt="" width="32" height="32">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-head-text text-uppercase">global</div>
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body">
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <input type="text" class="form-control yt-input" placeholder="Superficie terrain ____m2">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">Implanté en zone franche</option>
                                                                <option value="#">Implanté en zone franche</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <select name="#" id="" class="form-control yt-select">
                                                                <option value="#">Terrain prêt à bâtir</option>
                                                                <option value="#">Terrain prêt à bâtir</option>
                                                            </select>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Assainissement
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Raccordement
                                                                    eau
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Puits
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Raccordement
                                                                    électricité
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                    Raccordement
                                                                    téléphone
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ca-page-item-third-type-boxe">
                                            <div class="ca-page-item-third-type-boxe-upload">
                                                <div class="upload-img text-center">
                                                    <label for="file-upload" class="custom-file-upload">
                                                        <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                    </label>
                                                    <input id="file-upload" type="file">
                                                    <div class="upload-text">ENVOYER Médias</div>
                                                    <div class="up-text">Télécharger 1 fichier à la fois</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-type-boxe-upload-results">

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                        </div>



                                    </div>
                                    <div class="ca-page-item-second-subscription">
                                        <div class="ca-page-item-second-body">
                                            <div class="ca-page-item-second-body-annonce-box">
                                                <textarea cols="30" rows="17" class="form-control" placeholder="Tapez votre texte"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pc-checkbox">
                                        <input type="checkbox" name="#" id="publish">
                                        <label for="publish">
                                            Publier cette annonce dans le portail PARTICULIERS
                                        </label>
                                    </div>

                                </div>

                                <!-- End Commercial -->

                                <!-- Residentiel -->
                                <div id = "the-residentiel" class="musts-change">

                                    <div class="ca-page-item-third-with-body-content-price-box">
                                        <div class="ca-page-item-third-with-body-content-price-box-title">Prix de vente du bien</div>
                                        <div class="ca-page-item-third-with-body-content-price">
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item">
                                                <input type="text" name="#" id="#" class="form-control" placeholder="000.">
                                            </div>
                                            <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                MAD
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-third-with-body-content-right">

                                            <div class="must-use-one">
                                                <div class="ca-page-item-second-body-card">
                                                    <div class="ca-page-item-second-body-card-item">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="{{ asset('images/residential/single/gg2.svg') }}" alt="" width="32" height="32">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text text-uppercase">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Superficie terrain ____m2">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Titre foncier</option>
                                                                    <option value="#">Titre foncier</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">En lotissement</option>
                                                                    <option value="#">En lotissement</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Assainissement
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Raccordement
                                                                        eau
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Puits
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Raccordement
                                                                        électricité
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Raccordement
                                                                        téléphone
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <div class="ca-page-item-third-type-boxe">
                                            <div class="ca-page-item-third-type-boxe-upload">
                                                <div class="upload-img text-center">
                                                    <label for="file-upload" class="custom-file-upload">
                                                        <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                    </label>
                                                    <input id="file-upload" type="file">
                                                    <div class="upload-text">ENVOYER Médias</div>
                                                    <div class="up-text">Télécharger 1 fichier à la fois</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-type-boxe-upload-results">

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>
                                            <div class="ca-page-item-third-type-boxe-upload-results-item"></div>

                                        </div>



                                    </div>
                                    <div class="ca-page-item-second-subscription">
                                        <div class="ca-page-item-second-body">
                                            <div class="ca-page-item-second-body-annonce-box">
                                                <textarea cols="30" rows="17" class="form-control" placeholder="Tapez votre texte"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pc-checkbox">
                                        <input type="checkbox" name="#" id="publish">
                                        <label for="publish">
                                            Publier cette annonce dans le portail PARTICULIERS
                                        </label>
                                    </div>

                                </div>
                                <!-- End Residentiel -->

                            </div>

                        </div>



                        <div class="ca-page-item-second-footer">
                            <button class="btn btn-prev mr-2">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-connections" type="submit">terminer</button>
                            <button class="btn btn-connections" type="submit">ajouter une annonce</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="ca-page-item">
                <div class="ca-page-item-thirds cap-appartement" id = "cap">
                        <div class="ca-page-item-third-button-x clearfix">
                            <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                        </div>

                        <div class="ca-page-item-third-thumbs">
                            <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="ca-page-item-third-text pt-3 text-center">
                            Décrivez le bien
                        </div>

                        <div class="man1">
                            <div class="ca-page-item-third-thumb">
                                <img src="{{ asset('images/residential/single/man1.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="ca-page-item-third-text pt-3 text-center">
                                Téléchargez jusqu'à 10 <br>
                                photographies
                            </div>
                        </div>
                        <div class="man2">
                            <div class="ca-page-item-third-thumb">
                                <img src="{{ asset('images/residential/single/d2.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="ca-page-item-third-text pt-3 text-center">
                                Organisez, légendez les médias
                            </div>
                            <div class="ca-page-item-third-text-text">
                                Glissez pour modifier l'ordre de la grille, <br>
                                cliquez pour légender les médias
                            </div>
                        </div>
                        <div class="man3">
                            <div class="ca-page-item-third-thumb">
                                <img src="{{ asset('images/residential/single/d3.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="ca-page-item-third-text pt-3 text-center">
                                Rédigez la présentation du projet
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>
<script src="{{ asset('development/js/iosCheckbox.js') }} "></script>



<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<script src='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js'></script>
<script src="{{ asset('js/map.js') }}"></script>
</body>
</html>


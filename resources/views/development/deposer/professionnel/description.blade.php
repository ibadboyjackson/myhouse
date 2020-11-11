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
    <link rel="stylesheet" type="text/css" href="{{ asset('development/css/tabs.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset('development/css/tabstyles.css') }} " />

    <!-- CDN LINK -->
    <link href='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('development/css/select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

@include('development.next.include.myhouseNav')

@php
    $four = ['appartement', 'villa', 'maison', 'chalet', 'riad', 'ferme'];
    $three = ['bureau', 'plateau'];
    $two = ['agricole', 'residentiel', 'industriel', 'commercial', 'propriete_agricole'];
    $one = ['immeuble', 'local_industriel', 'garage', 'entrepot', 'local_commercial'];
@endphp



@if (in_array(request()->get('type'), $four))

    <div class="description-four">
        <div class="particuliers">
            <div class="c-page">
                <div class="ca-page">


                    <div class="ca-page-item">
                        <div class="ca-page-item-first">
                            <div class="ca-page-item-first-img">
                                <img src="{{ asset('images/residential/building.svg') }}" alt="building" class="img-fluid">
                            </div>
                            <div class="ca-page-item-first-text">PROfessionnels</div>
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
                                <span class="pa-info-desc-type-one-left">Compte</span>  <span>abderazakjamo@hotmail.com</span>
                            </div>
                            <div class="pa-info-hr"></div>
                            <div class="pa-info-desc">
                                <div class="pa-info-desc-type-one">
                                    <div class="pa-info-desc-type-one-left">Votre abonnement</div>
                                    <div class="pa-info-desc-type-one-right">Pack 6</div>
                                </div>

                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Annonces BIEN IMMOBILIER</div>
                                    <div class="pa-info-desc-type-two-right">
                                        200
                                    </div>
                                </div>
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Vidéos HD</div>
                                    <div class="pa-info-desc-type-two-right">
                                        10
                                    </div>
                                </div>
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Photos</div>
                                    <div class="pa-info-desc-type-two-right">
                                        100
                                    </div>
                                </div>
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Push mobile</div>
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
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left"> <span class="text-green">Entreprise</span> Benchekroun Immobilier Palmeraie</div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="ca-page-item">
                        <div class="ca-page-item-second">
                            <div class="ca-page-item-second-title">
                                <span class="ca-page-item-second-title-first">VOTRE ANNONCE</span>
                                <span class="ca-page-item-second-title-second text-uppercase">PROfessionnels</span>
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
                                        <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Transaction</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">5</div>
                                        <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Type de bien</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">6</div>
                                        <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Critères du <br> bien</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">7</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Texte de présentation</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">8</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Médias</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">9</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Localisation</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">10</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Paiement</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ca-page-item-third-connexion">
                                <form action="{{ route('professionnel.annonce') }}" method="get">
                                @csrf

                                <!-- Must change -->

                                    @if (request()->get('type') === 'appartement')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ic.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Surface habitable___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Sur un niveau</option>
                                                                    <option value="#">Sur un niveau</option>
                                                                    <option value="#">Sur un niveau</option>
                                                                    <option value="#">Sur un niveau</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Situé au 2e étage</option>
                                                                    <option value="#">Situé au 2e étage</option>
                                                                    <option value="#">Situé au 2e étage</option>
                                                                    <option value="#">Situé au 2e étage</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">3 appart(s) par étage</option>
                                                                    <option value="#">3 appart(s) par étage</option>
                                                                    <option value="#">3 appart(s) par étage</option>
                                                                    <option value="#">3 appart(s) par étage</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">7 étage(s) par immeuble</option>
                                                                    <option value="#">7 étage(s) par immeuble</option>
                                                                    <option value="#">7 étage(s) par immeuble</option>
                                                                    <option value="#">7 étage(s) par immeuble</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">intérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Cuisine américaine</option>
                                                                    <option value="#">Cuisine américaine</option>
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">2 chambres</option>
                                                                    <option value="#">2 chambres</option>
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                    <option value="#">2 salon(s)</option>
                                                                    <option value="#">2 salon(s)</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Terrasse(s)
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Jardin privatif
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cour/Patio
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Buanderie
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cheminée
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Climatisation
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffe-eau
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/it.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">extérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Espaces verts
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Gardiennage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">1 place(s) véhicule</option>
                                                                    <option value="#">1 place(s) véhicule</option>
                                                                </select>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Box
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Piscine
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Terrains de sport
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Salle de fitness
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Spa
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Supérette
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        École
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Mosquée
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Shopping
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Restaurant/Café
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Service Ménage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Aire De Jeux
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Interphone
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">

                                                        <div class="ca-page-item-second-body-card-item-heads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ip.svg" alt="" height="50" width="50">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">proche de...</div>
                                                        </div>

                                                        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Plage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">100m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Campagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Montagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">700m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Désert
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Spot surf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Golf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">2km</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Forêt
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Station ski
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">1.8km</option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (request()->get('type') === 'villa')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/v4.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Surface habitable___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Superficie terrain___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">R+1+Sous-sol</option>
                                                                    <option value="#">R+1+Sous-sol</option>
                                                                    <option value="#">R+1+Sous-sol</option>
                                                                    <option value="#">R+1+Sous-sol</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Jumelée</option>
                                                                    <option value="#">Jumelée</option>
                                                                    <option value="#">Jumelée</option>
                                                                    <option value="#">Jumelée</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">intérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Cuisine américaine</option>
                                                                    <option value="#">Cuisine américaine</option>
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">2 chambres</option>
                                                                    <option value="#">2 chambres</option>
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                    <option value="#">2 salon(s)</option>
                                                                    <option value="#">2 salon(s)</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Terrasse(s)
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Piscine
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cour/Patio
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Buanderie
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cheminée
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Climatisation
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Jaccuzi
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Hamam beldi
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cave
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffe-eau
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/it.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">extérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Espaces verts
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Gardiennage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">1 place(s) véhicule</option>
                                                                    <option value="#">1 place(s) véhicule</option>
                                                                </select>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Terrains de sport
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Service Ménage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Salle de fitness
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Spa
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Supérette
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        École
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Mosquée
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Shopping
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Restaurant/Café
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Aire de jeux
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Interphone
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">

                                                        <div class="ca-page-item-second-body-card-item-heads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ip.svg" alt="" height="50" width="50">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">proche de...</div>
                                                        </div>

                                                        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Plage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">100m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Campagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Montagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">700m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Désert
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Spot surf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Golf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">2km</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Forêt
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Station ski
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">1.8km</option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Étang/Rivière
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (request()->get('type') === 'maison')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/m4.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Surface habitable___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Superficie terrain___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Aménagement R+2</option>
                                                                    <option value="#">Aménagement R+2</option>
                                                                    <option value="#">Aménagement R+2</option>
                                                                    <option value="#">Aménagement R+2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">intérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Cuisine américaine</option>
                                                                    <option value="#">Cuisine américaine</option>
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">2 chambres</option>
                                                                    <option value="#">2 chambres</option>
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                    <option value="#">2 salon(s)</option>
                                                                    <option value="#">2 salon(s)</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Terrasse(s)
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Jardin privatif
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cour/Patio
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Buanderie
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cheminée
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Climatisation
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cave
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffe-eau
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/it.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">extérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">1 place(s) véhicule</option>
                                                                    <option value="#">1 place(s) véhicule</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Interphone
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">

                                                        <div class="ca-page-item-second-body-card-item-heads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ip.svg" alt="" height="50" width="50">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">proche de...</div>
                                                        </div>

                                                        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Plage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">100m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Campagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Montagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">700m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Désert
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Spot surf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Golf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">2km</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Forêt
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Station ski
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">1.8km</option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Étang/Rivière
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (request()->get('type') === 'chalet')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/ch4.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Surface habitable___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Superficie terrain___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">R+1</option>
                                                                    <option value="#">R+1</option>
                                                                    <option value="#">R+1</option>
                                                                    <option value="#">R+1</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">En bois</option>
                                                                    <option value="#">En bois</option>
                                                                    <option value="#">En bois</option>
                                                                    <option value="#">En bois</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">intérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Cuisine américaine</option>
                                                                    <option value="#">Cuisine américaine</option>
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">2 chambres</option>
                                                                    <option value="#">2 chambres</option>
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                    <option value="#">2 salon(s)</option>
                                                                    <option value="#">2 salon(s)</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Terrasse(s)
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cour/Patio
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Buanderie
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cheminée
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Climatisation
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cave
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffe-eau
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/it.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">extérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Espaces verts
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Gardiennage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">1 place(s) véhicule</option>
                                                                    <option value="#">1 place(s) véhicule</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Interphone
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">

                                                        <div class="ca-page-item-second-body-card-item-heads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ip.svg" alt="" height="50" width="50">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">proche de...</div>
                                                        </div>

                                                        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Plage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">100m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Campagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Montagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">700m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Désert
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Spot surf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Golf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">2km</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Forêt
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Station ski
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">1.8km</option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Étang/Rivière
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (request()->get('type') === 'riad')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/r4.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Surface habitable___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Superficie terrain___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">R+1</option>
                                                                    <option value="#">R+1</option>
                                                                    <option value="#">R+1</option>
                                                                    <option value="#">R+1</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">intérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Cuisine américaine</option>
                                                                    <option value="#">Cuisine américaine</option>
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">2 chambres</option>
                                                                    <option value="#">2 chambres</option>
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                    <option value="#">2 salon(s)</option>
                                                                    <option value="#">2 salon(s)</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Terrasse(s)
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Jardin privatif
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cour/Patio
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Buanderie
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cheminée
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Climatisation
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffe-eau
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/it.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">extérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Espaces verts
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Garage fermé 10 places</option>
                                                                    <option value="#">Garage fermé 10 places</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Interphone
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">

                                                        <div class="ca-page-item-second-body-card-item-heads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ip.svg" alt="" height="50" width="50">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">proche de...</div>
                                                        </div>

                                                        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Plage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">100m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Campagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Montagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">700m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Désert
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Spot surf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Golf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">2km</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Forêt
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Station ski
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">1.8km</option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Étang/Rivière
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (request()->get('type') === 'ferme')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/g2.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                    <option value="#">Livraison immediate</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Surface habitable___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Superficie terrain___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">R+1+Sous-sol</option>
                                                                    <option value="#">R+1+Sous-sol</option>
                                                                    <option value="#">R+1+Sous-sol</option>
                                                                    <option value="#">R+1+Sous-sol</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">intérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Cuisine américaine</option>
                                                                    <option value="#">Cuisine américaine</option>
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">2 chambres</option>
                                                                    <option value="#">2 chambres</option>
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                    <option value="#">2 salon(s)</option>
                                                                    <option value="#">2 salon(s)</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Terrasse(s)
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cour/Patio
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Buanderie
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cheminée
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Climatisation
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffe-eau
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Jaccuzi
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Hamam beldi
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cave
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/it.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">extérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Exploitation agricole
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Garage fermé 10 places</option>
                                                                    <option value="#">Garage fermé 10 places</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Piscine
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Interphone
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">

                                                        <div class="ca-page-item-second-body-card-item-heads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ip.svg" alt="" height="50" width="50">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">proche de...</div>
                                                        </div>

                                                        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Plage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">100m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Campagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Montagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">700m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Désert
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Spot surf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Golf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">2km</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Forêt
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Station ski
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">1.8km</option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Étang/Rivière
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (request()->get('type') === 'chambre')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/cha4.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Réception 24/24H
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Réservation sans pré-paiement
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/chambre.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">Chambre</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Petit-déj inclus
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- if wanted
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chambre familiale

                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">2 places</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            -->
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Wifi
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Télévision cablée
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chambre familiale
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chambre
                                                                        non-fumeur
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Service
                                                                        en chambre
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Ménage
                                                                        quotidien
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Animal de
                                                                        compagnie
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/it.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">extérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Espaces verts
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Parking gratuit
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Piscine
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Restauration
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cafétéria
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Blanchisserie
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Spa
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">

                                                        <div class="ca-page-item-second-body-card-item-heads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ip.svg" alt="" height="50" width="50">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">proche de...</div>
                                                        </div>

                                                        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Plage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">100m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Campagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Montagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">700m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Désert
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Spot surf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Golf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">2km</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Forêt
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Station ski
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">1.8km</option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Étang/Rivière
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>

                                @endif

                                <!-- Must change -->

                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="ca-page-item">
                        <div class="ca-page-item-third">
                            <div class="ca-page-item-third-button-x clearfix">
                                <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                            </div>
                            <div class="ca-page-item-third-thumb">
                                <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                            </div>

                            @if (request()->get('type') === 'appartement')
                                <div class="ca-page-item-third-text pt-3 text-center">
                                    Décrivez l'appartement et <br>
                                    révélez son caractère
                                </div>
                            @endif

                            @if (request()->get('type') === 'villa')
                                <div class="ca-page-item-third-text pt-3 text-center">
                                    Décrivez la villa et <br>
                                    révélez son caractère
                                </div>
                            @endif

                            @if (request()->get('type') === 'maison')
                                <div class="ca-page-item-third-text pt-3 text-center">
                                    Décrivez la maison et <br>
                                    révélez son caractère
                                </div>
                            @endif

                            @if (request()->get('type') === 'chalet')
                                <div class="ca-page-item-third-text pt-3 text-center">
                                    Décrivez le  cabanon/chalet et <br>
                                    révélez son caractère
                                </div>
                            @endif

                            @if (request()->get('type') === 'riad')
                                <div class="ca-page-item-third-text pt-3 text-center">
                                    Décrivez le riad et <br>
                                    révélez son caractère
                                </div>
                            @endif

                            @if (request()->get('type') === 'ferme')
                                <div class="ca-page-item-third-text pt-3 text-center">
                                    Décrivez la ferme et <br>
                                    révélez son caractère
                                </div>
                            @endif

                            @if (request()->get('type') === 'chambre')
                                <div class="ca-page-item-third-text pt-3 text-center">
                                    Décrivez la chambre d'hôte et <br>
                                    révélez son caractère
                                </div>
                            @endif

                        </div>
                    </div>



                </div>
            </div>

        </div>

    </div>

@elseif(in_array(request()->get('type'), $three))

    <div class="description-three">
        <div class="particulier">
            <div class="c-page">
                <div class="ca-page">


                    <div class="ca-page-item">
                        <div class="ca-page-item-first">
                            <div class="ca-page-item-first-img">
                                <img src="{{ asset('images/residential/building.svg') }}" alt="building" class="img-fluid">
                            </div>
                            <div class="ca-page-item-first-text">PROfessionnels</div>
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
                                <span class="pa-info-desc-type-one-left">Compte</span>  <span>abderazakjamo@hotmail.com</span>
                            </div>
                            <div class="pa-info-hr"></div>
                            <div class="pa-info-desc">
                                <div class="pa-info-desc-type-one">
                                    <div class="pa-info-desc-type-one-left">Votre abonnement</div>
                                    <div class="pa-info-desc-type-one-right">Pack 6</div>
                                </div>

                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Annonces BIEN IMMOBILIER</div>
                                    <div class="pa-info-desc-type-two-right">
                                        200
                                    </div>
                                </div>
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Vidéos HD</div>
                                    <div class="pa-info-desc-type-two-right">
                                        10
                                    </div>
                                </div>
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Photos</div>
                                    <div class="pa-info-desc-type-two-right">
                                        100
                                    </div>
                                </div>
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Push mobile</div>
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
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left"> <span class="text-green">Entreprise</span> Benchekroun Immobilier Palmeraie</div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="ca-page-item">
                        <div class="ca-page-item-second">
                            <div class="ca-page-item-second-title">
                                <span class="ca-page-item-second-title-first">VOTRE ANNONCE</span>
                                <span class="ca-page-item-second-title-second text-uppercase">PROfessionnels</span>
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
                                        <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Transaction</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">5</div>
                                        <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Type de bien</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">6</div>
                                        <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Critères du <br> bien</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">7</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Texte de présentation</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">8</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Médias</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">9</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Localisation</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">10</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Paiement</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ca-page-item-third-connexion">
                                <form action="{{ route('professionnel.annonce') }}" method="get">
                                @csrf

                                <!-- Must change -->

                                    @if (request()->get('type') === 'cite')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/g7.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="bg-white">
                                                                    <div class="bg-white-text">Type de chambres</div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            Individuelle
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="#" id="#" class="ios">
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            2 lits
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="#" id="#" class="ios">
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            3 lits
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="#" id="#" class="ios">
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            4 lits
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="#" id="#" class="ios">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bg-white">
                                                                <div class="bg-text-gray">Surfaces disponibles</div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <input type="text" class="form-control yt-input" placeholder="De__à__m²">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/chambre.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">Chambre</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Meublé
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- if wanted
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chambre familiale

                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">2 places</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            -->
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Kichenette
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Salle de bain
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Miroir
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Wifi
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Bureau
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Eau chaude
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Placard/Rangements
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/it.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">extérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Espaces verts
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Restauration
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cafétéria
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Restauration
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Terrains de sport
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Supérette
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Blanchisserie
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>


                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>

                                    @endif

                                    @if (request()->get('type') === 'bureau')

                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/g7.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-selects">
                                                                    <option value="#">2ème main</option>
                                                                    <option value="#">2ème main</option>
                                                                    <option value="#">2ème main</option>
                                                                    <option value="#">2ème main</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-inputs" placeholder="Surface ___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-selects">
                                                                    <option value="#">Implanté dans un(e) Centre d'affaires</option>
                                                                    <option value="#">Implanté dans un(e) Centre d'affaires</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-selects">
                                                                    <option value="#">Situé aux 2e/3e étages</option>
                                                                    <option value="#">Situé aux 2e/3e étages</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-selects">
                                                                    <option value="#">7 étage(s) par immeuble</option>
                                                                    <option value="#">7 étage(s) par immeuble</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/i1.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">intérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-selects">
                                                                    <option value="#">Nombre de pièce(s) 12</option>
                                                                    <option value="#">Nombre de pièce(s) 12</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-inputs" placeholder="Hauteur__sous-plafond">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Internet
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        WC/Sanitaires
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffe-eau
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Balcon(s)
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Coin cuisine
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cour/Patio
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Climatisation
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/it.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">extérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Gardiennage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Accueil
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-selects">
                                                                    <option value="#">1 Place(s) véhicule</option>
                                                                    <option value="#">1 Place(s) véhicule</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Ascenseur
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Interphone
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Monte-charge
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Espaces verts
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>


                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>

                                    @endif

                                    @if (request()->get('type') === 'plateau')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/g7.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-selects">
                                                                    <option value="#">2ème main</option>
                                                                    <option value="#">2ème main</option>
                                                                    <option value="#">2ème main</option>
                                                                    <option value="#">2ème main</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-inputs" placeholder="Surface ___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-selects">
                                                                    <option value="#">Implanté dans un(e) IT space</option>
                                                                    <option value="#">Implanté dans un(e) IT space</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-selects">
                                                                    <option value="#">Situé au RDC</option>
                                                                    <option value="#">Situé aux 2e/3e étages</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-selects">
                                                                    <option value="#">7 étage(s) par immeuble</option>
                                                                    <option value="#">7 étage(s) par immeuble</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Coworking
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Domiciliation
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/i1.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">intérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Open space
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-selects">
                                                                    <option value="#">Nombre de box  12</option>
                                                                    <option value="#">Nombre de box  12</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-selects">
                                                                    <option value="#">Salle de réunion 2</option>
                                                                    <option value="#">Salle de réunion 2</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-inputs" placeholder="Hauteur__sous-plafond">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Internet
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        WC/Sanitaires
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffe-eau
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Balcon(s)
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Coin cuisine
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Cour/Patio
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Climatisation
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chauffage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/it.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">extérieur</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Gardiennage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Accueil
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-selects">
                                                                    <option value="#">1 Place(s) véhicule</option>
                                                                    <option value="#">1 Place(s) véhicule</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Ascenseur
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Interphone
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Monte-charge
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>


                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>

                                @endif


                                <!-- Must change -->

                                </form>
                            </div>
                        </div>
                    </div>





                    <div class="ca-page-item">
                        <div class="ca-page-item-third">
                            <div class="ca-page-item-third-button-x clearfix">
                                <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                            </div>
                            <div class="ca-page-item-third-thumb">
                                <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="ca-page-item-third-text pt-3 text-center">
                                @if(request()->get('type') === 'cite')
                                    Décrivez la cité universitaire et <br>
                                    révélez son caractère
                                @endif
                                @if(request()->get('type') === 'bureau')
                                    Décrivez le bureau/appart professionnnel et <br>
                                    révélez son caractère
                                @endif
                                @if(request()->get('type') === 'plateau')
                                    Décrivez le plateau et <br>
                                    révélez son caractère
                                @endif
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>

    </div>

@elseif(in_array(request()->get('type'), $two))

    <div class="description-two">
        <div class="particulier">
            <div class="c-page">
                <div class="ca-page">


                    <div class="ca-page-item">
                        <div class="ca-page-item-first">
                            <div class="ca-page-item-first-img">
                                <img src="{{ asset('images/residential/building.svg') }}" alt="building" class="img-fluid">
                            </div>
                            <div class="ca-page-item-first-text">PROfessionnels</div>
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
                                <span class="pa-info-desc-type-one-left">Compte</span>  <span>abderazakjamo@hotmail.com</span>
                            </div>
                            <div class="pa-info-hr"></div>
                            <div class="pa-info-desc">
                                <div class="pa-info-desc-type-one">
                                    <div class="pa-info-desc-type-one-left">Votre abonnement</div>
                                    <div class="pa-info-desc-type-one-right">Pack 6</div>
                                </div>

                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Annonces BIEN IMMOBILIER</div>
                                    <div class="pa-info-desc-type-two-right">
                                        200
                                    </div>
                                </div>
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Vidéos HD</div>
                                    <div class="pa-info-desc-type-two-right">
                                        10
                                    </div>
                                </div>
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Photos</div>
                                    <div class="pa-info-desc-type-two-right">
                                        100
                                    </div>
                                </div>
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Push mobile</div>
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
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left"> <span class="text-green">Entreprise</span> Benchekroun Immobilier Palmeraie</div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="ca-page-item">
                        <div class="ca-page-item-second">
                            <div class="ca-page-item-second-title">
                                <span class="ca-page-item-second-title-first">VOTRE ANNONCE</span>
                                <span class="ca-page-item-second-title-second text-uppercase">PROfessionnels</span>
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
                                        <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Transaction</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">5</div>
                                        <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Type de bien</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">6</div>
                                        <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Critères du <br> bien</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">7</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Texte de présentation</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">8</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Médias</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">9</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Localisation</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">10</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Paiement</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ca-page-item-third-connexion">
                                <form action="{{ route('professionnel.annonce') }}" method="get">
                                @csrf

                                <!-- Must change -->

                                    @if (request()->get('type') === 'commercial')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/gg2.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Superficie terrain___m²">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Puits
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">

                                                        <div class="ca-page-item-second-body-card-item-heads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ip.svg" alt="" height="50" width="50">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">proche de...</div>
                                                        </div>

                                                        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Voie
                                                                        publique
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">0m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Plage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">100m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Campagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Montagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">700m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Désert
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Forêt
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Étang/Rivière
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">1.8km</option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>

                                    @endif

                                    @if (request()->get('type') === 'residentiel')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/gg2.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Superficie terrain___m²">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Puits
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">

                                                        <div class="ca-page-item-second-body-card-item-heads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ip.svg" alt="" height="50" width="50">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">proche de...</div>
                                                        </div>

                                                        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Voie
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">5m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Plage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">100m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Campagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Montagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">700m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Désert
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Forêt
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Spot surf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Golf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Station ski
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Étang/Rivière
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">1.8km</option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>

                                    @endif

                                    @if (request()->get('type') === 'industriel')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/gg2.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Superficie terrain___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Implanté en zone industrielle</option>
                                                                    <option value="#">Implanté en zone industrielle</option>
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Puits
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">

                                                        <div class="ca-page-item-second-body-card-item-heads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ip.svg" alt="" height="50" width="50">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">proche de...</div>
                                                        </div>

                                                        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Voie
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">5m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Plage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">100m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Campagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Montagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">700m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Désert
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Forêt
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Spot surf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Golf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Station ski
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Étang/Rivière
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">1.8km</option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (request()->get('type') === 'agricole')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/gg2.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Superficie terrain___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Titre adoulaire</option>
                                                                    <option value="#">Titre adoulaire</option>
                                                                </select>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Constructible
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Puits
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">

                                                        <div class="ca-page-item-second-body-card-item-heads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ip.svg" alt="" height="50" width="50">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">proche de...</div>
                                                        </div>

                                                        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Voie
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">100m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Plage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">100m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Campagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Montagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">700m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Désert
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Forêt
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Spot surf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Golf
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Station ski
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Étang/Rivière
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">1.8km</option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>

                                    @endif

                                    @if (request()->get('type') === 'propriete_agricole')
                                        <div class="must-change">
                                            <div class="ca-page-item-third-types-box-four">

                                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                    description DU BIEN
                                                </div>
                                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                                <div class="ca-page-item-third-type-box">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/gg2.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Superficie terrain___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Superficie exploitable___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Surface bâtie ___m²">
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Raccordement
                                                                        eau
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Puits
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
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
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">

                                                        <div class="ca-page-item-second-body-card-item-heads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ip.svg" alt="" height="50" width="50">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">proche de...</div>
                                                        </div>

                                                        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Plage
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">100m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Campagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Montagne
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">700m</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Désert
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Forêt
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#"></option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Étang/Rivière
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">1.8km</option>
                                                                            <option value="#">2km</option>
                                                                            <option value="#">3km</option>
                                                                            <option value="#">4km</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="yt_b text-center">
                                                    <button class="btn btn-prev mr-2">
                                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                    </button>
                                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                                </div>
                                            </div>
                                        </div>
                                @endif

                                <!-- Must change -->

                                </form>
                            </div>
                        </div>
                    </div>





                    <div class="ca-page-item">
                        <div class="ca-page-item-third">
                            <div class="ca-page-item-third-button-x clearfix">
                                <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                            </div>
                            <div class="ca-page-item-third-thumb">
                                <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="ca-page-item-third-text pt-3 text-center">
                                @if (request()->get('type') === 'propriete_agricole')
                                    Décrivez  la propriété agricole et <br>
                                    révélez son caractère
                                @endif

                                @if (request()->get('type') === 'agricole')
                                    Décrivez  le terrain agricole et <br>
                                    révélez son caractère
                                @endif

                                @if (request()->get('type') === 'residentiel')
                                    Décrivez  le terrain résidentiel et <br>
                                    révélez son caractère
                                @endif

                                @if (request()->get('type') === 'industriel')
                                    Décrivez  le terrain industriel et <br>
                                    révélez son caractère
                                @endif

                                @if (request()->get('type') === 'commercial')
                                    Décrivez  le terrain commercial et <br>
                                    révélez son caractère
                                @endif
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>

    </div>

@elseif(in_array(request()->get('type'), $one))
    <div class="description-one">
        <div class="particuliers">
            <div class="c-page">
                <div class="ca-page">


                    <div class="ca-page-item">
                        <div class="ca-page-item-first">
                            <div class="ca-page-item-first-img">
                                <img src="{{ asset('images/residential/building.svg') }}" alt="building" class="img-fluid">
                            </div>
                            <div class="ca-page-item-first-text">PROfessionnels</div>
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
                                <span class="pa-info-desc-type-one-left">Compte</span>  <span>abderazakjamo@hotmail.com</span>
                            </div>
                            <div class="pa-info-hr"></div>
                            <div class="pa-info-desc">
                                <div class="pa-info-desc-type-one">
                                    <div class="pa-info-desc-type-one-left">Votre abonnement</div>
                                    <div class="pa-info-desc-type-one-right">Pack 6</div>
                                </div>

                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Annonces BIEN IMMOBILIER</div>
                                    <div class="pa-info-desc-type-two-right">
                                        200
                                    </div>
                                </div>
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Vidéos HD</div>
                                    <div class="pa-info-desc-type-two-right">
                                        10
                                    </div>
                                </div>
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Photos</div>
                                    <div class="pa-info-desc-type-two-right">
                                        100
                                    </div>
                                </div>
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left">Push mobile</div>
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
                                <div class="pa-info-desc-type-two mt-1">
                                    <div class="pa-info-desc-type-two-left"> <span class="text-green">Entreprise</span> Benchekroun Immobilier Palmeraie</div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="ca-page-item">
                        <div class="ca-page-item-second">
                            <div class="ca-page-item-second-title">
                                <span class="ca-page-item-second-title-first">VOTRE ANNONCE</span>
                                <span class="ca-page-item-second-title-second text-uppercase">PROfessionnels</span>
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
                                        <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Transaction</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">5</div>
                                        <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Type de bien</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">6</div>
                                        <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Critères du <br> bien</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">7</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Texte de présentation</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">8</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Médias</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">9</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Localisation</div>
                                    </div>
                                    <div class="ca-page-item-second-round-block-rounded">
                                        <div class="ca-page-item-second-round-block-rounded-circle">10</div>
                                        <div class="ca-page-item-second-round-block-rounded-text">Paiement</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ca-page-item-third-connexion">
                                <form action="{{ route('professionnel.annonce') }}" method="get">
                                @csrf

                                <!-- Must change -->
                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                        description DU BIEN
                                    </div>

                                    @if (request()->get('type') === 'entrepot')
                                        <div class="ca-page-item-third-types-box">


                                            <div class="ca-page-item-third-connexion-box-hr"></div>
                                            <div class="ca-page-item-third-type-box">
                                                <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                    <div class="ca-page-item-second-body-card-item-heeads">
                                                        <div class="ca-page-item-second-body-card-item-head-img">
                                                            <img src="http://myhouse.com/images/residential/single/g5.svg" alt="">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                    </div>
                                                    <div class="pc-y">
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">2ème main</option>
                                                                    <option value="#">2ème main</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Frigorifique
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Surface totale bâtiment __m2  ">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Espace entrepôts __m2 ">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Espace activités __m2">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Espace bureaux __m2">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Aménagement R+2+sous-sol</option>
                                                                    <option value="#">Aménagement R+2+sous-sol</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Hauteur entrepôt____m2">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Implanté dans un(e) Zone industrielle</option>
                                                                    <option value="#">Implanté dans un(e) Zone industrielle</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        WC/Sanitaires
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">60 Place(s) véhicule</option>
                                                                    <option value="#">60 Place(s) véhicule</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Site clos
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Pont roulant
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Monte-charge
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Alarme
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="bg-white">
                                                                    <div class="bg-text-gray">Taille portail(s)</div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <input type="text" class="form-control yt-input" placeholder="portail 1  ___m x ___m">
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <input type="text" class="form-control yt-input" placeholder="portail 2  ___m x ___m">
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <input type="text" class="form-control yt-input" placeholder="portail 3  ___m x ___m">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="yt_b text-center">
                                                <button class="btn btn-prev mr-2">
                                                    <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                </button>
                                                <button class="btn btn-contact text-uppercase">continuer</button>
                                            </div>
                                        </div>
                                    @endif

                                    @if (request()->get('type') === 'garage')
                                        <div class="ca-page-item-third-types-box">
                                            <div class="ca-page-item-third-connexion-box-hr"></div>
                                            <div class="ca-page-item-third-type-box">
                                                <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                    <div class="ca-page-item-second-body-card-item-heeads">
                                                        <div class="ca-page-item-second-body-card-item-head-img">
                                                            <img src="http://myhouse.com/images/residential/single/g1.svg" alt="">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                    </div>
                                                    <div class="pc-y">
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">2ème main</option>
                                                                    <option value="#">2ème main</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Surface  __m2  ">
                                                            </div>
                                                        </div>

                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Hauteur plafond____m2">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        WC/Sanitaires
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="bg-white">
                                                                    <div class="bg-text-gray">Taille portail(s)</div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <input type="text" class="form-control yt-input" placeholder=" ___m x ___m">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="yt_b text-center">
                                                <button class="btn btn-prev mr-2">
                                                    <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                </button>
                                                <button class="btn btn-contact text-uppercase">continuer</button>
                                            </div>
                                        </div>
                                    @endif

                                    @if (request()->get('type') === 'local_commercial')
                                        <div class="ca-page-item-third-types-box">


                                            <div class="ca-page-item-third-connexion-box-hr"></div>
                                            <div class="ca-page-item-third-type-box">
                                                <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                    <div class="ca-page-item-second-body-card-item-heeads">
                                                        <div class="ca-page-item-second-body-card-item-head-img">
                                                            <img src="http://myhouse.com/images/residential/single/g6.svg" alt="">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                    </div>
                                                    <div class="pc-y">
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">2ème main</option>
                                                                    <option value="#">2ème main</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Sans fonds de commerce</option>
                                                                    <option value="#">Sans fonds de commerce</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Surface totale  __m2  ">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Sous-pente ___m2 ">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Terrasse___m2">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Nombre de pièce(s) 3</option>
                                                                    <option value="#">Nombre de pièce(s) 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Longueur façade___m2">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Hauteur plafond ____m2">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Implanté dans un centre commercial</option>
                                                                    <option value="#">Implanté dans un centre commercial</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Situé au 1er étage</option>
                                                                    <option value="#">Situé au 1er étage</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Angle de rue
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        WC/Sanitaires
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">5 Place(s) véhicule</option>
                                                                    <option value="#">5 Place(s) véhicule</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Mezzanine
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Alarme
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="yt_b text-center">
                                                <button class="btn btn-prev mr-2">
                                                    <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                </button>
                                                <button class="btn btn-contact text-uppercase">continuer</button>
                                            </div>
                                        </div>
                                    @endif

                                    @if (request()->get('type') === 'local_industriel')
                                        <div class="ca-page-item-third-types-box">


                                            <div class="ca-page-item-third-connexion-box-hr"></div>
                                            <div class="ca-page-item-third-type-box">
                                                <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                    <div class="ca-page-item-second-body-card-item-heeads">
                                                        <div class="ca-page-item-second-body-card-item-head-img">
                                                            <img src="http://myhouse.com/images/residential/single/g4.svg" alt="">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                    </div>
                                                    <div class="pc-y">
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">2ème main</option>
                                                                    <option value="#">2ème main</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Surface totale bâtiment __m2  ">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Espace activités __m2">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Espace entrepôts __m2 ">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Espace bureaux __m2">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Aménagement R+2+sous-sol</option>
                                                                    <option value="#">Aménagement R+2+sous-sol</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Hauteur entrepôt____m2">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Implanté dans un(e) Zone industrielle</option>
                                                                    <option value="#">Implanté dans un(e) Zone industrielle</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        WC/Sanitaires
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">60 Place(s) véhicule</option>
                                                                    <option value="#">60 Place(s) véhicule</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Site clos
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Pont roulant
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Monte-charge
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Alarme
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="" id="" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="bg-white">
                                                                    <div class="bg-text-gray">Taille portail(s)</div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <input type="text" class="form-control yt-input" placeholder="portail 1  ___m x ___m">
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <input type="text" class="form-control yt-input" placeholder="portail 2  ___m x ___m">
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <input type="text" class="form-control yt-input" placeholder="portail 3  ___m x ___m">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="yt_b text-center">
                                                <button class="btn btn-prev mr-2">
                                                    <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                </button>
                                                <button class="btn btn-contact text-uppercase">continuer</button>
                                            </div>
                                        </div>
                                    @endif

                                    @if (request()->get('type') === 'immeuble')
                                        <div class="ca-page-item-third-types-box">
                                            <div class="ca-page-item-third-connexion-box-hr"></div>
                                            <div class="ca-page-item-third-type-box">
                                                <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                    <div class="ca-page-item-second-body-card-item-heeads">
                                                        <div class="ca-page-item-second-body-card-item-head-img">
                                                            <img src="http://myhouse.com/images/residential/single/g3.svg" alt="">
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-head-text">global</div>
                                                    </div>
                                                    <div class="pc-y">
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">2ème main</option>
                                                                    <option value="#">2ème main</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Surface  terrain  __m2  ">
                                                            </div>
                                                        </div>

                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-input" placeholder="Surface bâtie __m2">
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#">Aménagement R+2</option>
                                                                    <option value="#">Aménagement R+2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pc_yt">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="#" id="" class="form-control yt-select">
                                                                    <option value="#"> 4 place(s) véhicule</option>
                                                                    <option value="#"> 4 place(s) véhicule</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="yt_b text-center">
                                                <button class="btn btn-prev mr-2">
                                                    <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                                </button>
                                                <button class="btn btn-contact text-uppercase">continuer</button>
                                            </div>
                                        </div>
                                @endif

                                <!-- Must change -->

                                </form>
                            </div>
                        </div>
                    </div>





                    <div class="ca-page-item">
                        <div class="ca-page-item-third">
                            <div class="ca-page-item-third-button-x clearfix">
                                <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                            </div>
                            <div class="ca-page-item-third-thumb">
                                <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="ca-page-item-third-text pt-3 text-center">
                                @if (request()->get('type') === 'immeuble')
                                    Décrivez l'immeuble/batiment  et <br>
                                    révélez son caractère
                                @endif

                                @if (request()->get('type') === 'garage')
                                    Décrivez le garage  et <br>
                                    révélez son caractère
                                @endif

                                @if (request()->get('type') === 'local_industriel')
                                    Décrivez le local industriel  et <br>
                                    révélez son caractère
                                @endif

                                @if (request()->get('type') === 'local_commercial')
                                    Décrivez le local commercial  et <br>
                                    révélez son caractère
                                @endif

                                @if (request()->get('type') === 'entrepot')
                                    Décrivez  l'entrepôt/hangar  et <br>
                                    révélez son caractère
                                @endif

                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>

    </div>
@else
    <div style="margin-top: 500px; text-align: center">
        <h1>Choix invalide</h1>
    </div>
@endif



















<svg class="hidden" style="display: none">
    <defs>
        <path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z" />
    </defs>
</svg>







<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="{{ asset('development/js/cbpFWTabs.js') }} "></script>


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







<script>
    (function() {
        [].slice.call(document.querySelectorAll(".tabs")).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();
</script>




</body>
</html>


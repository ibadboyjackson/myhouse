
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
                                <div class="ca-page-item-second-round-block-rounded-circle  ca-page-bg-active">10</div>
                                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Paiement</div>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('last.success') }}" method="get">

                        <div class="ca-page-item-third-connexion">
                            <div class="ca-page-item-third-typess-box">

                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                    Paiement
                                </div>
                                <div class="ca-page-item-third-connexion-box-hr"></div>
                                <div class="ca-page-item-third-connexion-box-title-next">
                                    choisissez une méthode de paiement
                                </div>

                                <div class="ca-page-item-third-type-boxe">

                                    <div class="ca-page-item-third-type-creadit-card">

                                        <div class="ca-page-item-third-type-creadit-card-item">
                                            <div class="ca-page-item-third-type-creadit-card-head">
                                                <div class="ca-page-item-third-type-creadit-card-number">
                                                    1
                                                </div>
                                                <div class="ca-page-item-third-type-creadit-card-title">
                                                    Carte bancaire
                                                </div>
                                            </div>
                                            <div class="ca-page-item-third-type-creadit-card-body">
                                                <div class="ca-page-item-third-type-creadit-card-body-img">
                                                    <img src="{{ asset('images/residential/single/cb1.svg') }}" alt="">
                                                </div>
                                                <div class="ca-page-item-third-type-creadit-card-body-input">
                                                    <div>
                                                        <input type="radio" id="cb1" name="cb" checked="">
                                                        <label for="cb1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-third-type-creadit-card-height"></div>
                                        </div>

                                        <div class="ca-page-item-third-type-creadit-card-item">
                                            <div class="ca-page-item-third-type-creadit-card-head">
                                                <div class="ca-page-item-third-type-creadit-card-number">
                                                    2
                                                </div>
                                                <div class="ca-page-item-third-type-creadit-card-title">
                                                    PayPal
                                                </div>
                                            </div>
                                            <div class="ca-page-item-third-type-creadit-card-body">
                                                <div class="ca-page-item-third-type-creadit-card-body-img">
                                                    <img src="{{ asset('images/residential/single/cb2.svg') }}" alt="">
                                                </div>
                                                <div class="ca-page-item-third-type-creadit-card-body-input">
                                                    <div>
                                                        <input type="radio" id="cb2" name="cb" checked="">
                                                        <label for="cb2"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-third-type-creadit-card-height"></div>
                                        </div>

                                        <div class="ca-page-item-third-type-creadit-card-item">
                                            <div class="ca-page-item-third-type-creadit-card-head">
                                                <div class="ca-page-item-third-type-creadit-card-number">
                                                    3
                                                </div>
                                                <div class="ca-page-item-third-type-creadit-card-title">
                                                    Virement bancaire
                                                </div>
                                            </div>
                                            <div class="ca-page-item-third-type-creadit-card-body">
                                                <div class="ca-page-item-third-type-creadit-card-body-rib">
                                                    <div style="width: 100%">
                                                        <div class="ca-page-item-third-type-creadit-card-body-rib-text">RIB</div>
                                                        <div class="ca-page-item-third-type-creadit-card-body-rib-box">
                                                            <span>1234</span>
                                                            <span>5678</span>
                                                            <span>3456</span>
                                                            <span>2456</span>
                                                            <span>2345</span>
                                                            <span>4567</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-type-creadit-card-body-input">
                                                    <div>
                                                        <input type="radio" id="cb3" name="cb" checked="">
                                                        <label for="cb3"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>



                        <div class="ca-page-item-second-footer">
                            <button class="btn btn-prev mr-2">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-connections" type="submit">continuer</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="ca-page-item">
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


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> MyHouse     </title>

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
                    Compte <span>abderazakjamo@hotmail.com</span>
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
                            <div class="ca-page-item-second-round-block-rounded-circle">5</div>
                            <div class="ca-page-item-second-round-block-rounded-text">Type de bien</div>
                        </div>
                        <div class="ca-page-item-second-round-block-rounded">
                            <div class="ca-page-item-second-round-block-rounded-circle">6</div>
                            <div class="ca-page-item-second-round-block-rounded-text">Critères du <br> bien</div>
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

                <form action="{{ route('professionnel.types') }}" method="get">
                    <div class="ca-page-item-third-connexion">
                        <div class="ca-page-item-third-connexion-box">

                            <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                transaction
                            </div>
                            <div class="ca-page-item-third-connexion-box-title-hr"></div>

                        </div>
                    </div>
                    <div class="ca-page-item-second-subscription">
                        <div class="ca-page-item-second-body">
                            <div class="ca-page-item-second-bodie-box">
                                <div class="ca-page-third-tabs-box">
                                    <div class="ca-page-third-tabs-box-ios-checkbox">
                                        <div class="ca-page-third-tabs-box-ios-checkbox-vente">
                                            <label>
                                                <input type="checkbox" class="ios">
                                            </label>
                                        </div>
                                        <div class="ca-page-third-tabs-box-ios-checkbox-location">
                                            <label>
                                                <input type="checkbox" class="ios">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tabs tabs-style-shape">
                                        <nav>
                                            <ul>
                                                <li>
                                                    <a href="#section-shape-1" class="text-decoration-none">
                                                        <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                            <use xlink:href="#tabshape"></use>
                                                        </svg>
                                                        <span>
                                                        <img src="{{ asset('images/residential/achat.svg') }}" alt="" width="20" height="23">&nbsp;
                                                         VENTE
                                                    </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#section-shape-2" class="text-decoration-none">
                                                        <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                            <use xlink:href="#tabshape"></use>
                                                        </svg>
                                                        <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                            <use xlink:href="#tabshape"></use>
                                                        </svg>
                                                        <span>
                                                        <img src="{{ asset('images/residential/location.svg') }}" alt="" width="20" height="23">&nbsp;
                                                        LOCATION
                                                    </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div class="content-wrap">
                                            <section id="section-shape-1">
                                                <div class="first-shape-1">
                                                    Prix
                                                    <div class="row sr justify-content-center align-items-center">
                                                        <div><input type="text" class="form-control" placeholder="000."></div>
                                                        <div><input type="text" class="form-control" placeholder="000."></div>
                                                        <div><input type="text" class="form-control" placeholder="000."></div>
                                                        <div class="with-mad text-uppercase">mad</div>
                                                    </div>
                                                    <div class="first-shape-content">
                                                        Faire apparaitre votre annonce dans la rubrique :
                                                        <div class="first-shape-content-box">
                                                            <div class="first-shape-content-box-text">
                                                                Vente meublée
                                                            </div>
                                                            <div class="first-shape-content-box-checkbox">
                                                                <input type="checkbox" name="#" id="#" class="ios">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section id="section-shape-2">

                                                <div class="row justify-content-around pl-5 pr-5">
                                                    <div class="second-shape">
                                                        <div class="shape-box">
                                                            <div class="shape-box-item">Loyer au mois</div>
                                                            <div class="shape-box-item">
                                                                <input type="checkbox" name="#" id="#" class="ios">
                                                            </div>
                                                        </div>
                                                        <div class="row sr justify-content-center">
                                                            <div><input type="text" class="form-control" placeholder="000."></div>
                                                            <div><input type="text" class="form-control" placeholder="000."></div>
                                                        </div>
                                                    </div>
                                                    <div class="second-shape">
                                                        <div class="shape-box">
                                                            <div class="shape-box-item">Loyer au jour</div>
                                                            <div class="shape-box-item">
                                                                <input type="checkbox" name="#" id="#" class="ios">
                                                            </div>
                                                        </div>
                                                        <div class="row sr justify-content-center">
                                                            <div><input type="text" class="form-control" placeholder="000."></div>
                                                            <div><input type="text" class="form-control" placeholder="000."></div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="second-shape pt-58">
                                                    <div class="row justify-content-center">
                                                        <div>
                                                            Charge de copropriété inclus dans le loyer ?

                                                        </div>
                                                        <div class="pt-1 pl-4">
                                                            <input type="checkbox" class="ios">
                                                        </div>
                                                    </div>
                                                    <div class="row src justify-content-center">
                                                        <div><input type="text" class="form-control" placeholder="000."></div>
                                                        <div><input type="text" class="form-control" placeholder="000."></div>
                                                    </div>
                                                </div>
                                                <div class="third-shape pt-67 pb-78">
                                                    Faire apparaitre votre annonce dans les rubriques :
                                                    <div class="row px-2 pt-18">
                                                        <div class="col-md-6">
                                                            <div class="shape-content">
                                                                <div class="d-flex px-2 justify-content-between">
                                                                    <div class="s-left">
                                                                        Location longue durée
                                                                    </div>
                                                                    <div class="s-right">
                                                                        <input type="checkbox" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="shape-content">
                                                                <div class="d-flex px-2 justify-content-between">
                                                                    <div class="s-left">
                                                                        Location courte durée
                                                                    </div>
                                                                    <div class="s-right">
                                                                        <input type="checkbox" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row px-2 pt-44">
                                                        <div class="col-md-6">
                                                            <div class="shape-content">
                                                                <div class="d-flex px-2 justify-content-between">
                                                                    <div class="s-left">
                                                                        Location pour étudiant(e)
                                                                    </div>
                                                                    <div class="s-right">
                                                                        <input type="checkbox" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="shape-content">
                                                                <div class="d-flex px-2 justify-content-between">
                                                                    <div class="s-left">
                                                                        Colocation acceptée
                                                                    </div>
                                                                    <div class="s-right">
                                                                        <input type="checkbox" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row px-2 pt-44">
                                                        <div class="col-md-6">
                                                            <div class="shape-content">
                                                                <div class="d-flex px-2 justify-content-between">
                                                                    <div class="s-left">
                                                                        Location meublée
                                                                    </div>
                                                                    <div class="s-right">
                                                                        <input type="checkbox" class="ios">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </section>
                                        </div>
                                        <!-- /content -->
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

                    </div>

                </form>
            </div>
        </div>
        <div class="ca-page-item">
            <div class="ca-page-item-third">
                <div class="ca-page-item-third-button-x clearfix">
                    <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                </div>
                <div class="ca-page-item-third-thumb">
                    <img src="{{ asset('images/residential/single/trans.svg') }}" alt="" class="img-fluid">
                </div>
                <div class="ca-page-item-third-text pt-3 text-center">
                    Un bien peut être mis en même <br>
                    temps à la vente et à la location
                </div>
            </div>
        </div>
    </div>
</div>






















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


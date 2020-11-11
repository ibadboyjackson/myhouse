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
                            <div class="ca-page-item-second-round-block-rounded-circle">4</div>
                            <div class="ca-page-item-second-round-block-rounded-text">Transaction</div>
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

                <form action="{{ route('professionnel.transaction') }}" method="get">
                    <div class="ca-page-item-third-connexion">
                        <div class="ca-page-item-third-connexion-box">

                            <div class="ca-page-item-third-connexion-box-title">
                                ENREGISTREMENT
                            </div>
                            <div class="ca-page-item-third-connexion-box-title-hr"></div>
                            <div class="ca-page-item-third-connexion-box-title-title">ENTREPRISE</div>

                        </div>
                    </div>
                    <div class="ca-page-item-second-subscription">
                        <div class="ca-page-item-second-body">
                            <div class="ca-page-item-second-enterprise">
                                <div class="ca-page-item-second-enterprise-box">
                                    <div class="ca-page-item-second-enterprise-title">
                                        Choisir une entreprise enregistrée
                                    </div>
                                    <div class="ca-page-item-second-enterprise-box-box">
                                        <div class="ca-page-item-second-enterprise-box-box-item">
                                            <div class="ca-page-item-second-enterprise-box-box-item-child">
                                                <div class="ca-page-item-second-enterprise-box-box-item-child-one">
                                                    <span class="country-content-content">
                                                        <input type="radio" id="enter" name="radio-groups">
                                                        <label for="enter"></label>
                                                    </span>
                                                </div>
                                                <div class="ca-page-item-second-enterprise-box-box-item-child-two">
                                                    <img src="{{ asset('images/residential/single/menu/rec.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-enterprise-box-box-item-child">
                                                <div class="ca-page-item-second-enterprise-box-box-item-child-one">
                                                    <span class="country-content-content">
                                                        <input type="radio" id="enter1" name="radio-groups">
                                                        <label for="enter1"></label>
                                                    </span>
                                                </div>
                                                <div class="ca-page-item-second-enterprise-box-box-item-child-two">
                                                    <img src="{{ asset('images/residential/single/menu/rec.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ca-page-item-second-enterprise-or">ou</div>

                            <div class="ca-page-item-body-child-enterprise">
                                <div class="ca-page-item-child-enterprise-box">
                                    <div class="ca-page-item-child-enterprise-box-title">Ajouter une entreprise</div>
                                    <div class="ca-page-item-child-enterprise-box-title-field">
                                        <div class="ca-page-item-child-enterprise-box-title-field-content">
                                            <div class="field">
                                                <label for="name" class="field-label">nom de l'entreprise</label>
                                                <input type="text" id="name" name="name" class="field-input">
                                            </div>
                                            <div class="field">
                                                <label for="name" class="field-label">ville</label>
                                                <input type="text" id="name" name="name" class="field-input">
                                            </div>
                                            <div class="field">
                                                <label for="name" class="field-label">adresse</label>
                                                <input type="text" id="name" name="name" class="field-input">
                                            </div>
                                            <div class="field">
                                                <label for="name" class="field-label">téléphone de contact</label>
                                                <input type="text" id="name" name="name" class="field-input">
                                            </div>
                                            <div class="field">
                                                <label for="name" class="field-label">téléphone (3)    (facultatif)</label>
                                                <input type="text" id="name" name="name" class="field-input">
                                            </div>
                                        </div>
                                        <div class="ca-page-item-child-enterprise-box-title-field-content">
                                            <div class="field">
                                                <label for="name" class="field-label">email de contact</label>
                                                <input type="text" id="name" name="name" class="field-input">
                                            </div>
                                            <div class="field">
                                                <label for="name" class="field-label">pays</label>
                                                <input type="text" id="name" name="name" class="field-input">
                                            </div>
                                            <div class="field">
                                                <label for="name" class="field-label">code postal</label>
                                                <input type="text" id="name" name="name" class="field-input">
                                            </div>
                                            <div class="field">
                                                <label for="name" class="field-label">téléphone (2) (facultatif)</label>
                                                <input type="text" id="name" name="name" class="field-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-child-enterprise-box-upload">
                                        <label for="file-upload" class="custom-file-upload">
                                            <img src="{{ asset('images/residential/upload.svg') }}" alt="">
                                        </label>
                                        <input id="file-upload" type="file"/>
                                        <div class="file-upload-text">ENVOYER LOGO</div>
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
            <div class="ca-page-item-third">
                <div class="ca-page-item-third-button-x clearfix">
                    <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                </div>
                <div class="ca-page-item-third-thumb">
                    <img src="{{ asset('images/residential/data.svg') }}" alt="" class="img-fluid">
                </div>
                <div class="ca-page-item-third-text pt-3 text-center">
                    Enregistrez l'entreprise
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


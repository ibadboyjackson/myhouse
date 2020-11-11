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
    <link rel="stylesheet" type="text/css" href="{{ asset('development/css/iosCheckbox.css') }} " />

    <!-- CDN LINK -->
    <link href='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('development/css/select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
@include('development.next.include.myhouseNav')


<div class="abonnementes">
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
                                <div class="ca-page-item-second-round-block-rounded-circle">3</div>
                                <div class="ca-page-item-second-round-block-rounded-text">Enregistrement</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle">4</div>
                                <div class="ca-page-item-second-round-block-rounded-text">Description</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle">5</div>
                                <div class="ca-page-item-second-round-block-rounded-text">Critères</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle">6</div>
                                <div class="ca-page-item-second-round-block-rounded-text">Annonce <br> PROJET</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle">7</div>
                                <div class="ca-page-item-second-round-block-rounded-text">Médias</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle">8</div>
                                <div class="ca-page-item-second-round-block-rounded-text">Localisation</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle">9</div>
                                <div class="ca-page-item-second-round-block-rounded-text">Annonces <br> BIEN</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle">10</div>
                                <div class="ca-page-item-second-round-block-rounded-text">Paiement</div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('last.enregistrement') }}" method="get">

                        <div class="ca-page-item-third-connexion">
                            <div class="ca-page-item-third-connexion-box">

                                <div class="ca-page-item-third-connexion-box-title">ABONNEMENT</div>
                                <div class="ca-page-item-third-connexion-box-title-hr"></div>
                                <div class="ca-page-item-third-connexion-box-title-title">nos packs</div>


                            </div>
                            <div class="ca-page-item-third-abonnement-box-mt">
                                <div class="ca-page-item-third-abonnement-box">
                                    <div class="ca-page-item-third-abonnement-box-text">
                                        Choisissez un abonnement en cours
                                    </div>
                                    <div class="ca-page-item-third-abonnement-box-content">
                                        <div class="ca-page-item-third-abonnement-box-content-item-one">
                                            <div class="ca-page-item-third-abonnement-box-content-first">
                                                <div class="ca-page-item-third-abonnement-box-content-first-pack">
                                                    <div class="ca-page-item-third-abonnement-box-content-first-pack-valide">
                                                        <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                                    </div>
                                                    <div class="ca-page-item-third-abonnement-box-content-first-pack-text">
                                                        Pack 6
                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-first-price">
                                                    <div class="ca-page-item-third-abonnement-box-content-first-price-price">
                                                        12.000
                                                    </div>
                                                    <div class="ca-page-item-third-abonnement-box-content-first-price-unit">
                                                        MAD/mois
                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-first-date">
                                                    Activé le jj/mm/aa
                                                </div>

                                            </div>
                                            <div class="ca-page-item-third-abonnement-box-content-second">

                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Annonces PROJET</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Annonces BIEN IMMOBILIER</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">200</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Vidéos HD</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Photos</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">100</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Push mobile</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Journées Portes Ouvertes</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Jeu Chasse au Trésor</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10</div>
                                                </div>




                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-abonnement-box-content-item-two">
                                            <div class="ca-page-item-third-abonnement-box-content-item-two-barre"></div>
                                            <div class="ca-page-item-third-abonnement-box-content-item-two-content">
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Repère map 2x plus grand</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x15 jours</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Repère map en couleur</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x15 jours</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Bannière 300 x 600 px page d'accueil</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x3 jours</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Bannière 300 x 600 px page LISTE</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x3 jours</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Rectangle 336 x 280 px page d'accueil</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x3 jours</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Rectangle 336 x 280 px page LISTE</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x3 jours</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Bannière 970 x 90 px page d'accueil</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x3 jours</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-footer">
                                        <div style="margin-top: 159px;">
                                            <div class="ca-page-footer-block" style="display: none">
                                                <div class="ca-page-footer-second">Souscrire à un nouvel abonnement?</div>
                                                <a href="{{ route('professionnel.service') }}" style="text-decoration: none; color: inherit">
                                                    <div class="ca-page-footer-third">Cliquez ici</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="cap-page-footer-fourth">
                                            <button class="btn btn-connections" type="submit">continuer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!--  <div class="ca-page-item-second-subscription">
                              <div class="ca-page-item-second-subscription-box">
                                  <div class="ca-page-item-second-subscription-box-block">

                                      <div class="ca-page-item-second-subscription-box-block-zero">
                                          <div class="ca-page-item-second-subscription-box-block-first">
                                              <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                  <input type="radio" id="pack" name="pack1" checked="">
                                                  <label for="pack">
                                                  </label>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-item-second text-center">
                                                  <div>offre</div>
                                                  <div>de</div>
                                                  <div>lancement</div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-second-one">gratuit</div>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                          </div>
                                          <div class="ca-page-item-second-subscription-box-block-first">
                                              <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                  <input type="radio" id="pack1" name="pack1">
                                                  <label for="pack1">
                                                  </label>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-item-third text-center">
                                                  <div>pack 1</div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third-one">3000</div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third-two">MAD/mois</div>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                          </div>

                                          <div class="ca-page-item-second-subscription-box-block-first">
                                              <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                  <input type="radio" id="pack2" name="pack1">
                                                  <label for="pack2">
                                                  </label>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-item-third text-center">
                                                  <div>pack 2</div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third-one">4000</div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third-two">MAD/mois</div>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                          </div>
                                          <div class="ca-page-item-second-subscription-box-block-first">
                                              <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                  <input type="radio" id="pack3" name="pack1">
                                                  <label for="pack3">
                                                  </label>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-item-third text-center">
                                                  <div>pack 3</div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third-one">5000</div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third-two">MAD/mois</div>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                          </div>
                                          <div class="ca-page-item-second-subscription-box-block-first">
                                              <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                  <input type="radio" id="pack4" name="pack1">
                                                  <label for="pack4">
                                                  </label>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-item-third text-center">
                                                  <div>pack 4</div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third-one">6000</div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third-two">MAD/mois</div>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                          </div>
                                          <div class="ca-page-item-second-subscription-box-block-first">
                                              <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                  <input type="radio" id="pack5" name="pack1">
                                                  <label for="pack5">
                                                  </label>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-item-third text-center">
                                                  <div>pack 5</div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third-one">7000</div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third-two">MAD/mois</div>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                          </div>
                                          <div class="ca-page-item-second-subscription-box-block-first">
                                              <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                  <input type="radio" id="pack6" name="pack1">
                                                  <label for="pack6">
                                                  </label>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-item-third text-center">
                                                  <div>pack 6</div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third-one">12.000</div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third-two">MAD/mois</div>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                          </div>


                                      </div>


                                  </div>
                              </div>
                          </div> -->



                    </form>
                </div>
            </div>
            <div class="ca-page-item">
                <div class="ca-page-item-third">
                    <div class="ca-page-item-third-button-x clearfix">
                        <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                    </div>
                    <div class="ca-page-item-third-thumb">
                        <img src="{{ asset('images/residential/subs.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="ca-page-item-third-text pt-3 text-center">
                        Choisissez votre abonnement
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


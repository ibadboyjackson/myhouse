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

    <!-- CDN LINK -->
    <link href='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('development/css/select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
@include('development.includes.nav')

<div class="c-page">
    <div class="ca-page">
        <div class="ca-page-item">
            <div class="ca-page-item-first">
                <div class="ca-page-item-first-img">
                    <img src="{{ asset('images/residential/building.svg') }}" alt="building" class="img-fluid">
                </div>
                <div class="ca-page-item-first-text">projet neuf</div>
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
                            <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Connection</div>
                        </div>
                        <div class="ca-page-item-second-round-block-rounded">
                            <div class="ca-page-item-second-round-block-rounded-circle">2</div>
                            <div class="ca-page-item-second-round-block-rounded-text">Abonnement</div>
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
                            <div class="ca-page-item-second-round-block-rounded-text">Annonce</div>
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
                            <div class="ca-page-item-second-round-block-rounded-text">Annonces</div>
                        </div>
                        <div class="ca-page-item-second-round-block-rounded">
                            <div class="ca-page-item-second-round-block-rounded-circle">10</div>
                            <div class="ca-page-item-second-round-block-rounded-text">Paiement</div>
                        </div>
                    </div>
                </div>
                <div class="ca-page-item-third-connexion">
                    <form action="{{ route('last.abonnement') }}" method="get">
                        @csrf
                        <div class="ca-page-item-third-connexion-box">

                            <div class="ca-page-item-third-connexion-box-title">SE CONNECTER</div>
                            <div class="ca-page-item-third-connexion-box-body">

                                <div class="field">
                                    <label for="doge" class="field-label">email ou mobile</label>
                                    <input type="email" id="email" name="doge" class="field-input">
                                </div>

                                <div class="field">
                                    <label for="doge" class="field-label">mot de passe</label>
                                    <input type="password" id="password" name="doge" class="field-input">
                                    <a href="#" class="show-password">
                                        <img src="{{ asset('images/residential/eye.svg') }}" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="ca-page-item-third-connexion-box-footer">
                                <div class="ca-page-item-third-connexion-box-footer-permission">
                                    <div class="lg-check">
                                        <label for="">
                                            <input type="checkbox">
                                            Se souvenir de moi
                                        </label>
                                    </div>
                                    <div>
                                        <a href="{{ route('forgot') }}">Identifiants oubliés ?</a>
                                    </div>
                                </div>
                                <div class="ca-page-item-third-connexion-box-footer-footer">
                                    <div class="inscription">
                                        <a href="{{ route('inscription') }}">s'inscrire</a>
                                    </div>
                                    <div class="ca-page-item-third-connexion-box-footer-footer-connect">
                                        <button class="btn btn-light btn-connections" type="submit">continuer</button>
                                    </div>
                                    <div class="ca-page-item-third-connexion-box-footer-footer-chart">
                                        <div class="mt-5 conditions">Termes & Charte </div>
                                    </div>
                                </div>

                            </div>

                        </div>

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
                    <img src="{{ asset('images/residential/customer.svg') }}" alt="" class="img-fluid">
                </div>
                <div class="ca-page-item-third-text pt-3 text-center">
                    Il semble que vous ne soyez pas connecté(e)
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



<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<script src='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js'></script>
<script src="{{ asset('js/map.js') }}"></script>
</body>
</html>


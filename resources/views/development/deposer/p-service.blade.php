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

    <link rel="stylesheet" href="{{ asset('development/css/select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg-test">

@include('development.next.include.myhouseNav')


<div class="page-rise-mt">
    <div class="page-rise">
        <div class="menu-wrap-x-button">
            <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
        </div>
        <div class="particulier">
            <div class="page-rise-block">
                <div class="page-rise-block-item">
                    <div class="service-commercial-block">
                        <div class="service-commercial">
                            <div class="service-commercial-zone-one">
                                Support
                            </div>
                            <div class="service-commercial-zone-two">
                                technique
                            </div>
                            <div class="service-commercial-hr"></div>
                            <div class="service-commercial-number">
                                002125224565
                            </div>
                            <div class="service-commercial-chat">
                                <div class="service-commercial-chat-item">
                                    <img src="{{ asset('images/residential/chat.svg') }}" alt="">
                                </div>
                                <div class="service-commercial-chat-item">Chat room</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="page-rise-block-item">

                    <div class="page-rise-head">
                        <div class="page-rise-title">
                            DéPOSER UNE ANNONCE
                        </div>
                        <div class="page-rise-title-hr"></div>
                        <div class="page-rise-title-info">
                            PARTICULIERS
                        </div>
                    </div>

                    <div class="page-rise-body">
                        <div class="page-rise-body-service-mt">
                            <div class="page-rise-body-service">
                                <div class="page-rise-body-service-left">
                                    <div class="page-rise-body-service-left-head">
                                        SERVICES
                                    </div>
                                    <div class="page-rise-body-service-left-body">

                                        <div class="page-rise-body-service-left-title">
                                            ANNONCES
                                        </div>

                                        <div class="page-rise-body-service-left-content">
                                            Nombre d'annonces
                                        </div>
                                        <div class="page-rise-body-service-left-content">
                                            Ajouter, supprimer, modifier l'annonce
                                        </div>
                                        <div class="page-rise-body-service-left-content">
                                            Désactiver, activer l'annonce
                                        </div>

                                        <div class="page-rise-body-service-left-title">
                                            MéDIAS
                                        </div>

                                        <div class="page-rise-body-service-left-content">
                                            Vidéo HD
                                        </div>
                                        <div class="page-rise-body-service-left-content">
                                            Photographies
                                        </div>
                                        <div class="page-rise-body-service-left-content">
                                            Plan, 3D & 360°
                                        </div>


                                        <div class="page-rise-body-service-left-title">
                                            MARKETING
                                        </div>

                                        <div class="page-rise-body-service-left-content">
                                            Partager sur les réseaux sociaux
                                        </div>
                                        <div class="page-rise-body-service-left-content">
                                            Messagerie instantanée
                                        </div>
                                        <div class="page-rise-body-service-left-content">
                                            Full app: Web/Android/IPhone/IPad/Desktop
                                        </div>
                                        <div class="page-rise-body-service-left-content">
                                            Plate-forme multilingue/internationale
                                        </div>
                                        <div class="page-rise-body-service-left-content">
                                            Agenda de visites et de rendez-vous
                                        </div>

                                    </div>
                                </div>
                                <div class="page-rise-body-service-right">
                                    <div class="page-rise-body-service-right-head">
                                        GRATUIT
                                    </div>

                                    <div class="page-rise-body-service-right-title">
                                        <div style="visibility: hidden">test</div>
                                    </div>

                                    <div class="page-rise-body-service-right-content">
                                        <div class="text-green">4</div>
                                    </div>
                                    <div class="page-rise-body-service-right-content">
                                        <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                    </div>
                                    <div class="page-rise-body-service-right-content">
                                        <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                    </div>

                                    <div class="page-rise-body-service-right-title">
                                        <div style="visibility: hidden">test</div>
                                    </div>

                                    <div class="page-rise-body-service-right-content">
                                        <img src="{{ asset('images/residential/single/invalid.svg') }}" alt="">
                                    </div>
                                    <div class="page-rise-body-service-right-content">
                                        <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                    </div>
                                    <div class="page-rise-body-service-right-content">
                                        <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                    </div>

                                    <div class="page-rise-body-service-right-title">
                                        <div style="visibility: hidden">test</div>
                                    </div>

                                    <div class="page-rise-body-service-right-content">
                                        <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                    </div>
                                    <div class="page-rise-body-service-right-content">
                                        <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                    </div>
                                    <div class="page-rise-body-service-right-content">
                                        <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                    </div>
                                    <div class="page-rise-body-service-right-content">
                                        <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                    </div>
                                    <div class="page-rise-body-service-right-content">
                                        <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                    </div>


                                </div>
                            </div>
                            <a href="{{ route('particulier.transaction') }}" style="text-decoration: none; color: inherit">
                                <div class="page-rise-body-button text-uppercase">
                                    commencez
                                </div>
                            </a>
                        </div>
                    </div>

                </div>


                <div class="page-rise-block-item">


                    <div class="page-rise-account" style="position: relative">
                        <div class="page-rise-account-box">
                            <div class="page-rise-account-box-item">
                                <img src="{{ asset('images/residential/single/icon.svg') }}" alt="">
                            </div>
                            <div class="page-rise-account-box-item pl-1">
                                VOUS AVEZ Déjà UN ABONNEMENT ?
                            </div>
                        </div>
                        <div class="page-rise-account-hr"></div>
                        <a href="" style="text-decoration: none; color: inherit">
                            <div class="page-rise-account-button text-uppercase">
                                continuer ici
                            </div>
                        </a>

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



<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</body>
</html>

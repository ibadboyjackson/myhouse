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
                        CHOISISSEZ UN PORTAIL
                    </div>
                </div>
                <div class="page-rise-body">
                    <div class="page-rise-body-box">
                        <div class="page-rise-body-box-item">
                            <div class="page-rise-body-box-circle">
                                <div class="page-rise-body-box-circle-text">PARTICULIERS</div>
                            </div>
                            <div class="page-rise-body-box-annonce pg-green text-uppercase" style="padding-top: 27px;">
                                4 annonces gratuites
                            </div>
                            <a href="{{ route('particulier.service') }}" style="text-decoration: none; color: inherit">
                                <div class="page-rise-body-box-annonce-buttons">
                                    VOIR
                                </div>
                            </a>
                        </div>
                        <div class="page-rise-body-box-item">
                            <div class="page-rise-r">
                                <div class="page-rise-body-box-price">
                                    8,50 DH/jour !
                                </div>
                                <div class="page-rise-body-box-circle">
                                    <div class="page-rise-body-box-circle-text">PROFESSIONNELS</div>
                                </div>
                                <div class="page-rise-body-box-annonce pg-gray" style="margin-top: 13px; font-size: 15px">
                                    <span class="text-uppercase"> à </span> partir de
                                </div>
                                <div class="page-rise-body-box-annonce pg-green text-uppercase" style="margin-top: -2px;">
                                    20 annonces
                                </div>

                                <div class="page-rise-body-box-marketings">

                                    <div class="page-rise-body-box-marketing-box">
                                        <div class="page-rise-body-box-marketing-box-item">
                                            <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                            Automatisation d'actions marketing
                                        </div>
                                    </div>
                                    <div class="page-rise-body-box-marketing-box">
                                        <div class="page-rise-body-box-marketing-box-item">
                                            <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                            Statistiques par annonce en temps réel
                                        </div>
                                    </div>
                                    <div class="page-rise-body-box-marketing-box">
                                        <div class="page-rise-body-box-marketing-box-item">
                                            <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                            Multiples utilisateurs
                                        </div>
                                    </div>
                                    <div class="page-rise-body-box-marketing-box">
                                        <div class="page-rise-body-box-marketing-box-item">
                                            <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                            Publier dans le portail PARTICULIERS
                                        </div>
                                    </div>
                                    <div class="page-rise-body-box-marketing-box">
                                        <div class="page-rise-body-box-marketing-box-item">
                                            <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                            CRM Pro & Push mobile
                                        </div>
                                    </div>
                                    <div class="page-rise-body-box-marketing-box">
                                        <div class="page-rise-body-box-marketing-box-item">
                                            <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                            Vidéos
                                        </div>
                                    </div>


                                </div>
                                <div class="page-rise-body-box-marketing-other text-green">
                                    ...et plus de 15 autres services
                                </div>
                                <a href="{{ route('professionnel.service') }}" style="text-decoration: none; color: inherit">
                                    <div class="page-rise-body-box-annonce-button">
                                        VOIR
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="page-rise-body-box-item">
                            <div class="page-rise-r">
                                <div class="page-rise-body-box-price">
                                    67 DH/jour !
                                </div>
                                <div class="page-rise-body-box-circle">
                                    <div class="page-rise-body-box-circle-text">PROJETS NEUFS</div>
                                </div>
                                <div class="page-rise-body-box-annonce pg-gray" style="margin-top: 13px; font-size: 15px">
                                    <span class="text-uppercase"> à </span> partir de
                                </div>
                                <div class="page-rise-body-box-annonce pg-green text-uppercase" style="margin-top: -2px;">
                                    1 PROJET NEUF   + 20 annonces
                                </div>

                                <div class="page-rise-body-box-marketing">

                                    <div class="page-rise-body-box-marketing-box">
                                        <div class="page-rise-body-box-marketing-box-item">
                                            <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                            Jusqu'à 6 types de bien par Projet
                                        </div>
                                    </div>
                                    <div class="page-rise-body-box-marketing-box">
                                        <div class="page-rise-body-box-marketing-box-item">
                                            <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                            Jusqu'à 6 vidéos par Projet
                                        </div>
                                    </div>
                                    <div class="page-rise-body-box-marketing-box">
                                        <div class="page-rise-body-box-marketing-box-item">
                                            <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                            Multiples utilisateurs
                                        </div>
                                    </div>
                                    <div class="page-rise-body-box-marketing-box">
                                        <div class="page-rise-body-box-marketing-box-item">
                                            <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                            Publier dans le portail PARTICULIERS
                                        </div>
                                    </div>
                                    <div class="page-rise-body-box-marketing-box">
                                        <div class="page-rise-body-box-marketing-box-item">
                                            <img src="{{ asset('images/residential/single/check.svg') }}" alt="">
                                        </div>
                                        <div class="page-rise-body-box-marketing-box-item" style="padding-left: 4px;">
                                            CRM Pro & Push mobile
                                        </div>
                                    </div>


                                </div>
                                <div class="page-rise-body-box-marketing-other text-green" style="margin-top: 35px;">
                                    ...et plus de 20 autres services
                                </div>

                                <a href="{{ route('neuf.service') }}" style="text-decoration: none; color: inherit">
                                    <div class="page-rise-body-box-annonce-button">
                                        VOIR
                                    </div>
                                </a>
                            </div>

                        </div>
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
                        <div class="page-rise-account-button">
                            continuer ici
                        </div>
                    </a>

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

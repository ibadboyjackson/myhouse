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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

</head>
<body class="bg-test">

@include('development.next.include.myhouseNav')


<div class="the-professionnelle">
    <div class="the-page pb-5">
        <div class="the-page-mt">
            <div class="the-page-close-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
            <div class="the-page-website">
                <div class="the-page-website-box">
                    <div class="the-page-website-img">
                        <img src="{{ asset('images/residential/single/menu/web.svg') }}" alt="">
                    </div>
                    <div class="the-page-website-text">Site web</div>
                </div>
                <div class="the-page-website-link">www.realestatemorocco.ma</div>
            </div>


            <!-- With grid -->

            <div class="the-page-grids">
                <div class="the-page-grid-containers">
                    <div class="the-page-grid-container-item">
                        <div class="the-page-printable">
                            <div class="the-page-printable-box-one">
                                <div class="the-page-printable-box-one-img">
                                    <img src="{{ asset('images/residential/single/menu/pdf.svg') }}" alt="">
                                </div>
                                <div class="the-page-printable-box-one-text">
                                    Télécharger la page en format PDF
                                </div>
                            </div>
                            <div class="the-page-printable-box-two">
                                <div class="the-page-printable-box-two-img">
                                    <img src="{{ asset('images/residential/single/menu/share.svg') }}" alt="">
                                </div>
                                <div class="the-page-printable-box-two-text">Partager</div>
                            </div>
                        </div>
                        <div class="the-page-thumbnail">
                            <img src="{{ asset('images/residential/single/menu/enterprise.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="the-page-content-bottom">
                            <div class="the-page-content-bottom-box-one">
                                <div class="the-page-content-bottom-box-one-box">
                                    <div class="the-page-content-bottom-box-one-box-img">
                                        <img src="{{ asset('images/residential/single/menu/msg.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-content-bottom-box-one-box-text">
                                        Mail
                                    </div>
                                </div>
                                <div class="the-page-content-bottom-box-one-email">
                                    johndoe@hotmail.com <br>
                                    janedoe@hotmail.com
                                </div>
                            </div>
                            <div class="the-page-content-bottom-box-two">
                                <div class="the-page-content-bottom-box-one-box">
                                    <div class="the-page-content-bottom-box-one-box-img">
                                        <img src="{{ asset('images/residential/single/menu/spo.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-content-bottom-box-one-box-text">
                                        Appeler
                                    </div>
                                </div>
                                <div class="the-page-content-bottom-box-two-content">
                                    <div class="the-page-content-bottom-box-two-content-title">Bureau</div>
                                    00212522334455 <br>
                                    00212522334457
                                    <div class="the-page-content-bottom-box-two-content-title">GSM</div>
                                    00212622334455 <br>
                                    00212622334455
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="the-page-grid-container-item">
                        <div class="the-page-head">
                            <div>
                                <div class="the-page-head-title" style="padding-top: 31px;">
                                    AGENCE REAL ESTATE <br>
                                    MOROCCO MILLENIUM
                                </div>
                                <div class="the-page-head-hr"></div>
                            </div>
                        </div>
                        <div class="enterprise-presentation">
                            <div class="enterprise-presentation-title">
                                Qui sommes-nous?
                            </div>
                            <div class="enterprise-presentation-hr"></div>
                            <div class="enterprise-presentation-body">
                                texte de présentation de l'agence, du professionnel <br><br>

                                Culpa qui officia deserunt mollit anim id est laborum.
                                Sed ut perspiciatis unde omnis iste natus error sit
                                voluptartem accusantium doloremque laudantium, totam
                                rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                et quasi ropeior architecto beatae vitae dicta sunt.doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                veritatis et quasi ropeior architecto beatae vitae doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi ropeior architecto beatae vitae dicta
                                sunt.doloremque
                            </div>
                        </div>

                        <div class="the-page-suggestion">
                            <a href="{{ route('professionnel.offre') }}" style="text-decoration: none; color: inherit" target="_blank">
                                <div class="the-page-suggestion-button">Découvrir nos offres</div>
                            </a>
                            <div class="the-page-suggestion-type-button">Appartement</div>

                            <div class="the-page-suggestion-media">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="the-page-suggestion-type-button">Villas</div>
                            <div class="the-page-suggestion-media">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="the-page-suggestion-type-button">Commerces</div>
                            <div class="the-page-suggestion-media">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="the-page-suggestion-type-button">Terrains</div>
                            <div class="the-page-suggestion-media">
                                <div class="the-page-suggestion-chevron">
                                    <div class="the-page-suggestion-chevron-left">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                    <div class="the-page-suggestion-chevron-right">
                                        <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="the-page-suggestion-media-item">
                                    <div class="the-page-suggestion-media-box">
                                        <div class="the-page-suggestion-media-box-img">
                                            <img src="{{ asset('images/residential/single/as.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="the-page-suggestion-media-box-price">
                                            <img src="{{ asset('images/residential/single/aso.svg') }}" alt="">
                                            <div class="the-page-suggestion-media-box-price-text">
                                                1.000.000 <span>mad</span>
                                            </div>
                                        </div>
                                        <div class="the-page-suggestion-media-box-desc">
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                167m2  |  Rez-de-chaussée   |  2 chambre(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                2 salle(s) de bain   | 2 salon(s)
                                            </div>
                                            <div class="the-page-suggestion-media-box-desc-text">
                                                Dressing     |  Jardin privatif   |   Cheminée
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="the-page-grid-container-item">
                        <div class="enterprise-log">
                           <div class="enterprise-log-img">
                               <img src="{{ asset('images/residential/single/menu/enlo.svg') }}" alt="">
                           </div>
                           <div class="enterprise-log-text">
                               33, angle boulevard Abderrahmane <br>
                               Youssoufi de la Sole <br>
                               Casablanca <br>
                               Maroc
                           </div>
                        </div>
                        <div class="content-button">Nous rendre visite</div>
                        <div class="content-map">
                            <div class="map" id="map"></div>
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
<script src="{{ asset('development/js/owl.js') }}"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>



<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<script src='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js'></script>
<script src="{{ asset('js/map.js') }}"></script>
</body>
</html>



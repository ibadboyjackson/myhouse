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
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- CDN LINK -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>
<body class="bg-gray">

<!-- Navigation -->


@include('development.next.include.myhouseNav')

<!-- Section -->

<div class="ls" id="must-closes">
    <div class="wrap mt-100">
        <div class="container-fluid">

            <div class="website-ads">
                <div class="website-ads-carousel">
                    <div class="carousel slide mb-5" data-ride="carousel" id="slider1">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#slider1" data-slide-to="0"></li>
                            <li data-target="#slider1" data-slide-to="1"></li>
                            <li data-target="#slider1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img
                                    class="d-block img-fluid mx-auto"
                                    src="{{ asset('images/residential/single/menu/bg.png') }}"
                                    alt="First Slide"
                                />
                            </div>
                            <div class="carousel-item">
                                <img
                                    class="d-block img-fluid mx-auto"
                                    src="{{ asset('images/residential/single/menu/bg.png') }}"
                                    alt="Second Slide"
                                />
                            </div>
                            <div class="carousel-item ">
                                <img
                                    class="d-block img-fluid mx-auto"
                                    src="{{ asset('images/residential/single/menu/bg.png') }}"
                                    alt="Third Slide"
                                />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev" style="padding-left: 80px;">
                            <span><i class="fa fa-angle-left font-zl" aria-hidden="true" style="color: #AAAAAA;"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#slider1" role="button" data-slide="next" style="padding-right: 80px;">
                            <span><i class="fa fa-angle-right font-zr" aria-hidden="true" style="color: #AAAAAA;"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>

            <form action="{{ route('recherche', $type) }}" method="get" id="form" class="home-form">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="container mt-203">
                            <div class="form-group">
                                <div class="holder f-18 title-gray">
                                    Tapez ici vos lieux de recherche
                                    <span class="red">
                                     Ex. Casablanca, Maarif, Bd Zerktouni
                                </span>
                                </div>
                                <input type="search" class="form-control rounded-pill myHouse-search mx-auto"
                                       name="location"
                                       id="input-search"
                                       data-toggle="tooltip"
                                       data-placement="top"
                                       title="Ce champ est obligatoire"
                                >
                                <input type="hidden" name="page" id="searchable">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mx-sm-auto mt-website mx-auto">
                        <div class="col-sm-5 col-md-12">
                            <button class="myHouse-button btn myHouse-bg-gray text-white text-uppercase rounded-pill mr-15" type="submit" id="neufs" onclick="showTooltip()">projets neufs</button>
                            <button class="myHouse-button btn myHouse-bg-gray text-white text-uppercase rounded-pill mr-15" type="submit" id="professionnels" onclick="showTooltip()">professionnels</button>
                            <button class="myHouse-button btn myHouse-bg-gray text-white text-uppercase rounded-pill" type="submit" id="particuliers" onclick="showTooltip()">particuliers</button>
                        </div>
                    </div>
                </div>
                <div class="myHouse-text">
                    <div class="row">
                        <div class="col-sm-12 text-center section-text title-gray aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                            <p class="mx-sm-3" style="margin-bottom: 0 !important;">MyHouse est un portail intelligent de géolocalisation immobilière</p>
                        </div>
                    </div>
                </div>
            </form>

            <div class="section-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="state-img-1">
                                <img src="{{ asset('images/residential/svg.svg') }}" alt="" width="95" height="55">
                            </div>
                            <h4 class = "title-gray title-is-gray"> 3 portails en 1 </h4>
                            <p class="mt-2 title-gray-o aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">


                                Surfez sans frontières :
                                <span class="spa__br">
                               <span class="spa__brl">
                                   <span> <img src="{{ asset('images/residential/nike.svg') }}" alt=""> </span>
                                   <span style="margin-left: 12px;">Projets neufs</span>
                               </span>
                               <span class="spa__brl">
                                   <span> <img src="{{ asset('images/residential/nike.svg') }}" alt=""> </span>
                                   <span style="margin-left: 12px;" class="text-capitalize">Professionnels</span>
                               </span>
                               <span class="spa__brl">
                                   <span> <img src="{{ asset('images/residential/nike.svg') }}" alt=""> </span>
                                   <span style="margin-left: 12px;" class="text-capitalize">Particuliers</span>
                               </span>
                           </span>
                            </p>



                        </div>
                        <div class="col-md-4 text-center">
                            <div class="state-img" style="padding-top: 5px;">
                                <img src="{{ asset('images/residential/free.svg') }}" alt="" width="80" height="50">
                            </div>
                            <h4 class="title-gray title-is-gray">Service complet</h4>


                            <p class="title-gray-o  aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000" style="padding-top: 1px;">
                                Téléchargez des vidéos et des images <br>
                                Traduction multilingue <br>
                                Affichage des annonces «autour de sa position»
                            </p>

                        </div>
                        <div class="col-md-4 text-center">
                            <div class="state-img" style="padding-top: 5px;">
                                <img src="{{ asset('images/residential/devices.svg') }}" alt="" width="82" height="55">
                            </div>
                            <h4 class="title-gray title-is-gray">Simple et pratique</h4>
                            <p class="mt-2 title-gray-o aos-init aos-animate"  data-aos="fade-right" data-aos-duration="1000">
                                Intuitif, rapide <br>
                                Disponible sur tous les appareils
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="website-section-1">
                <div class="website-section-one">
                    <div class="website-section-one-first">
                        <img src="{{ asset('images/residential/single/menu/ad.png') }}" alt="">
                    </div>
                    <div class="website-section-one-second">
                        <img src="{{ asset('images/residential/single/menu/pub.png') }}" alt="">
                    </div>
                </div>
                <div class="website-section-two">
                    <div class="website-section-carousel">
                        <div class="carousel slide" data-ride="carousel" id="slider1">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                <li data-target="#slider1" data-slide-to="1"></li>
                                <li data-target="#slider1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/single/menu/carousel.png') }}"
                                        alt="First Slide"
                                    />
                                </div>
                                <div class="carousel-item">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/single/menu/carousel.png') }}"
                                        alt="Second Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/single/menu/carousel.png') }}"
                                        alt="Third Slide"
                                    />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev" style="padding-left: 80px;">
                                <span><i class="fa fa-angle-left font-z" aria-hidden="true" style="color: #40987F;"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next" style="padding-right: 80px;">
                                <span><i class="fa fa-angle-right font-z" aria-hidden="true" style="color: #40987F;"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="website-section-three">
                    <div class="website-section-three-one">
                        <img src="{{ asset('images/residential/single/menu/ad.png') }}" alt="">
                    </div>
                    <div class="website-section-three-two">
                        <img src="{{ asset('images/residential/single/menu/pub.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="website-section-2">

            <div class="section-2-box">
                <div class="website-section-2-one">
                    <div class="website-section-2-one-text">Questions fréquentes ?</div>
                    <div class="website-section-2-one-button">
                        faq
                    </div>
                </div>


                <div class="website-section-2-two">
                    <div class="website-section-2-one-text">Questions moins fréquentes ?</div>
                    <div class="website-section-2-two-button">
                        contact
                    </div>
                </div>
            </div>
        </div>
        <div class="website-section-3">
            <footer class="geo-foot">
                <div class="geo-foot-grig">
                    <div class="geo-foot-grig-item">
                        <div class="geo-foot-grig-item-ptt">
                            <div class="geo-foot-grid-social">
                                <div class="geo-foot-grid-social-block">
                                    <div class="geo-foot-grid-social-block-img">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </div>
                                    <div class="geo-foot-grid-social-block-text">Facebook</div>
                                </div>
                                <div class="geo-foot-grid-social-block">
                                    <div class="geo-foot-grid-social-block-img">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="geo-foot-grid-social-block-text">Twitter</div>
                                </div>
                                <div class="geo-foot-grid-social-block">
                                    <div class="geo-foot-grid-social-block-img">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                    <div class="geo-foot-grid-social-block-text">Instagram</div>
                                </div>
                                <div class="geo-foot-grid-social-block">
                                    <div class="geo-foot-grid-social-block-img">
                                        <i class="fa fa-google" aria-hidden="true"></i>
                                    </div>
                                    <div class="geo-foot-grid-social-block-text">Google</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="geo-foot-grig-item">
                        <div class="geo-foot-grid-subscribe">
                            <div class="geo-grid-subscribe-pt">
                                <div class="geo-foot-grid-subscribe-text">
                                    S'abonner à notre newsletter
                                </div>
                                <div class="geo-subscribe">
                                    <div class="geo-foot-with-input">
                                        <label>
                                            <input type="text" placeholder="Tapez votre email" class="form-control">
                                        </label>
                                    </div>
                                    <div class="geo-foot-with-button">
                                        <button class="btn">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="geo-foot-grig-item">
                        <div class="geo-foot-grig-item-ptt f-r ">
                            <div>
                                Blog MyHouse
                            </div>
                            <div>
                                Termes & Charte
                            </div>
                            <div>
                                Qui sommes-nous ?
                            </div>
                            <div>
                                FAQ
                            </div>
                            <div >
                                Contact
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="geo-foot-copy">
            © GEOMARK 2019
        </div>
    </div>

</div>

<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"
></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('development/js/apps.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>


<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script>
    AOS.init();
</script>
</body>
</html>

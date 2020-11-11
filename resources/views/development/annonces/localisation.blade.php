@include('development.includes.head')

@include('development.includes.nav')


<div class="contain-wrap mt-89">
    <div class="d-flex justify-content-end mr-4 mt-3">
        <div>
            <img src="{{ asset('images/residential/x.svg') }}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="aside">
                <div class="aside-type">
                    <div class="t">
                        <label for="">
                            <input type="checkbox">
                            Particulier
                        </label>
                    </div>
                    <div class="p">
                        <label for="">
                            <input type="checkbox">
                            Professionnel
                        </label>
                    </div>
                </div>
                <div class="aside-content">
                    <div class="h-6">
                        <h6>Services inclus</h6>
                    </div>
                    <div class="aside-content-1">
                        <span class="aside-circle"></span>
                        <span class="aside-circle-text">Modifiez, remplacez votre annonce sans limitation</span>
                    </div>
                    <div class="aside-content-1 mt-3">
                        <span class="aside-circle"></span>
                        <span class="aside-circle-text">
                            Téléchargez 1 vidéo et 8 images
                        </span>
                    </div>
                    <div class="aside-content-1 mt-3">
                        <span class="aside-circle"></span>
                        <span class="aside-circle-text">
                           Formats  et résolutions 4k, 3D & 360°
                        </span>
                    </div>
                    <div class="aside-content-1 mt-3">
                        <span class="aside-circle"></span>
                        <span class="aside-circle-text">Discutez, négociez en live sur le chat</span>
                    </div>
                    <div class="aside-content-1 mt-3">
                        <span class="aside-circle"></span>
                        <span class="aside-circle-text">Agenda de visites et de rendez-vous</span>
                    </div>
                    <div class="aside-content-1 mt-3">
                        <span class="aside-circle"></span>
                        <span class="aside-circle-text">Outils d'analyse trafic(web et mobile)</span>
                    </div>
                    <div class="aside-content-1 mt-3">
                        <span class="aside-circle"></span>
                        <span class="aside-circle-text">
                            Notification mobile de vos messages
                        </span>
                    </div>
                    <div class="aside-content-1 mt-3  mb-4">
                        <span class="aside-circle"></span>
                        <span class="aside-circle-text">
                            Désactivez/Activez votre annonce pour la rendre invisible temporairement
                        </span>
                    </div>
                    <div class="aside-content-1 mt-3">
                        <span class="aside-circle"></span>
                        <span class="aside-circle-text">Partagez en un clic sur les réseaux sociaux</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <form action="{{ route('deposer.upload') }}" method="get">
                <div class="is-inright">
                    <div class="cont-title">
                        VOTRE ANNONCE
                        <span class="cont-title-big">GRATUITE</span>
                    </div>
                    <div class="row cont-feature mt-2">
                        <div class="feat">
                            <span class="feat-circle feat-active">1</span>
                            <div class="feat-hr"></div>
                            <div class="feat-text feat-text-active">connectez-vous</div>
                        </div>
                        <div class="feat">
                            <span class="feat-circle feat-active">2</span>
                            <div class="feat-hr"></div>
                            <div class="feat-text-1">
                                <span class="feat-text-xx feat-text-active">catégories &</span>
                                <span class="feat-text-active">caractéristiques</span>
                            </div>
                        </div>
                        <div class="feat">
                            <span class="feat-circle feat-active">3</span>
                            <div class="feat-hr"></div>
                            <div class="feat-text-1">
                                <span class="feat-text-xxx feat-text-active">Localisez </span>
                                <span class="feat-text-xxy feat-text-active"> le bien </span>
                            </div>
                        </div>
                        <div class="featx">
                            <span class="feat-circle">4</span>
                            <div class="feat-text-1">
                                <span class="feat-text-xxxx">Téléchargez les médias</span>
                                <span class="feat-text-xxyy"> & publiez </span>
                            </div>
                        </div>
                    </div>
                    <div class="row ss-r">
                        <div class="col-md-8">
                            <section class="pb-5">
                                <div class="local-ad text-center">
                                    <div class="form-group">
                                        <input type="search" class="form-control local-in rounded-pill" placeholder="Localisation">
                                    </div>
                                </div>
                                <div class="ma">
                                    <div class="content-map">
                                        <div id="map" class="map"></div>
                                    </div>
                                    <div class="text-center mt-5">
                                        <button class="btn btn-prev mr-2">
                                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                        </button>
                                        <button class="btn btn-contact text-uppercase">Continuer</button>
                                    </div>
                                    <!-- /content -->
                                </div>
                                <!-- /tabs -->
                            </section>
                        </div>
                        <div class="col-md-4 mt-3 bounce b__y">
                            <div class="bounce-content float-right">
                                <div class="bounce-title text-center">
                                    <img src="{{ asset('images/residential/astronomer.svg') }}" alt="">
                                </div>
                                <div class="bounce-desc text-center">
                                    Tapez l'adresse ou déplacez le repère sur la map pour localiser votre bien
                                </div>
                                <div class="set_bounce">
                                    Cool ! <br>
                                    MyHouse va générer dans <br> votre annonce tous<br>
                                    les points d'intérêts à<br>
                                    une distance d'1 km<br>
                                    1 km = 10 minutes à pied
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<svg class="hidden" style="display: none">
    <defs>
        <path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z" />
    </defs>
</svg>
@include('development.includes.footer')



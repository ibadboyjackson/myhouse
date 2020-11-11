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
            <form action="{{ route('annonce') }}" method="get">
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
                            <span class="feat-circle feat-active">4</span>
                            <div class="feat-text-1">
                                <span class="feat-text-xxxx feat-text-active">Téléchargez les médias</span>
                                <span class="feat-text-xxyy feat-text-active"> & publiez </span>
                            </div>
                        </div>
                    </div>
                    <div class="row ss-r">
                    <div class="form">
                        <div class="col-md-8">
                            <section class="pb-5">
                                <div class="upload-box d-flex align-items-center justify-content-center">
                                    <div class="upload-img text-center">
                                        <label for="file-upload" class="custom-file-upload">
                                            <img src="{{ asset('images/residential/upload.svg') }}" alt="">
                                        </label>
                                        <input id="file-upload" type="file"/>
                                        <div class="upload-text">ENVOYER Médias</div>
                                        <div class="up-text">Télécharger 1 fichier à la fois</div>
                                    </div>
                                </div>
                                <div class="upload-results">
                                    <div class="row mr-0 ml-0 ">
                                        <div class="col-md-4">
                                            <div class="img-upload"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="img-upload"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="img-upload"></div>
                                        </div>
                                    </div>
                                    <div class="row mr-0 ml-0">
                                        <div class="col-md-4">
                                            <div class="img-upload"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="img-upload"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="img-upload"></div>
                                        </div>
                                    </div>
                                    <div class="row mr-0 ml-0">
                                        <div class="col-md-4">
                                            <div class="img-upload"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="img-upload"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="img-upload"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upload-description">
                                    <textarea id="" cols="30" rows="16" class="form-control up-textarea" placeholder="Quelque chose à rajouter ? Tapez votre texte ici"></textarea>
                                </div>
                                <div class="yt_b up-button text-center">
                                    <button class="btn btn-prev mr-2">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn btn-contact text-uppercase">publier</button>
                                </div>
                            </section>
                        </div>

                    </div>














                        <div class="col-md-4 bounce b__y">
                            <div class="bounce-content float-right">
                                <div class="text-center">
                                    <img src="{{ asset('images/residential/delivery.svg') }}" alt="">
                                </div>
                                <div class="bounce-desc text-center">
                                    Téléchargez 1 vidéo
                                    et 8 photos
                                </div>
                                <div class="set_bounce">
                                    Amusez-vous en créant une <br>
                                    vidéo immobilière avec le <br>
                                    téléphone
                                </div>
                                <div class="bounce-foots row">
                                    <div class="img-top mr-2">
                                        <img src="http://myhouse.com/images/residential/icon.svg" alt="">
                                    </div>
                                    <div class="txt-aa">
                                        Réussir la vidéo immobilière amateur <br>
                                        Conseils techniques en photographie
                                    </div>
                                </div>

                                <div class="up-middle">

                                    <div class="bounce-title text-center">
                                        <img src="{{ asset('images/residential/technology.svg') }}" alt="">
                                    </div>
                                    <div class="bounce-desc text-center">
                                        Organisez, légendez
                                        les médias
                                    </div>
                                    <div class="set_bounce">
                                        Glissez pour modifier l'ordre de la grille, cliquez pour légender les médias
                                    </div>

                                </div>

                                <div class="up-foot">

                                    <div class="bounce-title text-center">
                                        <img src="{{ asset('images/residential/up.svg') }}" alt="">
                                    </div>
                                    <div class="bounce-desc text-center">
                                        Parlez-nous plus de <br> votre bien
                                    </div>


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



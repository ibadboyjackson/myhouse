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
            <form action="{{ route('deposer.transaction') }}">
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
                            <span class="feat-circle">2</span>
                            <div class="feat-hr"></div>
                            <div class="feat-text-1">
                                <span class="feat-text-xx">catégories &</span>
                                caractéristiques
                            </div>
                        </div>
                        <div class="feat">
                            <span class="feat-circle">3</span>
                            <div class="feat-hr"></div>
                            <div class="feat-text-1">
                                <span class="feat-text-xxx">Localisez </span>
                                <span class="feat-text-xxy"> le bien </span>
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
                        <div class="col-md-6">
                            <div class="panel-titles text-uppercase">Se connecter</div>
                            <div class="sg-check">
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
                            <div class="mt-5 lg-check">
                                <label for="">
                                    <input type="checkbox">
                                    Se souvenir de moi
                                </label>
                                <span class="password float-right">
                                 <a href="{{ route('forgot') }}">Identifiants oubliés ?</a>
                                </span>
                                <div class="text-center mt-5">
                                    <div class="inscription text-uppercase">
                                        <a href="{{ route('inscription') }}">s'inscrire</a>
                                    </div>
                                    <div class="lg-connection mt-4">
                                        <button class="btn btn-light btn-connections" type="submit">se connecter</button>
                                    </div>
                                    <div class="mt-5 conditions">Termes & Charte </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 mt-3 bounce">
                            <div class="bounce-content float-right">
                                <div class="bounce-title text-center">
                                    <img src="{{ asset('images/residential/customer.svg') }}" alt="">
                                </div>
                                <div class="bounce-desc text-center">
                                    Il semble que vous ne soyez pas connecté(e)
                                </div>
                            <!-- <div class="bounce-foot row">
                                    <div class="img-top mr-2">
                                        <img src="{{ asset('images/residential/icon.svg') }}" alt="">
                                    </div>
                                    <div class="txt-aa">
                                        Découvrez en 5 minutes toutes <br>
                                        les fonctionnalités du portail
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@include('development.includes.footer')

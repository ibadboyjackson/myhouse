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
            <form action="{{ route('deposer.type') }}" method="get">
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
                        <div class="col-md-7">
                            <section class="pb-5">
                                <p class="p-t">Transactions</p>
                                <div class="tabs tabs-style-shape">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="#section-shape-1" class="text-decoration-none">
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <span>
                                                        <img src="{{ asset('images/residential/achat.svg') }}" alt="" width="20" height="23">&nbsp;
                                                         VENTE
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#section-shape-2" class="text-decoration-none">
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <span>
                                                        <img src="{{ asset('images/residential/location.svg') }}" alt="" width="20" height="23">&nbsp;
                                                        LOCATION
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#section-shape-3"  class="text-decoration-none">
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <span>
                                                        <img src="{{ asset('images/residential/echange.svg') }}" alt="" width="20" height="23"> &nbsp;
                                                        ECHANGE
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="content-wrap">
                                        <section id="section-shape-1">
                                            <div class="first-shape-1">
                                                Prix
                                                <div class="row sr justify-content-center">
                                                    <div><input type="text" class="form-control" placeholder="000."></div>
                                                    <div><input type="text" class="form-control" placeholder="000."></div>
                                                    <div><input type="text" class="form-control" placeholder="000."></div>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="section-shape-2">
                                            <div class="second-shape">
                                                Loyer au mois
                                                <div class="row sr justify-content-center">
                                                    <div><input type="text" class="form-control" placeholder="000."></div>
                                                    <div><input type="text" class="form-control" placeholder="000."></div>
                                                </div>
                                            </div>
                                            <div class="second-shape pt-4">
                                                Loyer au jour
                                                <div class="row sr justify-content-center">
                                                    <div><input type="text" class="form-control" placeholder="000."></div>
                                                    <div><input type="text" class="form-control" placeholder="000."></div>
                                                </div>
                                            </div>
                                            <div class="second-shape pt-4">
                                                Frais de syndic inclus dans le loyer ?
                                                <div class="pt-2">
                                                    <input type="checkbox" class="ios">
                                                </div>
                                                <div class="row sr justify-content-center">
                                                    <div><input type="text" class="form-control" placeholder="000."></div>
                                                    <div><input type="text" class="form-control" placeholder="000."></div>
                                                </div>
                                            </div>
                                            <div class="third-shape pt-5">
                                                Faire apparaitre votre annonce dans les rubriques :
                                                <div class="row px-2 pt-44">
                                                    <div class="col-md-6">
                                                        <div class="shape-content">
                                                            <div class="d-flex px-2 justify-content-between">
                                                                <div class="s-left">
                                                                    Location longue durée
                                                                </div>
                                                                <div class="s-right">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="shape-content">
                                                            <div class="d-flex px-2 justify-content-between">
                                                                <div class="s-left">
                                                                    Location courte durée
                                                                </div>
                                                                <div class="s-right">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row px-2 pt-44">
                                                    <div class="col-md-6">
                                                        <div class="shape-content">
                                                            <div class="d-flex px-2 justify-content-between">
                                                                <div class="s-left">
                                                                    Location vacances
                                                                </div>
                                                                <div class="s-right">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="shape-content">
                                                            <div class="d-flex px-2 justify-content-between">
                                                                <div class="s-left">
                                                                    Location pour étudiant(e)
                                                                </div>
                                                                <div class="s-right">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row px-2 pt-44">
                                                    <div class="col-md-6">
                                                        <div class="shape-content">
                                                            <div class="d-flex px-2 justify-content-between">
                                                                <div class="s-left">
                                                                    Colocataires acceptés
                                                                </div>
                                                                <div class="s-right">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="shape-content">
                                                            <div class="d-flex px-2 justify-content-between">
                                                                <div class="s-left">
                                                                    Meublé
                                                                </div>
                                                                <div class="s-right">
                                                                    <input type="checkbox" class="ios">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </section>
                                        <section id="section-shape-3">
                                            <div class="fourth-shape">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div>
                                                            <label for="">
                                                                <input type="checkbox">
                                                                Définitif
                                                            </label>
                                                        </div>
                                                        <div class="st">
                                                            <label for="">
                                                                <input type="checkbox">
                                                                Provisoir
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="">
                                                            <div class="fifth-shape">
                                                                <span class="tt">Période</span>
                                                                <div class="row">
                                                                    <input type="text" class="form-control sf" placeholder="jj/mm/aaaa">
                                                                    <input type="text" class="form-control sf" placeholder="jj/mm/aaaa">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="text-center mt-5">
                                        <button class="btn btn-contact text-uppercase">Continuer</button>
                                    </div>
                                    <!-- /content -->
                                </div>
                                <!-- /tabs -->
                            </section>
                        </div>
                        <div class="col-md-5 mt-3 bounce">
                            <div class="bounce-content float-right">
                                <div class="bounce-title text-center">
                                    <img src="{{ asset('images/residential/tra.svg') }}" alt="">
                                </div>
                                <div class="bounce-desc text-center">
                                    Vous pouvez choisir plusieurs transactions...
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



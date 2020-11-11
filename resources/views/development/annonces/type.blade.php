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
            <form action="{{ route('deposer.description') }}" method="get">
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
                    <div class="row ss-rt">
                        <div class="col-md-7">
                            <section class="pb-5">
                                <p class="p-t">Types de biens</p>
                                <div class="row pt_yt">
                                    <div class="col-md-4">
                                        <div class="pt_ytt text-center text-uppercase">
                                            <img src="{{ asset('images/residential/residential.svg') }}" alt="">
                                            résidentiel
                                        </div>
                                        <div class="pc-y">
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort9" name="sort">
                                                    <label for="sort9">Appartement</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort10" name="sort">
                                                    <label for="sort10">Villa</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort11" name="sort">
                                                    <label for="sort11">Maison</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort12" name="sort">
                                                    <label for="sort12">Cabanon/Chalet</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort13" name="sort">
                                                    <label for="sort13">Riad</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort14" name="sort">
                                                    <label for="sort14">Ferme</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort15" name="sort">
                                                    <label for="sort15">Hôtel/Appart-Hôtel</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort16" name="sort">
                                                    <label for="sort16">Chambre d'hôte</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort17" name="sort">
                                                    <label for="sort17">Auberge</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort18" name="sort">
                                                    <label for="sort18">Cité universitaire</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort19" name="sort">
                                                    <label for="sort19">Club de vacances</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort20" name="sort">
                                                    <label for="sort20">Camping</label>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pt_ytt text-center text-uppercase">
                                            <img src="{{ asset('images/residential/commercial.svg') }}" alt="">
                                            commercial
                                        </div>
                                        <div class="pc-y">
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort40" name="sort">
                                                    <label for="sort40">Bureau/Plateau</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort41" name="sort">
                                                    <label for="sort41">Commerce</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort42" name="sort">
                                                    <label for="sort42">Cabinet professionnel</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort43" name="sort">
                                                    <label for="sort43">Entrepôt/Hangar</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort44" name="sort">
                                                    <label for="sort44">Local industriel</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort45" name="sort">
                                                    <label for="sort45">Garage/Cave/Box</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort46" name="sort">
                                                    <label for="sort46">Fonds de commerce</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort47" name="sort">
                                                    <label for="sort47">Mur commercial</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort48" name="sort">
                                                    <label for="sort48">Hôtel/Appart-Hôtel</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort49" name="sort">
                                                    <label for="sort49">Domaine agricole</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort50" name="sort">
                                                    <label for="sort50">Franchise</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort51" name="sort">
                                                    <label for="sort51">Immeuble/Batiment</label>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pt_ytt text-center text-uppercase">
                                            <img src="{{ asset('images/residential/terrain.svg') }}" alt="">
                                            terrain
                                        </div>
                                        <div class="pc-y">
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort52" name="sort">
                                                    <label for="sort52">Résidentiel</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort53" name="sort">
                                                    <label for="sort53">Commercial</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort54" name="sort">
                                                    <label for="sort54">Agricole</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort55" name="sort">
                                                    <label for="sort55">Industriel</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="yt_b text-center">
                                    <button class="btn btn-prev mr-2">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-5 mt-3 bounce">
                            <div class="bounce-content float-right">
                                <div class="bounce-titles text-center">
                                    <img src="{{ asset('images/residential/trans.svg') }}" alt="">
                                </div>
                                <div class="bounce-desc text-center">
                                    Sélectionnez le
                                    type de bien
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



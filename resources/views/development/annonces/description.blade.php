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
            <form action="{{ route('deposer.localisation') }}" method="get">
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
                        <div class="col-md-9">
                            <section class="pb-5">
                                <p class="p-t">Types de biens</p>
                                <div class="row pt_yt">
                                    <div class="col-md-3">
                                        <div class="pt_ytt text-center text-uppercase">
                                            <img src="{{ asset('images/residential/global.svg') }}" alt="">
                                            global
                                        </div>
                                        <div class="pc-y">

                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <select name="#" id="" class="form-control yt-select">
                                                        <option value="#">Livraison immediate</option>
                                                        <option value="#">Livraison immediate</option>
                                                        <option value="#">Livraison immediate</option>
                                                        <option value="#">Livraison immediate</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="text" class="form-control yt-input" placeholder="Superficie___m²">
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <select name="#" id="" class="form-control yt-select">
                                                        <option value="#">Sur un niveau</option>
                                                        <option value="#">Sur un niveau</option>
                                                        <option value="#">Sur un niveau</option>
                                                        <option value="#">Sur un niveau</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <select name="#" id="" class="form-control yt-select">
                                                        <option value="#">Situé au 2e étage</option>
                                                        <option value="#">Situé au 2e étage</option>
                                                        <option value="#">Situé au 2e étage</option>
                                                        <option value="#">Situé au 2e étage</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <select name="#" id="" class="form-control yt-select">
                                                        <option value="#">3 apparts par étage</option>
                                                        <option value="#">3 apparts par étage</option>
                                                        <option value="#">3 apparts par étage</option>
                                                        <option value="#">3 apparts par étage</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <select name="#" id="" class="form-control yt-select">
                                                        <option value="#">7 étages par immeuble</option>
                                                        <option value="#">7 étages par immeuble</option>
                                                        <option value="#">7 étages par immeuble</option>
                                                        <option value="#">7 étages par immeuble</option>
                                                    </select>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="pt_ytt text-center text-uppercase">
                                            <img src="{{ asset('images/residential/interieur.svg') }}" alt="">
                                            intérieur
                                        </div>
                                        <div class="pc-y">

                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <select name="#" id="" class="form-control yt-select">
                                                        <option value="#">Cuisine américaine</option>
                                                        <option value="#">Cuisine américaine</option>
                                                        <option value="#">Cuisine américaine</option>
                                                        <option value="#">Cuisine américaine</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Cuisine équipée</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <select name="#" id="" class="form-control yt-select">
                                                        <option value="#">2 chambres</option>
                                                        <option value="#">2 chambres</option>
                                                        <option value="#">2 chambres</option>
                                                        <option value="#">2 chambres</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Dressing</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <select name="#" id="" class="form-control yt-select">
                                                        <option value="#">2 salle(s) de bain</option>
                                                        <option value="#">2 salle(s) de bain</option>
                                                        <option value="#">2 salle(s) de bain</option>
                                                        <option value="#">2 salle(s) de bain</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <select name="#" id="" class="form-control yt-select">
                                                        <option value="#">2 salon(s)</option>
                                                        <option value="#">2 salon(s)</option>
                                                        <option value="#">2 salon(s)</option>
                                                        <option value="#">2 salon(s)</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Terrasse(s)</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Jardin privatif</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Cour/Patio</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Buanderie</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Cheminée</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Climatisation</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Chauffe-eau</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="pt_ytt text-center text-uppercase">
                                            <img src="{{ asset('images/residential/exterieur.svg') }}" alt="">
                                            extérieur
                                        </div>
                                        <div class="pc-y">
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Terrasse(s)</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Jardin privatif</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <select name="#" id="" class="form-control yt-select">
                                                        <option value="#">1 Place(s) voiture</option>
                                                        <option value="#">1 Place(s) voiture</option>
                                                        <option value="#">1 Place(s) voiture</option>
                                                        <option value="#">1 Place(s) voiture</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Box</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Piscine</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Terrains de sport</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Salle de fitness</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Aire de jeux</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Supérette</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">École</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Mosquée</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Shopping</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt d-flex justify-content-between">
                                                    <div class="pc_yttl">Restaurant/Café</div>
                                                    <div class="pc_yttr">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="pt_ytt text-center text-uppercase">
                                            <img src="{{ asset('images/residential/proche.svg') }}" alt="">
                                            proche de ...
                                        </div>
                                        <div class="pc-y">
                                            <div class="d-flex dsf">
                                                <div class="pe_yt">
                                                    <div class="float-left">Plage</div>
                                                    <div class="float-right pe_yttm">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                                <div class="pe_ytt">
                                                    <select name="#" id="" class="form-control ye-select">
                                                        <option value="#">10m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex dsf">
                                                <div class="pe_yt">
                                                    <div class="float-left">Campagne</div>
                                                    <div class="float-right pe_yttm">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                                <div class="pe_ytt">
                                                    <select name="#" id="" class="form-control ye-select">
                                                        <option value="#">1,8km</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex dsf">
                                                <div class="pe_yt">
                                                    <div class="float-left">Montagne</div>
                                                    <div class="float-right pe_yttm">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                                <div class="pe_ytt">
                                                    <select name="#" id="" class="form-control ye-select">
                                                        <option value="#">9m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex dsf">
                                                <div class="pe_yt">
                                                    <div class="float-left">Désert</div>
                                                    <div class="float-right pe_yttm">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                                <div class="pe_ytt">
                                                    <select name="#" id="" class="form-control ye-select">
                                                        <option value="#">6m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex dsf">
                                                <div class="pe_yt">
                                                    <div class="float-left">Spot surf</div>
                                                    <div class="float-right pe_yttm">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                                <div class="pe_ytt">
                                                    <select name="#" id="" class="form-control ye-select">
                                                        <option value="#">10m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex dsf">
                                                <div class="pe_yt">
                                                    <div class="float-left">Golf</div>
                                                    <div class="float-right pe_yttm">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                                <div class="pe_ytt">
                                                    <select name="#" id="" class="form-control ye-select">
                                                        <option value="#">7m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex dsf">
                                                <div class="pe_yt">
                                                    <div class="float-left">Forêt</div>
                                                    <div class="float-right pe_yttm">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                                <div class="pe_ytt">
                                                    <select name="#" id="" class="form-control ye-select">
                                                        <option value="#">17m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex dsf">
                                                <div class="pe_yt">
                                                    <div class="float-left">Station ski</div>
                                                    <div class="float-right pe_yttm">
                                                        <input type="checkbox" class="ios">
                                                    </div>
                                                </div>
                                                <div class="pe_ytt">
                                                    <select name="#" id="" class="form-control ye-select">
                                                        <option value="#">10m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                        <option value="#">100m</option>
                                                    </select>
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
                        <div class="col-md-3 mt-3 bounce ddds">
                            <div class="bounce-content">
                                <div class="bounce-titles dds text-center">
                                    <img src="{{ asset('images/residential/gamer.svg') }}" alt="">
                                </div>
                                <div class="bounce-desc ds text-center">
                                    Décrivez <br>
                                    l'appartement <br>
                                    et révélez <br>
                                    son caractère
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



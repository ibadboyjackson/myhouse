<!-- HEADER -->
<div class="wrap mt-89">
    <header class="header">
        <form action="#">
            <div class="row mx-1 mt-0">
                <div class="col-lg-5 col-dx-12 col-ds-12 col-sm-12">
                    <div class="around">
                        <div class="block-1">
                          <span class="myHouse-circle">
                             <span class="myHouse-circle-text">1</span>
                          </span>
                            <span class="myHouse-hr"></span>
                            <span class="myHouse-circle-1">
                                <span class="myHouse-circle-text">2</span>
                            </span>
                            <span class="myHouse-circle-2">
                                <span class="myHouse-circle-text">3</span>
                              </span>
                            <select class="selectpicker myHouse-select">

                                <option data-content="<img src='{{ asset('images/residential/location.svg') }}' class='myHouse-image-1'> &nbsp; &nbsp;&nbsp;&nbsp;     <span class='custom-txt-1'> LOCATION</span> "></option>
                                <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1-1'>  ACHAT </span> "></option>
                                <option data-content="<img src='{{ asset('images/residential/echange.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1'>   ECHANGE </span> "></option>

                            </select>

                            <select class="selectpicker myHouse-select" title="Choisissez">
                                <option data-content="<img src='{{ asset('images/residential/residential.svg') }}' class='myHouse-image-2-1'> &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-1'> RESIDENTIEL </span> "></option>
                                <option data-content="<img src='{{ asset('images/residential/commercial.svg') }}' class='myHouse-image-2-2'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-2'>  COMMERCIAL </span> "></option>
                                <option data-content="<img src='{{ asset('images/residential/terrain.svg') }}' class='myHouse-image-2-3'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-3'>   TERRAIN </span> "></option>
                            </select>

                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple" >
                                <option value="cheese">Appartement</option>
                                <option value="aa">Cabanon et Chalet</option>
                                <option value="tomatoes">Villa</option>
                                <option value="mozarella">Maison</option>
                                <option value="mushrooms">Riad</option>
                                <option value="pepperoni">Ferme</option>
                                <option value="c">Camping</option>
                                <option value="v">Chambre chez l'habitant</option>
                                <option value="r">Club et Village</option>
                                <option value="b">Maison d'hôte et Auberge </option>
                                <option value="u">Hôtel et Appart-hôtel</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-dx-12 col-ds-12 col-sm-12 d-flex">
                    <div class="myHouse-feature" style="width: 50%">
                        <span class="p-sm-f">
                            <span class="myHouse-three-text">Mode de recherche</span>
                            <span class="myHouse-three mt-27">
                                <a class="myHouse-three-link-1 {{ Route::is('carte') ?  'myHouse-three-link-active' : ''}}" href="{{ route('carte') }}"></a>
                                <a class="myHouse-three-link-2 {{ Route::is('mixte') ?  'myHouse-three-link-active' : ''}} " href="{{ route('mixte') }}"></a>
                                <a class="myHouse-three-link-3 {{ Route::is('liste') || Route::is('liste-five') || Route::is('liste-eight') ?  'myHouse-three-link-active' : ''}}" href="{{ route('liste') }}"></a>
                            </span>
                            <span class="legend">
                                <span class="myHouse-three-text-left mr-3">Carte</span>
                                <span class="myHouse-three-text-middle  myHouse-three-text-active">Mixte</span>
                                <span class="myHouse-three-text-right ml-3">Liste</span>
                            </span>
                        </span>
                    </div>
                    <div style="width: 50%">
                        <div class="slider">
                            <div class="slider-wrap">
                                <span class="unit text-uppercase myHouse-red">mad</span>
                                <input class="input-range" data-slider-id='ex12cSlider' type="text" data-slider-tooltip="always" data-slider-step="1" data-slider-value="0, 73" data-slider-min="0" data-slider-max="100" data-slider-range="true" data-slider-tooltip_split="true" />
                                <span class="slider-text text-uppercase myHouse-red">budget</span>
                            </div>
                            <div class="slider-wrap-2">
                                <span class="unit text-lowercase myHouse-red">m²</span>
                                <input class="input-range" id="range" data-slider-id='ex12cSlider' type="text" data-slider-tooltip="always" data-slider-step="1" data-slider-value="0, 85" data-slider-min="0" data-slider-max="100" data-slider-range="true" data-slider-tooltip_split="true" />
                                <span class="slider-text text-uppercase myHouse-red">surface</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-dx-12 col-lg-4  col-ds-12 col-sm-12">
                    <div class="row mx-2 mx-lg-0 third-block">
                        <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                            <span class="dropdown-toggle myHouse-caret"></span>
                            <span>critères</span>
                            <span class="critere-dropdown text-left" id="critere-dropdown">
                                <span class="critere-around">
                                    <span class="critere-first d-inline-flex">
                                        <span class="critere-item c1">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/room.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide">
                                                    <input id="input-range-check" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                </span>
                                                <span class="rest-text">
                                                    Chambre à coucher
                                                </span>
                                            </span>
                                        </span>
                                        <span class="critere-item c2">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slided">
                                                    <label for="">
                                                        <input type="checkbox">
                                                        Meublé
                                                    </label>
                                                </span>
                                                <span class="rest-texte">
                                                    <label for="">
                                                        <input type="checkbox">
                                                        Non meublé
                                                    </label>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="critere-item c3">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/bathroom.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide">
                                                    <input id="input-range-check-2" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                </span>
                                                <span class="rest-text-3">Salle de bain</span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="critere-second mt-5 d-flex justify-content-around mr-401">
                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                    <input type="checkbox">
                                                </span>
                                                <span class="rest-text-2 a1">Longue durée</span>
                                            </span>
                                        </span>
                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                    <input type="checkbox">
                                                </span>
                                                <span class="rest-text-2 a2">Courte durée</span>
                                            </span>
                                        </span>
                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/friendship.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                    <input type="checkbox">
                                                </span>
                                                <span class="rest-text-2 a3">Colocation</span>
                                            </span>
                                        </span>
                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/student.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                    <input type="checkbox">
                                                </span>
                                                <span class="rest-text-2 text-capitalize a4">étudiant</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="input-search">
                            <input type="text" class="form-control rounded-pill small-text" style="width: 229px; height: 46px; margin-left: 10px;" placeholder="Mot-clés">
                        </div>
                        <div class="p-top">
                            <span class="checkboxes d-block">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                    Particulier
                                </label>
                            </span>
                            <span class="checkboxes d-block has-check">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                    Professionnel
                                </label>
                            </span>
                        </div>
                        <span class="myHouse-sort" id="myHouse-sort">
                            <span class="myHouse-sort-image">
                                <img src="{{ asset('images/residential/sort.svg') }}" alt="">
                            </span>
                            <span class="myHouse-sort-text">Tri</span>
                            <span class="myHouse-sort-dropdown" id="myHouse-sort-dropdown">
                                <span class="sort-around">
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort" name="sort" checked>
                                        <label for="sort">Date de mise en ligne</label>
                                    </span>
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort2" name="sort">
                                        <label for="sort2">Date de mise à jour</label>
                                    </span>
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort3" name="sort">
                                        <label for="sort3">Distance du centre-ville</label>
                                    </span>
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort4" name="sort">
                                        <label for="sort4">Distance de mon lieu de recherche</label>
                                    </span>
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort5" name="sort">
                                        <label for="sort5">Prix croissant</label>
                                    </span>
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort6" name="sort">
                                        <label for="sort6">Prix décroissant</label>
                                    </span>
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort7" name="sort">
                                        <label for="sort7">Surface croissante</label>
                                    </span>
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort8" name="sort">
                                        <label for="sort8">Surface décroissante</label>
                                    </span>

                                </span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </form>
    </header>
</div>
<!-- HEADER -->

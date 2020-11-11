@php

        $four = ['appartement', 'Villa', 'Maison', 'Cabanon/Chalet', 'Riad', 'Ferme', 'Chambre d\'hôte'];
        $three = ['Cité universitaire', 'Bureau', 'Plateau'];
        $two = ['Terrain agricole', 'Terrain résidentiel', 'Terrain industriel', 'Terrain commercial', 'Propriété agricole'];
        $one = ['Immeuble/Bâtiment', 'Local commercial', 'Garage', 'Entrepôt/Hangar', 'Local industriel'];

        $residential = ['appartement', 'Villa', 'Maison', 'Chalet', 'Riad', 'Ferme', 'Chambre d\'hôte', 'Cité universitaire'];
        $commercial = ['Bureau', 'Plateau', 'Propriété agricole', 'Immeuble/Bâtiment', 'Local commercial', 'Garage', 'Entrepôt', 'Local industriel'];
        $terrain = ['Agricole', 'Terrain résidentiel', 'Terrain industriel', 'Terrain commercial'];

@endphp


@isset($particulier)


      @if (in_array($particulier->typeBien->nom, $four))

         <div class="h-grid-4">

            <div class="the-page-descriptions">
                <div class="the-page-descriptions-button">
                    {{ __('myhouse/modules/description.aa') }}
                </div>

                <div class="the-descriptions-head">

                    <div class="the-descriptions-head-item the-descriptions-head-item-bg">

                        <div class="the-descriptions-head-box">
                            <div class="the-descriptions-head-box-img">
                                <img src="{{ asset('images/residential/single/s1.svg') }}" alt="">
                            </div>
                            <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                                {{ __('myhouse/modules/description.ab') }}
                            </div>
                        </div>

                        @if ($particulier->cuisine_type)
                            <div class="the-descriptions-body-box">
                                {{ $particulier->appart_type_un }}
                            </div>
                        @endif

                        @if ($particulier->facade_type)
                            <div class="the-descriptions-body-box">
                                {{ $particulier->facade_type }}
                            </div>
                        @endif




                        @if ($particulier->colocation != 0)
                            <div class="the-descriptions-body-box">
                                Colocation acceptée
                            </div>
                        @endif


                        @if ($particulier->location_etudiant != 0)
                            <div class="the-descriptions-body-box">
                                Etudiant(e) accepté(e)
                            </div>
                        @endif


                           @if (in_array($particulier->typeBien->nom, $commercial))

                                @if ($particulier->location_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Location avec mobilier
                                    </div>
                                @endif

                                @if ($particulier->location_non_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Location sans mobilier
                                    </div>
                                @endif


                                @if ($particulier->vente_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Vente avec mobilier
                                    </div>
                                @endif


                                @if ($particulier->vente_non_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Vente sans mobilier
                                    </div>
                                @endif


                            @elseif (in_array($particulier->typeBien->nom, $residential))
                                @if ($particulier->location_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Location meublée
                                    </div>
                                @endif

                                @if ($particulier->location_non_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Location non meublée
                                    </div>
                                @endif


                                @if ($particulier->vente_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Vente meublée
                                    </div>
                                @endif


                                @if ($particulier->vente_non_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Vente non meublée
                                    </div>
                                @endif

                            @endif



                        @if ($particulier->appart_etage_niveau)
                            <div class="the-descriptions-body-box">
                                {{ $particulier->appart_etage_niveau }}
                            </div>
                        @endif

                        @if ($particulier->appart_etage_nombre)
                            <div class="the-descriptions-body-box">
                                {{ $particulier->appart_etage_nombre }}
                            </div>
                        @endif


                        @if ($particulier->appart_etage)
                            <div class="the-descriptions-body-box">
                                {{ $particulier->appart_etage }}
                            </div>
                        @endif


                        @if ($particulier->appart_etage_immeuble)
                            <div class="the-descriptions-body-box">
                                {{ $particulier->appart_etage_immeuble }}
                            </div>
                        @endif



                        @if ($particulier->appart_etage_nombre)
                            <div class="the-descriptions-body-box">
                                {{ $particulier->appart_etage_nombre }}
                            </div>
                        @endif



                        @if ($particulier->amenagement_type)
                            <div class="the-descriptions-body-box">
                                {{ $particulier->amenagement_type }}
                            </div>
                        @endif


                        @if ($particulier->superficie_terrain)
                            <div class="the-descriptions-body-box">
                                Superficie {{ $particulier->superficie_terrain }} m²
                            </div>
                        @endif



                    </div>


                    @isset ($particulier->typeBien->nom)

                        @if ($particulier->typeBien->nom == "Chambre d'hôte")
                            <div class="the-descriptions-head-item the-descriptions-head-item-bg">

                                <div class="the-descriptions-head-box">
                                    <div class="the-descriptions-head-box-img">
                                        <img src="{{ asset('images/residential/single/tt.svg') }}" alt="">
                                    </div>
                                    <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                                        {{ __('myhouse/modules/description.af') }}
                                    </div>
                                </div>




                                @if ($particulier->dejeune != 0)
                                    <div class="the-descriptions-body-box">
                                    Petit-déj inclus
                                    </div>
                                @endif

                                @if ($particulier->place_vehicule)
                                    <div class="the-descriptions-body-box">
                                        {{ $particulier->place_vehicule }}
                                    </div>
                                @endif


                                @if ($particulier->terrasses)
                                    <div class="the-descriptions-body-box">
                                        {{ $particulier->terrasses }}
                                    </div>
                                @endif


                                @if ($particulier->balcons)
                                    <div class="the-descriptions-body-box">
                                        {{ $particulier->balcons }}
                                    </div>
                                @endif

                                @if ($particulier->wifi != 0)
                                    <div class="the-descriptions-body-box">
                                    Wifi
                                    </div>
                                @endif

                                @if ($particulier->tele_cable != 0)
                                    <div class="the-descriptions-body-box">
                                    Télévision cablée
                                    </div>
                                @endif


                                @if ($particulier->type_chambre)
                                    <div class="the-descriptions-body-box">
                                        {{ $particulier->type_chambre  }}
                                    </div>
                                @endif



                                @if ($particulier->chambre_non_fumeur != 0)
                                    <div class="the-descriptions-body-box">
                                    Chambre non-fumeur
                                    </div>
                                @endif



                                @if ($particulier->service_en_chambre != 0)
                                    <div class="the-descriptions-body-box">
                                    Service en chambre
                                    </div>
                                @endif



                                @if ($particulier->menage_quotidien != 0)
                                    <div class="the-descriptions-body-box">
                                    Ménage quotidien
                                    </div>
                                @endif


                                @if ($particulier->animal_de_compagnie != 0)
                                    <div class="the-descriptions-body-box">
                                    Animal de compagnie

                                    </div>
                                @endif






                            </div>
                        @else
                            <div class="the-descriptions-head-item the-descriptions-head-item-bg">

                                <div class="the-descriptions-head-box">
                                    <div class="the-descriptions-head-box-img">
                                        <img src="{{ asset('images/residential/single/tt.svg') }}" alt="">
                                    </div>
                                    <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                                        {{ __('myhouse/modules/description.ae') }}
                                    </div>
                                </div>


                                @if ($particulier->cuisine_type)
                                    <div class="the-descriptions-body-box">
                                        {{ $particulier->cuisine_type }}
                                    </div>
                                @endif




                                @if ($particulier->cuisine_equipe != 0)
                                    <div class="the-descriptions-body-box">
                                        Cuisine équipée
                                    </div>
                                @endif

                                @if ($particulier->nombre_chambre)
                                    <div class="the-descriptions-body-box">
                                        {{ $particulier->nombre_chambre  }}
                                    </div>
                                @endif


                                @if ($particulier->dressings)
                                    <div class="the-descriptions-body-box">
                                        {{ $particulier->dressings }}
                                    </div>
                                @endif


                                @if ($particulier->nombre_salle_bain)
                                    <div class="the-descriptions-body-box">
                                        {{ $particulier->nombre_salle_bain }}
                                    </div>
                                @endif

                                @if ($particulier->nombre_salon)
                                    <div class="the-descriptions-body-box">
                                        {{ $particulier->nombre_salon }}
                                    </div>
                                @endif

                                @if ($particulier->place_vehicule)
                                    <div class="the-descriptions-body-box">
                                        {{ $particulier->place_vehicule }}
                                    </div>
                                @endif


                                @if ($particulier->terrasses)
                                    <div class="the-descriptions-body-box">
                                        {{ $particulier->terrasses }}
                                    </div>
                                @endif


                                @if ($particulier->balcons)
                                    <div class="the-descriptions-body-box">
                                        {{ $particulier->balcons }}
                                    </div>
                                @endif

                                @if ($particulier->jardin_privatif != 0)
                                    <div class="the-descriptions-body-box">
                                        Jardin privatif
                                    </div>
                                @endif




                                @if ($particulier->piscine != 0)
                                    <div class="the-descriptions-body-box">
                                        Piscine
                                    </div>
                                @endif


                                @if ($particulier->cour != 0)
                                    <div class="the-descriptions-body-box">
                                        Cour/Patio
                                    </div>
                                @endif

                                @if ($particulier->interphone != 0)
                                    <div class="the-descriptions-body-box">
                                        Buanderie
                                    </div>
                                @endif


                                @if ($particulier->cheminee != 0)
                                    <div class="the-descriptions-body-box">
                                        Cheminee
                                    </div>
                                @endif
                                @if ($particulier->climatisation != 0)
                                    <div class="the-descriptions-body-box">
                                        Climatisation
                                    </div>
                                @endif
                                @if ($particulier->chauffage != 0)
                                    <div class="the-descriptions-body-box">
                                        Chauffage
                                    </div>
                                @endif
                                @if ($particulier->jaccuzi != 0)
                                    <div class="the-descriptions-body-box">
                                        Jaccuzi
                                    </div>
                                @endif
                                @if ($particulier->hammam_beldi != 0)
                                    <div class="the-descriptions-body-box">
                                        Hamam beldi
                                    </div>
                                @endif
                                @if ($particulier->cave != 0)
                                    <div class="the-descriptions-body-box">
                                        Cave
                                    </div>
                                @endif
                                @if ($particulier->chauffe_eau != 0)
                                    <div class="the-descriptions-body-box">
                                        Chauffe-eau
                                    </div>
                                @endif






                            </div>
                        @endif

                    @endif







                    <div class="the-descriptions-head-item the-descriptions-head-item-bg-middle">

                        <div class="the-descriptions-head-box">
                            <div class="the-descriptions-head-box-img">
                                <img src="{{ asset('images/residential/single/s2.svg') }}" alt="">
                            </div>
                            <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                                {{ __('myhouse/modules/description.ac') }}
                            </div>
                        </div>

                        @if ($particulier->espace_vert != 0)
                            <div class="the-descriptions-body-box">
                                Espace vert
                            </div>
                        @endif

                        @if ($particulier->garage_ferme)
                            <div class="the-descriptions-body-box">
                                {{ $particulier->garage_ferme }}
                            </div>
                        @endif

                        @if ($particulier->exploitation_agricole != 0)
                            <div class="the-descriptions-body-box">
                                Exploitation agricole
                            </div>
                        @endif

                        @if ($particulier->gardiennage != 0)
                            <div class="the-descriptions-body-box">
                                Gardiennage
                            </div>
                        @endif

                        @if ($particulier->interphone != 0)
                            <div class="the-descriptions-body-box">
                                Interphone
                            </div>
                        @endif




                        @if ($particulier->box != 0)
                            <div class="the-descriptions-body-box">
                                Box
                            </div>
                        @endif
                        @if ($particulier->piscine != 0)
                            <div class="the-descriptions-body-box">
                                Piscine
                            </div>
                        @endif
                        @if ($particulier->terrain_sport != 0)
                            <div class="the-descriptions-body-box">
                                Terrain de sport
                            </div>
                        @endif
                        @if ($particulier->spa != 0)
                            <div class="the-descriptions-body-box">
                                Spa
                            </div>
                        @endif
                        @if ($particulier->superette != 0)
                            <div class="the-descriptions-body-box">
                                Superette
                            </div>
                        @endif
                        @if ($particulier->ecole != 0)
                            <div class="the-descriptions-body-box">
                                Ecole
                            </div>
                        @endif
                        @if ($particulier->mosquee != 0)
                            <div class="the-descriptions-body-box">
                                Mosquée
                            </div>
                        @endif
                        @if ($particulier->shopping != 0)
                            <div class="the-descriptions-body-box">
                                Shopping
                            </div>
                        @endif
                        @if ($particulier->restaurent != 0)
                            <div class="the-descriptions-body-box">
                                Restaurent
                            </div>
                        @endif

                        @if ($particulier->cafeteriat != 0)
                            <div class="the-descriptions-body-box">
                                Cafeteriat
                            </div>
                        @endif
                    </div>
                    <div class="the-descriptions-head-item the-descriptions-head-item-bg">
                        <div class="the-descriptions-head-box">
                            <div class="the-descriptions-head-box-img">
                                <img src="{{ asset('images/residential/single/s3.svg') }}" alt="">
                            </div>
                            <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                                {{ __('myhouse/modules/description.ad') }}
                            </div>
                        </div>

                        @if ($particulier->plage)
                            <div class="the-descriptions-body-box">
                                Plage <span class="text-green float-right">{{ $particulier->plage }}</span>
                            </div>
                        @endif
                        @if ($particulier->voie)
                            <div class="the-descriptions-body-box">
                                Voie <span class="text-green float-right">{{ $particulier->voie }}</span>
                            </div>
                        @endif
                        @if ($particulier->campagne)
                            <div class="the-descriptions-body-box">
                                Campagne <span class="text-green float-right">{{ $particulier->campagne }}</span>
                            </div>
                        @endif
                        @if ($particulier->montagne)
                            <div class="the-descriptions-body-box">
                                Montagne <span class="text-green float-right">{{ $particulier->montagne }}</span>
                            </div>
                        @endif
                        @if ($particulier->desert)
                            <div class="the-descriptions-body-box">
                                Desert <span class="text-green float-right">{{ $particulier->desert }}</span>
                            </div>
                        @endif
                        @if ($particulier->spot_surf)
                            <div class="the-descriptions-body-box">
                                Spot surf <span class="text-green float-right">{{ $particulier->spot_surf }}</span>
                            </div>
                        @endif
                        @if ($particulier->riviere)
                            <div class="the-descriptions-body-box">
                                Rivière <span class="text-green float-right">{{ $particulier->riviere }}</span>
                            </div>
                        @endif
                        @if ($particulier->golf)
                            <div class="the-descriptions-body-box">
                                Golf <span class="text-green float-right">{{ $particulier->golf }}</span>
                            </div>
                        @endif
                        @if ($particulier->foret)
                            <div class="the-descriptions-body-box">
                                Forêt <span class="text-green float-right">{{ $particulier->foret }}</span>
                            </div>
                        @endif
                        @if ($particulier->station_ski)
                            <div class="the-descriptions-body-box">
                                Station de ski <span class="text-green float-right">{{ $particulier->station_ski }}</span>
                            </div>
                        @endif


                    </div>

                </div>



            </div>
        </div>

      @elseif(in_array($particulier->typeBien->nom, $three))

        <div class="h-grid-3">

            <div class="the-page-descriptions">
                    <div class="the-page-descriptions-button">
                        {{ __('myhouse/modules/description.aa') }}
                    </div>

                    <div class="the-descriptions-head-3">

                        <div class="the-descriptions-head-item the-descriptions-head-item-bg">

                            <div class="the-descriptions-head-box">
                                <div class="the-descriptions-head-box-img">
                                    <img src="{{ asset('images/residential/single/g7.svg') }}" alt="">
                                </div>
                                <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                                    {{ __('myhouse/modules/description.ab') }}
                                </div>
                            </div>

                            @if ($particulier->appart_type_un)
                                <div class="the-descriptions-body-box">
                                    {{ $particulier->appart_type_un }}
                                </div>
                            @endif

                            @if ($particulier->zone_disponible)
                                <div class="the-descriptions-body-box">
                                    {{ $particulier->zone_disponible }}
                                </div>
                            @endif


                            @if ($particulier->appart_etage_nombre)
                                <div class="the-descriptions-body-box">
                                    {{ $particulier->appart_etage_nombre }}
                                </div>
                            @endif




                            @if (in_array($particulier->typeBien->nom, $commercial))

                                @if ($particulier->location_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Location avec mobilier
                                    </div>
                                @endif

                                @if ($particulier->location_non_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Location sans mobilier
                                    </div>
                                @endif


                                @if ($particulier->vente_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Vente avec mobilier
                                    </div>
                                @endif


                                @if ($particulier->vente_non_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Vente sans mobilier
                                    </div>
                                @endif


                            @elseif (in_array($particulier->typeBien->nom, $residential))
                                @if ($particulier->location_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Location meublée
                                    </div>
                                @endif

                                @if ($particulier->location_non_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Location non meublée
                                    </div>
                                @endif


                                @if ($particulier->vente_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Vente meublée
                                    </div>
                                @endif


                                @if ($particulier->vente_non_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Vente non meublée
                                    </div>
                                @endif

                            @endif




                            @if ($particulier->typeBien->nom === 'Cité universitaire')
                                <div class="the-descriptions-body-box">
                                    Type de chambres <br>

                                    @if ($particulier->individuelle)
                                        Individuelle <br>
                                    @endif

                                    @if ($particulier->deux_lits)
                                        2 lits <br>
                                    @endif

                                    @if ($particulier->trois_lits)
                                        3 lits <br>
                                    @endif

                                    @if ($particulier->quatre_lits)
                                        4 lits <br>
                                    @endif

                                </div>


                            @endif




                            @if ($particulier->appart_etage_immeuble)
                                <div class="the-descriptions-body-box">
                                    {{ $particulier->appart_etage_immeuble }}
                                </div>
                            @endif


                            @if ($particulier->coworking != 0)
                                <div class="the-descriptions-body-box">
                                    Coworking
                                </div>
                            @endif

                            @if ($particulier->domiciliation != 0)
                                <div class="the-descriptions-body-box">
                                    Domiciliation
                                </div>
                            @endif





                        </div>

                        <div class="the-descriptions-head-item ca-page-item-third-type-box-border-tb">

                                    <div class="the-descriptions-head-box">
                                        <div class="the-descriptions-head-box-img">
                                            <img src="{{ asset('images/residential/single/i1.svg') }}" alt="">
                                        </div>
                                        <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                                            {{ __('myhouse/modules/description.ae') }}
                                        </div>
                                    </div>



                                    @if ($particulier->open_space != 0)
                                        <div class="the-descriptions-body-box">
                                        Open space
                                        </div>
                                    @endif



                                    @if ($particulier->nombre_box )
                                        <div class="the-descriptions-body-box">
                                            {{ $particulier->nombre_box  }}
                                        </div>
                                    @endif


                                    @if ($particulier->nombre_piece)
                                        <div class="the-descriptions-body-box">
                                            {{ $particulier->nombre_piece  }}
                                        </div>
                                    @endif






                                    @if ($particulier->hauteur_sous_plafond)
                                        <div class="the-descriptions-body-box">
                                            Hauteur sous plafond <span class="text-green float-right">{{ $particulier->hauteur_sous_plafond }}</span>
                                        </div>
                                    @endif


                                    @if ($particulier->internet != 0)
                                        <div class="the-descriptions-body-box">
                                        Internet
                                        </div>
                                    @endif


                                    @if ($particulier->wc_sanitaire != 0)
                                        <div class="the-descriptions-body-box">
                                        WC/Sanitaires
                                        </div>
                                    @endif


                                    @if ($particulier->chauffe_eau != 0)
                                        <div class="the-descriptions-body-box">
                                        Chauffe-eau
                                        </div>
                                    @endif


                                    @if ($particulier->terrasses != 0)
                                        <div class="the-descriptions-body-box">
                                            {{ $particulier->terrasses  }}
                                        </div>
                                    @endif



                                    @if ($particulier->balcons != 0)
                                        <div class="the-descriptions-body-box">
                                            {{ $particulier->balcons  }}
                                        </div>
                                    @endif



                                    @if ($particulier->coin_cuisine != 0)
                                        <div class="the-descriptions-body-box">
                                            Coin cuisine
                                        </div>
                                    @endif




                                    @if ($particulier->cour != 0)
                                        <div class="the-descriptions-body-box">
                                            Cour/Patio
                                        </div>
                                    @endif



                                    @if ($particulier->climatisation != 0)
                                        <div class="the-descriptions-body-box">
                                            Climatisation
                                        </div>
                                    @endif
                                    @if ($particulier->chauffage != 0)
                                        <div class="the-descriptions-body-box">
                                            Chauffage
                                        </div>
                                    @endif







                                </div>

                        <div class="the-descriptions-head-item the-descriptions-head-item-bg">

                            <div class="the-descriptions-head-box">
                                <div class="the-descriptions-head-box-img">
                                    <img src="{{ asset('images/residential/single/s2.svg') }}" alt="">
                                </div>
                                <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                                    {{ __('myhouse/modules/description.ac') }}
                                </div>
                            </div>



                            @if ($particulier->exploitation_agricole != 0)
                                <div class="the-descriptions-body-box">
                                    Gardiennage
                                </div>
                            @endif

                            @if ($particulier->gardiennage != 0)
                                <div class="the-descriptions-body-box">
                                    Accueil

                                </div>
                            @endif


                                    @if ($particulier->place_vehicule)
                                        <div class="the-descriptions-body-box">
                                            {{ $particulier->place_vehicule  }}
                                        </div>
                                    @endif


                            @if ($particulier->ascenseur != 0)
                                <div class="the-descriptions-body-box">
                                    Ascenseur
                                </div>
                            @endif


                            @if ($particulier->interphone != 0)
                                <div class="the-descriptions-body-box">
                                    Interphone
                                </div>
                            @endif

                            @if ($particulier->monte_charge != 0)
                                <div class="the-descriptions-body-box">
                                    Monte-charge
                                </div>
                            @endif


                            @if ($particulier->espace_vert != 0)
                                <div class="the-descriptions-body-box">
                                    Espaces verts
                                </div>
                            @endif



                        </div>


                    </div>
            </div>

        </div>

      @elseif(in_array($particulier->typeBien->nom, $two))

        <div class="h-grid-2">

            <div class="the-page-descriptions">
                    <div class="the-page-descriptions-button">
                        {{ __('myhouse/modules/description.aa') }}
                    </div>

                    <div class="the-descriptions-head-2">

                        <div class="the-descriptions-head-item the-descriptions-head-item-bg">

                            <div class="the-descriptions-head-box">
                                <div class="the-descriptions-head-box-img">
                                    <img src="{{ asset('images/residential/single/g7.svg') }}" alt="">
                                </div>
                                <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                                    {{ __('myhouse/modules/description.ab') }}
                                </div>
                            </div>




                            @if ($particulier->coworking != 0)
                                <div class="the-descriptions-body-box">
                                    Raccordement eau
                                </div>
                            @endif


                            @if ($particulier->assainissement != 0)
                                <div class="the-descriptions-body-box">
                                    Assainissement
                                </div>
                            @endif


                                    @if ($particulier->lotissement)
                                        <div class="the-descriptions-body-box">
                                            {{ $particulier->lotissement  }}
                                        </div>
                                    @endif


                            @if ($particulier->superficie_exploitable )
                                <div class="the-descriptions-body-box">
                                    Superficie exploitable <span class="text-green float-right">{{ $particulier->superficie_exploitable }}</span>
                                </div>
                            @endif


                            @if ($particulier->surface_batie)
                                <div class="the-descriptions-body-box">
                                    Surface bâtie <span class="text-green float-right">{{ $particulier->surface_batie }}</span>
                                </div>
                            @endif



                            @if ($particulier->titre_foncier != 0)
                                <div class="the-descriptions-body-box">
                                    Titre foncier
                                </div>
                            @endif




                            @if ($particulier->habitation != 0)
                                <div class="the-descriptions-body-box">
                                    Avec habitation

                                </div>
                            @endif


                           @if ($particulier->puits != 0)
                                <div class="the-descriptions-body-box">
                                    Puits
                                </div>
                            @endif


                           @if ($particulier->raccordement_electricite != 0)
                                <div class="the-descriptions-body-box">
                                    Raccordement électricité
                                </div>
                            @endif


                           @if ($particulier->raccordement_telephone != 0)
                                <div class="the-descriptions-body-box">
                                    Raccordement téléphone
                                </div>
                            @endif



                        </div>

                        <div class="the-descriptions-head-item the-descriptions-head-item-bg">
                            <div class="the-descriptions-head-box">
                                <div class="the-descriptions-head-box-img">
                                    <img src="{{ asset('images/residential/single/s3.svg') }}" alt="">
                                </div>
                                <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                                    {{ __('myhouse/modules/description.ad') }}
                                </div>
                            </div>

                            @if ($particulier->voie)
                                <div class="the-descriptions-body-box">
                                    Voie <span class="text-green float-right">{{ $particulier->voie }}</span>
                                </div>
                            @endif

                            @if ($particulier->plage)
                                <div class="the-descriptions-body-box">
                                    Plage <span class="text-green float-right">{{ $particulier->plage }}</span>
                                </div>
                            @endif

                            @if ($particulier->campagne)
                                <div class="the-descriptions-body-box">
                                    Campagne <span class="text-green float-right">{{ $particulier->campagne }}</span>
                                </div>
                            @endif
                            @if ($particulier->montagne)
                                <div class="the-descriptions-body-box">
                                    Montagne <span class="text-green float-right">{{ $particulier->montagne }}</span>
                                </div>
                            @endif
                            @if ($particulier->desert)
                                <div class="the-descriptions-body-box">
                                    Desert <span class="text-green float-right">{{ $particulier->desert }}</span>
                                </div>
                            @endif
                            @if ($particulier->spot_surf)
                                <div class="the-descriptions-body-box">
                                    Spot surf <span class="text-green float-right">{{ $particulier->spot_surf }}</span>
                                </div>
                            @endif
                            @if ($particulier->riviere)
                                <div class="the-descriptions-body-box">
                                    Rivière <span class="text-green float-right">{{ $particulier->riviere }}</span>
                                </div>
                            @endif
                            @if ($particulier->golf)
                                <div class="the-descriptions-body-box">
                                    Golf <span class="text-green float-right">{{ $particulier->golf }}</span>
                                </div>
                            @endif
                            @if ($particulier->foret)
                                <div class="the-descriptions-body-box">
                                    Forêt <span class="text-green float-right">{{ $particulier->foret }}</span>
                                </div>
                            @endif
                            @if ($particulier->station_ski)
                                <div class="the-descriptions-body-box">
                                    Station de ski <span class="text-green float-right">{{ $particulier->station_ski }}</span>
                                </div>
                            @endif


                        </div>


                    </div>
            </div>

        </div>


      @elseif(in_array($particulier->typeBien->nom, $one))
        <div class="h-grid-1">

            <div class="the-page-descriptions">
                    <div class="the-page-descriptions-button">
                        {{ __('myhouse/modules/description.aa') }}
                    </div>

                    <div class="the-descriptions-head-1">


                        <div class="the-descriptions-head-item the-descriptions-head-item-bg">

                            <div class="the-descriptions-head-box">
                                <div class="the-descriptions-head-box-img">
                                    <img src="{{ asset('images/residential/single/g7.svg') }}" alt="">
                                </div>
                                <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                                    {{ __('myhouse/modules/description.ab') }}
                                </div>
                            </div>



                                    @if ($particulier->appart_type_un)
                                        <div class="the-descriptions-body-box">
                                            {{ $particulier->appart_type_un  }}
                                        </div>
                                    @endif

                                    @if ($particulier->amenagement_type)
                                        <div class="the-descriptions-body-box">
                                            {{ $particulier->amenagement_type  }}
                                        </div>
                                    @endif



                                    @if ($particulier->fond_commerce)
                                        <div class="the-descriptions-body-box">
                                            {{ $particulier->fond_commerce  }}
                                        </div>
                                    @endif



                                    @if ($particulier->zone_implante)
                                        <div class="the-descriptions-body-box">
                                            {{ $particulier->zone_implante  }}
                                        </div>
                                    @endif




                           @if (in_array($particulier->typeBien->nom, $commercial))

                                @if ($particulier->location_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Location avec mobilier
                                    </div>
                                @endif

                                @if ($particulier->location_non_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Location sans mobilier
                                    </div>
                                @endif


                                @if ($particulier->vente_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Vente avec mobilier
                                    </div>
                                @endif


                                @if ($particulier->vente_non_meuble != 0)
                                    <div class="the-descriptions-body-box">
                                        Vente sans mobilier
                                    </div>
                                @endif


                            @elseif (in_array($particulier->typeBien->nom, $residential))
                                @if ($particulier->location_meuble)
                                    <div class="the-descriptions-body-box">
                                        Location meublée
                                    </div>
                                @endif

                                @if ($particulier->location_non_meuble)
                                    <div class="the-descriptions-body-box">
                                        Location non meublée
                                    </div>
                                @endif


                                @if ($particulier->vente_meuble)
                                    <div class="the-descriptions-body-box">
                                        Vente meublée
                                    </div>
                                @endif


                                @if ($particulier->vente_non_meuble)
                                    <div class="the-descriptions-body-box">
                                        Vente non meublée
                                    </div>
                                @endif

                            @endif









                            @if ($particulier->sous_pente)
                                <div class="the-descriptions-body-box">
                                    Sous-pente <span class="text-green float-right">{{ $particulier->sous_pente }}</span>
                                </div>
                            @endif


                            @if ($particulier->terrasse_commerciale)
                                <div class="the-descriptions-body-box">
                                    Terrasse commerciale <span class="text-green float-right">{{ $particulier->terrasse_commerciale }}</span>
                                </div>
                            @endif



                            @if ($particulier->hauteur_entrepot)
                                <div class="the-descriptions-body-box">
                                    Hauteur entrepôt <span class="text-green float-right">{{ $particulier->hauteur_entrepot }}</span>
                                </div>
                            @endif



                            @if ($particulier->surface_batie)
                                <div class="the-descriptions-body-box">
                                    Surface bâtie <span class="text-green float-right">{{ $particulier->surface_batie }}</span>
                                </div>
                            @endif


                                    @if ($particulier->nombre_piece)
                                        <div class="the-descriptions-body-box">
                                            {{ $particulier->nombre_piece  }}
                                        </div>
                                    @endif



                            @if ($particulier->angle_de_rue != 0)
                                <div class="the-descriptions-body-box">
                                    Angle de rue
                                </div>
                            @endif


                            @if ($particulier->espace_activite )
                                <div class="the-descriptions-body-box">
                                    Espace activités <span class="text-green float-right">{{ $particulier->espace_activite }}</span>
                                </div>
                            @endif


                            @if ($particulier->espace_entrepot)
                                <div class="the-descriptions-body-box">
                                    Espace entrepôts <span class="text-green float-right">{{ $particulier->espace_entrepot }}</span>
                                </div>
                            @endif


                            @if ($particulier->espace_bureau)
                                <div class="the-descriptions-body-box">
                                    Espace bureaux <span class="text-green float-right">{{ $particulier->espace_bureau }}</span>
                                </div>
                            @endif



                            @if ($particulier->wc_sanitaire != 0)
                                <div class="the-descriptions-body-box">
                                    WC/Sanitaires
                                </div>
                            @endif


                                    @if ($particulier->place_vehicule)
                                        <div class="the-descriptions-body-box">
                                            {{ $particulier->place_vehicule  }}
                                        </div>
                                    @endif


                                    @if ($particulier->amenagement_type)
                                        <div class="the-descriptions-body-box">
                                            {{ $particulier->amenagement_type  }}
                                        </div>
                                    @endif



                            @if ($particulier->alarme != 0)
                                <div class="the-descriptions-body-box">
                                    Alarme
                                </div>
                            @endif




                            @if ($particulier->site_clos != 0)
                                <div class="the-descriptions-body-box">
                                    Site clos
                                </div>
                            @endif



                            @if ($particulier->garage_vehicule != 0)
                                <div class="the-descriptions-body-box">
                                    Garage véhicules
                                </div>
                            @endif



                            @if ($particulier->pont_roulant != 0)
                                <div class="the-descriptions-body-box">
                                    Pont roulant
                                </div>
                            @endif

                                <div class="the-descriptions-body-box">
                                    Taille portail <br>

                                    @if ($particulier->portail)
                                        Haut  {{ $particulier->portail }} m x Larg {{ $particulier_portail_deux }} m <br>
                                    @endif

                                     @if ($particulier->portail_un)
                                        Haut  {{ $particulier->portail_un ?? '' }} m x Larg {{ $particulier_portail_deux ?? '' }} m <br>
                                        Haut  {{ $particulier->portail_trois ?? '' }} m x Larg {{ $particulier_portail_quatre ?? '' }} m <br>
                                        Haut  {{ $particulier->portail_cinq ?? '' }} m x Larg {{ $particulier_portail_six ?? '' }} m <br>
                                        Haut  {{ $particulier->portail_sept ?? '' }} m x Larg {{ $particulier_portail_huit ?? '' }} m <br>
                                    @endif

                                </div>



                        </div>


                    </div>
            </div>

        </div>
      @endif




@endisset


@isset($professionnel)
    <div class="the-page-descriptions">
        <div class="the-page-descriptions-button">
            {{ __('myhouse/modules/description.aa') }}
        </div>

        <div class="the-descriptions-head">

            <div class="the-descriptions-head-item the-descriptions-head-item-bg">

                <div class="the-descriptions-head-box">
                    <div class="the-descriptions-head-box-img">
                        <img src="{{ asset('images/residential/single/s1.svg') }}" alt="">
                    </div>
                    <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                        {{ __('myhouse/modules/description.ab') }}
                    </div>
                </div>

                @if ($professionnel->appart_type_un)
                    <div class="the-descriptions-body-box">
                        {{ $professionnel->appart_type_un }}
                    </div>
                @endif

                @if ($professionnel->surface_habitable)
                    <div class="the-descriptions-body-box">
                        Surface habitable {{ $professionnel->surface_habitable }}
                    </div>
                @endif

                @if ($professionnel->appart_etage_niveau)
                    <div class="the-descriptions-body-box">
                        {{ $professionnel->appart_etage_niveau }}
                    </div>
                @endif

                @if ($professionnel->appart_etage_nombre)
                    <div class="the-descriptions-body-box">
                        {{ $professionnel->appart_etage_nombre }}
                    </div>
                @endif


                @if ($professionnel->appart_etage)
                    <div class="the-descriptions-body-box">
                        {{ $professionnel->appart_etage }}
                    </div>
                @endif


                @if ($professionnel->appart_etage_immeuble)
                    <div class="the-descriptions-body-box">
                        {{ $professionnel->appart_etage_immeuble }}
                    </div>
                @endif



                @if ($professionnel->appart_etage_nombre)
                    <div class="the-descriptions-body-box">
                        {{ $professionnel->appart_etage_nombre }}
                    </div>
                @endif



                @if ($professionnel->amenagement_type)
                    <div class="the-descriptions-body-box">
                        {{ $professionnel->amenagement_type }}
                    </div>
                @endif


                @if ($professionnel->superficie_terrain)
                    <div class="the-descriptions-body-box">
                        Superficie {{ $professionnel->superficie_terrain }} m²
                    </div>
                @endif



            </div>
            <div class="the-descriptions-head-item the-descriptions-head-item-bg-middle">

                <div class="the-descriptions-head-box">
                    <div class="the-descriptions-head-box-img">
                        <img src="{{ asset('images/residential/single/s2.svg') }}" alt="">
                    </div>
                    <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                        {{ __('myhouse/modules/description.ac') }}
                    </div>
                </div>

                @if ($professionnel->gardiennage)
                    <div class="the-descriptions-body-box">
                        Gardiennage
                    </div>
                @endif
                @if ($professionnel->espace_vert)
                    <div class="the-descriptions-body-box">
                        Espace vert
                    </div>
                @endif
                @if ($professionnel->place_vehicule)
                    <div class="the-descriptions-body-box">
                        {{ $professionnel->place_vehicule }}
                    </div>
                @endif
                @if ($professionnel->box)
                    <div class="the-descriptions-body-box">
                        Box
                    </div>
                @endif
                @if ($professionnel->piscine)
                    <div class="the-descriptions-body-box">
                        Piscine
                    </div>
                @endif
                @if ($professionnel->terrain_sport)
                    <div class="the-descriptions-body-box">
                        Terrain de sport
                    </div>
                @endif
                @if ($professionnel->spa)
                    <div class="the-descriptions-body-box">
                        Spa
                    </div>
                @endif
                @if ($professionnel->superette)
                    <div class="the-descriptions-body-box">
                        Superette
                    </div>
                @endif
                @if ($professionnel->ecole)
                    <div class="the-descriptions-body-box">
                        Ecole
                    </div>
                @endif
                @if ($professionnel->mosquee)
                    <div class="the-descriptions-body-box">
                        Mosquée
                    </div>
                @endif
                @if ($professionnel->shopping)
                    <div class="the-descriptions-body-box">
                        Shopping
                    </div>
                @endif
                @if ($professionnel->restaurent)
                    <div class="the-descriptions-body-box">
                        Restaurent
                    </div>
                @endif


            </div>
            <div class="the-descriptions-head-item the-descriptions-head-item-bg">
                <div class="the-descriptions-head-box">
                    <div class="the-descriptions-head-box-img">
                        <img src="{{ asset('images/residential/single/s3.svg') }}" alt="">
                    </div>
                    <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                        {{ __('myhouse/modules/description.ad') }}
                    </div>
                </div>

                @if ($professionnel->plage)
                    <div class="the-descriptions-body-box">
                        Plage <span class="text-green float-right">{{ $professionnel->plage }}</span>
                    </div>
                @endif
                @if ($professionnel->voie)
                    <div class="the-descriptions-body-box">
                        Voie <span class="text-green float-right">{{ $professionnel->voie }}</span>
                    </div>
                @endif
                @if ($professionnel->campagne)
                    <div class="the-descriptions-body-box">
                        Campagne <span class="text-green float-right">{{ $professionnel->campagne }}</span>
                    </div>
                @endif
                @if ($professionnel->montagne)
                    <div class="the-descriptions-body-box">
                        Montagne <span class="text-green float-right">{{ $professionnel->montagne }}</span>
                    </div>
                @endif
                @if ($professionnel->desert)
                    <div class="the-descriptions-body-box">
                        Desert <span class="text-green float-right">{{ $professionnel->desert }}</span>
                    </div>
                @endif
                @if ($professionnel->spot_surf)
                    <div class="the-descriptions-body-box">
                        Spot surf <span class="text-green float-right">{{ $professionnel->spot_surf }}</span>
                    </div>
                @endif
                @if ($professionnel->riviere)
                    <div class="the-descriptions-body-box">
                        Rivière <span class="text-green float-right">{{ $professionnel->riviere }}</span>
                    </div>
                @endif
                @if ($professionnel->golf)
                    <div class="the-descriptions-body-box">
                        Golf <span class="text-green float-right">{{ $professionnel->golf }}</span>
                    </div>
                @endif
                @if ($professionnel->foret)
                    <div class="the-descriptions-body-box">
                        Forêt <span class="text-green float-right">{{ $professionnel->foret }}</span>
                    </div>
                @endif
                @if ($professionnel->station_ski)
                    <div class="the-descriptions-body-box">
                        Station de ski <span class="text-green float-right">{{ $professionnel->station_ski }}</span>
                    </div>
                @endif


            </div>

        </div>



    </div>
@endisset


@isset($neuf)
    <div class="the-page-descriptions">
        <div class="the-page-descriptions-button">
            {{ __('myhouse/modules/description.aa') }}
        </div>

        <div class="the-descriptions-head">

            <div class="the-descriptions-head-item the-descriptions-head-item-bg">

                <div class="the-descriptions-head-box">
                    <div class="the-descriptions-head-box-img">
                        <img src="{{ asset('images/residential/single/s1.svg') }}" alt="">
                    </div>
                    <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                        {{ __('myhouse/modules/description.ab') }}
                    </div>
                </div>

                @if ($neuf->appart_type_un)
                    <div class="the-descriptions-body-box">
                        {{ $neuf->appart_type_un }}
                    </div>
                @endif

                @if ($neuf->surface_habitable)
                    <div class="the-descriptions-body-box">
                        Surface habitable {{ $neuf->surface_habitable }}
                    </div>
                @endif

                @if ($neuf->appart_etage_niveau)
                    <div class="the-descriptions-body-box">
                        {{ $neuf->appart_etage_niveau }}
                    </div>
                @endif

                @if ($neuf->appart_etage_nombre)
                    <div class="the-descriptions-body-box">
                        {{ $neuf->appart_etage_nombre }}
                    </div>
                @endif


                @if ($neuf->appart_etage)
                    <div class="the-descriptions-body-box">
                        {{ $neuf->appart_etage }}
                    </div>
                @endif


                @if ($neuf->appart_etage_immeuble)
                    <div class="the-descriptions-body-box">
                        {{ $neuf->appart_etage_immeuble }}
                    </div>
                @endif



                @if ($neuf->appart_etage_nombre)
                    <div class="the-descriptions-body-box">
                        {{ $neuf->appart_etage_nombre }}
                    </div>
                @endif



                @if ($neuf->amenagement_type)
                    <div class="the-descriptions-body-box">
                        {{ $neuf->amenagement_type }}
                    </div>
                @endif


                @if ($neuf->superficie_terrain)
                    <div class="the-descriptions-body-box">
                        Superficie {{ $neuf->superficie_terrain }} m²
                    </div>
                @endif



            </div>
            <div class="the-descriptions-head-item the-descriptions-head-item-bg-middle">

                <div class="the-descriptions-head-box">
                    <div class="the-descriptions-head-box-img">
                        <img src="{{ asset('images/residential/single/s2.svg') }}" alt="">
                    </div>
                    <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                        {{ __('myhouse/modules/description.ac') }}
                    </div>
                </div>

                @if ($neuf->gardiennage)
                    <div class="the-descriptions-body-box">
                        Gardiennage
                    </div>
                @endif
                @if ($neuf->espace_vert)
                    <div class="the-descriptions-body-box">
                        Espace vert
                    </div>
                @endif
                @if ($neuf->place_vehicule)
                    <div class="the-descriptions-body-box">
                        {{ $neuf->place_vehicule }}
                    </div>
                @endif
                @if ($neuf->box)
                    <div class="the-descriptions-body-box">
                        Box
                    </div>
                @endif
                @if ($neuf->piscine)
                    <div class="the-descriptions-body-box">
                        Piscine
                    </div>
                @endif
                @if ($neuf->terrain_sport)
                    <div class="the-descriptions-body-box">
                        Terrain de sport
                    </div>
                @endif
                @if ($neuf->spa)
                    <div class="the-descriptions-body-box">
                        Spa
                    </div>
                @endif
                @if ($neuf->superette)
                    <div class="the-descriptions-body-box">
                        Superette
                    </div>
                @endif
                @if ($neuf->ecole)
                    <div class="the-descriptions-body-box">
                        Ecole
                    </div>
                @endif
                @if ($neuf->mosquee)
                    <div class="the-descriptions-body-box">
                        Mosquée
                    </div>
                @endif
                @if ($neuf->shopping)
                    <div class="the-descriptions-body-box">
                        Shopping
                    </div>
                @endif
                @if ($neuf->restaurent)
                    <div class="the-descriptions-body-box">
                        Restaurent
                    </div>
                @endif


            </div>
            <div class="the-descriptions-head-item the-descriptions-head-item-bg">
                <div class="the-descriptions-head-box">
                    <div class="the-descriptions-head-box-img">
                        <img src="{{ asset('images/residential/single/s3.svg') }}" alt="">
                    </div>
                    <div class="the-descriptions-head-box-text" style="padding-left: 6px;">
                        {{ __('myhouse/modules/description.ad') }}
                    </div>
                </div>

                @if ($neuf->plage)
                    <div class="the-descriptions-body-box">
                        Plage <span class="text-green float-right">{{ $neuf->plage }}</span>
                    </div>
                @endif
                @if ($neuf->voie)
                    <div class="the-descriptions-body-box">
                        Voie <span class="text-green float-right">{{ $neuf->voie }}</span>
                    </div>
                @endif
                @if ($neuf->campagne)
                    <div class="the-descriptions-body-box">
                        Campagne <span class="text-green float-right">{{ $neuf->campagne }}</span>
                    </div>
                @endif
                @if ($neuf->montagne)
                    <div class="the-descriptions-body-box">
                        Montagne <span class="text-green float-right">{{ $neuf->montagne }}</span>
                    </div>
                @endif
                @if ($neuf->desert)
                    <div class="the-descriptions-body-box">
                        Desert <span class="text-green float-right">{{ $neuf->desert }}</span>
                    </div>
                @endif
                @if ($neuf->spot_surf)
                    <div class="the-descriptions-body-box">
                        Spot surf <span class="text-green float-right">{{ $neuf->spot_surf }}</span>
                    </div>
                @endif
                @if ($neuf->riviere)
                    <div class="the-descriptions-body-box">
                        Rivière <span class="text-green float-right">{{ $neuf->riviere }}</span>
                    </div>
                @endif
                @if ($neuf->golf)
                    <div class="the-descriptions-body-box">
                        Golf <span class="text-green float-right">{{ $neuf->golf }}</span>
                    </div>
                @endif
                @if ($neuf->foret)
                    <div class="the-descriptions-body-box">
                        Forêt <span class="text-green float-right">{{ $neuf->foret }}</span>
                    </div>
                @endif
                @if ($neuf->station_ski)
                    <div class="the-descriptions-body-box">
                        Station de ski <span class="text-green float-right">{{ $neuf->station_ski }}</span>
                    </div>
                @endif


            </div>

        </div>



    </div>
@endisset

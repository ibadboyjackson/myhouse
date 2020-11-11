@isset($particulier)
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

                @if ($particulier->colocation)
                    <div class="the-descriptions-body-box">
                        Colocation acceptée
                    </div>
                @endif           


                @if ($particulier->location_etudiant)
                    <div class="the-descriptions-body-box">
                        Etudiant(e) accepté(e)
                    </div>
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

                @if ($particulier->cuisine_equipe)
                    <div class="the-descriptions-body-box">
                        Cuisine équipée
                    </div>
                @endif

                @if ($particulier->nombre_chambre)
                    <div class="the-descriptions-body-box">
                        {{ $particulier->nombre_chambre  }}
                    </div>
                @endif


                @if ($particulier->gardiennage)
                    <div class="the-descriptions-body-box">
                        Gardiennage
                    </div>
                @endif
                @if ($particulier->espace_vert)
                    <div class="the-descriptions-body-box">
                        Espace vert
                    </div>
                @endif
                @if ($particulier->interphone)
                    <div class="the-descriptions-body-box">
                        Interphone
                    </div>
                @endif






                @if ($particulier->box)
                    <div class="the-descriptions-body-box">
                        Box
                    </div>
                @endif
                @if ($particulier->piscine)
                    <div class="the-descriptions-body-box">
                        Piscine
                    </div>
                @endif
                @if ($particulier->terrain_sport)
                    <div class="the-descriptions-body-box">
                        Terrain de sport
                    </div>
                @endif
                @if ($particulier->spa)
                    <div class="the-descriptions-body-box">
                        Spa
                    </div>
                @endif
                @if ($particulier->superette)
                    <div class="the-descriptions-body-box">
                        Superette
                    </div>
                @endif
                @if ($particulier->ecole)
                    <div class="the-descriptions-body-box">
                        Ecole
                    </div>
                @endif
                @if ($particulier->mosquee)
                    <div class="the-descriptions-body-box">
                        Mosquée
                    </div>
                @endif
                @if ($particulier->shopping)
                    <div class="the-descriptions-body-box">
                        Shopping
                    </div>
                @endif
                @if ($particulier->restaurent)
                    <div class="the-descriptions-body-box">
                        Restaurent
                    </div>
                @endif

                @if ($particulier->cafeteriat)
                    <div class="the-descriptions-body-box">
                        Cafeteriat
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

                @if ($particulier->gardiennage)
                    <div class="the-descriptions-body-box">
                        Gardiennage
                    </div>
                @endif
                @if ($particulier->espace_vert)
                    <div class="the-descriptions-body-box">
                        Espace vert
                    </div>
                @endif
                @if ($particulier->interphone)
                    <div class="the-descriptions-body-box">
                        Interphone
                    </div>
                @endif



                @if ($particulier->place_vehicule)
                    <div class="the-descriptions-body-box">
                        {{ $particulier->place_vehicule }}
                    </div>
                @endif
                @if ($particulier->box)
                    <div class="the-descriptions-body-box">
                        Box
                    </div>
                @endif
                @if ($particulier->piscine)
                    <div class="the-descriptions-body-box">
                        Piscine
                    </div>
                @endif
                @if ($particulier->terrain_sport)
                    <div class="the-descriptions-body-box">
                        Terrain de sport
                    </div>
                @endif
                @if ($particulier->spa)
                    <div class="the-descriptions-body-box">
                        Spa
                    </div>
                @endif
                @if ($particulier->superette)
                    <div class="the-descriptions-body-box">
                        Superette
                    </div>
                @endif
                @if ($particulier->ecole)
                    <div class="the-descriptions-body-box">
                        Ecole
                    </div>
                @endif
                @if ($particulier->mosquee)
                    <div class="the-descriptions-body-box">
                        Mosquée
                    </div>
                @endif
                @if ($particulier->shopping)
                    <div class="the-descriptions-body-box">
                        Shopping
                    </div>
                @endif
                @if ($particulier->restaurent)
                    <div class="the-descriptions-body-box">
                        Restaurent
                    </div>
                @endif

                @if ($particulier->cafeteriat)
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

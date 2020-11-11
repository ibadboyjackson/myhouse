@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->cuisine_type == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->cuisine_type }}
    </div>

@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->cuisine_equipe == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.am') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->nombre_salle_bain == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->nombre_salle_bain }}
    </div>

@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->nombre_salon == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->nombre_salon }}
    </div>

@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->terrasses == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->terrasses }}
    </div>

@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->balcons == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->balcons }}
    </div>

@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->dressings == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->dressings }}
    </div>

@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->jardin_privatif == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.as') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->cour == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.at') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->buanderie == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.au') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->cheminee == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.av') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->climatisation == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aw') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->chauffe_eau == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ax') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->espace_vert == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.az') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->gardiennage == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aaa') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->place_vehicule == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->place_vehicule }}
    </div>

@endif          


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->box == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aac') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->piscine == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aad') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->terrain_sport == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aae') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->salle_fitness == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aaf') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->spa == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aag') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->superette == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aah') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->ecole == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aai') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->mosquee == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aaj') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->shopping == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aak') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->restaurent == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aal') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->cafe == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aaii') }}
    </div>
    
@endif 








<!-- proche -->

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->plage == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aan') }} {{ $particulier->plage }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->campagne == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aao') }} {{ $particulier->campagne }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->montagne == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aap') }} {{ $particulier->montagne }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->desert == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aaq') }} {{ $particulier->desert }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->spot_surf == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aar') }} {{ $particulier->spot_surf }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->riviere == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aas') }} {{ $particulier->riviere }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->golf == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aat') }} {{ $particulier->golf }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->foret == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aau') }} {{ $particulier->foret }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->station_ski == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbe') }} {{ $particulier->station_ski }}
    </div>
    
@endif 


<!-- villa -->

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->sous_sol == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->sous_sol }}
    </div>

@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->type_terrain == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->type_terrain }}
    </div>

@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->jaccuzi == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bac') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->hammam_beldi == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bad') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->cave == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bae') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->service_menage == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bae') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->air_jeu == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bat') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->interphone == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bau') }}
    </div>
    
@endif 

<!-- maison -->


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->amenagement_type == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->amenagement_type }}
    </div>

@endif 


<!-- chalet -->


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->chalet_type == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->chalet_type }}
    </div>

@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->facade_type == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->facade_type }}
    </div>

@endif 


<!-- riad et ferme  -->

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->garage_ferme == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->garage_ferme }}
    </div>

@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->exploitation_agricole == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbj') }}
    </div>
    
@endif 


<!-- chambre  -->


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->exploitation_agricole == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbj') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->reception == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbk') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->reservation == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbl') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->dejeune == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbn') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->wifi == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbo') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->tele_cable == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbp') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->type_chambre == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->type_chambre }}
    </div>

@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->chambre_non_fumeur == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbr') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->service_en_chambre == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbs') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->menage_quotidien == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbt') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->animal_de_compagnie == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbu') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->restauration == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abby') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->cafeteriat == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbz') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->blanchisserie == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.baaa') }}
    </div>
    
@endif 


<!-- cite universitaire -->

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->individuelle == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.baay') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->deux_lits == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.baaz') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->trois_lits == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.baaa') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->quatre_lits == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.baab') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->surface_disponible_un == 1 || auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->surface_disponible_deux == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbac') }}
        {{ $particulier->surface_disponible_un }}
        {{ __('myhouse/back/annonces/particulier/description.xef') }}
        {{ $particulier->surface_disponible_deux }} 
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->meuble == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbae') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->kichenette == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbaf') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->salle_bain == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbag') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->miroir == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbah') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->bureau == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbaj') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->chauffage == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbak') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->eau_chaude == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbal') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->placard == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbam') }}
    </div>
    
@endif 


<!-- bureau -->



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->zone_disponible == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->zone_disponible }}
    </div>

@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->nombre_piece == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->nombre_piece }}
    </div>

@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->hauteur_sous_plafond == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbbu') }}  {{ $particulier->hauteur_sous_plafond }} m²
    </div>
    
@endif 





@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->internet == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbbv') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->wc_sanitaire == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbbw') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->coin_cuisine == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.cabl') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->acceuil == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.babf') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->ascenseur == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.babg') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->monte_charge == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.babi') }}
    </div>
    
@endif 


<!-- plateau -->


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->coworking == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.babm') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->domiciliation == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.babn') }}
    </div>
    
@endif 

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->open_space == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.babp') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->nombre_box == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->nombre_box }}
    </div>

@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->salle_reunion == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->salle_reunion }}
    </div>

@endif 



<!-- entrepot -->

@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->frigorifique == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbh') }}
    </div>
    
@endif 






@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->espace_entrepot == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbj') }}  {{ $particulier->espace_entrepot }} m²
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->espace_activite == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbk') }}  {{ $particulier->espace_activite }} m²
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->espace_bureau == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbl') }}  {{ $particulier->espace_bureau }} m²
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->amenagement_r_sousol == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->amenagement_r_sousol }}
    </div>

@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->hauteur_entrepot == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbz') }}  {{ $particulier->hauteur_entrepot }} m²
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->site_clos == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbq') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->pont_roulant == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbr') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->alarme == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbt') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->portail_un == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbv') }}  {{ $particulier->portail_un }} m²
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->portail_deux == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbw') }}  {{ $particulier->portail_deux }} m²
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->portail_trois == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbx') }}  {{ $particulier->portail_trois }} m²
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->portail_quatre == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccba') }}  {{ $particulier->portail_quatre }} m²
    </div>
    
@endif 



<!-- garage -->


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->portail == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbv') }}  {{ $particulier->portail }} m²
    </div>

@endif


<!-- local-commercial -->



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->fond_commerce == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->fond_commerce }}
    </div>

@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->sous_pente == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.cdbe') }}  {{ $particulier->sous_pente }} m²
    </div>

@endif


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->longueur_facade == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.cdbh') }}  {{ $particulier->longueur_facade }} m²
    </div>

@endif


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->hauteur_plafond == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.cdbi') }}  {{ $particulier->hauteur_plafond }} m²
    </div>

@endif


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->angle_de_rue == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.cdbk') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->mezzanine == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.cdbn') }}
    </div>
    
@endif 


<!-- propriete-agricole -->




@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->superficie_exploitable == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccal') }}  {{ $particulier->superficie_exploitable }} m²
    </div>

@endif



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->surface_batie == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccam') }}  {{ $particulier->surface_batie }} m²
    </div>

@endif



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->raccordement_eau == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccan') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->puits == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccao') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->raccordement_electricite == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccap') }}
    </div>
    
@endif 



@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->raccordement_telephone == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccaq') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->habitation == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccaao') }}
    </div>
    
@endif 


<!-- residential -->


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->titre_foncier == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.x') }}
    </div>
    
@endif 


@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->lotissement == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->lotissement }}
    </div>

@endif 




@if ( auth()->user()->particulier->where('id', $particulier->id)->first()->critere->last()->assainissement == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.cabz') }}
    </div>
    
@endif 



<!-- terrain-commercial -->
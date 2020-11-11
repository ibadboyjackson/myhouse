@isset($particulier->critere->last()->appart_etage_niveau)
    @if ( $particulier->critere->last()->appart_etage_niveau == 1 )

            <div class="page-list-panel-item-two-body-box-three-box">
                {{ $particulier->appart_etage_niveau }}
            </div>

    @endif 
@endisset

@isset($particulier->critere->last()->appart_etage_nombre)
@if ( $particulier->critere->last()->appart_etage_nombre == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->appart_etage_nombre }}
    </div>
@endif 
@endisset

@isset($particulier->critere->last()->appart_etage)
@if ( $particulier->critere->last()->appart_etage == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->appart_etage }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->appart_etage_immeuble)
    @if ( $particulier->critere->last()->appart_etage_immeuble == 1 )

        <div class="page-list-panel-item-two-body-box-three-box">
            {{ $particulier->appart_etage_immeuble }}
        </div>

@endif 

@endisset

@isset($particulier->critere->last()->cuisine_type)
    @if ( $particulier->critere->last()->cuisine_type == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
      {{ $particulier->cuisine_type }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->cuisine_equipe)
    @if ( $particulier->critere->last()->cuisine_equipe == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.am') }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->nombre_salle_bain)
    @if ( $particulier->critere->last()->nombre_salle_bain == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->nombre_salle_bain }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->nombre_salon)
    @if ( $particulier->critere->last()->nombre_salon == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->nombre_salon }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->terrasses)
    @if ( $particulier->critere->last()->terrasses == 1 )
 
    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->terrasses }}
    </div>

@endif 

@endisset

@isset($particulier->critere->last()->balcons)
    @if ( $particulier->critere->last()->balcons == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->balcons }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->dressings)
    @if ( $particulier->critere->last()->dressings == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->dressings }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->jardin_privatif)
    @if ( $particulier->critere->last()->jardin_privatif == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.as') }}
    </div>
    
@endif 
@endisset   

@isset($particulier->critere->last()->cour)
    @if ( $particulier->critere->last()->cour == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.at') }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->buanderie)
    @if ( $particulier->critere->last()->buanderie == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.au') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->cheminee)
    @if ( $particulier->critere->last()->cheminee == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.av') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->climatisation)
    @if ( $particulier->critere->last()->climatisation == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aw') }}
    </div>
    
@endif 
@endisset   

@isset($particulier->critere->last()->chauffe_eau)
    @if ( $particulier->critere->last()->chauffe_eau == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ax') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->espace_vert)
    @if ( $particulier->critere->last()->espace_vert == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.az') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->gardiennage)
    @if ( $particulier->critere->last()->gardiennage == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aaa') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->place_vehicule)
    @if ( $particulier->critere->last()->place_vehicule == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->place_vehicule }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->box)
    @if ( $particulier->critere->last()->box == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aac') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->piscine)
    @if ( $particulier->critere->last()->piscine == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aad') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->terrain_sport)
    @if ( $particulier->critere->last()->terrain_sport == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aae') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->salle_fitness)
    @if ( $particulier->critere->last()->salle_fitness == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aaf') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->spa)
    @if ( $particulier->critere->last()->spa == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aag') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->superette)
    @if ( $particulier->critere->last()->superette == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aah') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->ecole)
    @if ( $particulier->critere->last()->ecole == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aai') }}
    </div>
    
@endif 
@endisset
           
@isset($particulier->critere->last()->mosquee)
    @if ( $particulier->critere->last()->mosquee == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aaj') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->shopping)
    @if ( $particulier->critere->last()->shopping == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aak') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->restaurent)
    @if ( $particulier->critere->last()->restaurent == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aal') }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->cafe)
    @if ( $particulier->critere->last()->cafe == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aaii') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->plage)
    @if ( $particulier->critere->last()->plage == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aan') }} {{ $particulier->plage }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->campagne)
    @if ( $particulier->critere->last()->campagne == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aao') }} {{ $particulier->campagne }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->montagne)
    @if ( $particulier->critere->last()->montagne == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aap') }} {{ $particulier->montagne }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->desert)
    @if ( $particulier->critere->last()->desert == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aaq') }} {{ $particulier->desert }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->spot_surf)
    @if ( $particulier->critere->last()->spot_surf == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aar') }} {{ $particulier->spot_surf }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->riviere)
    @if ( $particulier->critere->last()->riviere == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aas') }} {{ $particulier->riviere }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->golf)
    @if ( $particulier->critere->last()->golf == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aat') }} {{ $particulier->golf }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->foret)
    @if ( $particulier->critere->last()->foret == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.aau') }} {{ $particulier->foret }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->station_ski)
    @if ( $particulier->critere->last()->station_ski == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbe') }} {{ $particulier->station_ski }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->sous_sol)
    @if ( $particulier->critere->last()->sous_sol == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->sous_sol }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->type_terrain)
    @if ( $particulier->critere->last()->type_terrain == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->type_terrain }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->jaccuzi)
    @if ( $particulier->critere->last()->jaccuzi == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bac') }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->hammam_beldi)
    @if ( $particulier->critere->last()->hammam_beldi == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bad') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->cave)
    @if ( $particulier->critere->last()->cave == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bae') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->service_menage)
    @if ( $particulier->critere->last()->service_menage == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bae') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->air_jeu)
    @if ( $particulier->critere->last()->air_jeu == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bat') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->interphone)
    @if ( $particulier->critere->last()->interphone == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bau') }}
    </div>
    
@endif 
@endisset   

@isset($particulier->critere->last()->amenagement_type)
    @if ( $particulier->critere->last()->amenagement_type == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->amenagement_type }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->chalet_type)
    @if ( $particulier->critere->last()->chalet_type == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->chalet_type }}
    </div>

@endif 

@endisset

@isset($particulier->critere->last()->facade_type)
    @if ( $particulier->critere->last()->facade_type == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->facade_type }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->garage_ferme)
    @if ( $particulier->critere->last()->garage_ferme == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->garage_ferme }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->exploitation_agricole)
    @if ( $particulier->critere->last()->exploitation_agricole == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbj') }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->reception)
    @if ( $particulier->critere->last()->reception == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbk') }}
    </div>
    
@endif 
@endisset           


@isset($particulier->critere->last()->reservation)
    @if ( $particulier->critere->last()->reservation == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbl') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->dejeune)
    @if ( $particulier->critere->last()->dejeune == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbn') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->wifi)
    @if ( $particulier->critere->last()->wifi == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbo') }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->tele_cable)
    @if ( $particulier->critere->last()->tele_cable == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbp') }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->type_chambre)
    @if ( $particulier->critere->last()->type_chambre == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->type_chambre }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->chambre_non_fumeur)
    @if ( $particulier->critere->last()->chambre_non_fumeur == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbr') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->service_en_chambre)
    @if ( $particulier->critere->last()->service_en_chambre == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbs') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->menage_quotidien)
    @if ( $particulier->critere->last()->menage_quotidien == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbt') }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->animal_de_compagnie)
    @if ( $particulier->critere->last()->animal_de_compagnie == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbu') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->restauration)
    @if ( $particulier->critere->last()->restauration == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abby') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->cafeteriat)
    @if ( $particulier->critere->last()->cafeteriat == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.abbz') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->blanchisserie)
    @if ( $particulier->critere->last()->blanchisserie == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.baaa') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->individuelle)
    @if ( $particulier->critere->last()->individuelle == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.baay') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->deux_lits)
    @if ( $particulier->critere->last()->deux_lits == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.baaz') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->trois_lits)
    @if ( $particulier->critere->last()->trois_lits == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.baaa') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->quatre_lits)
    @if ( $particulier->critere->last()->quatre_lits == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.baab') }}
    </div>
    
@endif 
@endisset


@isset($particulier->critere->last()->surface_disponible_un || $particulier->critere->last()->surface_disponible_deux)
    @if ( $particulier->critere->last()->surface_disponible_un == 1 || $particulier->critere->last()->surface_disponible_deux == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbac') }}
        {{ $particulier->surface_disponible_un }}
        {{ __('myhouse/back/annonces/particulier/description.xef') }}
        {{ $particulier->surface_disponible_deux }} 
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->meuble)
    @if ( $particulier->critere->last()->meuble == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbae') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->kichenette)
    @if ( $particulier->critere->last()->kichenette == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbaf') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->salle_bain)
    @if ( $particulier->critere->last()->salle_bain == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbag') }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->miroir)
    @if ( $particulier->critere->last()->miroir == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbah') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->bureau)
    @if ( $particulier->critere->last()->bureau == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbaj') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->chauffage)

@if ( $particulier->critere->last()->chauffage == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbak') }}
    </div>
    
@endif 


@endisset

@isset($particulier->critere->last()->eau_chaude)
    @if ( $particulier->critere->last()->eau_chaude == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbal') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->placard)
@if ( $particulier->critere->last()->placard == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbam') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->zone_disponible)
    @if ( $particulier->critere->last()->zone_disponible == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->zone_disponible }}
    </div>

@endif 
@endisset
           
@isset($particulier->critere->last()->nombre_piece)
    @if ( $particulier->critere->last()->nombre_piece == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->nombre_piece }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->hauteur_sous_plafond)
    @if ( $particulier->critere->last()->hauteur_sous_plafond == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbbu') }}  {{ $particulier->hauteur_sous_plafond }} m²
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->internet)
    @if ( $particulier->critere->last()->internet == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbbv') }}
    </div>
    
@endif
@endisset

@isset($particulier->critere->last()->wc_sanitaire)
    @if ( $particulier->critere->last()->wc_sanitaire == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.bbbw') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->coin_cuisine)
    @if ( $particulier->critere->last()->coin_cuisine == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.cabl') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->acceuil)
    @if ( $particulier->critere->last()->acceuil == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.babf') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->ascenseur)
    @if ( $particulier->critere->last()->ascenseur == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.babg') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->monte_charge)
    @if ( $particulier->critere->last()->monte_charge == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.babi') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->coworking)
    @if ( $particulier->critere->last()->coworking == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.babm') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->domiciliation)
    @if ( $particulier->critere->last()->domiciliation == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.babn') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->open_space)
    @if ( $particulier->critere->last()->open_space == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.babp') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->nombre_box)
    @if ( $particulier->critere->last()->nombre_box == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->nombre_box }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->salle_reunion)
@if ( $particulier->critere->last()->salle_reunion == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->salle_reunion }}
    </div>

@endif 

@endisset

@isset($particulier->critere->last()->frigorifique)
    @if ( $particulier->critere->last()->frigorifique == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbh') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->espace_entrepot)
    @if ( $particulier->critere->last()->espace_entrepot == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbj') }}  {{ $particulier->espace_entrepot }} m²
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->terrasse_commerciale)
    @if ( $particulier->critere->last()->terrasse_commerciale == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbzf') }}  {{ $particulier->terrasse_commerciale }} m²
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->espace_activite)
    @if ( $particulier->critere->last()->espace_activite == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbk') }}  {{ $particulier->espace_activite }} m²
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->espace_bureau)
    @if ( $particulier->critere->last()->espace_bureau == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbl') }}  {{ $particulier->espace_bureau }} m²
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->amenagement_r_sousol)
    @if ( $particulier->critere->last()->amenagement_r_sousol == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->amenagement_r_sousol }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->hauteur_entrepot)
    @if ( $particulier->critere->last()->hauteur_entrepot == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbz') }}  {{ $particulier->hauteur_entrepot }} m²
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->site_clos)
    @if ( $particulier->critere->last()->site_clos == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbq') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->pont_roulant)
    @if ( $particulier->critere->last()->pont_roulant == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbr') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->alarme)
    @if ( $particulier->critere->last()->alarme == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbt') }}
    </div>
    
@endif 

@endisset

@isset($particulier->critere->last()->portail_un)
    @if ( $particulier->critere->last()->portail_un == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbv') }}  {{ $particulier->portail_un }} m²
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->portail_deux)

    @if ( $particulier->critere->last()->portail_deux == 1 )

        <div class="page-list-panel-item-two-body-box-three-box">
            {{ __('myhouse/back/annonces/particulier/description.ccbw') }}  {{ $particulier->portail_deux }} m²
        </div>
        
    @endif 
@endisset

@isset($particulier->critere->last()->portail_trois)
    @if ( $particulier->critere->last()->portail_trois == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbx') }}  {{ $particulier->portail_trois }} m²
    </div>
    
@endif
@endisset

@isset($particulier->critere->last()->portail_quatre)

@if ( $particulier->critere->last()->portail_quatre == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccba') }}  {{ $particulier->portail_quatre }} m²
    </div>
    
@endif 
@endisset           

@isset($particulier->critere->last()->portail)
    @if ( $particulier->critere->last()->portail == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccbv') }}  {{ $particulier->portail }} m²
    </div>

@endif
@endisset

@isset($particulier->critere->last()->fond_commerce)
    @if ( $particulier->critere->last()->fond_commerce == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->fond_commerce }}
    </div>

@endif 
@endisset

@isset($particulier->critere->last()->sous_pente)
    @if ( $particulier->critere->last()->sous_pente == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.cdbe') }}  {{ $particulier->sous_pente }} m²
    </div>

@endif
@endisset

@isset($particulier->critere->last()->longueur_facade)
    @if ( $particulier->critere->last()->longueur_facade == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.cdbh') }}  {{ $particulier->longueur_facade }} m²
    </div>

@endif

@endisset

@isset($particulier->critere->last()->hauteur_plafond)
    @if ( $particulier->critere->last()->hauteur_plafond == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.cdbi') }}  {{ $particulier->hauteur_plafond }} m²
    </div>

@endif
@endisset

@isset($particulier->critere->last()->angle_de_rue)
    @if ( $particulier->critere->last()->angle_de_rue == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.cdbk') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->mezzanine)
    @if ( $particulier->critere->last()->mezzanine == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.cdbn') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->superficie_exploitable)

@if ( $particulier->critere->last()->superficie_exploitable == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccal') }}  {{ $particulier->superficie_exploitable }} m²
    </div>

@endif
@endisset           


@isset($particulier->critere->last()->surface_batie)
    @if ( $particulier->critere->last()->surface_batie == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccam') }}  {{ $particulier->surface_batie }} m²
    </div>

@endif
@endisset   

@isset($particulier->critere->last()->raccordement_eau)
    @if ( $particulier->critere->last()->raccordement_eau == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccan') }}
    </div>
    
@endif
@endisset

@isset($particulier->critere->last()->puits)
    @if ( $particulier->critere->last()->puits == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccao') }}
    </div>
    
@endif
@endisset

@isset($particulier->critere->last()->raccordement_electricite)
    @if ( $particulier->critere->last()->raccordement_electricite == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccap') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->raccordement_telephone)
    @if ( $particulier->critere->last()->raccordement_telephone == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccaq') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->habitation)
    @if ( $particulier->critere->last()->habitation == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.ccaao') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->titre_foncier)
    @if ( $particulier->critere->last()->titre_foncier == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ __('myhouse/back/annonces/particulier/description.x') }}
    </div>
    
@endif 
@endisset

@isset($particulier->critere->last()->lotissement)
    @if ( $particulier->critere->last()->lotissement == 1 )

    <div class="page-list-panel-item-two-body-box-three-box">
        {{ $particulier->lotissement }}
    </div>

    @endif 
@endisset           

@isset($particulier->critere->last()->assainissement)
    @if ( $particulier->critere->last()->assainissement == 1 )

        <div class="page-list-panel-item-two-body-box-three-box">
            {{ __('myhouse/back/annonces/particulier/description.cabz') }}
        </div>
        
    @endif 
@endisset

        
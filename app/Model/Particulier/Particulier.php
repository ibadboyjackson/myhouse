<?php

namespace App\Model\Particulier;

use App\Traits\Particulable;
use App\User;
use ParticulierInteresse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Translatable\HasTranslations;



class Particulier extends Model
{

    use HasTranslations, Particulable;

    protected $fillable = [
        'last_id',
        'venteActif',
        'locationActif',
        'echangeActif',
        'prix_vente',
        'prix_m',
        'charges',

        'vente_meuble',
        
        'transactionurl',
        'typeurl',
        'descriptionurl',
        'critereurl',
        'localisationurl',
        'uploadurl',
        'successurl',


        'mplage',
        'mcampagne',
        'mmontagne',
        'mdesert',
        'mspot_surf',
        'mgolf',
        'mforet',
        'mstation_ski',
        'mriviere',
        'mvoix',



        'prix_vente',
        'prix_mois',
        'prix_jour',
        'charge_copropriete',

        'location_longue_duree',
        'location_courte_duree',
        'location_etudiant',
        'location_meuble',
        'location_non_meuble',
        'vente_non_meuble',

        'colocation',
        'terrasse_commerciale',

        'echange_definitif',
        'echange_provisoir',

        'echange_periode_un',
        'echange_periode_deux',

        'appart_type_un',
        'surface_habitable',
        'appart_etage_niveau',
        'appart_etage_nombre',
        'appart_etage',
        'appart_etage_immeuble',

        'cuisine_type',
        'cuisine_equipe',
        'nombre_chambre',
        'dressing',
        'nombre_salle_bain',
        'nombre_salon',
        'terrasse',
        'jardin_privatif',
        'cour',
        'buanderie',
        'cheminee',
        'climatisation',
        'chauffe_eau',

        'espace_vert',
        'gardiennage',
        'place_vehicule',
        'box',
        'piscine',
        'terrain_sport',
        'salle_fitness',
        'spa',
        'superette',
        'ecole',
        'mosquee',
        'shopping',
        'restaurent',

        'plage',
        'voie',
        'campagne',
        'montagne',
        'desert',
        'spot_surf',
        'riviere',
        'golf',
        'foret',
        'station_ski',

        'superficie_terrain',
        'sous_sol',
        'type_terrain',

        'jaccuzi',
        'hammam_beldi',
        'cave',
        'service_menage',
        'salle_fitness',
        'air_jeu',
        'interphone',

        'amenagement_type',

        'chalet_type',
        'facade_type',

        'deux_salle_bain',
        'garage_ferme',

        'exploitation_agricole',

        'reception',
        'reservation',
        'dejeune',
        'wifi',
        'tele_cable',
        'type_chambre',
        'chambre_non_fumeur',
        'service_en_chambre',
        'menage_quotidien',
        'animal_de_compagnie',
        'parking_gratuit',
        'restauration',
        'cafeteriat',
        'blanchisserie',

        'individuelle',
        'deux_lits',
        'trois_lits',
        'quatre_lits',
        'surface_disponible',
        'meuble',

        'kichenette',
        'salle_bain',
        'miroir',
        'bureau',
        'chauffage',
        'eau_chaude',
        'placard',
        'angle_de_rue',

        'zone_disponible',
        'nombre_piece',
        'hauteur_sous_plafond',
        'internet',
        'wc_sanitaire',
        'balcon',
        'coin_cuisine',
        'acceuil',
        'ascenseur',
        'monte_charge',

        'coworking',
        'domiciliation',
        'open_space',
        'nombre_box',
        'salle_reunion',

        'frigorifique',
        'surface_batiment',
        'espace_entrepot',
        'espace_activite',
        'espace_bureau',
        'amenagement_r_sousol',
        'hauteur_entrepot',
        'site_clos',
        'pont_roulant',
        'alarme',
        'portail_un',
        'portail_deux',
        'portail_trois',


        'portail_quatre',
        'portail_cinq',
        'portail_six',
        'portail_sept',
        'portail_huit',

        'portail',
        'surface_garage',

        'fond_commerce',
        'terrasses',
        'surface_total',
        'sous_pente',
        'longueur_facade',
        'hauteur_plafond',
        'abgle_de_rue',
        'mezzanine',

        'superficie_exploitable',
        'surface_batie',
        'raccordement_eau',
        'puits',
        'raccordement_electricite',
        'raccordement_telephone',

        'titre_foncier',
        'lotissement',
        'assainissement',

        'zone_implante',
        'terrain_type',

        'titre_type',
        'constructible',

        'surface_terrain',
        'balcons',
        'terrasses',
        'uri',

        'adresse',
        'images',
        'videos',
        'description',
        'dressings',
        'portail_quatre',
        'portail_cinq',
        'portail_six',
        'portail_sept',
        'portail_huit',
        'portail_neuf',
        'surface_disponible_deux',
        'surface_disponible_un',
        'page',
        'echange_meuble',
        'garage_vehicule',


        'type_bien_id',
        'latitude',
        'longitude',
        'online',
        'user_id',
        'ville',
        'pays',
        'quartier',
    ];

 
    public function setEchangePeriodeUnAttribute ($input) {
        $this->attributes['echange_periode_un'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
    }

    public function setEchangePeriodeDeuxAttribute ($input) {
        $this->attributes['echange_periode_deux'] =
            Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
    }


    public function typeBien () {
        return $this->belongsTo(TypeBien::class);
    } 

    public function critere () {
        return $this->hasMany(ParticulierCritere::class);
    }

    public function interesses () {
        return $this->hasMany(ParticulierInteresse::class);
    }

    public function favorite_to_user () {
        return $this->belongsToMany(User::class, 'particulier_interesses')->withTimestamps();
    }

    public function user () {
        return $this->belongsTo(User::class);
    }


}

<?php

namespace App\Model\Professionnel;

use Illuminate\Database\Eloquent\Model;

class ProfessionnelCritere extends Model
{
    protected $fillable = [
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
        'dressings',

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
        'professionnel_id'
    ];
}

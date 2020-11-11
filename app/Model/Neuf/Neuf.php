<?php

namespace App\Model\Neuf;

use App\Model\Particulier\TypeBien;
use App\Traits\Neuf\Neufable;
use App\Traits\Particulable;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Neuf extends Model
{

    use HasTranslations, Particulable, Neufable;

    protected $fillable = [
        'last_id',
        'nom_projet',
        'appartement',
        'villa',
        'maison',
        'riad',
        'chalet',
        'commerce',
        'bureau',
        'plateau',
        'residentiel',
        'commercial',
        'prix_vente_de_appartement',
        'superficie_de_appartement',
        'superficie_a_appartement',
        'nombre_chambre_de_appartement',
        'nombre_chambre_a_appartement',
        'prix_vente_de_villa',
        'superficie_de_villa',
        'superficie_a_villa',
        'nombre_chambre_de_villa',
        'nombre_chambre_a_villa',
        'prix_vente_de_maison',
        'superficie_de_maison',
        'superficie_a_maison',
        'nombre_chambre_de_maison',
        'nombre_chambre_a_maison',
        'prix_vente_de_riad',
        'superficie_de_riad',
        'superficie_a_riad',
        'nombre_chambre_de_riad',
        'nombre_chambre_a_riad',
        'prix_vente_de_chalet',
        'superficie_de_chalet',
        'superficie_a_chalet',
        'nombre_chambre_de_chalet',
        'nombre_chambre_a_chalet',
        'prix_vente_de_commerce',
        'superficie_de_commerce',
        'superficie_a_commerce',
        'prix_vente_de_bureau',
        'superficie_de_bureau',
        'superficie_a_bureau',
        'prix_vente_de_plateau',
        'superficie_de_plateau',
        'superficie_a_plateau',
        'prix_vente_de_residentiel',
        'superficie_de_residentiel',
        'superficie_a_residentiel',
        'prix_vente_de_commercial',
        'superficie_de_commercial',
        'superficie_a_commercial',
        'superficie',
        'espace_vert',
        'gardiennage',
        'air_de_jeu',
        'piscine',
        'terrain_sport',
        'salle_fitness',
        'spa',
        'superette',
        'ecole',
        'mosque',
        'shopping',
        'restaurant',
        'plage',
        'campagne',
        'montagne',
        'desert',
        'spot_surf',
        'golf',
        'foret',
        'station_ski',
        'riviere',
        'description',
        'medias',
        'images',
        'videos',
        'adresse',
        'latitude',
        'longitude',
        'user_id',
        'online',
        'ville',
        'pays',
        'quartier',
    ];


    public function user () {
        return $this->belongsTo(User::class);
    }

    public function typeBien () {
        return $this->belongsTo(TypeBien::class);
    }

    public function annonces () {
        return $this->hasMany(Annonce::class, 'projet_id');
    }

}

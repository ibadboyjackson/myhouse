<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionnelCriteresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionnel_criteres', function (Blueprint $table) {
            
            $table->id();


            $table->boolean('appart_type_un')->default(0);
            $table->boolean('surface_habitable')->default(0);
            $table->boolean('appart_etage_niveau')->default(0);
            $table->boolean('appart_etage_nombre')->default(0);

            $table->boolean('appart_etage')->default(0);
            $table->boolean('appart_etage_immeuble')->default(0);

            $table->boolean('cuisine_type')->default(0);
            $table->boolean('cuisine_equipe')->default(0);
            $table->boolean('dressing')->default(0);
            $table->boolean('nombre_salle_bain')->default(0);
            $table->boolean('nombre_salon')->default(0);
            $table->boolean('terrasse')->default(0);
            
            $table->boolean('jardin_privatif')->default(0);
            $table->boolean('cour')->default(0);
            $table->boolean('buanderie')->default(0);
            $table->boolean('cheminee')->default(0);
            $table->boolean('climatisation')->default(0);
            $table->boolean('chauffe_eau')->default(0);

            $table->boolean('espace_vert')->default(0);
            $table->boolean('gardiennage')->default(0);
            $table->boolean('place_vehicule')->default(0);
            $table->boolean('box')->default(0);
            $table->boolean('piscine')->default(0);
            $table->boolean('terrain_sport')->default(0);
            $table->boolean('spa')->default(0);
            $table->boolean('superette')->default(0);
            $table->boolean('ecole')->default(0);
            $table->boolean('mosquee')->default(0);
            $table->boolean('shopping')->default(0);
            $table->boolean('restaurent')->default(0);

            $table->boolean('plage')->default(0);
            $table->boolean('voie')->default(0);
            $table->boolean('campagne')->default(0);
            $table->boolean('montagne')->default(0);
            $table->boolean('desert')->default(0);
            $table->boolean('spot_surf')->default(0);
            $table->boolean('riviere')->default(0);
            $table->boolean('golf')->default(0);
            $table->boolean('foret')->default(0);
            $table->boolean('station_ski')->default(0);

            #villa
            $table->boolean('superficie_terrain')->default(0);
            $table->boolean('sous_sol')->default(0);
            $table->boolean('type_terrain')->default(0);

            $table->boolean('jaccuzi')->default(0);
            $table->boolean('hammam_beldi')->default(0);
            $table->boolean('cave')->default(0);
            $table->boolean('service_menage')->default(0);
            $table->boolean('salle_fitness')->default(0);
            $table->boolean('air_jeu')->default(0);
            $table->boolean('interphone')->default(0);

            #maison
            $table->boolean('amenagement_type')->default(0);

            #chalet
            $table->boolean('chalet_type')->default(0);
            $table->boolean('facade_type')->default(0);

            #riad
            $table->boolean('deux_salle_bain')->default(0);
            $table->boolean('garage_ferme')->default(0);

            #ferme
            $table->boolean('exploitation_agricole')->default(0);

            #chambre
            $table->boolean('reception')->default(0);
            $table->boolean('reservation')->default(0);
            $table->boolean('dejeune')->default(0);
            $table->boolean('wifi')->default(0);
            $table->boolean('tele_cable')->default(0);
            
            $table->boolean('type_chambre')->default(0);
            $table->boolean('chambre_non_fumeur')->default(0);
            $table->boolean('service_en_chambre')->default(0);
            $table->boolean('menage_quotidien')->default(0);

            $table->boolean('animal_de_compagnie')->default(0);
            $table->boolean('parking_gratuit')->default(0);
            $table->boolean('restauration')->default(0);
            $table->boolean('cafeteriat')->default(0);
            $table->boolean('blanchisserie')->default(0);

            #cité universitaire
            $table->boolean('individuelle')->default(0);
            $table->boolean('deux_lits')->default(0);
            $table->boolean('trois_lits')->default(0);
            $table->boolean('quatre_lits')->default(0);
            $table->boolean('surface_disponible')->default(0);
            $table->boolean('meuble')->default(0);

            $table->boolean('kichenette')->default(0);
            $table->boolean('salle_bain')->default(0);
            $table->boolean('miroir')->default(0);
            $table->boolean('bureau')->default(0);
            $table->boolean('chauffage')->default(0);
            $table->boolean('eau_chaude')->default(0);
            $table->boolean('placard')->default(0);



            #bureau
            $table->boolean('zone_disponible')->default(0);
            $table->boolean('nombre_piece')->default(0);
            $table->boolean('hauteur_sous_plafond')->default(0);
            $table->boolean('internet')->default(0);
            $table->boolean('wc_sanitaire')->default(0);
            $table->boolean('balcon')->default(0);
            $table->boolean('coin_cuisine')->default(0);
            $table->boolean('acceuil')->default(0);
            $table->boolean('ascenseur')->default(0);
            $table->boolean('monte_charge')->default(0);

            #plateau
            $table->boolean('coworking')->default(0);
            $table->boolean('domiciliation')->default(0);
            $table->boolean('open_space')->default(0);
            $table->boolean('nombre_box')->default(0);
            $table->boolean('salle_reunion')->default(0);

            #entrepot
            $table->boolean('frigorifique')->default(0);
            $table->boolean('surface_batiment')->default(0);
            $table->boolean('espace_entrepot')->default(0);
            $table->boolean('espace_activite')->default(0);
            $table->boolean('espace_bureau')->default(0);
            $table->boolean('amenagement_r_sousol')->default(0);
            $table->boolean('hauteur_entrepot')->default(0);
            $table->boolean('site_clos')->default(0);
            $table->boolean('pont_roulant')->default(0);
            $table->boolean('alarme')->default(0);
            $table->boolean('portail_un')->default(0);
            $table->boolean('portail_deux')->default(0);
            $table->boolean('portail_trois')->default(0);

            #garage
            $table->boolean('portail')->default(0);
            $table->boolean('surface_garage')->default(0);

            #local-commercial
            $table->boolean('fond_commerce')->default(0);
            $table->boolean('terrasses')->default(0);
            $table->boolean('surface_total')->default(0);
            $table->boolean('sous_pente')->default(0);
            $table->boolean('longueur_facade')->default(0);
            $table->boolean('hauteur_plafond')->default(0);
            $table->boolean('angle_de_rue')->default(0);
            $table->boolean('mezzanine')->default(0);

            #propriete-agricole
            $table->boolean('superficie_exploitable')->default(0);
            $table->boolean('surface_batie')->default(0);
            $table->boolean('raccordement_eau')->default(0);
            $table->boolean('puits')->default(0);
            $table->boolean('raccordement_electricite')->default(0);
            $table->boolean('raccordement_telephone')->default(0);

            #residential
            $table->boolean('titre_foncier')->default(0);
            $table->boolean('lotissement')->default(0);
            $table->boolean('assainissement')->default(0);

            #terrain-commercial
            $table->boolean('zone_implante')->default(0);
            $table->boolean('terrain_type')->default(0);

            #terrain-agricole
            $table->boolean('titre_type')->default(0);
            $table->boolean('constructible')->default(0);

            #immeuble
            $table->boolean('surface_terrain')->default(0);



            $table->boolean('balcons')->default(0);








            $table->boolean('terrasse_commerciale')->default(0);



            $table->boolean('echange_meuble')->default(0);
            $table->boolean('vente_meuble')->default(0);
            $table->boolean('location_meuble')->default(0);



            
            $table->string('page')->nullable();


            $table->bigInteger('professionnel_id')->references('id')->on('professionnels')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionnel_criteres');
    }
}

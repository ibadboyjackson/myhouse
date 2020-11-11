<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionnels', function (Blueprint $table) {
            $table->id();

            #transaction

            $table->text('last_id');

            $table->boolean('venteActif')->default(0);
            $table->boolean('locationActif')->default(0);

            $table->boolean('vente_meuble')->default(0);

            $table->double('prix_vente')->nullable();
            $table->double('prix_mois')->nullable();
            $table->double('prix_jour')->nullable();
            $table->double('charge_copropriete')->nullable();

            $table->boolean('location_longue_duree')->default(0);
            $table->boolean('location_courte_duree')->default(0);
            $table->boolean('location_etudiant')->default(0);
            $table->boolean('location_meuble')->default(0);
            $table->boolean('colocation')->default(0);



            # appartement

            $table->text('appart_type_un')->nullable();
            $table->double('surface_habitable')->nullable();
            $table->text('appart_etage_niveau')->nullable();
            $table->text('appart_etage_nombre')->nullable();
            $table->text('appart_etage')->nullable();
            $table->text('appart_etage_immeuble')->nullable();

            $table->text('cuisine_type')->nullable();
            $table->boolean('cuisine_equipe')->default(0);
            $table->text('nombre_chambre')->nullable();
            $table->boolean('dressing')->default(0);
            $table->text('nombre_salle_bain')->nullable();
            $table->text('nombre_salon')->nullable();
            $table->boolean('terrasse')->default(0);
            $table->boolean('jardin_privatif')->default(0);
            $table->boolean('cour')->default(0);
            $table->boolean('buanderie')->default(0);
            $table->boolean('cheminee')->default(0);
            $table->boolean('climatisation')->default(0);
            $table->boolean('chauffe_eau')->default(0);

            $table->boolean('espace_vert')->default(0);
            $table->boolean('gardiennage')->default(0);
            $table->text('place_vehicule')->nullable();
            $table->boolean('box')->default(0);
            $table->boolean('piscine')->default(0);
            $table->boolean('terrain_sport')->default(0);
            $table->boolean('spa')->default(0);
            $table->boolean('superette')->default(0);
            $table->boolean('ecole')->default(0);
            $table->boolean('mosquee')->default(0);
            $table->boolean('shopping')->default(0);
            $table->boolean('restaurent')->default(0);

            $table->string('plage')->nullable();
            $table->string('voie')->nullable();
            $table->string('campagne')->nullable();
            $table->string('montagne')->nullable();
            $table->string('desert')->nullable();
            $table->string('spot_surf')->nullable();
            $table->string('riviere')->nullable();
            $table->string('golf')->nullable();
            $table->string('foret')->nullable();
            $table->string('station_ski')->nullable();

            #villa
            $table->double('superficie_terrain')->nullable();
            $table->text('sous_sol')->nullable();
            $table->text('type_terrain')->nullable();

            $table->boolean('jaccuzi')->default(0);
            $table->boolean('hammam_beldi')->default(0);
            $table->boolean('cave')->default(0);
            $table->boolean('service_menage')->default(0);
            $table->boolean('salle_fitness')->default(0);
            $table->boolean('air_jeu')->default(0);
            $table->boolean('interphone')->default(0);

            #maison
            $table->text('amenagement_type')->nullable();

            #chalet
            $table->text('chalet_type')->nullable();
            $table->text('facade_type')->nullable();

            #riad
            $table->boolean('deux_salle_bain')->default(0);
            $table->text('garage_ferme')->nullable();

            #ferme
            $table->boolean('exploitation_agricole')->default(0);


            #cité universitaire
            $table->boolean('individuelle')->default(0);
            $table->boolean('deux_lits')->default(0);
            $table->boolean('trois_lits')->default(0);
            $table->boolean('quatre_lits')->default(0);
            $table->text('surface_disponible')->nullable();
            $table->boolean('meuble')->default(0);

            $table->boolean('kichenette')->default(0);
            $table->boolean('salle_bain')->default(0);
            $table->boolean('miroir')->default(0);
            $table->boolean('bureau')->default(0);
            $table->boolean('chauffage')->default(0);
            $table->boolean('eau_chaude')->default(0);
            $table->boolean('placard')->default(0);



            #bureau
            $table->text('zone_disponible')->nullable();
            $table->text('nombre_piece')->nullable();
            $table->double('hauteur_sous_plafond')->nullable();
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
            $table->text('nombre_box')->nullable();
            $table->text('salle_reunion')->nullable();

            #entrepot
            $table->boolean('frigorifique')->default(0);
            $table->double('surface_batiment')->nullable();
            $table->double('espace_entrepot')->nullable();
            $table->double('espace_activite')->nullable();
            $table->double('espace_bureau')->nullable();
            $table->text('amenagement_r_sousol')->nullable();
            $table->double('hauteur_entrepot')->nullable();
            $table->boolean('site_clos')->default(0);
            $table->boolean('pont_roulant')->default(0);
            $table->boolean('alarme')->default(0);
            $table->double('portail_un')->nullable();
            $table->double('portail_deux')->nullable();
            $table->double('portail_trois')->nullable();

            #garage
            $table->double('portail')->nullable();
            $table->double('surface_garage')->nullable();

            #local-commercial
            $table->text('fond_commerce')->nullable();
            $table->text('terrasses')->nullable();
            $table->double('surface_total')->nullable();
            $table->double('sous_pente')->nullable();
            $table->double('longueur_facade')->nullable();
            $table->double('hauteur_plafond')->nullable();
            $table->boolean('angle_de_rue')->default(0);
            $table->boolean('mezzanine')->default(0);

            #propriete-agricole
            $table->double('superficie_exploitable')->nullable();
            $table->double('surface_batie')->nullable();
            $table->boolean('raccordement_eau')->default(0);
            $table->boolean('puits')->default(0);
            $table->boolean('raccordement_electricite')->default(0);
            $table->boolean('raccordement_telephone')->default(0);

            #residential
            $table->text('titre_foncier')->nullable();
            $table->text('lotissement')->nullable();
            $table->boolean('assainissement')->default(0);

            #terrain-commercial
            $table->text('zone_implante')->nullable();
            $table->text('terrain_type')->nullable();

            #terrain-agricole
            $table->text('titre_type')->nullable();
            $table->boolean('constructible')->default(0);

            #immeuble
            $table->double('surface_terrain')->nullable();

            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

            $table->text('adresse')->nullable();
            $table->text('videos')->nullable();
            $table->text('description')->nullable();

            #images process

            $table->text('images')->nullable();




            $table->bigInteger('type_bien_id')->nullable()->references('id')->on('type_biens')->onDelete('cascade');
            $table->bigInteger('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->boolean('online')->default(0);

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
        Schema::dropIfExists('professionnels');
    }
}

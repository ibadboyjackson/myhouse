<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();

            #appartement

            $table->text('appart_type_un')->nullable();
            $table->double('surface_habitable')->nullable();
            $table->text('appart_etage_niveau')->nullable();
            $table->text('appart_etage_nombre')->nullable();


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

            #villa
            $table->double('superficie_terrain')->nullable();
            $table->text('sous_sol')->nullable();
            $table->text('type_terrain')->nullable();

            #chalet
            $table->text('chalet_type')->nullable();
            $table->text('facade_type')->nullable();

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

            #local-commercial
            $table->text('fond_commerce')->nullable();
            $table->text('terrasses')->nullable();
            $table->double('surface_total')->nullable();
            $table->double('sous_pente')->nullable();
            $table->double('longueur_facade')->nullable();
            $table->double('hauteur_plafond')->nullable();
            $table->boolean('angle_de_rue')->default(0);
            $table->boolean('mezzanine')->default(0);

            #residential
            $table->text('titre_foncier')->nullable();
            $table->text('lotissement')->nullable();
            $table->boolean('assainissement')->default(0);
            $table->boolean('raccordement_eau')->default(0);
            $table->boolean('puits')->default(0);
            $table->boolean('raccordement_electricite')->default(0);
            $table->boolean('raccordement_telephone')->default(0);

            #terrain-commercial
            $table->text('zone_implante')->nullable();
            $table->text('terrain_type')->nullable();


            $table->text('images')->nullable();
            $table->text('videos')->nullable();

            $table->double('prix_annonce')->nullable();
            $table->boolean('particulier_portail')->default(0);



            $table->text('description_appartement')->nullable();
            $table->text('description_villa')->nullable();
            $table->text('description_maison')->nullable();
            $table->text('description_riad')->nullable();
            $table->text('description_bureau')->nullable();
            $table->text('description_chalet')->nullable();
            $table->text('description_commerce')->nullable();
            $table->text('description_commercial')->nullable();
            $table->text('description_plateau')->nullable();
            $table->text('description_residentiel')->nullable();

            $table->text('medias_appartement')->nullable();
            $table->text('medias_villa')->nullable();
            $table->text('medias_maison')->nullable();
            $table->text('medias_riad')->nullable();
            $table->text('medias_bureau')->nullable();
            $table->text('medias_chalet')->nullable();
            $table->text('medias_commerce')->nullable();
            $table->text('medias_commercial')->nullable();
            $table->text('medias_plateau')->nullable();
            $table->text('medias_residentiel')->nullable();

            $table->boolean('appartement')->default(0);
            $table->boolean('villa')->default(0);
            $table->boolean('maison')->default(0);
            $table->boolean('riad')->default(0);
            $table->boolean('chalet')->default(0);
            $table->boolean('commerce')->default(0);
            $table->boolean('bureau')->default(0);
            $table->boolean('plateau')->default(0);
            $table->boolean('residentiel')->default(0);
            $table->boolean('commercial')->default(0);

            $table->double('prix_appartement')->nullable();
            $table->double('prix_villa')->nullable();
            $table->double('prix_maison')->nullable();
            $table->double('prix_riad')->nullable();
            $table->double('prix_bureau')->nullable();
            $table->double('prix_chalet')->nullable();
            $table->double('prix_commerce')->nullable();
            $table->double('prix_commercial')->nullable();
            $table->double('prix_plateau')->nullable();
            $table->double('prix_residentiel')->nullable();




            $table->bigInteger('projet_id')->references('id')->on('neufs')->onDelete('cascade');
            $table->bigInteger('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('annonces');
    }
}

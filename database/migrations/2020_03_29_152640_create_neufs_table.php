<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeufsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neufs', function (Blueprint $table) {
            $table->id();


            #description

            $table->string('nom_projet')->nullable();
            $table->string('last_id')->nullable();

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

            $table->double('prix_vente_de_appartement')->nullable();
            $table->double('superficie_de_appartement')->nullable();
            $table->double('superficie_a_appartement')->nullable();
            $table->integer('nombre_chambre_de_appartement')->nullable();
            $table->integer('nombre_chambre_a_appartement')->nullable();

            $table->double('prix_vente_de_villa')->nullable();
            $table->double('superficie_de_villa')->nullable();
            $table->double('superficie_a_villa')->nullable();
            $table->integer('nombre_chambre_de_villa')->nullable();
            $table->integer('nombre_chambre_a_villa')->nullable();

            $table->double('prix_vente_de_maison')->nullable();
            $table->double('superficie_de_maison')->nullable();
            $table->double('superficie_a_maison')->nullable();
            $table->integer('nombre_chambre_de_maison')->nullable();
            $table->integer('nombre_chambre_a_maison')->nullable();

            $table->double('prix_vente_de_riad')->nullable();
            $table->double('superficie_de_riad')->nullable();
            $table->double('superficie_a_riad')->nullable();
            $table->integer('nombre_chambre_de_riad')->nullable();
            $table->integer('nombre_chambre_a_riad')->nullable();

            $table->double('prix_vente_de_chalet')->nullable();
            $table->double('superficie_de_chalet')->nullable();
            $table->double('superficie_a_chalet')->nullable();
            $table->integer('nombre_chambre_de_chalet')->nullable();
            $table->integer('nombre_chambre_a_chalet')->nullable();

            $table->double('prix_vente_de_commerce')->nullable();
            $table->double('superficie_de_commerce')->nullable();
            $table->double('superficie_a_commerce')->nullable();

            $table->double('prix_vente_de_bureau')->nullable();
            $table->double('superficie_de_bureau')->nullable();
            $table->double('superficie_a_bureau')->nullable();

            $table->double('prix_vente_de_plateau')->nullable();
            $table->double('superficie_de_plateau')->nullable();
            $table->double('superficie_a_plateau')->nullable();

            $table->double('prix_vente_de_residentiel')->nullable();
            $table->double('superficie_de_residentiel')->nullable();
            $table->double('superficie_a_residentiel')->nullable();

            $table->double('prix_vente_de_commercial')->nullable();
            $table->double('superficie_de_commercial')->nullable();
            $table->double('superficie_a_commercial')->nullable();


            #critères

            $table->double('superficie')->nullable();
            $table->double('espace_vert')->nullable();

            $table->boolean('gardiennage')->default(0);
            $table->boolean('air_de_jeu')->default(0);
            $table->boolean('piscine')->default(0);
            $table->boolean('terrain_sport')->default(0);
            $table->boolean('salle_fitness')->default(0);
            $table->boolean('spa')->default(0);
            $table->boolean('superette')->default(0);
            $table->boolean('ecole')->default(0);
            $table->boolean('mosque')->default(0);
            $table->boolean('shopping')->default(0);
            $table->boolean('restaurant')->default(0);
            $table->boolean('service_menage')->default(0);


            #proche

            $table->string('plage')->nullable();
            $table->string('campagne')->nullable();
            $table->string('montagne')->nullable();
            $table->string('desert')->nullable();
            $table->string('spot_surf')->nullable();
            $table->string('golf')->nullable();
            $table->string('foret')->nullable();
            $table->string('station_ski')->nullable();
            $table->string('riviere')->nullable();

            #description

            $table->text('description')->nullable();
            $table->text('medias')->nullable();
            $table->text('images')->nullable();
            $table->text('videos')->nullable();

            #location

            $table->text('adresse')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->boolean('online')->default(0);

            $table->bigInteger('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('neufs');
    }
}

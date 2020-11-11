<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldProfessionnels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professionnels', function (Blueprint $table) {

            $table->boolean('wifi')->default(0);
            $table->boolean('garage_vehicule')->default(0);
            $table->boolean('restauration')->default(0);
            $table->boolean('reception')->default(0);
            $table->boolean('reservation')->default(0);
            $table->boolean('dejeune')->default(0);
            $table->boolean('tele_cable')->default(0);
            $table->boolean('chambre_non_fumeur')->default(0);
            $table->boolean('service_en_chambre')->default(0);
            $table->boolean('menage_quotidien')->default(0);
            $table->boolean('animal_de_compagnie')->default(0);
            $table->boolean('cafeteriat')->default(0);










            $table->boolean('blanchisserie')->default(0);
            $table->double('terrasse_commerciale')->nullable();



            $table->boolean('echange_meuble')->default(0);
            $table->text('uri')->nullable();

            $table->text('type_chambre')->nullable();

            
            $table->string('page')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professionnels', function (Blueprint $table) {
            
            $table->dropColumn('wifi');
            $table->dropColumn('garage_vehicule');
            $table->dropColumn('echange_meuble');
            $table->dropColumn('uri');
            $table->dropColumn('page');
            $table->dropColumn('terrasse_commerciale');

            $table->dropColumn('restauration');
            $table->dropColumn('blanchisserie');
            $table->dropColumn('reception');
            $table->dropColumn('reservation');
            $table->dropColumn('type_chambre');
            $table->dropColumn('dejeune');
            $table->dropColumn('tele_cable');
            $table->dropColumn('chambre_non_fumeur');
            $table->dropColumn('service_en_chambre');
            $table->dropColumn('menage_quotidien');
            $table->dropColumn('animal_de_compagnie');
            $table->dropColumn('cafeteriat');









        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Portail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('particuliers', function (Blueprint $table) {
            $table->double('portail_quatre')->nullable();
            $table->double('portail_cinq')->nullable();
            $table->double('portail_six')->nullable();
            $table->double('portail_sept')->nullable();
            $table->double('portail_huit')->nullable();
            $table->double('portail_neuf')->nullable();
            $table->double('surface_disponible_un')->nullable();
            $table->double('surface_disponible_deux')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('particuliers', function (Blueprint $table) {
            $table->dropColumn('portail_quatre');
            $table->dropColumn('portail_cinq');
            $table->dropColumn('portail_six');
            $table->dropColumn('portail_sept');
            $table->dropColumn('portail_huit');
            $table->dropColumn('portail_neuf');
            $table->dropColumn('surface_disponible_un');
            $table->dropColumn('surface_disponible_deux');
        });
    }
}

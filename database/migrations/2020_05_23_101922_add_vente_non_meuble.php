<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVenteNonMeuble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('particuliers', function (Blueprint $table) {
            $table->boolean('vente_non_meuble')->default(0);
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
            $table->dropColumn('vente_non_meuble');
        });
    }
}
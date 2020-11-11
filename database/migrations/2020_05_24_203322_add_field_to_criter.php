<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToCriter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professionnel_criteres', function (Blueprint $table) {
            $table->boolean('nombre_chambre')->default(0);
            $table->boolean('dressings')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professionnel_criteres', function (Blueprint $table) {
            $table->dropColumn('nombre_chambre');
            $table->dropColumn('dressings');
        });
    }
}

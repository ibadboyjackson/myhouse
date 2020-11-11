<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTerrasseToParticulier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('particuliers', function (Blueprint $table) {
            $table->double('terrasse_commerciale')->nullable();
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
            $table->dropColumn('terrasse_commerciale');
        });
    }
}

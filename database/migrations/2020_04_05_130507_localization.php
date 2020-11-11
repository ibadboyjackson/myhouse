<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Localization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('neufs', function (Blueprint $table) {
            $table->text('ville')->nullable();
            $table->text('pays')->nullable();
            $table->text('quartier')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('neufs', function (Blueprint $table) {
            $table->dropColumn('ville');
            $table->dropColumn('pays');
            $table->dropColumn('quartier');
        });
    }
}

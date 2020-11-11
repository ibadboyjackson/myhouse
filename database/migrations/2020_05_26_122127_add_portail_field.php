<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPortailField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('particulier_criteres', function (Blueprint $table) {
            
            $table->boolean('portail_quatre')->default(0);
            $table->boolean('portail_cinq')->default(0);
            $table->boolean('portail_six')->default(0);
            $table->boolean('portail_sept')->default(0);
            $table->boolean('portail_huit')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('particulier_criteres', function (Blueprint $table) {
            
            $table->dropColumn('portail_quatre');
            $table->dropColumn('portail_cinq');
            $table->dropColumn('portail_six');
            $table->dropColumn('portail_sept');
            $table->dropColumn('portail_huit');

        });
    }
}

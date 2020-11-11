<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNearField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('particuliers', function (Blueprint $table) {
            $table->boolean('mplage')->default(0);
            $table->boolean('mcampagne')->default(0);
            $table->boolean('mmontagne')->default(0);
            $table->boolean('mdesert')->default(0);
            $table->boolean('mspot_surf')->default(0);
            $table->boolean('mgolf')->default(0);
            $table->boolean('mforet')->default(0);
            $table->boolean('mstation_ski')->default(0);
            $table->boolean('mriviere')->default(0);
            $table->boolean('mvoix')->default(0);

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
            $table->dropColumn('mplage');
            $table->dropColumn('mcampagne');
            $table->dropColumn('mmontagne');
            $table->dropColumn('mdesert');
            $table->dropColumn('mspot_surf');
            $table->dropColumn('mgolf');
            $table->dropColumn('mforet');
            $table->dropColumn('mstation_ski');
            $table->dropColumn('mriviere');
            $table->dropColumn('mvoix');

        });
    }
}

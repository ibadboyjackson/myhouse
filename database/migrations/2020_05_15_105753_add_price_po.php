<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPricePo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professionnels', function (Blueprint $table) {
            $table->double('prix_m')->nullable();
            $table->string('charges')->nullable();
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
            $table->dropColumn('prix_m');
            $table->dropColumn('charges');
        });
    }
}
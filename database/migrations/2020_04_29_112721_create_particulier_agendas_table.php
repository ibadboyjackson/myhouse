<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticulierAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('particulier_agendas', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('particulier_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->dateTime('start');
            $table->dateTime('end');

            $table->foreign('particulier_id')->references('id')->on('particuliers')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


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
        Schema::dropIfExists('particulier_agendas');
    }
}

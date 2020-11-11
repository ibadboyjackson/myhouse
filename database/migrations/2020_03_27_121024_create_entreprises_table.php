<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {

            $table->id();

            $table->string('nom')->nullable();
            $table->string('ville')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telephone_un')->nullable();
            $table->string('telephone_deux')->nullable();
            $table->string('telephone_trois')->nullable();
            $table->string('email')->nullable();
            $table->string('pays')->nullable();
            $table->double('code_postal')->nullable();
            $table->string('images')->nullable();
            $table->string('logo')->nullable();
            $table->string('siteweb')->nullable();

            $table->bigInteger('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('entreprises');
    }
}

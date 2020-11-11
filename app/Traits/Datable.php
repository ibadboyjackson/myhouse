<?php

namespace App\Traits;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

trait Datable {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->name, function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nom');
            $table->double('lat')->nullable();
            $table->double('long')->nullable();

            $table->bigInteger('country_id')->unsigned();
            $table->bigInteger('region_id')->unsigned();
            $table->bigInteger('prefecture_id')->unsigned();
            $table->bigInteger('town_id')->unsigned();
            $table->bigInteger('district_id')->unsigned();
            $table->bigInteger('quartier_id')->unsigned();

            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->foreign('prefecture_id')->references('id')->on('prefectures')->onDelete('cascade');
            $table->foreign('town_id')->references('id')->on('towns')->onDelete('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('quartier_id')->references('id')->on('quartiers')->onDelete('cascade');

            $table->timestamps();
        });
    }


}

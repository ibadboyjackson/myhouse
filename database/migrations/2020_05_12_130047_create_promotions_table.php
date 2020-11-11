<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            
            $table->id();

            $table->text('linge11')->nullable();
            $table->text('linge12')->nullable();
            $table->text('linge13')->nullable();
            $table->text('linge14')->nullable();
            $table->text('linge15')->nullable();


            $table->text('linge21')->nullable();
            $table->text('linge22')->nullable();
            $table->text('linge23')->nullable();
            $table->text('linge24')->nullable();
            $table->text('linge25')->nullable();




            $table->text('linge31')->nullable();
            $table->text('linge32')->nullable();
            $table->text('linge33')->nullable();
            $table->text('linge34')->nullable();



            $table->text('linge41')->nullable();
            $table->text('linge42')->nullable();
            $table->text('linge43')->nullable();
            $table->text('linge44')->nullable();
            $table->text('linge45')->nullable();


            $table->bigInteger('professionnel_id')->references('id')->on('professionnels')->onDelete('cascade');
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
        Schema::dropIfExists('promotions');
    }
}

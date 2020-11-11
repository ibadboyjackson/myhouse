<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationNonMeuble extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    
    {
        Schema::table('particuliers', function (Blueprint $table) {
          
            $table->boolean('location_non_meuble')->default(0); 
            $table->text('transactionurl')->nullable();
            $table->text('typeurl')->nullable();
            $table->text('descriptionurl')->nullable();
            $table->text('critereurl')->nullable();
            $table->text('localisationurl')->nullable();
            $table->text('uploadurl')->nullable();
            $table->text('successurl')->nullable();


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
            
            $table->dropColumn('location_non_meuble');
            $table->dropColumn('transactionurl');
            $table->dropColumn('typeurl');
            $table->dropColumn('descriptionurl');
            $table->dropColumn('critereurl');
            $table->dropColumn('localisationurl');
            $table->dropColumn('uploadurl');
            $table->dropColumn('successurl');



        });
    }
}

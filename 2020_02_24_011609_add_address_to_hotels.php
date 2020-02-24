<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressToHotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Address', function (Blueprint $table) {
	    $table->string('Address_1');
            $table->string('Address_2')->nullable();
            $table->string('City');
            $table->string('State');
	    $table->string('Zip');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
        Schema::drop('Address');
    }
}

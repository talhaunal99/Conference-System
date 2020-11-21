<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CountryCity', function (Blueprint $table) {
            $table->string('CityName', 30);
            $table->string('CountryCode', 3);
            $table->increments('CityId');
            $table->foreign('CountryCode')->references('CountryCode')->on('Country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CountryCity');
    }
}

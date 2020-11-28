<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsersInfo', function (Blueprint $table) {
            $table->string('Salutation');
            $table->string('Name');
            $table->string('LastName');
            $table->string('Affiliation');
            $table->string('SecondaryEmail')->unique();
            $table->string('Phone')->unique();
            $table->string('Fax')->unique();
            $table->string('URL')->unique();
            $table->string('Address')->unique();

            $table->string('CountryCode', 3);
            $table->unsignedInteger('CityId');
            $table->unsignedBigInteger('AuthenticationID');

            $table->primary('AuthenticationID');
            $table->foreign('CountryCode')->references('CountryCode')->on('Country');
            $table->foreign('CityId')->references('CityId')->on('CountryCity');
            $table->foreign('AuthenticationID')->references('id')->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UsersInfo');
    }
}

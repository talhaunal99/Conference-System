<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsersLog', function (Blueprint $table) {
            $table->id();
            $table->string('Salutation');
            $table->string('Name');
            $table->string('LastName');
            $table->string('Affiliation');
            $table->string('SecondaryEmail');
            $table->string('Phone');
            $table->string('Fax');
            $table->string('URL');
            $table->string('Address');
            $table->timestamps();

            $table->string('CountryCode', 3);
            $table->unsignedInteger('CityId');
            $table->unsignedBigInteger('AuthenticationID');
//            $table->primary(['id', 'AuthenticationID']);

            $table->foreign('CountryCode')->references('CountryCode')->on('Country');
            $table->foreign('CityId')->references('CityId')->on('CountryCity');
            $table->foreign('AuthenticationID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UsersLog');
    }
}

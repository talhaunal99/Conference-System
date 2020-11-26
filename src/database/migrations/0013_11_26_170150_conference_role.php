<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConferenceRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ConferenceRole', function (Blueprint $table) {
            $table->string('ConfID', 20);
            $table->string('Role', 8);
            $table->unsignedBigInteger('AuthenticationID');
            $table->primary(['ConfID', 'Role', 'AuthenticationID']);
            $table->foreign('ConfID')->references('ConfID')->on('Conference')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreign('AuthenticationID')->references('id')->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreign('Role')->references('Role')->on('Role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ConferenceRole');
    }
}

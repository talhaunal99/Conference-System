<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConferenceTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ConferenceTag', function (Blueprint $table) {
            $table->string('ConfID', 20);
            $table->string('Tag', 30);
            $table->primary(['ConfID', 'Tag']);
            $table->foreign('ConfID')->references('ConfID')->on('Conference')
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
        Schema::dropIfExists('ConferenceTag');
    }
}

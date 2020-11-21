<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conference', function (Blueprint $table) {
            //$table->timestamps();
            $table->id('ConfID');
            $table->dateTime('CreationDateTime');
            $table->char('Name', 100);
            $table->char('ShortName', 19);
            $table->integer('Year');
            $table->dateTime('StartDate');
            $table->dateTime('EndDate');
            $table->dateTime('Submission_Deadline');
            $table->char('WebSite', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Conference');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Conference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conference', function (Blueprint $table) {
            $table->string('ConfID', 20);
            $table->dateTime('CreationDateTime');
            $table->string('Name', 100);
            $table->string('ShortName', 19);
            $table->integer('Year');
            $table->date('StartDate');
            $table->date('EndDate');
            $table->date('Submission_Deadline');
            $table->string('WebSite', 100);
            $table->unsignedBigInteger('CreatorUser');
            $table->boolean('approved');
            $table->primary('ConfID');
            $table->foreign('CreatorUser')->references('id')->on('users');

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

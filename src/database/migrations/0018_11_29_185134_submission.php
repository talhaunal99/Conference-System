<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Submission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Submissions', function (Blueprint $table) {
            $table->unsignedBigInteger('AuthenticationID');
            $table->string('ConfID', 20);
            $table->string('submission_id');
            $table->string('prev_submission_id')->nullable();

            $table->foreign('AuthenticationID')->references('id')->on('users');
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
        Schema::dropIfExists('Submissions');
    }
}

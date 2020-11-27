<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMongoSubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mongodb')->create('mongo_subs', function ($collection) {
            $collection->string('prev_submission_id');
            $collection->string('submission_id');
            $collection->string('title');
            $collection->string('abstract');
            $collection->string('keywords');
            $collection->string('authors.authenticationID');
            $collection->string('authors.name');
            $collection->string('authors.email');
            $collection->string('authors.affil');
            $collection->string('authors.country');
            $collection->string('submitted_by');
            $collection->string('corresponding_author');
            $collection->string('pdf_path');
            $collection->string('type');
            $collection->date_time('submission_date_time');
            $collection->bool('status');
            $collection->bool('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mongodb')->drop('mongo_subs');
    }
}

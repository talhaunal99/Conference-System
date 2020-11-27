<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Mongo_subs extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'mongo_subs';

    protected $fillable = [
        'prev_submission_id',
        'submission_id',
        'title',
        'abstract',
        'keywords',
        'authors' => ['authenticationID', 'name', 'email', 'affil', 'country'],
        'submitted_by',
        'corresponding_author',
        'pdf_path',
        'type',
        'submission_date_time',
        'status',
        'active,'
    ];
}

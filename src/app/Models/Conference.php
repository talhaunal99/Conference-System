<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;

    protected $table = 'Conference';
    public $timestamps = false;

    protected $primaryKey = 'ConfID';
    protected $casts = ['id' => 'string'];
    public $incrementing = false;

    protected $fillable = [
        'CreationDateTime',
        'Name',
        'ShortName',
        'Year',
        'StartDate',
        'EndDate',
        'Submission_Deadline',
        'WebSite',
        'Tags'
    ];
}

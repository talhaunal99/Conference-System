<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceTag extends Model
{
    use HasFactory;

    protected $table = 'ConferenceTag';
    public $timestamps = false;

    protected $fillable = [
        'Tag',
        'ConfID',
    ];
}

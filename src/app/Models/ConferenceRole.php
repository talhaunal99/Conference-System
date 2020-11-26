<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceRole extends Model
{
    use HasFactory;

    protected $table = 'ConferenceRole';
    public $timestamps = false;

    protected $primaryKey = ['ConfID', 'Role', 'AuthenticationID'];
    public $incrementing = false;

    protected $fillable = [
        'ConfID',
        'Role',
        'AuthenticationID'
    ];
}

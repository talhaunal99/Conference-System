<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'Country';
    public $timestamps = false;

    protected $primaryKey = 'Country_Code';
    protected $casts = ['id' => 'string'];
    public $incrementing = false;

    protected $fillable = [
        'Country_Code',
        'Country_Name',
    ];

}

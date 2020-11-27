<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryCity extends Model
{
    use HasFactory;

    protected $table = 'CountryCity';
    public $timestamps = false;

    protected $primaryKey = 'CityID';

    protected $fillable = [
        'CityID',
        'City_Name',
    ];
}

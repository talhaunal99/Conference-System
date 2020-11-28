<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersInfo extends Model
{
    use HasFactory;

    protected $table = 'UsersInfo';
    public $timestamps = false;

    protected $primaryKey = 'AuthenticationID';

    protected $fillable = [
        'Salutation',
        'Name',
        'LastName',
        'Affiliation',
        'SecondaryEmail',
        'Phone',
        'Fax',
        'URL',
        'Address',
        'CountryCode',
        'CityId',
        'AuthenticationID',
    ];
}

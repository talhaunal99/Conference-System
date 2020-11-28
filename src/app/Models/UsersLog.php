<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersLog extends Model
{
    use HasFactory;

    protected $table = 'UsersLog';

    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id',
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

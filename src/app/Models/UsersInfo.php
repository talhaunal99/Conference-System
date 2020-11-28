<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersInfo extends Model
{
    use HasFactory;

    protected $table = 'UsersInfo';

    protected $primaryKey = 'ConfID';

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
    ];
}

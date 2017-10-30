<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'age',
        'adress',
        'housenumber',
        'municipality',
        'postalcode',
        'email',
        'has_permission',
        'answerd',
        'ipadress'
    ];
}

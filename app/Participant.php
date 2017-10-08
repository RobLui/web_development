<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'adress',
        'housenumber',
        'municipality',
        'postalcode',
        'email',
        'has_permission'
    ];
}

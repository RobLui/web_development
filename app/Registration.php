<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'adress',
        'housenumber',
        'municipality',
        'postalcode',
        'email'
    ];
}

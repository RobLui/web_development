<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
//    public function Period()
//    {
//        return $this->belongsTo('App\Participant');
//    }
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

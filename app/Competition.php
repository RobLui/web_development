<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'explanation',
        'prizes',
        'previous_participants'
    ];
}

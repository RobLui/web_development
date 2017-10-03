<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailManager extends Model
{
    protected $fillable = [
        'name',
        'email',
        'competition_id',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $fillable = [
        'startDate',
        'endDate',
        'winner',
        'winner_name',
        'winner_email'
    ];
}

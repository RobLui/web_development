<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'category',
        'title',
        'text',
        'difficulty',
        'answerd'
    ];
}

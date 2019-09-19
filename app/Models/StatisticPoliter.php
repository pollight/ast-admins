<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatisticPoliter extends Model
{
        protected $fillable = [
        'Length',
        'Width',
        'Height',
        'Time',
        'ColBoard',
        'Sort',
        'karman',
    ];
}

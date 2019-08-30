<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataBoard extends Model
{
    protected $fillable = [
        'Length',
        'Width',
        'Height',
        'Time',
        'Volume',
        'Type',
        'Sort',
        'Suchki',
        'Treschiny',
        'Svievatist',
        'Prorost',
        'Zabolon',
        'Plesen',
        'Gnil',
        'Sineva',
        'Obzol',
        'Mech',
        'Piatna',
    ];
}

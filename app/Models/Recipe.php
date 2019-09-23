<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'Name',
        'userId',
        'gost',
        'used',

        'knotsIntegrated_plast_enable',

        'knotsIntegrated_plast_size1',
        'knotsIntegrated_plast_size2',
        'knotsIntegrated_plast_size3',
        'knotsIntegrated_plast_size4',
        'knotsIntegrated_plast_size5',

        'knotsIntegrated_plast_quantity1',
        'knotsIntegrated_plast_quantity2',
        'knotsIntegrated_plast_quantity3',
        'knotsIntegrated_plast_quantity4',
        'knotsIntegrated_plast_quantity5',

        'knotsIntegrated_kormkaDo40_enable',

        'knotsIntegrated_kormkaDo40_size1',
        'knotsIntegrated_kormkaDo40_size2',
        'knotsIntegrated_kormkaDo40_size3',
        'knotsIntegrated_kormkaDo40_size4',
        'knotsIntegrated_kormkaDo40_size5',

        'knotsIntegrated_kormkaDo40_quantity1',
        'knotsIntegrated_kormkaDo40_quantity2',
        'knotsIntegrated_kormkaDo40_quantity3',
        'knotsIntegrated_kormkaDo40_quantity4',
        'knotsIntegrated_kormkaDo40_quantity5',

        'knotsIntegrated_kormkaPosle40_enable',

        'knotsIntegrated_kormkaPosle40_size1',
        'knotsIntegrated_kormkaPosle40_size2',
        'knotsIntegrated_kormkaPosle40_size3',
        'knotsIntegrated_kormkaPosle40_size4',
        'knotsIntegrated_kormkaPosle40_size5',

        'knotsIntegrated_kormkaPosle40_quantity1',
        'knotsIntegrated_kormkaPosle40_quantity2',
        'knotsIntegrated_kormkaPosle40_quantity3',
        'knotsIntegrated_kormkaPosle40_quantity4',
        'knotsIntegrated_kormkaPosle40_quantity5',

        'knotsNotIntagrated__plast_enable',

        'knotsNotIntagrated__plast_size1',
        'knotsNotIntagrated__plast_size2',
        'knotsNotIntagrated__plast_size3',
        'knotsNotIntagrated__plast_size4',
        'knotsNotIntagrated__plast_size5',

        'knotsNotIntagrated__plast_quantity1',
        'knotsNotIntagrated__plast_quantity2',
        'knotsNotIntagrated__plast_quantity3',
        'knotsNotIntagrated__plast_quantity4',
        'knotsNotIntagrated__plast_quantity5',

        'knotsNotIntagrated_kormkaDo40_enable',

        'knotsNotIntagrated_kormkaDo40_size1',
        'knotsNotIntagrated_kormkaDo40_size2',
        'knotsNotIntagrated_kormkaDo40_size3',
        'knotsNotIntagrated_kormkaDo40_size4',
        'knotsNotIntagrated_kormkaDo40_size5',

        'knotsNotIntagrated_kormkaDo40_quantity1',
        'knotsNotIntagrated_kormkaDo40_quantity2',
        'knotsNotIntagrated_kormkaDo40_quantity3',
        'knotsNotIntagrated_kormkaDo40_quantity4',
        'knotsNotIntagrated_kormkaDo40_quantity5',

        'knotsNotIntagrated_kormkaPosle40_enable',

        'knotsNotIntagrated_kormkaPosle40_size1',
        'knotsNotIntagrated_kormkaPosle40_size2',
        'knotsNotIntagrated_kormkaPosle40_size3',
        'knotsNotIntagrated_kormkaPosle40_size4',
        'knotsNotIntagrated_kormkaPosle40_size5',

        'knotsNotIntagrated_kormkaPosle40_quantity1',
        'knotsNotIntagrated_kormkaPosle40_quantity2',
        'knotsNotIntagrated_kormkaPosle40_quantity3',
        'knotsNotIntagrated_kormkaPosle40_quantity4',
        'knotsNotIntagrated_kormkaPosle40_quantity5',

        'knotsWithRot_enable',

        'knotsWithRot_size1',
        'knotsWithRot_size2',
        'knotsWithRot_size3',
        'knotsWithRot_size4',
        'knotsWithRot_size5',

        'knotsWithRot_quantity1',
        'knotsWithRot_quantity2',
        'knotsWithRot_quantity3',
        'knotsWithRot_quantity4',
        'knotsWithRot_quantity5',

        'sineva_enable',

        'sineva_size1',
        'sineva_size2',
        'sineva_size3',
        'sineva_size4',
        'sineva_size5',

        'obzolBlunt_enable',

        'obzolBlunt_size1',
        'obzolBlunt_size2',
        'obzolBlunt_size3',
        'obzolBlunt_size4',
        'obzolBlunt_size5',

        'obzolSharp_enable',

        'obzolSharp_size1',
        'obzolSharp_size2',
        'obzolSharp_size3',
        'obzolSharp_size4',
        'obzolSharp_size5',
        
    ];
}

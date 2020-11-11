<?php

namespace App\Model\Administration;

use App\Traits\Movable;
use Illuminate\Database\Eloquent\Model;

class Avenue extends Model
{
    protected $fillable = ['nom', 'lat', 'long', 'country_id', 'region_id', 'prefecture_id', 'town_id', 'district_id', 'quartier_id'];

    use Movable;
}

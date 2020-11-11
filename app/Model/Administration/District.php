<?php

namespace App\Model\Administration;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['nom', 'lat', 'long', 'country_id', 'region_id', 'prefecture_id', 'town_id'];

    public function country () {
        return $this->belongsTo(Country::class);
    }

    public function region () {
        return $this->belongsTo(Region::class);
    }

    public function prefecture () {
        return $this->belongsTo(Prefecture::class);
    }

    public function town () {
        return $this->belongsTo(Town::class);
    }
}

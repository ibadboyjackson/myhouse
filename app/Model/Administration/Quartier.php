<?php

namespace App\Model\Administration;

use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    protected $fillable = ['nom', 'lat', 'long', 'country_id', 'region_id', 'prefecture_id', 'town_id', 'district_id'];

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

    public function district () {
        return $this->belongsTo(District::class);
    }
}

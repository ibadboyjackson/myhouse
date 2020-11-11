<?php

namespace App\Model\Administration;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    protected $fillable = ['nom', 'lat', 'long', 'country_id', 'region_id'];

    public function country () {
        return $this->belongsTo(Country::class);
    }

    public function region () {
        return $this->belongsTo(Region::class);
    }
}

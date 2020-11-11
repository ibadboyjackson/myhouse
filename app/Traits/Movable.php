<?php

namespace App\Traits;

use App\Model\Administration\Country;
use App\Model\Administration\District;
use App\Model\Administration\Prefecture;
use App\Model\Administration\Quartier;
use App\Model\Administration\Region;
use App\Model\Administration\Town;

trait Movable {

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

    public function quartier () {
        return $this->belongsTo(Quartier::class);
    }

}

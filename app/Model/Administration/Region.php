<?php

namespace App\Model\Administration;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['nom', 'country_id', 'lat', 'long'];

    public function country () {
        return $this->belongsTo(Country::class);
    }
}

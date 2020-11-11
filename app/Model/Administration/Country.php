<?php

namespace App\Model\Administration;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['nom', 'lat', 'long', 'indicative', 'country_code', 'alpha2', 'alpha3'];
}

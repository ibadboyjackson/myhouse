<?php

namespace App\Model;

use App\Model\Administration\Quartier;
use App\Model\Administration\Region;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    protected $fillable = [];


    public function transaction () {
        return $this->belongsTo(Transaction::class);
    }

    public function quartier () {
        return $this->belongsTo(Quartier::class);
    }

    public function region () {
        return $this->belongsTo(Region::class);
    }

}

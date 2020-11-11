<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['nom'];

    public function project () {
        return $this->hasMany(Projet::class);
    }
}

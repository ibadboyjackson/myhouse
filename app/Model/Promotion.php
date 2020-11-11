<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public function project () {
        return $this->belongsTo(Projet::class);
    }
}

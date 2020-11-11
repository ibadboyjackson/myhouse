<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['nom', 'project_id'];

    public function project () {
        return $this->belongsTo(Projet::class);
    }
}

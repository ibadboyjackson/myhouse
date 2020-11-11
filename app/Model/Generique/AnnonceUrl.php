<?php

namespace App\Model\Generique;

use Illuminate\Database\Eloquent\Model;

class AnnonceUrl extends Model
{
    protected $fillable = ['url', 'user_id'];
}

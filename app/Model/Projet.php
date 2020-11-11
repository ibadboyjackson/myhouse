<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $casts = [
        'images' => 'array',
        'videos' => 'array'
    ];
}

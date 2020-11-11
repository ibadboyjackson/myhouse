<?php

namespace App\Model\Generique;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
      'sujet',
      'contenu',
      'user_id'
    ];
}

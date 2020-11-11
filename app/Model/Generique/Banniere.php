<?php

namespace App\Model\Generique;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Banniere extends Model
{

    protected $fillable = [
      'image',
      'date',
      'user_id'
    ];

    public function setDateAttribute ($input) {
        $this->attributes['date'] =
            Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
    }
}

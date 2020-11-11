<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class ParticulierAgenda extends Model
{



    protected $fillable = ['start', 'end'];
    
    public function agenda_to_user () {
        return $this->belongsToMany(User::class, 'particulier_agendas', 'particulier_id', 'user_id')->withTimestamps()->withPivot('start', 'end');
    }

}

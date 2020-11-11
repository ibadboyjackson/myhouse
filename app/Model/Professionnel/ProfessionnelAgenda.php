<?php

namespace App\Model\Professionnel;

use Illuminate\Database\Eloquent\Model;

class ProfessionnelAgenda extends Model
{
    protected $fillable = ['start', 'end'];
    
    public function agenda_to_user () {
        return $this->belongsToMany(User::class, 'professionnel_agendas', 'professionnel_id', 'user_id')->withTimestamps()->withPivot('start', 'end');
    }

}

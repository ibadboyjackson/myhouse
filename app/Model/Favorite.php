<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = ['project_id', 'user_id'];

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function project () {
        return $this->belongsTo(Projet::class);
    }

}

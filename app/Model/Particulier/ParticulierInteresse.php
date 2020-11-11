<?php

namespace App\Model\Particulier;

use App\User;

use Illuminate\Database\Eloquent\Model;

class ParticulierInteresse extends Model
{
    protected $fillable = ['particulier_id', 'user_id'];
}

<?php

namespace App\Model\Administration;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['content', 'post_id', 'user_id'];
}

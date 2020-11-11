<?php

namespace App\Model;

use App\Model\Administration\Comment;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function league () {
        return $this->belongsTo(League::class);
    }

    public function comment () {
        return $this->belongsTo(Comment::class);
    }
}

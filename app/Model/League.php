<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $fillable = ['nom'];

    public function post () {
        return $this->hasMany(Post::class);
    }
}

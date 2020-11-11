<?php

namespace App\Model\Administration;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['title', 'content', 'user_id', 'post_id'];

    public function reply () {
        return $this->belongsTo(Reply::class);
    }
}

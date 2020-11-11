<?php

namespace App\Model\Faq;

use App\User;
use Illuminate\Database\Eloquent\Model;

class FaqType extends Model
{
    protected $fillable = ['name', 'user_id'];

    public function user () {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Model;

use App\User;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
      'message', 'from_id', 'to_id', 'read_at', 'created_at'
    ];

    public $timestamps = false;

    protected $dates = ['created_at', 'read_at'];

    public function from() {
        return $this->belongsTo(User::class, 'from_id');
    }

    public function serializeDate(DateTimeInterface $date)
    {
        return $date->format('c');
    }
}

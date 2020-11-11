<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['nom'];

    public function transaction_type () {
        return $this->hasMany(TransactionType::class);
    }
}

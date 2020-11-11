<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    protected $fillable = ['nom', 'transaction_id'];

    public function transaction () {
        return $this->belongsTo(Transaction::class);
    }
}

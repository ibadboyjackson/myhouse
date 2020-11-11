<?php

namespace App\Model\Faq;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    protected $fillable = ['name', 'faqType_id', 'slug'];

    public function faqType () {
        return $this->belongsTo(FaqType::class);
    }
}

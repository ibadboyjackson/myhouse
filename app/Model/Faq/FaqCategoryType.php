<?php

namespace App\Model\Faq;

use Illuminate\Database\Eloquent\Model;

class FaqCategoryType extends Model
{
    protected $fillable = ['name', 'slug', 'faqCategory_id', 'faqType_id'];

    public function faqCategory () {
        return $this->belongsTo(FaqCategory::class);
    }

    public function faqType () {
        return $this->belongsTo(FaqType::class);
    }
}

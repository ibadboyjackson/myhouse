<?php

namespace App\Model\Faq;

use Illuminate\Database\Eloquent\Model;

class FaqCategoryTypeQuestion extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'faqType_id', 'faqCategory_id', 'faqCategoryType_id'];

    public function faqCategoryType () {
        return $this->belongsTo(FaqCategoryType::class);
    }

    public function faqCategory () {
        return $this->belongsTo(FaqCategory::class);
    }

    public function faqType () {
        return $this->belongsTo(FaqType::class);
    }
}

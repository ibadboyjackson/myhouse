<?php

namespace App\Model\Particulier;

use Illuminate\Database\Eloquent\Model;

class TypeBien extends Model
{
    protected $fillable = ['nom', 'category_types_id'];


    public function particulier () {
        return $this->belongsTo(Particulier::class);
    }

}

<?php

namespace App\Model\Generique;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Entreprise extends Model
{


  use HasTranslations;

  public $translatable = [
    "description"
  ];

    protected $fillable = [
      'nom',
      'ville',
      'adresse',
      'telephone_un',
      'telephone_deux',
      'telephone_trois',
      'email',
      'pays',
      'code_postal',
      'user_id',
      'images',
      'siteweb',
      'image',
      'description'
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Model\Professionnel;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Promotion extends Model
{


    use HasTranslations;


    protected $fillable = [

        'linge11',
        'linge12',
        'linge13',
        'linge14',
        'linge15',

        'linge21',
        'linge22',
        'linge23',
        'linge24',
        'linge25',
        
        'linge31',
        'linge32',
        'linge33',
        'linge34',

        'linge41',
        'linge42',
        'linge43',
        'linge44',
        'linge45',

        'professionnel_id',
        'user_id',
        
    ];


    public $translatable = [
       
        'linge11',
        'linge12',
        'linge13',
        'linge14',
        'linge15',

        'linge21',
        'linge22',
        'linge23',
        'linge24',
        'linge25',
        
        'linge31',
        'linge32',
        'linge33',
        'linge34',

        'linge41',
        'linge42',
        'linge43',
        'linge44',
        'linge45',
      ];

    
}

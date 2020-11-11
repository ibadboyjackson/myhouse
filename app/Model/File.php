<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['project_id', 'filename'];

    public function projet () {
        return $this->belongsTo(Projet::class);
    }
}

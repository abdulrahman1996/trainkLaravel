<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //

    public function adjusments(){
        return $this->belongsToMany(Adjusment::class , 'adjusments')
            ->withTimestamps()
            ->latest('pivot_updated_at');

    }
}


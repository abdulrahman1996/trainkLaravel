<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property \Carbon\Carbon $created_at
 * @property int $id
 */
class Lesson extends Model
{
    //
    /**
     * @param $query
     * @param QueryFilter $filters
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public  function scopeFilter($query  , QueryFilter $filters)
    {
        return $filters->apply($query);
    }
}

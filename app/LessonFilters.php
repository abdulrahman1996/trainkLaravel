<?php
/**
 * Created by PhpStorm.
 * User: femto151
 * Date: 18/09/18
 * Time: 12:42 م
 */

namespace App;


class LessonFilters extends  QueryFilter
{
    public  function popular($order = 'desc')
    {
        return $this->builder->orderBy('views' , $order);
    }
    public function difficulty($level)
    {
        return $this->builder->where('difficulty'  , $level);
    }

}
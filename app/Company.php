<?php

namespace App;

use App\Review;

class Company extends Model
{
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}

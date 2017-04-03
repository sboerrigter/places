<?php

namespace App;

use App\Review;

class Company extends Model
{
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function addReview($request)
    {
        $this->reviews()->create($request);
    }
}

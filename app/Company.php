<?php

namespace App;

use App\Review;
use App\User;

class Company extends Model
{
    public function reviews()
    {
        return $this->hasMany('Review');
    }

    public function user()
    {
        return $this->belongsTo(User);
    }

    public function addReview($request)
    {
        $this->reviews()->create($request);
    }
}

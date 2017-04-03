<?php

namespace App;

use App\Company;
use App\User;

class Review extends Model
{
    public function company()
    {
        return $this->belongsTo(Company);
    }

    public function user()
    {
        return $this->belongsTo(User);
    }
}

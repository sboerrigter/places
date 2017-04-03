<?php

namespace App;

use App\Company;

class Review extends Model
{
    public function company()
    {
        return $this->belongsTo(Company);
    }
}

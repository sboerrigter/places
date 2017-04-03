<?php

namespace App;

use App\Company;
use App\Review;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function companies()
    {
        return $this->hasMany(Company);
    }

    public function reviews()
    {
        return $this->hasMany(Review);
    }

    public function publish(Company $company)
    {
        $this->companies()->save($company);
    }
}

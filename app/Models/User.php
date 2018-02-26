<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use\Illuminate\Auth\Authenticatable; // Tout ce dont on a besoin pour identifier nos users
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}

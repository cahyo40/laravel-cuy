<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    public function role()
    {
        return $this->hasMany('App\Models\Warga');
    }
}

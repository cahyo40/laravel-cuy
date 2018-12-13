<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    public $timestamps = false;
    public function agama()
    {
        return $this->hasOne('App\Warga');
    }
}

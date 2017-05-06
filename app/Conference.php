<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    public function colleges()
    {
        return $this->hasMany('App\College');
    }
}

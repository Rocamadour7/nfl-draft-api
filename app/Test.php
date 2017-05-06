<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function players()
    {
        return $this->belongsToMany('App\Player');
    }
}

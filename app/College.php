<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    public function conference()
    {
        return $this->belongsTo('App\Conference');
    }

    public function players()
    {
        return $this->hasMany('App\Player');
    }
}

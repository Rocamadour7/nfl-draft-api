<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players()
    {
        return $this->belongsToMany('App\Player', 'draft_details');
    }

    public function rounds()
    {
        return $this->belongsToMany('App\Round', 'draft_details');
    }
}

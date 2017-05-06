<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    public function players()
    {
        return $this->belongsToMany('App\Player', 'draft_details');
    }

    public function teams()
    {
        return $this->belongsToMany('App\Team', 'draft_details');
    }
}

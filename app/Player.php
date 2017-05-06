<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function college()
    {
        return $this->belongsTo('App\College');
    }

    public function position()
    {
        return $this->belongsTo('App\Position');
    }

    public function tests()
    {
        return $this->belongsToMany('App\Test');
    }

    public function teams()
    {
        return $this->belongsToMany('App\Team', 'draft_details');
    }

    public function rounds()
    {
        return $this->belongsToMany('App\Round', 'draft_details');
    }
}

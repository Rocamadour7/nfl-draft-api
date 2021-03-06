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
        return $this->belongsToMany('App\Test')->withPivot('result');
    }

    public function teams()
    {
        return $this->belongsToMany('App\Team', 'draft_details', 'player_id', 'team_id')->withPivot('draftOverall', 'draftRound', 'round');
    }

    public function rounds()
    {
        return $this->belongsToMany('App\Round', 'draft_details', 'player_id', 'round')->withPivot('draftOverall', 'draftRound', 'team_id');
    }
}

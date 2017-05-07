<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players()
    {
        return $this->belongsToMany('App\Player', 'draft_details', 'team_id', 'player_id')->withPivot('draftOverall', 'draftRound', 'round');
    }

    public function rounds()
    {
        return $this->belongsToMany('App\Round', 'draft_details', 'team_id', 'round')->withPivot('draftOverall', 'draftRound', 'player_id');
    }
}

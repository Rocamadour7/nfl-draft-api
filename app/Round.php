<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    public function players()
    {
        return $this->belongsToMany('App\Player', 'draft_details', 'round', 'player_id')->withPivot('draftOverall', 'draftRound', 'team_id');
    }

    public function teams()
    {
        return $this->belongsToMany('App\Team', 'draft_details', 'round', 'team_id')->withPivot('draftOverall', 'draftRound', 'player_id');
    }
}

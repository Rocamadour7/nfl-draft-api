<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
    public function getPlayer($id)
    {
        $player = Player::with('college.conference', 'position', 'tests', 'teams.rounds')->find($id);
        $response = ['player' => $player];
        return response()->json($response, 200);
    }

    public function getPlayers()
    {
        $players = Player::with('college.conference', 'position', 'tests', 'teams')->get();
        $response = ['players' => $players];
        return response()->json($response, 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
    public function getPlayer($id)
    {
        $player = Player::with('college.conference', 'position', 'tests', 'teams.rounds')->find($id);
        // dd($player);
        $response = ['player' => $player];
        return response()->json($response, 200);
    }

    public function getPlayers()
    {
        $players = Player::with('college', 'position')->get();
        $response = ['players' => $players];
        return response()->json($response, 200);
    }
}

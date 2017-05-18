<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
    public function getPlayer($id)
    {
        try
        {
            $player = Player::with('college.conference', 'position', 'tests', 'teams')->find($id);
            if(!$player)
            {
                return response()->json(['message' => 'Player not found'], 404);
            } else {
                $response = ['player' => $player];
                return response()->json($response, 200);
            }
        }
        catch(\Exception $e)
        {
            return response(['message' => 'Something went wrong on our side.'], 500);
        }
    }

    public function getPlayers()
    {
        
        try
        {
            $players = Player::with('college.conference', 'position', 'tests', 'teams')->get();
            $response = ['players' => $players];
            return response()->json($response, 200);
        }
        catch(\Exception $e)
        {
            return response(['message' => 'Something went wrong on our side.'], 500);
        }
    }
}

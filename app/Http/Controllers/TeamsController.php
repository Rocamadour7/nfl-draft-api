<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
    public function getTeams()
    {
        try
        {
            $teams = Team::all();
            $response = ['teams' => $teams];
            return response()->json($response, 200);
        }
        catch(\Exception $e)
        {
            return response(['message' => 'Something went wrong on our side.'], 500);
        }
    }
}

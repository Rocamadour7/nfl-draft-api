<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
    public function getTeams()
    {
        $teams = Team::all();
        $response = ['teams' => $teams];
        return response()->json($response, 200);
    }
}

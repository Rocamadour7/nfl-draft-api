<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;

class PositionsController extends Controller
{
    public function getPositions()
    {
        $positions = Position::all();
        $response = ['positions' => $positions];
        return response()->json($response, 200);
    }
}

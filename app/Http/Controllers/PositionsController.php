<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;

class PositionsController extends Controller
{
    public function getPositions()
    {
        try
        {
            $positions = Position::all();
            $response = ['positions' => $positions];
            return response()->json($response, 200);
        }
        catch(\Exception $e)
        {
            return response(['message' => 'Something went wrong on our side.'], 500);
        }
    }
}

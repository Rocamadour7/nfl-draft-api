<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;

class CollegesController extends Controller
{
    public function getColleges()
    {
        try
        {
            $colleges = College::all();
            $response = ['colleges' => $colleges];
            return response()->json($response, 200);
        }
        catch(\Exception $e)
        {
            return response(['message' => 'Something went wrong on our side.'], 500);
        }
    }
}

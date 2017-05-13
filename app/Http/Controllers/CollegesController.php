<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;

class CollegesController extends Controller
{
    public function getColleges()
    {
        $colleges = College::all();
        $response = ['colleges' => $colleges];
        return response()->json($response, 200);
    }
}

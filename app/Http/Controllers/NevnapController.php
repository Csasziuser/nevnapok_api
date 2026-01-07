<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NevnapController extends Controller
{
    // /nevnapok?nev={} VAGY /nevnapok?nap={}

    public function index(Request $request){
        if ($request->has('nap'))
        {
            
        }
        else if ($request->has('nap')) 
        {
            
        }
        else
        {
            return response()->json("Hibás paraméter",400, options:JSON_UNESCAPED_UNICODE);    
        }
    }
}

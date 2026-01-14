<?php

namespace App\Http\Controllers;

use App\Models\Nevnap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NevnapController extends Controller
{
    // /nevnapok?nev={} VAGY /nevnapok?nap={1-2}

    public function index(Request $request){
        if ($request->has('nap'))
        {
            [$ho,$nap] = explode('-',$request->nap);

            // Log::info($ho . "-" . $nap);

            $adat = Nevnap::where('ho',$ho)->where('nap',$nap)->get();
        
            return response()->json($adat,200,options:JSON_UNESCAPED_UNICODE);

        }
        else if ($request->has('nev')) 
        {
            $nev = $request->nev;
            $adat = Nevnap::where('nev1',$nev)->orWhere('nev2',$nev)->get();

            return response()->json($adat,200,options:JSON_UNESCAPED_UNICODE);
        }
        else
        {
            return response()->json("Hibás paraméter",400, options:JSON_UNESCAPED_UNICODE);    
        }
    }
}

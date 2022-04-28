<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\RegionResource;
use App\Models\LandPurposes;
use App\Models\Regions;
class ApplicationController extends Controller
{


    public function getRegion(Request $request)
    {
        $regions =  Regions::with('districts')->get();
        return view('user.region', compact('regions'));
    }

    public function map()
    {

        $regions =  Regions::with('districts')->get();

        $land_purposes = LandPurposes::all();

        return view('user.map', compact('regions', 'land_purposes'));
    }
}

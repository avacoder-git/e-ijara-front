<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\RegionResource;
use App\Models\Regions;
class ApplicationController extends Controller
{


    public function getRegion(Request $request)
    {
        $regions =  Regions::with('districts')->get();
        return view('user.region', compact('regions'));
    }

    public function map(Request $request)
    {
        $data = $request->validate([
            'region' => 'required',
        ]);
        return view('user.map', compact('data'));
    }
}

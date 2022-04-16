<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\RegionResource;
use App\Models\Regions;
class ApplicationController extends Controller
{
    public function region(Request $request)
    {

        $request->validate([
            'agree' => 'required'
        ]); 

        session()->put('agree', true);
        return redirect()->route('user.application.region.get');
    }

    public function getRegion(Request $request)
    {
        if (!session()->has('agree')) {
            abort(403);
        }
        $regions =  Regions::with('districts')->get();
        return view('user.region', compact('regions'));
    }

    public function map(Request $request)
    {
        $data = $request->validate([
            'region' => 'required',
            'district' => 'required'
        ]);
        return view('user.map', compact('data'));
    }
}

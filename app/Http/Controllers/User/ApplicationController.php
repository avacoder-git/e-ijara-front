<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Resources\RegionResource;
use App\Models\LandPurposes;
use App\Models\Regions;
use Illuminate\Support\Facades\Auth;

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

    public function delete($id)
    {
        $application = Application::query()->find($id);
        if ($application->user_id !== Auth::id()) {
            return redirect()->back()->with('success', 'Ариза учирилмади');
        }
        $application->delete();
        return redirect()->back()->with('success', 'Ариза учирилди');
    }

    public function edit($id, Request $request)
    {
        $application = Application::query()->find($id);
        if ($application->user_id === Auth::id()) {
            $application->period = $request->period;
            $application->land_purpose_id = $request->land_purpose_id;
            $application->save();
        }

        return redirect()->back()->with('success', 'Ариза тахрирланди');

    }
}

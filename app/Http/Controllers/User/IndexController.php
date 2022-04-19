<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Regions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function dashboard()
    {
        return view('user.main');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function user()
    {
        return auth()->user();
    }

    public function region($title)
    {
        $region = Regions::query()->select('id', 'regionid', 'nameuz')->where('nameuz', 'iLIKE', '%' . $title . '%')->first();
        return response()->json($region);
    }

    public function district($title)
    {
        # code...
    }
}

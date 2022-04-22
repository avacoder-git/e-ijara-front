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

    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function changeProfile(Request $request)
    {
        $user = Auth::user();
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();
        return redirect()->back()->with('success', 'Фойдаланувчи малумотлари тахрирланди');
    }

    public function application()
    {
        return view('user.application');
    }

    public function region($title)
    {
        $region = Regions::query()->select('id', 'regionid', 'nameuz')->where('nameuz', 'iLIKE', '%' . $title . '%')->first();
        return response()->json($region);
    }

    public function user()
    {
        return Auth::user();
    }
}

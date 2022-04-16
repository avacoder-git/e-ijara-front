<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{

    public function index()
    {
        $applications =  Application::with(['region', 'district', 'land_purpose', 'status'])
            ->where('user_id', Auth::id())
            ->orderBy('id', 'desc')
            ->paginate();
        return response()->json($applications);
    }


}

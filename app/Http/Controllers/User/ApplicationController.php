<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function region(Request $request)
    {
        $request->validate([
            'agree' =>'required'
        ]);
        session()->put('agree', true);
        
    }
}

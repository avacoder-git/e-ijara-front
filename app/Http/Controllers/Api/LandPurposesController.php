<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LandPurposesResource;
use App\Models\LandPurposes;
use Illuminate\Support\Facades\Auth;

class   LandPurposesController extends Controller
{
    public function index()
    {
        return LandPurposesResource::collection(LandPurposes::query()->get());
    }

}

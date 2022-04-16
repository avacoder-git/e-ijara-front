<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FondTypeResource;
use App\Models\FondTypes;
use Illuminate\Http\Request;

class FondTypeController extends Controller
{
    public function index()
    {
        return FondTypeResource::collection(FondTypes::all());
    }
}

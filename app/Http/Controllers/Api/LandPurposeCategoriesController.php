<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LandPurposeCategoriesResource;
use App\Models\LandPurposCategories;
use Illuminate\Http\Request;

class LandPurposeCategoriesController extends Controller
{
    public function index()
    {
        return LandPurposeCategoriesResource::collection(LandPurposCategories::all());
    }
}

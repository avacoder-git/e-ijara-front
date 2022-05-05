<?php

use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\User\IndexController;
use App\Http\Resources\LandResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/me', function () {
    if (\Illuminate\Support\Facades\Auth::check())
        return response()->json(['user' => \Illuminate\Support\Facades\Auth::user()]);
    else
        return response()->json(['user' => null]);
});
Route::post('/search', function (Request $request) {
    return LandResource::collection(\App\Models\Land::take(1)->get());
});

Route::prefix('directory')->group(function () {
    Route::apiResource('regions', \App\Http\Controllers\Api\RegionController::class);
    Route::apiResource('districts', \App\Http\Controllers\Api\DistrictController::class);
    Route::apiResource('fond_types', \App\Http\Controllers\Api\FondTypeController::class);
    Route::apiResource('land_purposes', \App\Http\Controllers\Api\LandPurposesController::class);
    Route::apiResource('land_purpose_categories', \App\Http\Controllers\Api\LandPurposeCategoriesController::class);
    Route::apiResource('salinity_levels', \App\Http\Controllers\Api\SalinityLevelController::class);
    Route::apiResource('status', \App\Http\Controllers\Api\StatusController::class);
    Route::apiResource('organisations', \App\Http\Controllers\Api\OrganizationController::class);
    Route::apiResource('land_type', \App\Http\Controllers\Api\LandTypeController::class);
});

Route::prefix('geojson')->group(function () {
    Route::apiResource('geojson', \App\Http\Controllers\Api\GeojsonController::class);
    Route::get('/getCount',[\App\Http\Controllers\Api\LandController::class,'GetCount'])->name('land.getcount');
    Route::get('/getCount/{region}',[\App\Http\Controllers\Api\LandController::class,'GetCountRegion']);
    Route::get('/GetAllCount',[\App\Http\Controllers\Api\LandController::class,'GetAllCount'])->name('land.GetAllCount');
    Route::get('/GetAllCountByStatus',[\App\Http\Controllers\Api\LandController::class,'GetAllCountByStatus'])->name('land.GetAllCount');

});
Route::apiResource('lands', \App\Http\Controllers\Api\LandController::class);
Route::apiResource('land_offers', \App\Http\Controllers\Api\LandOffersController::class);
Route::post('/json/regions', [RegionController::class,'store']);
Route::get('/json/regions', [RegionController::class,'index']);
Route::get('/json/regions/{region}', [RegionController::class,'show']);
Route::get('/json/districts/{region}', [\App\Http\Controllers\DistrictController::class,'index']);
Route::get('/json/district/{district}', [\App\Http\Controllers\DistrictController::class,'show']);
Route::post('/application', [IndexController::class, 'submit'])->name('application.submit');


//Route::middleware('auth')->get('/user', function (Request $request) {
//    return $request->user();
//});

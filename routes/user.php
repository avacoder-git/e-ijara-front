<?php

use App\Http\Controllers\RegionController;
use App\Http\Controllers\User\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\IndexController;

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'as' => 'user.'], function () {
    Route::get('/profile', [IndexController::class, 'profile'])->name('profile');
    Route::post('/changeProfile', [IndexController::class, 'changeProfile'])->name('changeProfile');
    Route::get('/user', [IndexController::class, 'user'])->name('user');
    Route::get('/', [IndexController::class, 'dashboard'])->name('main');
    Route::get('/application', [IndexController::class, 'application'])->name('application');
    Route::get('/regionByName/{title}', [IndexController::class, 'region'])->name('region');
    Route::get('/districtByName/{title}', [IndexController::class, 'district'])->name('district');
    Route::get('/logout', [IndexController::class, 'logout'])->name('logout');
    // Route::get
});
Route::get('dashboard/application/map', [ApplicationController::class, 'map'])->name('application.map');

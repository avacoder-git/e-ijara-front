<?php

use App\Http\Controllers\User\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\IndexController;

Route::group(['prefix' => 'user', 'middleware' => 'auth', 'as' => 'user.'], function () {

    Route::get('/me', [IndexController::class, 'user']);
    Route::get('/', [IndexController::class, 'dashboard'])->name('main');    
    Route::get('/application/region', [ApplicationController::class, 'getRegion'])->name('application.region.get');  
    Route::post('/application/map', [ApplicationController::class, 'map'])->name('application.map');    
    Route::get('/logout', [IndexController::class, 'logout'])->name('logout');    
});
    
<?php

use App\Http\Controllers\RegionController;
use App\Http\Controllers\User\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\ReportController;
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'as' => 'user.'], function () {
    Route::get('/profile', [IndexController::class, 'profile'])->name('profile');
    Route::post('/changeProfile', [IndexController::class, 'changeProfile'])->name('changeProfile');
    Route::get('/user', [IndexController::class, 'user'])->name('user');
    Route::get('/', [IndexController::class, 'dashboard'])->name('main');
    Route::get('/logout', [IndexController::class, 'logout'])->name('logout');
    Route::get('/report', [ReportController::class, 'index'])->name('report');
    Route::get('/district/{id}', [ReportController::class, 'district'])->name('district');

    Route::prefix('application')->group(function() {
        Route::get('/', [IndexController::class, 'application'])->name('application');
        Route::get('/delete/{id}', [ApplicationController::class, 'delete'])->name('application.delete');
    });
    // Route::get
});
Route::get('dashboard/application/map', [ApplicationController::class, 'map'])->name('user.application.map');

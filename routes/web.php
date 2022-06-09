<?php

use App\Http\Controllers\User\IndexController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/',[\App\Http\Controllers\IndexController::class,'index'])->name('home');
Route::get('/login', [\Modules\OneAuth\Http\Controllers\OneAuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/eri/auth', [\App\Http\Controllers\EriController::class, 'auth'])->middleware('guest')->name('eri.auth');
Route::prefix('oneauth')->group(function () {
    Route::get('/index', [\Modules\OneAuth\Http\Controllers\OneAuthController::class, 'index'])->name('oneauth.index');
    Route::get('/auth', [\Modules\OneAuth\Http\Controllers\OneAuthController::class . 'auth']);
});
Route::get('/lands/export',[\App\Http\Controllers\LandExportController::class,'export'])->name('lands.export');
Route::get('/report/export',[\App\Http\Controllers\LandExportController::class,'exportReports'])->name('lands.exportReports');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';
    require __DIR__.'/user.php';



Route::get('/{any?}', function () {
    return view('template.app');
})->where(['any'=> '[\/\w\.-]*'])->name('home');



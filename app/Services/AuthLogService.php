<?php


namespace App\Services;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Modules\OneAuth\Entities\AuthLogs;

class AuthLogService
{
    public static function logAuth() {
        if(Auth::check()) {
            AuthLogs::create(['user_id' => Auth::id(), 'ip' => request()->ip()]);
            User::where('id', Auth::id())->update([
                'last_login' => Carbon::now()->toDateTimeString()
            ]);
        }
    }

}

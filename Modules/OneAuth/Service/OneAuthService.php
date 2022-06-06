<?php

namespace Modules\OneAuth\Service;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OneAuthService
{
    protected $API_URL = "https://sso.egov.uz/sso/oauth/Authorization.do";

    public function getAccessToken($code)
    {
        $response = Http::withOptions(['verify' => false])->asForm()->post($this->API_URL, [
            'grant_type' => 'one_authorization_code',
            'client_id' => config('oneauth.one_id.CLIENT_ID'),
            'client_secret' => config('oneauth.one_id.CLIENT_SECRET'),
            'code' => $code,
            'redirect_uri' => env('APP_URL').'oneauth/auth'
        ]);


        return json_decode($response);
    }

    public function getOneAuthData($access_token)
    {
        $response = Http::withOptions(['verify' => false])->asForm()->post($this->API_URL, [
            'grant_type' => 'one_access_token_identify',
            'client_id' => config('oneauth.one_id.CLIENT_ID'),
            'client_secret' => config('oneauth.one_id.CLIENT_SECRET'),
            'access_token' => $access_token
        ]);

        return json_decode($response);
    }

    public function makeParams($response)
    {
        return [
            'username' => $response->user_id,
            'fullname' => sprintf("%s %s %s", $response->sur_name, $response->first_name, $response->mid_name),
            'firstname' => $response->first_name,
            'lastname' => $response->sur_name,
            'midname' => $response->mid_name,
            'pinfl' => $response->pin,
            'inn' => $response->tin,
            'passport' => $response->pport_no,
            'passport_expire_date' => Carbon::createFromFormat('Y-d-m', $response->pport_expr_date)->format('Y-m-d'),
            'phone' => $response->mob_phone_no,
            'address' => $response->per_adr ?? null,
            'email' => $response->email,
            'name' => $response->user_id,
            'password' => Hash::make(uniqid()),
            'auth_type' => 'oneid',
            'user_type' => $response->user_type == 'L' ? 'Y' : 'J',
            'status' => 1
        ];
    }

    public function authorizeUser($params)
    {
        // CREATE NEW OR UPDATE EXISTING USER

        $user = User::updateOrCreate(
            ['pinfl' => $params['pinfl']],
            $params
        );


        // CHECK USER STATUS
        if (!$user->status)
            throw new \Exception(trans("user::trans.user_is_inactive"), 401);

        // AUTHORIZE USER
        Auth::login($user);
    }

}

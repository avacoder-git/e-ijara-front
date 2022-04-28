<?php

namespace Modules\OneAuth\Http\Controllers;

use App\Services\AuthLogService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Modules\OneAuth\Service\OneAuthService;


class OneAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('oneauth.index');
    }

    public function auth(Request $request)
    {
        try {

            $oneAuthService = new OneAuthService();
            $response = $oneAuthService->getAccessToken($request->code);
            $response = $oneAuthService->getOneAuthData($response->access_token);
            $params = $oneAuthService->makeParams($response);
            $oneAuthService->authorizeUser($params);

            AuthLogService::logAuth();

        } catch (\Throwable $th) {
//            $errorMessage = "Киришда хатолик юз берди, илтимос кейинроқ уруниб кўринг.";
//            if(in_array($th->getCode(), [401])) {
                $errorMessage = $th->getMessage();
//            }


            Log::error(sprintf("OneID error: Message: %s, Line: %s, File: %s", $th->getMessage(), $th->getLine(), $th->getFile()));
            return redirect()->route('oneauth.index')->with('error', $errorMessage);
        }

        // redirect user on successfully authorization
        return redirect()->route('user.application')->with('status', "Тизимга кирдингиз");
    }
}

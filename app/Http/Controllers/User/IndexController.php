<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\PurposeStoreRequest;
use App\Models\Application;
use App\Models\LandPurposes;
use App\Models\Regions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
class IndexController extends Controller
{
    public function dashboard()
    {
        $applications = Application::with(['region','district','land_purpose','status'])
            ->where('user_id', Auth::id())
            ->orderBy('id', 'desc')
            ->get();
        return view('user.main', compact('applications'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }


    public function application()
    {
        return view('user.application');
    }

    public function region($title)
    {
        $region = Regions::query()->select('id', 'regionid', 'nameuz')->where('nameuz', 'iLIKE', '%' . $title . '%')->first();
        return response()->json($region);
    }

    public function user()
    {
        return Auth::user();
    }

    public function submit(PurposeStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $data['status_id'] = 1;
        $geometry = json_decode( $data['geojson'],true)['geometry'];
        $geometry['csr'] = ['type'=> 'name','properties' => ['name'=>'EPSG:4326']];
        $geometry = json_encode($geometry);

        unset($data['geojson']);

        $data['geometry'] = DB::raw("ST_GeomFromGeoJSON('$geometry')");

        $application = Application::create($data);



        return response()->json(['success' => true, 'message' => "Successfully created"]);
    }




}

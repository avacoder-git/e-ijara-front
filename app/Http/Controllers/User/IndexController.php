<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\PurposeStoreRequest;
use App\Http\Resources\Front\LandCollection;
use App\Http\Resources\SavedLandCollection;
use App\Http\Resources\SavedLandResource;
use App\Models\Application;
use App\Models\Land;
use App\Models\LandPurposes;
use App\Models\Regions;
use App\Models\SavedLand;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function dashboard()
    {
        $applications = Application::with(['region', 'district', 'land_purpose', 'status'])
            ->where('user_id', Auth::id())
            ->orderBy('id', 'desc')
            ->get();
        $land_purposes = LandPurposes::all();
        return view('user.main', compact('applications', 'land_purposes'));
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
        $geometry = json_decode($data['geojson'], true)['geometry'];
        $geometry['csr'] = ['type' => 'name', 'properties' => ['name' => 'EPSG:4326']];
        $geometry = json_encode($geometry);

        unset($data['geojson']);

        $data['geometry'] = DB::raw("ST_GeomFromGeoJSON('$geometry')");

        $application = Application::create($data);

        return response()->json(['success' => true, 'message' => "Successfully created"]);
    }

    public function saveLand($land)
    {
        $user = auth()->user();
        $count = SavedLand::query()->where('user_id', $user->id)->where('land_id', $land)->first();

        if ($count)
            $count->delete();
        else
            SavedLand::query()->create([
                'land_id' => $land,
                'user_id' => $user->id,
            ]);

        return response()->json(['ok' => true]);
    }

    public function getSavedLands(Request $request)
    {
        $user = auth()->user();
        $lands = SavedLand::select('land_id')->where('user_id', $user->id)->get();
        $ids = [];
        foreach ($lands as $land) {
            $ids[] = $land->land_id;
        }
        $lands = Land::select('regnum', 'address', 'area', 'id', 'updated_at', 'lot_number')->whereIn("id", $ids)->orderBy("id", "desc");

        if ($request->district_id)
            $lands = $lands->where("cad_number", 'LIKE', "%$request->district_id:%");
        else
            if ($request->region_id)
                $lands = $lands->where("cad_number", 'LIKE', "%$request->region_id:%");
            else
                if (isset($request->lot_number)) {
                    $lot_number = $request->lot_number;
                    $lands = $lands->where("lot_number", $lot_number);
                };
        $lands = $lands->paginate();
        return new LandCollection($lands);
    }


}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Application\StoreRequest;
use App\Models\Application;
use App\Models\ApplicationLand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Matrix\Exception;

class ApplicationController extends Controller
{

    public function index()
    {
        $applications = Application::with(['region', 'district', 'land_purpose', 'status'])
            ->where('user_id', Auth::id())
            ->orderBy('id', 'desc')
            ->paginate();
        return response()->json($applications);
    }

    public function store(StoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = auth()->user();
            $data = $request->validated();
            $data["user_id"] = $user->id;
            $data["status_id"] = 1;
            if ($data['geometry'] && $data['geometry']['geometry']) {
                $geometry = $data['geometry']['geometry'];
                $geometry['csr'] = ['type' => 'name', 'properties' => ['name' => 'EPSG:4326']];
                $geometry = json_encode($geometry);
                $data['geometry'] = DB::raw("ST_GeomFromGeoJSON('$geometry')");
                $data['geometry'] = DB::raw("ST_GeomFromGeoJSON('$geometry')");
            }
            if ($data['lands']) {
                $lands = $data['lands'];

            }
            unset($data['draw_type']);
            unset($data['lands']);
            $application = Application::create($data);
            if ($application)
                foreach ($lands as $land) {
                    $item = [
                        'application_id' => $application->id,
                        'land_id' => $land
                    ];
                    ApplicationLand::create($item);
                }
            DB::commit();
            return response()->json(["ok" => true, 'data' => $data]);
        }catch (Exception $exception)
        {
            DB::rollBack();
            return response()->json(["ok" => true, 'errors' => $exception]);

        }

    }


}

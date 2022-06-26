<?php

namespace App\Http\Controllers;

use App\Http\Resources\Front\LandIndexResource;
use App\Http\Resources\LandCollectionResource;
use App\Http\Resources\NewLandCollectionResource;
use App\Models\Districts;
use App\Models\Front\District;
use App\Models\Land;
use App\Models\LandGeometry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandGeometryController extends Controller
{


    public function index(Request $request, District $district)
    {
        $area_id = $district->cad_num;
        switch ($request->status) {
            case 1:
                $where = " l.status_id = 1 and l.parent_id is null  and l.id not in (select parent_id from lands  where parent_id != null )";
                break;
            case 2:
                $where = " l.status_id < 17 and l.status_id > 1;";
                break;
            case 3:
                $where = " l.status_id = 17";
                break;
            case 4:
                $where = " l.status_id in (18, 22, 26, 27, 28, 29, 30, 31, 32)";
                break;
            case 5:
                $where = " l.status_id = 33";
                break;
        }

        $query = "select l.id, l.area, ST_AsGeoJSON(g.geometry) from lands l  inner join land_geometries g on g.land_id = l.id where l.cad_number like '%$area_id%' and $where";
        $lands = cache()->remember("area-$area_id-$request->status", 60 * 60 * 24, function () use ($query) {
            return DB::connection('ijaradb')->select($query);
        });
        $data = new LandCollectionResource($lands, $area_id);
        return $data;
    }


    public function show($land)
    {
        $query = "select id,ST_AsGeoJSON(geometry) from  land_geometries  where land_id= $land";
        $lands = cache()->remember("land-$land", 60 * 60 * 24, function () use ($query) {
            return DB::connection('ijaradb')->select($query);
        });
        return new LandCollectionResource($lands, 2);
    }

}

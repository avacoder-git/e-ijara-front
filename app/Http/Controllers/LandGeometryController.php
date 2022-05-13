<?php

namespace App\Http\Controllers;

use App\Http\Resources\Front\LandIndexResource;
use App\Models\Districts;
use App\Models\Front\District;
use App\Models\LandGeometry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandGeometryController extends Controller
{


    public function index(Request $request)
    {
        $area_id = $request->cad_num;
        $query = "select l.id, ST_AsGeoJSON(g.geometry) from lands l  inner join land_geometries g on g.land_id = l.id where l.cad_number like '%$area_id%' and l.parent_id is null";
//        $query = "select l.id, ST_AsGeoJSON(g.geometry) from lands l  inner join land_geometries g on g.land_id = l.id where l.district_id = $area_id";
        $lands = cache()->remember("area-$area_id",60*60*24,function () use($query){
            return DB::connection('ijaradb')->select($query);
        });
        $data = LandIndexResource::collection($lands);
       return $data;
    }


}

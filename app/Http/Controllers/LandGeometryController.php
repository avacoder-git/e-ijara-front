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


    public function index(Request $request, District $district)
    {
        $area_id = $district->cad_num;
        $query = "select l.id, ST_AsGeoJSON(g.geometry) from lands l  inner join land_geometries g on g.land_id = l.id where l.cad_number like '%$area_id%'";
//        $query = "select l.id, ST_AsGeoJSON(g.geometry) from lands l  inner join land_geometries g on g.land_id = l.id where l.district_id = $area_id";
        $lands = DB::connection('ijaradb')->select($query);
        return LandIndexResource::collection($lands);
    }


}

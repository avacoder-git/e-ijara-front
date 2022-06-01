<?php

namespace App\Http\Controllers;

use App\Http\Resources\Front\LandIndexResource;
use App\Http\Resources\LandCollectionResource;
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
        $where = $request->not_null ? " l.status_id not in (25)  and l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1":" l.parent_id is null";

        $query = "select l.id, ST_AsGeoJSON(g.geometry) from lands l  inner join land_geometries g on g.land_id = l.id where l.cad_number like '%$area_id%' and $where";
        $lands = cache()->remember("area-$area_id",60*60*24,function () use($query){
            return DB::connection('ijaradb')->select($query);
        });
        $data = new LandCollectionResource($lands, $area_id);
       return $data;
    }


    public function show($land)
    {
        $query = "select id,ST_AsGeoJSON(geometry) from  land_geometries  where land_id= $land" ;
        $lands = cache()->remember("land-$land",60*60*24,function () use($query){
            return DB::connection('ijaradb')->select($query);
        });
        return new LandCollectionResource($lands,2);
    }

}

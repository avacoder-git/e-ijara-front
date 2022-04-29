<?php

namespace App\Http\Controllers;

use App\Models\Front\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistrictController extends Controller
{
    //


    public function index($region)
    {
        return DB::select('select id, nameuz, regioncode from districts where regioncode = '. $region);
    }

    public function show($district)
    {
        $data =  json_decode(DB::select('select  ST_AsGeoJSON(geometry) from districts where id = '. $district)[0]->st_asgeojson, true);
        $item = $data["coordinates"][0];

        unset($data['coordinates']);
        $data['coordinates']= [$item,$item];

        $arr['type'] = "FeatureCollection";
        $arr['features'] = [[
            'type' => "Feature",
            "id" => 0,
            "geometry" => $data,
            "properties" =>[
                "name" => "Многоугольник 1"
            ]
        ]];


        return $arr;
    }



}

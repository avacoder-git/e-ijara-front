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
        return DB::select('select id, nameuz, regioncode from districts where regioncode = ' . $region);
    }

    public function show($district)
    {
        $data = cache()->remember('district-' . $district, 60 * 60 * 24, function () use ($district){
            return $this->getCachedDistrict($district);
        });
        $item = $data["coordinates"][0];

        unset($data['coordinates']);
        $data['coordinates'] = [$item];

        $arr['type'] = "FeatureCollection";
        $arr['features'] = [[
            'type' => "Feature",
            "id" => 0,
            "geometry" => $data,
            "properties" => [
                "name" => "Многоугольник 1"
            ]
        ]];


        return $arr;
    }

    public function getCachedDistrict($district)
    {
        return json_decode(DB::select('select  ST_AsGeoJSON(geometry) from districts where id = ' . $district)[0]->st_asgeojson, true);
    }

}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Front\RegionResource;
use App\Models\Front\District;
use App\Models\Front\Region;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
    public function store(Request $request)
    {
        $data = json_decode(file_get_contents(storage_path('tuman.json')), true)['features'];
        $name = '';
        foreach($data as $key => $item)
        {

            $region = new District();

            $geometry = $item['geometry'];
            $geometry['csr'] = ['type'=> 'name','properties' => ['name'=>'EPSG:4326']];
            dd($geometry);
            $geometry = json_encode($geometry);
             dd($geometry);
            $name = $item['properties']['name'];

            $geometry =  DB::raw("ST_GeomFromGeoJSON('$geometry')");
             dd($geometry);
            // dd($name);
            $region->nameuz = $name;
            $region->nameru = $name;
            $region->regioncode = $item['properties']['kadastr'];
            $region->geometry = $geometry;
//            $region->save();
            // dd(Region::truncate());

            // $data = DB::statement("INSERT INTO regions (nameuz, geometry) VALUES ('$name',  $geometry)");

        }
    }

    public function index()
    {
        return DB::select('select id, nameuz, regioncode, lat,long from regions');
    }

    public function show($region)
    {
        $data = cache()->remember('region-' . $region, 60 * 60 * 24, function () use ($region){
            return $this->getCachedRegion($region);
        });
        $item = $data["coordinates"][0];

        unset($data['coordinates']);
        $data['coordinates']= [$item];

        $arr['type'] = "FeatureCollection";
        $arr['features'] = [[
            'type' => "Feature",
            "id" => 0,
            "geometry" => $data,
            "properties" =>[
                "name" => "Многоугольник 1"
            ]
        ]];


        return $data;
    }

    public function getCachedRegion($region)
    {
        return json_decode(DB::select('select  ST_AsGeoJSON(geometry) from regions where regioncode = '. $region  )[0]->st_asgeojson, true);
    }



}

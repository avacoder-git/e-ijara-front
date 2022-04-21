<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Front\RegionResource;
use App\Models\Front\District;
use App\Models\Front\Region;

use Illuminate\Http\Request;
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
            $geometry = json_encode($geometry);
            // dd($geometry);
            $name = $item['properties']['name'];

            $geometry =  DB::raw("ST_GeomFromGeoJSON('$geometry')");
            // dd($geometry);
            // dd($name);
            $region->nameuz = $name;
            $region->nameru = $name;
            $region->regioncode = $item['properties']['kadastr'];
            $region->geometry = $geometry;
            $region->save();
            // dd(Region::truncate());
            
            // $data = DB::statement("INSERT INTO regions (nameuz, geometry) VALUES ('$name',  $geometry)");
    
        }
    }

    public function index()
    {
        return DB::select('select nameuz, regioncode, ST_AsGeoJSON(geometry) from regions');
    }



}

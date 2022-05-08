<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LandResource;
use App\Models\Regions;
use App\Models\Land;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandController extends Controller
{
    public function index(Request $request)
    {
//        $data = $request->validate([
//            'northeastx' => 'required|numeric',
//            'northeasty' => 'required|numeric',
//            'southwestx' => 'required|numeric',
//            'southwesty' => 'required|numeric',
//        ]);

        $data = [
            'northeastx' => 45.19752230305685,
            'northeasty' => 86.04492187500001,
            'southwestx' => 38.66835610151506,
            'southwesty' => 55.23925781250001,
        ];

        $item['coordinates'] =[ [
            [$data['northeastx'],$data['northeasty']],
            [$data['southwestx'],$data['southwesty']],
        ]];

        unset($data['coordinates']);
        $data['coordinates']= [$item];

        $arr['type'] = "FeatureCollection";
        $arr['features'] = [[
            'type' => "Feature",
            "id" => 0,
            "geometry" => $item,
            "properties" =>[
                "name" => "Многоугольник 1"
            ]
        ]];

        $query = DB::select("select geometry from land_geometries as polygon1 inner join ST_GeomFromGeoJSON('$arr') as polygon2");

        return $arr;
    }


    public function show(Land $land)
    {
        if($land->is_merged_lot == 1)
        {
            return LandResource::collection(Land::whereIn('id',$land->land_merge_data)->orderByRaw('parent_id NULLS FIRST')->get());
        }
        else
        return new LandResource($land);
    }

    public function GetCount()
    {
        $land = Land::
        when(request('region_id') != '', function ($query) {
            $query->where('region_id', request('region_id'));
        })->
        when(request('status') != '', function ($query) {
            $query->where('status_id', request('status'));
        });

        $lands = Land::whereNull('parent_id')->groupby('status_id')->select('status_id', DB::raw('count(*) as total'))->get();
//            $lands_loyiha = Land::groupby('status_id')->select('status_id', DB::raw('count(*) as total'))->get();


        return response()->json([
            'count' => 'Умумий бўш ерлар сони ' . $land->count() . ' та',
            'region' => request()->has('region_id') ? Regions::where('regionid', request('region_id'))->first()->nameuz : null,
            'allarea' => 'Бўш ерларнинг жами майдони: ' . round($land->sum('area'), 2) . ' га',
            'count_all' => $lands->sum('total'),
            'count_loyihalash' => Land::whereNotNull('parent_id')->count(),
            'count_tanlovda' => Land::whereNotNull('parent_id')->whereIn('status_id', [14, 16, 17])->count(),
            'count_ajratilgan' => Land::whereNotNull('parent_id')->where('status_id', 18)->count()
        ]);


    }

    public function GetCountRegion($region)
    {
        $region = Regions::query()->select('nameuz','regionid')->where('regionid',$region)->first();
        abort_if(!$region,404,'Not Found');
        $lands = Land::query()->select('count','sum(area)')->where('region_id',$region->regionid);

        return response()->json([
            'count' =>  $lands->count() ,
            'region' => $region->nameuz,
            'all_area' => round($lands->sum('area'), 2),
        ]);
    }


    public function GetAllCountByStatus()
    {
        $lands = Land::query();
        $ajratilgan = 1;
        $new = 1;
        $tanlov = 1;
        $loyiha = 1;

        $new_lands =  ['count'=> $lands->where('status_id',$new)->count(), 'area' => round( $lands->where('status_id',$new)->sum('area'),1) ];
        $ajratilgan_lands =  ['count'=> $lands->where('status_id',$ajratilgan)->count(), 'area' =>  round($lands->where('status_id',$ajratilgan)->sum('area'),1) ];
        $tanlovdagi_lands =  ['count'=> $lands->where('status_id',$tanlov)->count(), 'area' =>  round($lands->where('status_id',$tanlov)->sum('area'),1) ];
        $loyihalashdagi_lands =  ['count'=> $lands->where('status_id',$loyiha)->count(), 'area' => round( $lands->where('status_id',$loyiha)->sum('area'),1) ];

        $data = compact('new_lands','ajratilgan_lands','tanlovdagi_lands','loyihalashdagi_lands');
        return response()->json($data);
    }


    public function GetAllCount()
    {
        $regions = Regions::select('nameuz')->withCount('new_lands','lands_auction')->withSum('new_lands','area')->withSum('lands_auction','area')->get();

        return response()->json($regions);
    }
}

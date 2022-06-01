<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Front\LandCollection;
use App\Http\Resources\LandCollectionResource;
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
        if (request()->has('id')) {
            $land = Land::find(request('id'));
            return new LandResource($land);
        } else {
            $lands = Land::select('id', 'area', 'created_at', 'regnum', 'region_id', 'district_id')
                ->with('region:regionid,nameuz', 'district:regionid,areaid,nameuz', 'land_files')
                ->when(request('status_id', '') != '' && request('status_id') != 'all', function ($query) {
                    if (request('status_id') == 2)
                        $query->whereNotNull('parent_id');
                    elseif (request('status_id') == 3)
                        $query->whereNotNull('parent_id')->whereIn('status_id', [14, 16, 17]);
                    else
                        $query->where('status_id', request('status_id'));
                })->
                when(request('regionid', '') != '' && request('regionid') != 'all', function ($query) {
                    $query->where('region_id', request('regionid'));
                })->when(request('districtid', '') != '' && request('districtid') != 'all', function ($query) {
                    $query->where('district_id', request('districtid'));
                })->when(request('type', '') != '', function ($query) {
                    $query->where('purpose_id', request('type'));
                })->when(request('specalization', '') != '', function ($query) {
                    $query->where('purpose_category_id', request('specalization'));
                })->when(request('salinity_level', '') != '', function ($query) {
                    $query->where('salinity_level_id', request('salinity_level'));
                })->when(request('baniteli_ball', '') != '', function ($query) {
                    $query->where('ball_bonitet', request('baniteli_ball'));
                })->when(request('area', '') != '', function ($query) {
                    $query->whereBetween('area', [request('min_area'), request('max_area')]);
                });
//            ->when(request('lease_term', '') != '', function ($query) {
//            $query->whereBetween('lease_term', request('max_area'));
//        });
            if (request()->has('map')) {
                if (request()->regionid == 'all' && request()->districtid == 'all')
                    return LandResource::collection($lands->where('is_merged_lot', '=', 0)->where('region_id', 1727)->orderByRaw('parent_id NULLS FIRST')->get());
                else
                    return LandResource::collection($lands->where('is_merged_lot', '=', 0)->orderByRaw('parent_id NULLS FIRST')->get());
            } else {
                $lands = $lands->where('is_merged_part', '=', 0)->latest()->paginate(15);
                return LandResource::collection($lands->appends(request()->all()));

            }

        }
    }


    public function show(Land $land)
    {
        if ($land->is_merged_lot == 1) {
            return LandResource::collection(Land::whereIn('id', $land->land_merge_data)->orderByRaw('parent_id NULLS FIRST')->get());
        } else
            return new LandResource($land);
    }


    public function front(Request $request)
    {
        $status = $request->status_id;
        $query = "";
        $lands = Land::select( 'regnum', 'address', 'area', 'id', 'updated_at');
        switch ($status)
        {
            case 1: $lands = $lands->whereIn('status_id', [2,3]);
            case 2: $lands = $lands->whereIn('status_id', [2,3]);
            case 3: $lands = $lands->whereIn('status_id', [2,3]);
        }



        $lands = $lands->orderBy("updated_at",'desc')->paginate(16);



        return new LandCollection($lands);

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
        $region = Regions::query()->select('nameuz', 'regionid')->where('regionid', $region)->first();
        abort_if(!$region, 404, 'Not Found');
        $lands = Land::query()->select('count', 'sum(area)')->where('region_id', $region->regionid);

        return response()->json([
            'count' => $lands->count(),
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

        $new_lands = ['count' => $lands->where('status_id', $new)->count(), 'area' => round($lands->where('status_id', $new)->sum('area'), 1)];
        $ajratilgan_lands = ['count' => $lands->where('status_id', $ajratilgan)->count(), 'area' => round($lands->where('status_id', $ajratilgan)->sum('area'), 1)];
        $tanlovdagi_lands = ['count' => $lands->where('status_id', $tanlov)->count(), 'area' => round($lands->where('status_id', $tanlov)->sum('area'), 1)];
        $loyihalashdagi_lands = ['count' => $lands->where('status_id', $loyiha)->count(), 'area' => round($lands->where('status_id', $loyiha)->sum('area'), 1)];

        $data = compact('new_lands', 'ajratilgan_lands', 'tanlovdagi_lands', 'loyihalashdagi_lands');
        return response()->json($data);
    }


    public function GetAllCount()
    {
        $regions = Regions::select('nameuz')->withCount('new_lands', 'lands_auction')->withSum('new_lands', 'area')->withSum('lands_auction', 'area')->get();

        return response()->json($regions);
    }
}

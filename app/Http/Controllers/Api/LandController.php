<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LandResource;
use App\Models\Land;
use App\Models\Regions;
use Illuminate\Support\Facades\DB;

class LandController extends Controller
{
    public function index()
    {
        if (request()->has('id')) {
            $land = Land::find(request('id'));
            return new LandResource($land);
        } else {
            $lands = Land::select('address','area','cad_number','status_id','id','created_at','parent_id','regnum','region_id','district_id')
            ->with( 'region:regionid,nameuz', 'district:regionid,areaid,nameuz','land_files')
            ->when(request('status_id', '') != '' && request('status_id') != 'all', function ($query) {
                if (request('status_id') == 2)
                    $query->whereNotNull('parent_id');
                elseif(request('status_id') == 3)
                    $query->whereNotNull('parent_id')->whereIn('status_id',[14,16,17]);
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
            if (request()->has('map'))
            {
                if(request()->regionid == 'all' && request()->districtid == 'all' )
                return LandResource::collection($lands->where('is_merged_lot','=' ,0)->where('region_id',1727)->orderByRaw('parent_id NULLS FIRST')->get());
                else
                    return LandResource::collection($lands->where('is_merged_lot','=' ,0)->orderByRaw('parent_id NULLS FIRST')->get());
            }
            else
            {
               $lands =  $lands->where('is_merged_part','=', 0)->latest()->paginate(15);
                return LandResource::collection($lands->appends(request()->all()));

            }

        }

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

    public function GetAllCount()
    {
        $regions = Regions::select('nameuz')->withCount('lands_count')->withSum('lands_count','area')->get();

        $arr = [];

//        foreach ($regions as $item) {
//            array_push($arr, [
//                'region' => $item->nameuz,
//                'count' => $item->lands->whereNull('parent_id')->count(),
//                'area' => round($item->lands->whereNull('parent_id')->sum('area')),
//            ]);
//        }
        return response()->json($regions);
    }
}

<?php

namespace App\Http\Controllers;

use App\Exports\LandsExport;
use App\Models\Auction;
use App\Models\District;
use App\Models\Land;
use App\Models\Region;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Rap2hpoutre\FastExcel\SheetCollection;

class Test
{

    public function stat(Request $request)
    {
        $lands = Region::select('nameuz', 'regionid')->where('regionid', $request->regionid)->first();

        return view('exel.lands_regions_new', [
            'lands' => $lands,
            'title' => $request->name,
            'region_id' => $lands,
        ]);
    }

    public function statDoc(Request $request)
    {
        $name = Str::slug($request->name);
        $type = $request->type;

        if($type === '1')
        {
            $name .= '-кадастрдан-киритилган';
            $ids = Land::whereNull('parent_id')->where(function($query) use ($request) {
                if($request->has('region_id'))
                    $query->where('region_id', $request->region_id);
                if($request->has('district_id'))
                    $query->where('district_id', $request->district_id);
            })->where('is_merged_lot',0)->pluck('id')->toArray();
        } elseif($type === '2')
        {
            $name .= '-сувли-кадастрдан киритилган';

            $query = "select land_id
                from land_inventory_data lid left join lands l ON l.id = lid.land_id
                where (l.parent_id is null and l.is_merged_lot = 0 or l.is_merged_lot = 1)
                and l.status_id not in (25) and lid.arable_areas_with_water > 0";

            if ($request->has('region_id'))
                $query .= " and l.region_id = " . $request->region_id;

            if ($request->has('district_id'))
                $query .= " and l.district_id = " . $request->district_id;

            foreach(DB::connection('ijaradb')->select($query) as $item)
                $ids[] = $item->land_id;
        } elseif($type === '3')
        {
            $name .= '-Жами-Ўздаверлойиҳа тайёрлаган';
            $query = $this->getLandCountQuery($request);
            $ids = $this->getLandCountIds($query);
        } elseif($type === '4')
        {
            $name .= '-Ўздаверлойиҳа тайёрлаган деҳқон хўжалиги учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.person_type = 'J'";
            $ids = $this->getLandCountIds($query);
        } elseif($type === '5')
        {
            $name .= '-сувли-Ўздаверлойиҳа тайёрлаган деҳқон хўжалиги учун';
            $query = $this->getWaterCountQuery($request);
            $ids = $this->getWaterCountIds($query);
        } elseif($type === '6')
        {
            $name .= '-Ўздаверлойиҳа тайёрлаган юридик шахслар учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.person_type = 'Y'";
            $ids = $this->getLandCountIds($query);
        } elseif($type === '7')
        {
            $name .= '-Жами-Идоравий келишувда';
            $query = $this->getCountQuery($request);
            $query .= " and ro.organization_id in (1,2,3,4)";
            $ids = $this->getCountIds($query);
        } elseif($type === '8')
        {
            $name .= '-Идоравий келишувда деҳқон хўжалиги учун';
            $query = $this->getCountQuery($request);
            $query .= " and ro.organization_id in (1,2,3,4) and l.person_type = 'J'";
            $ids = $this->getCountIds($query);
        } elseif($type === '9')
        {
            $name .= '-сувли-Идоравий келишувда деҳқон хўжалиги учун';
            $query = $this->getWaterCountQuery($request);
            $query .= " and l.status_id in (3)";
            $ids = $this->getWaterCountIds($query);
        } elseif($type === '10')
        {
            $name .= '-Идоравий келишувда юридик шахслар учун';
            $query = $this->getCountQuery($request);
            $query .= " and ro.organization_id in (1,2,3,4) and l.person_type = 'Y'";
            $ids = $this->getCountIds($query);
        } elseif($type === '11')
        {
            $name .= '-Жами-Туман ҳокимлигида тасдиқлашда';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id = 5";
            $ids = $this->getLandCountIds($query);
        } elseif($type === '12')
        {
            $name .= '-Туман ҳокимлигида тасдиқлашда деҳқон хўжалиги учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id = 5 and l.person_type = 'J'";
            $ids = $this->getLandCountIds($query);
        } elseif($type === '13')
        {
            $name .= '-сувли-Туман ҳокимлигида тасдиқлашда деҳқон хўжалиги учун';
            $query = $this->getWaterCountQuery($request);
            $query .= " and l.status_id in (5)";
            $ids = $this->getWaterCountIds($query);
        } elseif($type === '14')
        {
            $name .= '-Туман ҳокимлигида тасдиқлашда юридик шахслар учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id = 5 and l.person_type = 'Y'";
            $ids = $this->getLandCountIds($query);
        } elseif($type === '15')
        {
            $name .= '-Жами-савдо майдончасига қўйилган';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id in(14,16,17)";
            $ids = $this->getLandCountIds($query);
        } elseif($type === '16')
        {
            $name .= '-савдо майдончасига қўйилган деҳқон хўжалиги учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id in(14,16,17) and l.person_type = 'J'";
            $ids = $this->getLandCountIds($query);
        }elseif($type === '17')
        {
            $name .= '-сувли-савдо майдончасига қўйилган деҳқон хўжалиги учун';
            $query = $this->getWaterCountQuery($request);
            $query .= " and l.status_id in (14, 16, 17)";
            $ids = $this->getWaterCountIds($query);
        } elseif($type === '18')
        {
            $name .= '-савдо майдончасига қўйилган юридик шахслар учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id in(14,16,17) and l.person_type = 'Y'";
            $ids = $this->getLandCountIds($query);
        } elseif($type === '19')
        {
            $name .= '-Жами-савдо майдончасидан қайтарилган';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id in(15)";
            $ids = $this->getLandCountIds($query);
        } elseif($type === '20')
        {
            $name .= '-савдо майдончасидан қайтарилган деҳқон хўжалиги учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id in(15) and l.person_type = 'J'";
            $ids = $this->getLandCountIds($query);
        }elseif($type === '21')
        {
            $name .= '-сувли-савдо майдончасидан қайтарилган деҳқон хўжалиги учун';
            $query = $this->getWaterCountQuery($request);
            $query .= " and l.status_id in (15)";
            $ids = $this->getWaterCountIds($query);
        } elseif($type === '22')
        {
            $name .= '-савдо майдончасидан қайтарилган юридик шахслар учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id in(15) and l.person_type = 'Y'";
            $ids = $this->getLandCountIds($query);
        } elseif($type === '23')
        {
            $name .= '-Жами-танлов ғолиби аниқланган';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.order_statuses_id = 6";
            $ids = $this->getLandCountIds($query);
        } elseif($type === '24')
        {
            $name .= '-танлов ғолиби аниқланган деҳқон хўжалиги учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.order_statuses_id = 6 and l.person_type = 'J'";
            $ids = $this->getLandCountIds($query);
        }elseif($type === '25')
        {
            $name .= '-сувли-танлов ғолиби аниқланган деҳқон хўжалиги учун';
            $query = $this->getWaterCountQuery($request);
            $query .= " and l.order_statuses_id in (6)";
            $ids = $this->getWaterCountIds($query);
        } elseif($type === '26')
        {
            $name .= '-танлов ғолиби аниқланган юридик шахслар учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.order_statuses_id = 6 and l.person_type = 'Y'";
            $ids = $this->getLandCountIds($query);
        }

        elseif($type === '27')
        {
            $name .= '-танлов ғолиби аниқланган шартнома ғолиб томонидан имзоланган';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id in (26,27,28,29,30,31,32)";
            $ids = $this->getLandCountIds($query);
        }elseif($type === '28')
        {
            $name .= '-танлов ғолиби аниқланган шартнома имзоланиши кутилмоқда';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.order_statuses_id = 6 and l.status_id not in (26,27,28,29,30,31,32)";
            $ids = $this->getLandCountIds($query);
        }

        elseif($type === '29')
        {
            $name .= '-Жами-Шартномани Туман ҳокимлигида имзолаш кутилмоқда';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id in (26,27)";
            $ids = $this->getLandCountIds($query);
        } elseif($type === '30')
        {
            $name .= '-Шартномани Туман ҳокимлигида имзолаш кутилмоқда деҳқон хўжалиги учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id in (26,27) and l.person_type = 'J'";
            $ids = $this->getLandCountIds($query);
        }elseif($type === '31')
        {
            $name .= '-сувли-Шартномани Туман ҳокимлигида имзолаш кутилмоқда деҳқон хўжалиги учун';
            $query = $this->getWaterCountQuery($request);
            $query .= " and l.status_id in (26)";
            $ids = $this->getWaterCountIds($query);
        } elseif($type === '32')
        {
            $name .= '-Шартномани Туман ҳокимлигида имзолаш кутилмоқда юридик шахслар учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id in (26) and l.person_type = 'Y'";
            $ids = $this->getLandCountIds($query);
        }

        elseif($type === '33')
        {
            $name .= '-Жами-Шартномани Туман ҳокимлигида имзоланди';
            $query = $this->getSignedCountQuery($request);
            $query .= " and l.status_id >= 28";
            $ids = $this->getSignedCountIds($query);
        } elseif($type === '34')
        {
            $name .= '-Шартномани Туман ҳокимлигида имзоланди деҳқон хўжалиги учун';
            $query = $this->getSignedCountQuery($request);
            $query .= " and l.status_id >= 28 and l.person_type = 'J'";
            $ids = $this->getSignedCountIds($query);
        }elseif($type === '35')
        {
            $name .= '-сувли-Шартномани Туман ҳокимлигида имзоланди деҳқон хўжалиги учун';
            $query = $this->getSignedCountQuery($request);
            $query .= " and l.status_id >= 28  AND l.person_type = 'J' AND lc.land_type = 'arable_area' AND lc.land_extra_irragation = '1'";
            $ids = $this->getSignedCountIds($query);
        } elseif($type === '36')
        {
            $name .= '-Шартномани Туман ҳокимлигида имзоланди юридик шахслар учун';
            $query = $this->getSignedCountQuery($request);
            $query .= " and l.status_id >= 28 and l.person_type = 'Y'";
            $ids = $this->getSignedCountIds($query);
        }

        elseif($type === '37')
        {
            $name .= '-Жами-Давлат кадастрлари палатасида рўйхатдан ўтказилмоқда';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id in (29,30,32)";
            $ids = $this->getLandCountIds($query);
        } elseif($type === '38')
        {
            $name .= '-Давлат кадастрлари палатасида рўйхатдан ўтказилмоқда деҳқон хўжалиги учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id  in (29,30,32) and l.person_type = 'J'";
            $ids = $this->getLandCountIds($query);
        }elseif($type === '39')
        {
            $name .= '-сувли-Давлат кадастрлари палатасида рўйхатдан ўтказилмоқда деҳқон хўжалиги учун';
            $query = $this->getWaterCountQuery($request);
            $query .= " and l.status_id in (29, 30, 32)";
            $ids = $this->getWaterCountIds($query);
        } elseif($type === '40')
        {
            $name .= '-Давлат кадастрлари палатасида рўйхатдан ўтказилмоқда юридик шахслар учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id in (29, 30, 32) and l.person_type = 'Y'";
            $ids = $this->getLandCountIds($query);
        }

        elseif($type === '41')
        {
            $name .= '-Жами-Давлат кадастрлари палатасида давлат рўйхатдан ўтказилди';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id in (31,33)";
            $ids = $this->getLandCountIds($query);
        } elseif($type === '42')
        {
            $name .= '-Давлат кадастрлари палатасида давлат рўйхатдан ўтказилди деҳқон хўжалиги учун';
            $query = $this->getLandCountQuery($request);
            $query .= " and l.status_id  in (31, 33) and l.person_type = 'J'";
            $ids = $this->getLandCountIds($query);
        }elseif($type === '43')
        {
            $name .= '-сувли-Давлат кадастрлари палатасида давлат рўйхатдан ўтказилди деҳқон хўжалиги учун';
            $query = $this->getWaterCountQuery($request);
            $query .= " and l.status_id in (31, 33)";
            $ids = $this->getWaterCountIds($query);
        } elseif($type === '44')
        {
            $name .= '-Давлат кадастрлари палатасида давлат рўйхатдан ўтказилди юридик шахслар учун';

            $query1 = $this->getLandCountQuery($request);
            $query1 .= " and l.status_id in (31,33)";
            $ids1 = $this->getLandCountIds($query1);

            $query2 = $this->getLandCountQuery($request);
            $query2 .= " and l.status_id  in (31, 33) and l.person_type = 'J'";
            $ids2 = $this->getLandCountIds($query2);

            $ids = array_diff($ids1, $ids2);
            //dd($ids);
        }

        $lands = Land::query()
            ->whereIn('id', $ids)
            ->with(['status', 'region', 'district', 'mfy', 'contour', 'protocol', 'loyiha', 'contract'])
            ->get();

        $land_extra_irragation = [
            1 => 'суғориладиган',
            2 => 'шартли суғориладиган',
            3 => 'лалми',
            4 => '',
            5 => '',
            6 => '',
        ];

        return (new FastExcel($lands))->download($name . '-' . date('Y-m-d H.i') .'.xlsx', function($land) use ($land_extra_irragation){
            return [
                'Т./р.' => $land->id,
                'Лот рақами' => $land->regnum,
                'Кадастр раками' => ' ' . $land->cad_number,
                'Лот ҳолати' => $land->status->name,
                'Ижара тури' => ($land->person_type === 'Y') ? 'Юридик' : 'Жисмоний',
                'Ер тури' => isset($land->contour->land_extra_irragation)? $land_extra_irragation[$land->contour->land_extra_irragation] : '',
                'Ер жойлашган Вилоят' => $land->region->nameuz,
                'Ер жойлашган туман' => $land->district->nameuz,
                'Ер жойлашган МФЙ' => isset($land->mfy->nameuz) ? $land->mfy->nameuz : '',
                'Ер майдони' => $land->area,
                'Ижара муддати' => $land->period,
                'Контур рақами' => isset($land->contour->contour_number)?$land->contour->contour_number:null,
                'Аукцион танлов баённомаси' => isset($land->protocol->first()->id)? 'http://cabinet.e-ijara.uz/land/' . $land->id .'/file/download/' .
                    $land->protocol->first()->id : '',
                'Электрон қарор лойиҳаси' => isset($land->loyiha->first()->id)? 'http://cabinet.e-ijara.uz/land/' . $land->id .'/file/download/' .
                    $land->loyiha->first()->id : '',
                'Шартнома' => isset($land->contract->first()->id)? 'http://cabinet.e-ijara.uz/land/' . $land->id .'/file/download/' .
                    $land->contract->first()->id : '',
                'Кадастр кучирма' =>  isset($land->kadastr_kochirma->first()->id)? 'http://cabinet.e-ijara.uz/land/' . $land->id .'/file/download/' .
                    $land->kadastr_kochirma->first()->id : '',
            ];
        });
    }

    //---------------------------------------------------------------------------------------------------------

    public function getLandCountQuery($request)
    {
        $query = "select id from lands l where
        (l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1) and l.status_id not in (25)";

        if ($request->has('region_id'))
            $query .= " and l.region_id = " . $request->region_id;

        if ($request->has('district_id'))
            $query .= " and l.district_id = " . $request->district_id;

        return $query;
    }

    public function getLandCountIds($query)
    {
        foreach(DB::connection('ijaradb')->select($query) as $item)
            $ids[] = $item->id;

        return $ids;
    }

    //---------------------------------------------------------------------------------------------------------

    public function getCountQuery($request)
    {
        $query = "select distinct  land_id from review_orgnizations ro inner join lands l ON l.id = ro.land_id
        where l.status_id = 3 and (l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1)";

        if ($request->has('region_id'))
            $query .= " and l.region_id = " . $request->region_id;

        if ($request->has('district_id'))
            $query .= " and l.district_id = " . $request->district_id;

        return $query;
    }

    public function getCountIds($query)
    {
        foreach(DB::connection('ijaradb')->select($query) as $item)
            $ids[] = $item->land_id;

        return $ids;
    }


    //---------------------------------------------------------------------------------------------------------

    public function getWaterCountQuery($request)
    {
        $query = "SELECT l.id FROM lands l LEFT JOIN land_contours lc ON l.id=lc.land_id where
            lc.land_type = 'arable_area' AND lc.land_extra_irragation = '1' and (l.parent_id is not null and l.is_merged_lot = 0)
            and l.status_id not in (25) AND l.person_type = 'J'";

        if ($request->has('region_id'))
            $query .= " and l.region_id = " . $request->region_id;

        if ($request->has('district_id'))
            $query .= " and l.district_id = " . $request->district_id;

        return $query;
    }

    public function getWaterCountIds($query)
    {
        foreach(DB::connection('ijaradb')->select($query) as $item)
            $ids[] = $item->id;

        return $ids;
    }

    //---------------------------------------------------------------------------------------------------------

    public function getSignedCountQuery($request)
    {
        $query = "SELECT l.id from land_auction_lots lal left join lands l on lal.land_id = l.id  left join land_contours lc on lal.land_id = lc.land_id

        where (lal.contract_date is not null
        and  lal.contract_number is not null)
        and  (l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1)
        and l.status_id not in (25)";

        if ($request->has('region_id'))
            $query .= " and l.region_id = " . $request->region_id;

        if ($request->has('district_id'))
            $query .= " and l.district_id = " . $request->district_id;

        return $query;
    }

    public function getSignedCountIds($query)
    {
        foreach(DB::connection('ijaradb')->select($query) as $item)
            $ids[] = $item->id;

        return $ids;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Models\Land;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Services\ReportHelper;
use Illuminate\Support\Facades\DB;
use Rap2hpoutre\FastExcel\FastExcel;

class ReportController extends Controller
{
    public $steps = [
        1 => [
            'type' => 'Давлат кадастрлари палатасидан киритилган бўш ер участкалари',
            'child' => [
                1 => 'Жами',
                2 => 'шундан сувли'
            ],
        ],
        2 => [
            'type' => 'Ўздаверлойиҳа институти томонидан тайёрланган лотлар',
            'child' => [
                3 => 'Жами',
                4 => 'Деҳқон хўжалиги учун',
                5 => 'Деҳқон хўжалиги учун сувли лотлар',
                6 => 'Юридик шахслар учун',
            ],
        ],
        3 => [
            'type' => 'Идоравий келишув (ваколатли идоралар)да',
            'child' => [
                7 => 'Жами',
                8 => 'Деҳқон хўжалиги учун',
                9 => 'Деҳқон хўжалиги учун сувли лотлар',
                10 => 'Юридик шахслар учун',
            ],
        ],
        4 => [
            'type' => 'Туман (шаҳар) ҳокимлигида тасдиқлашда',
            'child' => [
                11 => 'Жами',
                12 => 'Деҳқон хўжалиги учун',
                13 => 'Деҳқон хўжалиги учун сувли лотлар',
                14 => 'Юридик шахслар учун',
            ],
        ],
        5 => [
            'type' => '"E-AUKSION" электрон савдо платформасида савдо майдончасига қўйилган',
            'child' => [
                15 => 'Жами',
                16 => 'Деҳқон хўжалиги учун',
                17 => 'Деҳқон хўжалиги учун сувли лотлар',
                18 => 'Юридик шахслар учун',
            ],
        ],
        6 => [
            'type' => '"E-AUKSION" электрон савдо платформасида савдо майдончасидан қайтарилган',
            'child' => [
                19 => 'Жами',
                20 => 'Деҳқон хўжалиги учун',
                21 => 'Деҳқон хўжалиги учун сувли лотлар',
                22 => 'Юридик шахслар учун',
            ],
        ],
        7 => [
            'type' => '"E-AUKSION" электрон савдо платформасида танлов ғолиби аниқланган',
            'child' => [
                23 => 'Жами',
                24 => 'Деҳқон хўжалиги учун',
                25 => 'Деҳқон хўжалиги учун сувли лотлар',
                26 => 'Юридик шахслар учун',
                27 => 'шартнома ғолиб томонидан имзоланган',
                28 => 'шартнома имзоланиши кутилмоқда'
            ],
        ],
        8 => [
            'type' => 'Шартномани Туман (шаҳар) ҳокимлигида имзолаш кутилмоқда',
            'child' => [
                29 => 'Жами',
                30 => 'Деҳқон хўжалиги учун',
                31 => 'Деҳқон хўжалиги учун сувли лотлар',
                32 => 'Юридик шахслар учун',
            ],
        ],
        9 => [
            'type' => 'Шартнома Туман (шаҳар) ҳокимлигида имзоланди',
            'child' => [
                33 => 'Жами',
                34 => 'Деҳқон хўжалиги учун',
                35 => 'Деҳқон хўжалиги учун сувли лотлар',
                36 => 'Юридик шахслар учун',
            ],
        ],
        10 => [
            'type' => 'Давлат кадастрлари палатасида рўйхатдан ўтказилмоқда',
            'child' => [
                37 => 'Жами',
                38 => 'Деҳқон хўжалиги учун',
                39 => 'Деҳқон хўжалиги учун сувли лотлар',
                40 => 'Юридик шахслар учун',
            ],
        ],
        11 => [
            'type' => 'Давлат кадастрлари палатасида давлат рўйхатдан ўтказилди',
            'child' => [
                41 => 'Жами',
                42 => 'Деҳқон хўжалиги учун',
                43 => 'Деҳқон хўжалиги учун сувли лотлар',
                44 => 'Юридик шахслар учун',
            ],
        ],

    ];
    public function index()
    {
        $regions = [
            [
                "regionid" => "1735",
                "nameuz" => "Qoraqalpog`iston Respublikasi"
            ],
            [
                "regionid" => "1703",
                "nameuz" => "Andijon viloyati"
            ],
            [
                "regionid" => "1706",
                "nameuz" => "Buxoro viloyati"
            ],
            [
                "regionid" => "1708",
                "nameuz" => "Jizzax viloyati"
            ],
            [
                "regionid" => "1710",
                "nameuz" => "Qashqadaryo viloyati"
            ],
            [
                "regionid" => "1712",
                "nameuz" => "Navoiy viloyati"
            ],
            [
                "regionid" => "1714",
                "nameuz" => "Namangan viloyati"
            ],
            [
                "regionid" => "1718",
                "nameuz" => "Samarqand viloyati"
            ],
            [
                "regionid" => "1722",
                "nameuz" => "Surxandaryo viloyati"
            ],
            [
                "regionid" => "1724",
                "nameuz" => "Sirdaryo viloyati"
            ],
            [
                "regionid" => "1727",
                "nameuz" => "Toshkent viloyati"
            ],
            [
                "regionid" => "1730",
                "nameuz" => "Farg`ona viloyati"
            ],
            [
                "regionid" => "1733",
                "nameuz" => "Xorazm viloyati"
            ]
        ];
        return view('user.report', ['regions' => $regions, 'steps' => $this->steps]);
    }

    public function district($id)
    {
        $districts = Cache::remember('districts-' . $id, 3600 * 24, function () use ($id) {
            return Districts::query()->select(['areaid', 'nameuz'])->where('regionid', $id)->orderByDesc('id')->get();
        });
        return response()->json($districts);
    }

    public function report(Request $request)
    {
        $ids = [];
        $type = $request->type_id;
        $district = $request->district;
        $name = '-' . $this->steps[$request->step]["child"][$request->type_id] . '-' . $this->steps[$request->step]["type"];
        $getLandCountByRegion = ReportHelper::getLandCountByRegion($district);
        $getSuvli = ReportHelper::getSuvli($district);
        $getOrganizationStatByRegion = ReportHelper::getOrganizationStatByRegion($district);
        $getHokimyatImzolandi = ReportHelper::GetHokimyatImzolandi($district);

        if ($type === '1') {
            $ids = Land::query()->whereNull('parent_id')->where('is_merged_lot', 0)
                ->where('district_id', $district)->pluck('id')->toArray();
        } elseif($type === '2')
        {
            $query = ReportHelper::getInventoryData($district);
            $query .= 'and lid.arable_areas_with_water > 0';
            $ids = $this->getIds($query, 'land_id');
        } elseif($type ==='3')
        {
            $ids = $this->getIds($getLandCountByRegion, 'id');
        } elseif($type === '4')
        {
            $query = $getLandCountByRegion . " and l.person_type = 'J' ";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '5')
        {
            $ids = $this->getIds($getSuvli, 'id');
        } elseif($type === '6')
        {
            $query = $getLandCountByRegion . " and l.person_type = 'J' ";
            $ids = $this->getIdsDiff($getLandCountByRegion, $query, 'id');
        } elseif($type === '7')
        {
            $query = $getOrganizationStatByRegion . ' and l.status_id  = 3';
            $ids = $this->getIds($query, 'id');
        } elseif($type === '8')
        {
            $query = $getOrganizationStatByRegion . " and l.person_type = 'J' and l.status_id  = 3";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '9')
        {
            $query = $getSuvli . 'and l.status_id = 3';
            $ids = $this->getIds($query, 'id');
        } elseif($type === '10')
        {
            $query1 = $getOrganizationStatByRegion . ' and l.status_id  = 3';
            $query2 = $getOrganizationStatByRegion . " and l.person_type = 'J' and l.status_id  = 3";
            $ids = $this->getIdsDiff($query1, $query2, 'id');
        } elseif($type === '11')
        {
            $query = $getLandCountByRegion . " and l.status_id = 5";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '12')
        {
            $query = $getLandCountByRegion . " and l.status_id = 5 and l.person_type = 'J'";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '13')
        {
            $query = $getSuvli . 'and l.status_id = 5';
            $ids = $this->getIds($query, 'id');
        } elseif($type === '14')
        {
            $query1 = $getLandCountByRegion . " and l.status_id = 5";
            $query2 = $getLandCountByRegion . " and l.status_id = 5 and l.person_type = 'J'";
            $ids = $this->getIdsDiff($query1, $query2, 'id');
        } elseif($type === '15')
        {
            $query = $getLandCountByRegion . " and l.status_id in(14,16,17)";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '16')
        {
            $query = $getLandCountByRegion . " and l.status_id in(14,16,17) and l.person_type = 'J'";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '17')
        {
            $query = $getSuvli . 'and l.status_id in (14, 16, 17)';
            $ids = $this->getIds($query, 'id');
        } elseif($type === '18')
        {
            $query1 = $getLandCountByRegion . " and l.status_id in(14,16,17)";
            $query2 = $getLandCountByRegion . " and l.status_id in(14,16,17) and l.person_type = 'J'";
            $ids = $this->getIdsDiff($query1, $query2, 'id');
        } elseif($type === '19')
        {
            $query = $getLandCountByRegion . " and l.status_id = 15";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '20')
        {
            $query = $getLandCountByRegion . " and l.status_id = 15 and l.person_type = 'J'";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '21')
        {
            $query = $getSuvli . 'and l.status_id = 15';
            $ids = $this->getIds($query, 'id');
        } elseif($type === '22')
        {
            $query1 = $getLandCountByRegion . " and l.status_id = 15";
            $query2 = $getLandCountByRegion . " and l.status_id = 15 and l.person_type = 'J'";
            $ids = $this->getIdsDiff($query1, $query2, 'id');
        }  elseif($type === '23')
        {
            $query = $getLandCountByRegion . " and l.status_id = 15";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '24')
        {
            $query = $getLandCountByRegion . " and l.status_id = 15 and l.person_type = 'J'";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '25')
        {
            $query = $getSuvli . ' and l.status_id = 15';
            $ids = $this->getIds($query, 'id');
        } elseif($type === '26')
        {
            $query = $getLandCountByRegion . " and l.order_statuses_id = 6 and l.person_type = 'Y'";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '27')
        {
            $query = $getLandCountByRegion . " and l.lot_statuses_id in (40,29) and l.person_type = 'J'";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '28')
        {
            $query = $getLandCountByRegion . " and (l.order_statuses_id = 6 and l.lot_statuses_id is null) and l.person_type = 'J'";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '29')
        {
            $query = $getLandCountByRegion . " and l.status_id in (26,27)";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '30')
        {
            $query = $getLandCountByRegion . " and l.status_id in (26,27) and l.person_type = 'J'";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '31')
        {
            $query = $getSuvli . 'and l.status_id = 26';
            $ids = $this->getIds($query, 'id');
        } elseif($type === '32')
        {
            $query1 = $getLandCountByRegion . " and l.status_id in (26, 27)";
            $query2 = $getLandCountByRegion . " and l.status_id in (26, 27) and l.person_type = 'J'";
            $ids = $this->getIdsDiff($query1, $query2, 'id');
        } elseif($type === '33')
        {
            $query = $getLandCountByRegion . " and (l.status_id = 28 or l.lot_statuses_id = 29)";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '34')
        {
            $query = $getLandCountByRegion . " and (l.status_id = 28 or l.lot_statuses_id = 29) and l.person_type = 'J'";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '35')
        {
            $query = $getHokimyatImzolandi . " and (l.status_id = 28 or l.lot_statuses_id = 29)  AND l.person_type = 'J' AND lc.land_extra_irragation = '1'";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '36')
        {
            $query = $getLandCountByRegion . " and (l.status_id = 28 or l.lot_statuses_id = 29) and l.person_type = 'Y'";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '37')
        {
            $query = $getLandCountByRegion . " and l.status_id in (29,30,32)";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '38')
        {
            $query = $getLandCountByRegion . " and l.status_id in (29,30,32) and l.person_type = 'J'";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '39')
        {
            $query = $getSuvli . 'and l.status_id in (29,30,32)';
            $ids = $this->getIds($query, 'id');
        } elseif($type === '40')
        {
            $query1 = $getLandCountByRegion . " and l.status_id in (29,30,32)";
            $query2 = $getLandCountByRegion . " and l.status_id in (29,30,32) and l.person_type = 'J'";
            $ids = $this->getIdsDiff($query1, $query2, 'id');
        } elseif($type === '41')
        {
            $query = $getLandCountByRegion . " and l.status_id in (31,33)";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '42')
        {
            $query = $getLandCountByRegion . " and l.status_id in (31,33) and l.person_type = 'J'";
            $ids = $this->getIds($query, 'id');
        } elseif($type === '43')
        {
            $query = $getSuvli . 'and l.status_id = 31';
            $ids = $this->getIds($query, 'id');
        } elseif($type === '44')
        {
            $query1 = $getLandCountByRegion . " and l.status_id in (31,33)";
            $query2 = $getLandCountByRegion . " and l.status_id in (31,33) and l.person_type = 'J'";
            $ids = $this->getIdsDiff($query1, $query2, 'id');
        }

        return $this->download($ids, $name);
    }

    private function getIds($query, $string)
    {
        $ids = [];
        foreach(DB::connection('ijaradb')->select($query) as $item)
            $ids[] = $item->{ $string };
        //dd($ids);
        return $ids;
    }

    private function getIdsDiff($query1, $query2, $string)
    {
        $ids = [];
        $ids1 = [];
        $ids2 = [];

        foreach(DB::connection('ijaradb')->select($query1) as $item)
        {
            $ids1[] = $item->{ $string };
        }

        foreach(DB::connection('ijaradb')->select($query2) as $item)
        {
            $ids2[] = $item->{ $string };
        }

        $ids = array_diff($ids1, $ids2);
        return $ids;
    }

    public function download($ids, $name)
    {
        $lands = Land::query()
            ->whereIn('id', $ids)
            ->with(['status', 'region', 'district'])
            ->get();

        $land_extra_irragation = [
            1 => 'суғориладиган',
            2 => 'шартли суғориладиган',
            3 => 'лалми',
            4 => '',
            5 => '',
            6 => '',
        ];

        return (new FastExcel($lands))->download($name . '-' . date('Y-m-d H.i') . '.xlsx', function ($land) use ($land_extra_irragation) {
            return [
                'Т./р.' => $land->id,
                'Лот рақами' => $land->regnum,
                'Кадастр раками' => ' ' . $land->cad_number,
                'Лот ҳолати' => $land->status->name,
                'Ижара тури' => ($land->person_type === 'Y') ? 'Юридик' : 'Жисмоний',
                //'Ер тури' => isset($land->contour->land_extra_irragation)? $land_extra_irragation[$land->contour->land_extra_irragation] : '',
                'Ер жойлашган Вилоят' => $land->region->nameuz,
                'Ер жойлашган туман' => $land->district->nameuz,
                //'Ер жойлашган МФЙ' => isset($land->mfy->nameuz) ? $land->mfy->nameuz : '',
                'Ер майдони' => $land->area,
                'Ижара муддати' => $land->period,
                //'Контур рақами' => isset($land->contour->contour_number)?$land->contour->contour_number:null,
                //'Аукцион танлов баённомаси' => isset($land->protocol->first()->id)? 'http://cabinet.e-ijara.uz/land/' . $land->id .'/file/download/' .
                //    $land->protocol->first()->id : '',
                //'Электрон қарор лойиҳаси' => isset($land->loyiha->first()->id)? 'http://cabinet.e-ijara.uz/land/' . $land->id .'/file/download/' .
                //    $land->loyiha->first()->id : '',
                //'Шартнома' => isset($land->contract->first()->id)? 'http://cabinet.e-ijara.uz/land/' . $land->id .'/file/download/' .
                //    $land->contract->first()->id : '',
                //'Кадастр кучирма' =>  isset($land->kadastr_kochirma->first()->id)? 'http://cabinet.e-ijara.uz/land/' . $land->id .'/file/download/' .
                //    $land->kadastr_kochirma->first()->id : '',
            ];
        });
    }
}

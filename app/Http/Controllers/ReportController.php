<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ReportController extends Controller
{
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
        $steps = [
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
        return view('user.report', compact('regions', 'steps'));
    }

    public function district($id)
    {
        $districts = Cache::remember('districts-' . $id, 60, function () use ($id) {
           return Districts::query()->select(['areaid', 'nameuz'])->where('regionid', $id)->orderByDesc('id')->get();
        });
        return response()->json($districts);
    }

    public function report(Request $request)
    {
        dd($request->all());
    }
}

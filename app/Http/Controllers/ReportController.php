<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use Illuminate\Http\Request;

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

        return view('user.report', compact('regions'));
    }

    public function district($id)
    {
        $districts = Districts::query()->select(['areaid', 'nameuz'])->where('regionid', $id)->get();
        return response()->json($districts);
    }

}

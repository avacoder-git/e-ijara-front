<?php

namespace App\Exports;

use App\Models\Regions;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class LandMultipleExport implements FromCollection, WithMultipleSheets
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        //
    }

    public function sheets(): array
    {
        $arr = [];
        array_push($arr, new LandExport());
        foreach (Regions::select('regionid','nameuz')->get() as $region) {
            array_push($arr, new LandExport($region->nameuz, $region->nameuz . ' Ўзбекистон Республикаси Президентининг ПҚ-20 сонли ва Вазирлар
Маҳкамасининг 709-сонли қарорлари ижроси бўйича <br>  МАЪЛУМОТ', $region));
        }

        return $arr;
    }
}

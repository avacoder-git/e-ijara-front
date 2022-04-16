<?php

namespace App\Imports;

use App\Models\PlanedReduced;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PlanesDistrictsImport implements ToCollection
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */


    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            if (!is_null($row[4])) {
                PlanedReduced::firstOrCreate(
                    ['region_id' => $row[1],'district_id' => $row[0], 'year' => Carbon::now()->year],
                    [
                        'planned' => $row[4],
                    ]
                );
            }
        }
    }
}

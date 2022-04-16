<?php

namespace Database\Seeders;

use App\Imports\PlanesDistrictsImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class AddPlanedDistricts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new PlanesDistrictsImport(), public_path('ijara/eijaradb_public_uz_14032022.xlsx'));
    }
}

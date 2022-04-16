<?php

namespace Database\Seeders;

use App\Models\PlanedReduced;
use Illuminate\Database\Seeder;

class AddPlanedReduce extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1735,'year'=>2022],
            [
                'planned'=>8110,
            ]
        );

        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1726,'year'=>2022],
            [
                'planned'=>0,
            ]
        );

        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1703,'year'=>2022],
            [
                'planned'=>2343,
            ]
        );
        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1706,'year'=>2022],
            [
                'planned'=>5979,
            ]
        );
        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1708,'year'=>2022],
            [
                'planned'=>7226,
            ]
        );
        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1710,'year'=>2022],
            [
                'planned'=>10234,
            ]
        );
        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1712,'year'=>2022],
            [
                'planned'=>7823,
            ]
        );
        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1714,'year'=>2022],
            [
                'planned'=>4439,
            ]
        );
        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1718,'year'=>2022],
            [
                'planned'=>6303,
            ]
        );
        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1722,'year'=>2022],
            [
                'planned'=>5847,
            ]
        );
        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1724,'year'=>2022],
            [
                'planned'=>6663,
            ]
        );
        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1727,'year'=>2022],
            [
                'planned'=>5531,
            ]
        );
        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1730,'year'=>2022],
            [
                'planned'=>4863,
            ]
        );
        $planned = PlanedReduced::firstOrCreate(
            ['region_id'=>1733,'year'=>2022],
            [
                'planned'=>4639,
            ]
        );
    }
}

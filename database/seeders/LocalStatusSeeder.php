<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Front\LocalStatus;
class LocalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            1 => 'Таклиф қабул қилинди',
            2 => 'Таклиф кўриб чиқилмоқда',
            3 => 'Таклиф рад  этилди',
            4 => 'Таклиф ижобий кўриб чиқилди',
        ];

        foreach ($statuses as $key => $name) {
            LocalStatus::create([
                'id' => $key,
                'name' => $name,
            ]);
        }
    }
}

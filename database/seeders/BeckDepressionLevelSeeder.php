<?php

namespace Database\Seeders;

use App\Models\BeckDepressionLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeckDepressionLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $depressionLevelSeeder = [
            [
                "level_of_depression" => "These ups and downs are considered normal"
            ],
            [
                "level_of_depression" => "Mild mood disturbance"
            ],
            [
                "level_of_depression" => "Borderline clinical depression"
            ],
            [
                "level_of_depression" => "Moderate depression"
            ],
            [
                "level_of_depression" => "Severe depression"
            ],
            [
                "level_of_depression" =>  "Extreme depression"
            ],
        ];

        foreach ($depressionLevelSeeder as $data) {
            BeckDepressionLevel::create($data);
        }
    }
}

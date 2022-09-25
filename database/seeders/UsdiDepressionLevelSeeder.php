<?php

namespace Database\Seeders;

use App\Models\UsdiDepressionLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsdiDepressionLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usdiDepressionLevel = [
            ["depression_level" => "Normal"],
            ["depression_level" => "Mild"],
            ["depression_level" => "Moderate Depression"],
            ["depression_level" => "Extreme Depression"],
        ];
        
        foreach($usdiDepressionLevel as $data){
            UsdiDepressionLevel::create($data);
        }
    }
}

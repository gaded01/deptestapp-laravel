<?php

namespace Database\Seeders;

use App\Models\UsdiOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsdiOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usdiOption = [
            [
                "option" => "Not at all",
                "score" => "1"
            ],
            [
                "option" => "Rarely",
                "score" => "2"
            ],
            [
                "option" => "Sometimes",
                "score" => "3"
            ],
            [
                "option" => "Very often",
                "score" => "4"
            ],
            [
                "option" => "All the time",
                "score" => "5"
            ],
        ];
        foreach($usdiOption as $data){
            UsdiOption::create($data);
        }
    }
}

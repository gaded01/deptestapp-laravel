<?php

namespace Database\Seeders;

use App\Models\BeckItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeckItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beck_item = [
            [
                'item_no' => 'item 1'
            ],
            [
                'item_no' => 'item 2'
            ],
            [
                'item_no' => 'item 3'
            ],
            [
                'item_no' => 'item 4'
            ],
            [
                'item_no' => 'item 5'
            ],
            [
                'item_no' => 'item 6'
            ],
            [
                'item_no' => 'item 7'
            ],
            [
                'item_no' => 'item 8'
            ],
            [
                'item_no' => 'item 9'
            ],
            [
                'item_no' => 'item 10'
            ],
            [
                'item_no' => 'item 11'
            ],
            [
                'item_no' => 'item 12'
            ],
            [
                'item_no' => 'item 13'
            ],
            [
                'item_no' => 'item 14'
            ],
            [
                'item_no' => 'item 15'
            ],
            [
                'item_no' => 'item 16'
            ],
            [
                'item_no' => 'item 17'
            ],
            [
                'item_no' => 'item 18'
            ],
            [
                'item_no' => 'item 19'
            ],
            [
                'item_no' => 'item 20'
            ],
            [
                'item_no' => 'item 21'
            ],
        ];
        
        foreach($beck_item as $data){
            BeckItem::create($data);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\UsdiQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsdiQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usdiQuestion = [
            ["question" => "I am more tired than I used to be"],
            ["question" => "I wonder whether life is worth living "],
            ["question" => "I do not have any desire to go to lectures"],
            ["question" => "I do not have the energy to study..."],
            ["question" => "I feel worthless"],
            ["question" => "I don't attend lectures as much as I..."],
            ["question" => "I have thought about killing myself "],
            ["question" => "I don't feel motivated to study"],
            ["question" => "My energy is low"],
            ["question" => "No one cares about me"],
            ["question" => "I feel emotionally empty"],
            ["question" => "Going to university is pointless"],
            ["question" => "I find it hard to concentrate"],
            ["question" => "I feel sad"],
            ["question" => "I worry I will not amount to anything"],
            ["question" => "I don't feel rested even after sleeping"],
            ["question" => "The activities I used to enjoy no..."],
            ["question" => "Challenges I encounter in my studies..."],
            ["question" => "I feel like I cannot control my"],
            ["question" => "I spend more time alone than I used to"],
            ["question" => "My mood affects my ability to carry..."],
            ["question" => "I feel disappointed in myself "],
            ["question" => "I have trouble starting assignments"],
            ["question" => "Daily tasks take me longer than they"],
            ["question" => "I feel withdrawn when I'm around"],
            ["question" => "I do not cope well"],
            ["question" => "I do not find study as interesting as"],
            ["question" => "My study is disrupted by distracting"],
            ["question" => "I think most people are better than me"],
            ["question" => "I have trouble completing study tasks"]
        ];

        foreach($usdiQuestion as $data){
            UsdiQuestion::create($data);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\BeckOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeckOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beck_option = [
            [
                "option" => "I do not feel sad",
                "value" => "0",
                "beck_item_id" => "1",
            ],
            [
                "option" => "I feel sad",
                "value" => "1",
                "beck_item_id" => "1",
            ],
            [
                "option" => "I am sad all the time and I can't snap out of it.",
                "value" => "2",
                "beck_item_id" => '1',
            ],
            [
                "option" => "I am so sad and unhappy that I can't stand it.",
                "value" => "3",
                "beck_item_id" => "1",
            ],
            [
                "option" => "I am not particularly discouraged about the future.",
                "value" => "0",
                "beck_item_id" => "2",
            ],
            [
                "option" => "I feel discouraged about the future.",
                "value" => "1",
                "beck_item_id" => "2",
            ],
            [
                "option" => "I feel I have nothing to look forward to.",
                "value" => "2",
                "beck_item_id" => "2",
            ],
            [
                "option" => "I feel the future is hopeless and that things cannot improve.",
                "value" => "3",
                "beck_item_id" => "2",
            ],


            [
                "option" => "I do not feel like a failure.",
                "value" => "0",
                "beck_item_id" => "3",
            ],
            [
                "option" => "I feel I have failed more than the average person.",
                "value" => "1",
                "beck_item_id" => "3",
            ],
            [
                "option" => "As I look back on my life, all I can see is a lot of failures.",
                "value" => "2",
                "beck_item_id" => "3",
            ],
            [
                "option" => "I feel I am a complete failure as a person.",
                "value" => "3",
                "beck_item_id" => "3",
            ],

            [
                "option" => "I get as much satisfaction out of things as I used to.",
                "value" => "0",
                "beck_item_id" => "4",
            ],
            [
                "option" => "I don't enjoy things the way I used to.",
                "value" => "1",
                "beck_item_id" => "4",
            ],
            [
                "option" => "I don't get real satisfaction out of anything anymore.",
                "value" => "2",
                "beck_item_id" => "4",
            ],
            [
                "option" => "I am dissatisfied or bored with everything.",
                "value" => "3",
                "beck_item_id" => "4",
            ],


            [
                "option" => "I don't feel particularly guilty.",
                "value" => "0",
                "beck_item_id" => "5",
            ],
            [
                "option" => "I feel guilty a good part of the time.",
                "value" => "1",
                "beck_item_id" => "5",
            ],
            [
                "option" => "I feel quite guilty most of the time.",
                "value" => "2",
                "beck_item_id" => "5",
            ],
            [
                "option" => "I feel guilty all of the time.",
                "value" => "3",
                "beck_item_id" => "5",
            ],
           
            [
                "option" => "I don't feel I am being punished.",
                "value" => "0",
                "beck_item_id" => "6",
            ],
            [
                "option" => "I feel I may be punished.",
                "value" => "1",
                "beck_item_id" => "6",
            ],
            [
                "option" => "I expect to be punished.",
                "value" => "2",
                "beck_item_id" => "6",
            ],
            [
                "option" => "I feel I am being punished.",
                "value" => "3",
                "beck_item_id" => "6",
            ],
           
            [
                "option" => "I don't feel disappointed in myself.",
                "value" => "0",
                "beck_item_id" => "7",
            ],
            [
                "option" => "I am disappointed in myself.",
                "value" => "1",
                "beck_item_id" => "7",
            ],
            [
                "option" => "I am disgusted with myself.",
                "value" => "2",
                "beck_item_id" => "7",
            ],
            [
                "option" => "I hate myself.",
                "value" => "3",
                "beck_item_id" => "7",
            ],


            [
                "option" => "I don't feel I am any worse than anybody else.",
                "value" => "0",
                "beck_item_id" => "8",
            ],
            [
                "option" => "I am critical of myself for my weaknesses or mistakes.",
                "value" => "1",
                "beck_item_id" => "8",
            ],
            [
                "option" => " I blame myself all the time for my faults.",
                "value" => "2",
                "beck_item_id" => "8",
            ],
            [
                "option" => "I blame myself for everything bad that happens.",
                "value" => "3",
                "beck_item_id" => "8",
            ],


            [
                "option" => "I don't have any thoughts of killing myself.",
                "value" => "0",
                "beck_item_id" => "9",
            ],
            [
                "option" => "I have thoughts of killing myself, but I would not carry them out.",
                "value" => "1",
                "beck_item_id" => "9",
            ],
            [
                "option" => " I would like to kill myself.",
                "value" => "2",
                "beck_item_id" => "9",
            ],

            [
                "option" => "I would kill myself if I had the chance.",
                "value" => "3",
                "beck_item_id" => "9",
            ],

            [
                "option" => "I don't cry any more than usual.",
                "value" => "0",
                "beck_item_id" => "10",
            ],
            [
                "option" => "I cry more now than I used to.",
                "value" => "1",
                "beck_item_id" => "10",
            ],
            [
                "option" => "I  cry all the time now.",
                "value" => "2",
                "beck_item_id" => "10",
            ],
            [
                "option" => " I used to be able to cry, but now I can't cry even though I want to.",
                "value" => "3",
                "beck_item_id" => "10",
            ],

            [
                "option" => "I am no more irritated by things than I ever was.",
                "value" => "0",
                "beck_item_id" => "11",
            ],
            [
                "option" => "I am slightly more irritated now than usual.",
                "value" => "1",
                "beck_item_id" => "11",
            ],
            [
                "option" => "I am quite annoyed or irritated a good deal of the time.",
                "value" => "2",
                "beck_item_id" => '11',
            ],
            [
                "option" => "I feel irritated all the time.",
                "value" => "3",
                "beck_item_id" => "11",
            ],

            [
                "option" => "I have not lost interest in other people.",
                "value" => "0",
                "beck_item_id" => "12",
            ],
            [
                "option" => "I am less interested in other people than I used to be.",
                "value" => "1",
                "beck_item_id" => "12",
            ],
            [
                "option" => "I have lost most of my interest in other people.",
                "value" => "2",
                "beck_item_id" => '12',
            ],
            [
                "option" => "I have lost all of my interest in other people.",
                "value" => "3",
                "beck_item_id" => "12",
            ],

            [
                "option" => "I make decisions about as well as I ever could.",
                "value" => "0",
                "beck_item_id" => "13",
            ],
            [
                "option" => "I put off making decisions more than I used to.",
                "value" => "1",
                "beck_item_id" => "13",
            ],
            [
                "option" => "I have greater difficulty in making decisions more than I used to.",
                "value" => "2",
                "beck_item_id" => '13',
            ],
            [
                "option" => "I can't make decisions at all anymore.",
                "value" => "3",
                "beck_item_id" => "13",
            ],

            [
                "option" => "I don't feel that I look any worse than I used to.",
                "value" => "0",
                "beck_item_id" => "14",
            ],
            [
                "option" => "I  am worried that I am looking old or unattractive.",
                "value" => "1",
                "beck_item_id" => "14",
            ],
            [
                "option" => "I feel there are permanent changes in my appearance that make me look unattractive.",
                "value" => "2",
                "beck_item_id" => '14',
            ],
            [
                "option" => "I believe that I look ugly.",
                "value" => "3",
                "beck_item_id" => "14",
            ],

            [
                "option" => "I can work about as well as before.",
                "value" => "0",
                "beck_item_id" => "15",
            ],
            [
                "option" => "It takes an extra effort to get started at doing something.",
                "value" => "1",
                "beck_item_id" => "15",
            ],
            [
                "option" => "I have to push myself very hard to do anything.",
                "value" => "2",
                "beck_item_id" => '15',
            ],
            [
                "option" => "I can't do any work at all.",
                "value" => "3",
                "beck_item_id" => "15",
            ],

            [
                "option" => "I can sleep as well as usual.",
                "value" => "0",
                "beck_item_id" => "16",
            ],
            [
                "option" => "I don't sleep as well as I used to.",
                "value" => "1",
                "beck_item_id" => "16",
            ],
            [
                "option" => "I wake up 1-2 hours earlier than usual and find it hard to get back to sleep.",
                "value" => "2",
                "beck_item_id" => '16',
            ],
            [
                "option" => "I wake up several hours earlier than I used to and cannot get back to sleep.",
                "value" => "3",
                "beck_item_id" => "16",
            ],

            [
                "option" => "I don't get more tired than usual.",
                "value" => "0",
                "beck_item_id" => "17",
            ],
            [
                "option" => "I get tired more easily than I used to.",
                "value" => "1",
                "beck_item_id" => "17",
            ],
            [
                "option" => "I get tired from doing almost anything.",
                "value" => "2",
                "beck_item_id" => '17',
            ],
            [
                "option" => "I am too tired to do anything.",
                "value" => "3",
                "beck_item_id" => "17",
            ],

            [
                "option" => "My appetite is no worse than usual.",
                "value" => "0",
                "beck_item_id" => "18",
            ],
            [
                "option" => "My appetite is not as good as it used to be.",
                "value" => "1",
                "beck_item_id" => "18",
            ],
            [
                "option" => "My appetite is much worse now.",
                "value" => "2",
                "beck_item_id" => '18',
            ],
            [
                "option" => "I have no appetite at all anymore.",
                "value" => "3",
                "beck_item_id" => "18",
            ],

            [
                "option" => "I haven't lost much weight, if any, lately.",
                "value" => "0",
                "beck_item_id" => "19",
            ],
            [
                "option" => "I have lost more than five pounds.",
                "value" => "1",
                "beck_item_id" => "19",
            ],
            [
                "option" => "I have lost more than ten pounds.",
                "value" => "2",
                "beck_item_id" => '19',
            ],
            [
                "option" => "I have lost more than fifteen pounds.",
                "value" => "3",
                "beck_item_id" => "19",
            ],

            [
                "option" => "I am no more worried about my health than usual.",
                "value" => "0",
                "beck_item_id" => "20",
            ],
            [
                "option" => "I am worried about physical problems like aches, pains, upset stomach, or constipation.",
                "value" => "1",
                "beck_item_id" => "20",
            ],
            [
                "option" => "I am very worried about physical problems and it's hard to think of much else.",
                "value" => "2",
                "beck_item_id" => '20',
            ],
            [
                "option" => "I am so worried about my physical problems that I cannot think of anything else.",
                "value" => "3",
                "beck_item_id" => "20",
            ],

            [
                "option" => "I have not noticed any recent change in my interest in sex.",
                "value" => "0",
                "beck_item_id" => "21",
            ],
            [
                "option" => "I am less interested in sex than I used to be.",
                "value" => "1",
                "beck_item_id" => "21",
            ],
            [
                "option" => "I have almost no interest in sex",
                "value" => "2",
                "beck_item_id" => '21',
            ],
            [
                "option" => "I have lost interest in sex completely.",
                "value" => "3",
                "beck_item_id" => "21",
            ],

        ];
        
        foreach($beck_option as $data){
            BeckOption::create($data);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\TestTake;
use App\Models\UsdiAnswer;
use App\Models\UsdiOption;
use App\Models\UsdiQuestion;
use App\Models\UsdiResult;
use App\Models\UsdiTestTake;
use Illuminate\Http\Request;

class UsdiTestController extends Controller
{
    public function getUsdiQuestion(Request $request){

        $usdiQuestion = UsdiQuestion::where('id' , $request->id)->first();

        return $usdiQuestion;

    }

    public function getUsdiOption (){
        
        return UsdiOption::all();
    }

    public function usdiAnswer(Request $request){
      $testTake = TestTake::where('user_id', $request->user()->id)->where('type', "1")->orderBy('take', 'desc')->first();
      if($testTake !== null) {
         $getUsdiAnswer = UsdiAnswer::where('test_take_id', $testTake->id)->get();
         $usdiAnswerCount = $getUsdiAnswer->count();
         if($usdiAnswerCount >= 30){
            TestTake::create([
               'user_id' => $request->user()->id,
               'type' => "1",
               'take' => $testTake-> take += 1,
            ]);
         }  
      }
      else{
         TestTake::create([
            'user_id' => $request->user()->id,
            'type' => "1",
            'take' => 1,
      ]);
      }
      $testAnswer = UsdiAnswer::create([
         'test_take_id' => $testTake? $testTake->id : 1,
         'usdi_question_id' => $request->usdi_question_id,
         'usdi_option_id' => $request->usdi_option_id
      ]);
      
      return $testAnswer;
    }

    public function usdiResult(Request $request)
   {  
      $testTake = TestTake::where('user_id', $request->user()->id)->where('type', '1')->orderBy('take', 'desc')->first();
      if($testTake === null) {
         return false;
      }
      $usdiResultValue = usdiAnswer::where('test_take_id', $testTake->id)->join('usdi_options', 'usdi_answers.usdi_option_id' ,'=' , 'usdi_options.id')->sum('score');
      
      $depressionLevel = null;
      if($usdiResultValue <= 30) {
         $depressionLevel = 1;
      };
      if($usdiResultValue >= 31 && $usdiResultValue <= 50 ) {
         $depressionLevel = 2;
      }
      if($usdiResultValue >= 51 && $usdiResultValue <= 100 ) {
         $depressionLevel = 3;
      }
      if($usdiResultValue >= 101 && $usdiResultValue <= 150 ) {
         $depressionLevel = 4;
      }
      
      UsdiResult::create([
         'user_id' => $request->user()->id,
         'total_score' => $usdiResultValue,
         'usdi_depression_level_id' => $depressionLevel
      ]);
      return UsdiResult::where('user_id' , $request->user()->id)->with('usdiDepressionLevel')->latest('created_at')->first();
   }
}

<?php

namespace App\Http\Controllers;

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

    public function usdiAnswer(Request $request)
    {
        $usdiTake = UsdiTestTake::where('user_id', $request->user()->id)->orderBy('take', 'desc')->first();
        if($usdiTake !== null) {
            $getUsdiAnswer = UsdiAnswer::where('usdi_test_take_id', $usdiTake->id)->get();
            $usdiAnswerCount = $getUsdiAnswer->count();
            if($usdiAnswerCount === 30){
                UsdiTestTake::create([
                 'user_id' => $request->user()->id,
                 'take' => 2,
              ]);
           }
        }
        else{
            UsdiTestTake::create([
              'user_id' => $request->user()->id,
              'take' => 1,
           ]);
        }
      
        $testAnswer = UsdiAnswer::create([
           'usdi_test_take_id' => $usdiTake? $usdiTake->id : 1,
           'usdi_question_id' => $request->usdi_question_id,
           'usdi_option_id' => $request->usdi_option_id
        ]);
        
        return $testAnswer;
    }

    public function usdiResult(Request $request)
   {  
      $usdiTake = UsdiTestTake::where('user_id', $request->user()->id)->orderBy('take', 'desc')->first();
      if($usdiTake === null) {
         return false;
      }
      $usdiResultValue = usdiAnswer::where('usdi_test_take_id', $usdiTake->id)->join('usdi_options', 'usdi_answers.usdi_option_id' ,'=' , 'usdi_options.id')->sum('score');
      
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

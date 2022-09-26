<?php

namespace App\Http\Controllers;

use App\Models\BeckAnswer;
use App\Models\BeckItem;
use App\Models\BeckOption;
use App\Models\BeckTestResult;
use App\Models\BeckTestTake;
use App\Models\TestTake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeckTestController extends Controller
{
   public function getBeckOption2()
   {
      $beckOption = BeckOption::select('id', 'beck_item_id', 'option', 'value', )
      ->orderBy('id', 'asc')
      ->groupBy('beck_item_id', 'option', 'value','id')
      ->get();

      return $beckOption;
   }


   public function getBeckOption(Request $request)
   {
      $beckOption2 = BeckOption::where('beck_item_id', $request->id)->get();
      
      return $beckOption2;
   }

   public function testAnswer(Request $request)
   {  
      $testTake = TestTake::where('user_id', $request->user()->id)->where('type', "0")->orderBy('take', 'desc')->first();
      if($testTake !== null) {
         $getBeckAnswer = BeckAnswer::where('test_take_id', $testTake->id)->get();
         $beckAnswerCount = $getBeckAnswer->count();
         if($beckAnswerCount >= 21){
            TestTake::create([
               'user_id' => $request->user()->id,
               'type' => "0",
               'take' => $testTake->take += 1,
            ]); 
         }
      }
      else{
         TestTake::create([
            'user_id' => $request->user()->id,
            'type' => "0",
            'take' => 1,
         ]);
      }
    
      $beckAnswer = BeckAnswer::create([
         'test_take_id' => $testTake? $testTake->id : 1,
         'beck_option_id' => $request->id
      ]);
      
      return $beckAnswer;
   }

   public function testResult(Request $request)
   {  
      $testTake = TestTake::where('user_id', $request->user()->id)->where('type', "0")->orderBy('take', 'desc')->first();
      if($testTake === null) {
         return false;
      }
      $testResultValue = BeckAnswer::where('test_take_id', $testTake->id)->join('beck_options', 'beck_answers.beck_option_id' ,'=' , 'beck_options.id')->sum('value');
      
      $depressionLevel = null;
      if($testResultValue <= 10) {
         $depressionLevel = 1;
      };
      if($testResultValue >= 11 && $testResultValue <= 16 ) {
         $depressionLevel = 2;
      }
      if($testResultValue >= 17 && $testResultValue <= 20 ) {
         $depressionLevel = 3;
      }
      if($testResultValue >= 21 && $testResultValue <= 30 ) {
         $depressionLevel = 4;
      }
      if($testResultValue >= 31 && $testResultValue <= 40 ) {
         $depressionLevel = 5;
      }
      if($testResultValue > 40) {
         $depressionLevel = 6;
      }

      BeckTestResult::create([
         'user_id' => $request->user()->id,
         'score' => $testResultValue,
         'depression_level_id' => $depressionLevel
      ]);

      return BeckTestResult::where('user_id' , $request->user()->id)->with('beckDepressionLevel')->latest('created_at')->first();
   }


  
}

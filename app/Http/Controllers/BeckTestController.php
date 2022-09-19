<?php

namespace App\Http\Controllers;

use App\Models\BeckAnswer;
use App\Models\BeckItem;
use App\Models\BeckOption;
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
      $beckAnswer = BeckAnswer::create([
         'user_id' => $request->user()->id,
         'beck_option_id' => $request->id
      ]);
      
      return $beckAnswer;
   }
}

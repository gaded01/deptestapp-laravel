<?php

namespace App\Http\Controllers;

use App\Models\BeckTestTake;
use App\Models\TestTake;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginUser(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if($user){
            $token = $user->createToken('api_token')->plainTextToken;
            return response()->json([
                'access_token' => $token,
                'user' => $user,
            ]);
        }
        else {
            return response()->json([
                'status' => 'failed',
                'message' => 'Email does not exist.',
            ]);
        }
    }

    
    public function signupUser(Request $request)
    {   
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'age' => 'required|integer',
        ]);
        if($validator->fails()){
            $message = $validator->messages();
            return response()->json([
                'messages' => $message,
                'status' => 'failed'
            ]);
        }
        $user = User::create([
            'email' => $request->email,
            'age' => $request->age,
        ]);
        return $user;
    }

    public function checkLastTest(Request $request)
    {
        $userTest = TestTake::where('user_id', $request->user()->id)
        ->orderBy('id', 'desc')
        ->first();
        if($userTest !== null) {
            if($userTest->status == "1"){
                if(Carbon::now() < Carbon::parse($userTest->updated_at)->addDays(3)){
                    return response()->json([
                        'status' => 'failed',
                        'message' => 'Test 3 days after you take the test.',
                    ]);
                }
            }
        }
        return;
    }
    
}

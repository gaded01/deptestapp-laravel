<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    
}

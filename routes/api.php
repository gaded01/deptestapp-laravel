<?php

use App\Http\Controllers\BeckTestController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UsdiTestController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user-login', [UserController::class, 'loginUser']);
Route::post('/user-signup', [UserController::class, 'signupUser']);


Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/get-beckoption2', [BeckTestController::class, 'getBeckOption2']);
    Route::post('/get-beckoption/{id}', [BeckTestController::class, 'getBeckOption']);

    Route::get('/beck-item', [BeckTestController::class, 'countAnswer']);
    Route::post('/beck-answer', [BeckTestController::class, 'testAnswer']);
    Route::get('/beck-result', [BeckTestController::class, 'testResult']);

    Route::get('/usdi-item', [UsdiTestController::class, 'countUsdiAnswer']);

    Route::post('/get-usdiquestion/{id}', [UsdiTestController::class, 'getUsdiQuestion']);
    Route::get('/get-usdioption', [UsdiTestController::class, 'getUsdiOption']);
    Route::post('/usdi-answer', [UsdiTestController::class, 'usdiAnswer']);
    Route::get('/usdi-result', [UsdiTestController::class, 'usdiResult']);
    Route::post('/check-test', [UserController::class, 'checkLastTest']);
    
    Route::post('/beck_result-email', [MailController::class, 'beckResultEmail']);
    Route::post('/usdi_result-email', [MailController::class, 'usdiResultEmail']);
});


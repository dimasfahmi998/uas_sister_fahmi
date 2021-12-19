<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Handphone2Controller;
use App\Http\Controllers\GetIdController;
use App\Http\Controllers\AuthController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);


// Route::get('handphone2',[Handphone2Controller::class,'index']);
// Route::post('handphone2',[Handphone2Controller::class,'create']);
// Route::put('/handphone2/{id}',[Handphone2Controller::class,'update']);
// Route::delete('/handphone2/{id}',[Handphone2Controller::class,'delete']);

Route::get('handphone2',[handphone2Controller::class,'index']);
Route::get('Idhandphone2',[GetIdController::class,'showId']);
Route::post('handphone2',[handphone2Controller::class,'create']);
Route::put('handphone2',[handphone2Controller::class,'update']);
Route::delete('handphone2',[handphone2Controller::class,'destroy']);
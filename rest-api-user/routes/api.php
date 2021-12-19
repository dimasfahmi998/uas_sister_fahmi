<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pembeli2Controller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);

// Route::get('idpembeli2',[GetIdController::class,'showId']);
// Route::get('pembeli2',[pembeli2Controller::class,'index']);
// Route::post('pembeli2',[pembeli2Controller::class,'create']);
// Route::put('/pembeli2/{id}',[pembeli2Controller::class,'update']);
// Route::delete('pembeli2/{id}',[pembeli2Controller::class,'destroy']);
// Route::get('pembeli2/{id}', [pembeli2Controller::class, 'show']);

Route::get('pembeli2',[pembeli2Controller::class,'index']);
Route::get('Idpembeli2',[GetIdController::class,'showId']);
Route::post('pembeli2',[pembeli2Controller::class,'create']);
Route::put('pembeli2',[pembeli2Controller::class,'update']);
Route::delete('pembeli2',[pembeli2Controller::class,'destroy']);
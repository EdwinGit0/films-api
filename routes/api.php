<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\FilmController;
use App\Http\Controllers\API\AuthController;

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

/* Route::get('/films', [FilmController::class,'index']);
Route::post('/films', [FilmController::class,'store']);
Route::get('/films/{film}', [FilmController::class,'show']);
Route::put('/films/{film}', [FilmController::class,'update']);
Route::delete('/films/{film}', [FilmController::class,'destroy']); */

Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('logout',[AuthController::class,'logout']);
    Route::apiResource('films',FilmController::class);
});
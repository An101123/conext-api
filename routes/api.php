<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BusinessTypeController;

use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\LocalConextController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('businessTypes', BusinessTypeController::class)->middleware('auth:api');
Route::resource('expertises', ExpertiseController::class)->middleware('auth:api');  
Route::resource('localConexts', LocalConextController::class)->middleware('auth:api');
Route::resource('users', UserController::class);
Route::get('userRandom', [UserController::class, 'getUserRandom']);
Route::resource('explores', ExploreController::class)->middleware('auth:api');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);


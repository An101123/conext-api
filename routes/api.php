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
Route::resource('users', UserController::class)->only('index', 'show');
Route::get('userRandom', [UserController::class, 'getUserRandom']);
Route::get('userByBusinessType/{id}',[UserController::class, 'getUserByBusinessType']);
Route::get('userByExpertise/{id}',[UserController::class, 'getUserByExpertise']);

Route::resource('businessTypes', BusinessTypeController::class)->only('index', 'show');
Route::resource('localConexts', LocalConextController::class)->only('index', 'show');
Route::resource('users', UserController::class)->only('index', 'show');
Route::resource('explores', ExploreController::class)->only('index', 'show');

Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);

Route::group(['middleware' => ['auth:api', 'admin']], function()
{
    Route::resource('admin/expertises', ExpertiseController::class);
    Route::resource('admin/businessTypes', BusinessTypeController::class);
    Route::resource('admin/localConexts', LocalConextController::class);
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/explores', ExploreController::class);
});

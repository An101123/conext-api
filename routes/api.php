<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BusinessTypeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\LocalConextController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\WorkPlaceController;
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
Route::get('user-random', [UserController::class, 'getUserRandom']);
Route::resource('business-types', BusinessTypeController::class)->only('index', 'show');
Route::resource('local-conexts', LocalConextController::class)->only('index', 'show');
Route::resource('explores', ExploreController::class)->only('index', 'show');
Route::resource('vouchers', VoucherController::class)->only('index', 'show');
Route::resource('events', EventController::class)->only('index', 'show');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);

Route::group(['middleware' => ['auth:api', 'admin']], function()
{
    Route::resource('admin/expertises', ExpertiseController::class);
    Route::resource('admin/business-types', BusinessTypeController::class);
    Route::resource('admin/local-conexts', LocalConextController::class);
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/explores', ExploreController::class);
    Route::resource('admin/events', EventController::class);
    Route::resource('admin/vouchers', VoucherController::class);
    Route::resource('admin/work-places', WorkPlaceController::class);
});

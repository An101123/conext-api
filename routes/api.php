<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BusinessTypeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HotNeedController;
use App\Http\Controllers\LocalConextController;
use App\Http\Controllers\TermAndPolicyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\WorkPlaceController;
use App\Models\Category;
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

Route::middleware('auth:api')->get('/auth/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('users', UserController::class)->only('index', 'show');
Route::post('auth/update-profile',  [UserController::class, 'update'])->middleware('auth:api');
Route::get('auth/profile', [UserController::class, 'profile'])->middleware('auth:api');
Route::get('user-random', [UserController::class, 'getUserRandom']);
Route::apiResource('business-types', BusinessTypeController::class)->only('index', 'show');
Route::apiResource('expertises', ExpertiseController::class)->only('index', 'show');
Route::apiResource('local-conexts', LocalConextController::class)->only('index', 'show');
Route::apiResource('explores', ExploreController::class)->only('index', 'show');
Route::get('categories', [CategoryController::class, 'index']);
Route::apiResource('vouchers', VoucherController::class)->only('index', 'show');
Route::apiResource('events', EventController::class)->only('index', 'show');
Route::apiResource('work-places', WorkPlaceController::class)->only('index', 'show');
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class, 'logout'])->middleware('auth:api');
Route::get('location', [WorkPlaceController::class, 'location']);

Route::post('contacts', [ContactController::class,'store']);

Route::group(['middleware' => ['auth:api', 'admin']], function()
{
    Route::apiResource('admin/contacts', ContactController::class);
    Route::apiResource('admin/expertises', ExpertiseController::class);
    Route::apiResource('admin/business-types', BusinessTypeController::class);
    Route::apiResource('admin/local-conexts', LocalConextController::class);
    Route::apiResource('admin/users', UserController::class);
    Route::apiResource('admin/explores', ExploreController::class);
    Route::apiResource('admin/events', EventController::class);
    Route::apiResource('admin/vouchers', VoucherController::class);
    Route::apiResource('admin/work-places', WorkPlaceController::class);
    Route::apiResource('admin/categories', CategoryController::class);
});
Route::post('register', [UserController::class, 'store']);
Route::get('abouts', [AboutController::class, 'index']);
Route::get('faqs', [FaqController::class, 'index']);
Route::get('term-and-policies', [TermAndPolicyController::class, 'index']);
Route::apiResource('hot-needs', HotNeedController::class)->only('store', 'update', 'destroy')->middleware('auth:api');
Route::apiResource('hot-needs', HotNeedController::class)->only('index', 'show');
Route::get('my-hot-needs', [HotNeedController::class, 'getHotNeedByUser'])->middleware('auth:api');


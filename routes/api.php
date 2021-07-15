<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\OriginController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\SegmentController;
use App\Http\Controllers\Api\UnrealizedSaleReasonController;

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

Route::group(['middleware' => ['guest:api']], function () {
});

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/users/profile', [UserController::class, 'profile']);
    Route::apiResource('/users', UserController::class);

    Route::apiResource('/contacts', ContactController::class);

    Route::get('/origins/options', [OriginController::class, 'options']);
    Route::apiResource('/origins', OriginController::class);

    Route::get('/roles/options', [RoleController::class, 'options']);
    Route::apiResource('/roles', RoleController::class);

    Route::get('/segments/options', [SegmentController::class, 'options']);
    Route::apiResource('/segments', SegmentController::class);

    Route::get('/unrealized_sale_reason/options', [UnrealizedSaleReasonController::class, 'options']);
    Route::apiResource('/unrealized_sale_reason', UnrealizedSaleReasonController::class);
});

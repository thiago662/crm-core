<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\SegmentController;

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

    // Route::get('/origins/options', [UserController::class, 'options']);
    // Route::apiResource('/origins', UserController::class);

    // Route::get('/roles/options', [RoleController::class, 'options']);
    // Route::apiResource('/roles', RoleController::class);

    // Route::get('/segments/options', [SegmentController::class, 'options']);
    // Route::apiResource('/segments', SegmentController::class);

    // Route::get('/unrealized_sale_reason/options', [UserController::class, 'options']);
    // Route::apiResource('/unrealized_sale_reason', UserController::class);
});

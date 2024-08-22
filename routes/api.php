<?php

use App\Http\Controllers\Banner\BannerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get("banner",[BannerController::class,'getBanner']);
Route::post("banner",[BannerController::class,'createBanner']);
Route::patch("banner/{id}",[BannerController::class,'updateBanner']);
Route::delete("banner/{id}",[BannerController::class,'deleteBanner']);
Route::delete("banner/bulk-delete/banner",[BannerController::class,'deleteBulkBanner']);
 
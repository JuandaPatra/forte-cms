<?php

use App\Http\Controllers\API\aboutApiController;
use App\Http\Controllers\API\checkIpApiController;
use App\Http\Controllers\API\contactApiController;
use App\Http\Controllers\API\newsApiController;
use App\Http\Controllers\API\productApiController;
use App\Http\Controllers\API\searchApiController;
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

Route::middleware('cors')->group(function () {
    Route::get('product', [productApiController::class, 'category'])->name('category');
    // Route::get('product/{lang}', [productApiController::class, 'index'])->name('product');
    Route::get('product-detail/{slug}', [productApiController::class, 'product']);

    // Route::get('news/detail/{slug}',[newsApiController::class, 'detail'])->class('news.detail');
    Route::get('news', [newsApiController::class, 'index'])->name('news');

    Route::get('search', [searchApiController::class, 'search']);
    Route::post('contact', [contactApiController::class, 'store'])->name('store-contact');
    Route::get('about', [aboutApiController::class, 'index']);

    Route::get('checkIp', [checkIpApiController::class, 'index']);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

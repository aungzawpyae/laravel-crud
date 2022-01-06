<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Api\FontendController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CollectionController;

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

Route::namespace('Api')->group(function () {
   
   
    /**
    * Products
    */
    // Route::get('products', [ProductController::class, 'index']);
    // Route::get('product/{id}', [ProductController::class, 'show']);
 

    /** 
     * Collection
     **/

    Route::get('collection', [FontendController::class, 'collection']);
    Route::get('collection/show/{id}', [FontendController::class, 'collectionDetail']);

    Route::get('banner',[FontendController::class, 'banner']);
    Route::get('product',[FontendController::class, 'product']);

 
});



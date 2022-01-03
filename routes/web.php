<?php
namespace App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCollectionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UiController;
use App\Http\Controllers\AjaxRequestController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create']);

Route::resource('/products', ProductController::class);
Route::resource('/banners', BannerController::class);
Route::resource('/collection', ProductCollectionController::class);
Route::resource('/announcement', AnnouncementController::class);
Route::resource('/category', CategoryController::class);




//   UI Route List

Route::get('/', [UiController::class, 'collection']);
Route::get('/home', [UiController::class, 'collection']);
Route::get('/uicollection', [UiController::class, 'uicollection']);
Route::get('/collection/details/{id}', [UiController::class, 'collectionShow']);
Route::get('/product-collection', [UiController::class, 'productCollection']);
Route::get('/product-all', [UiController::class, 'productall']);

Route::get('/about', [UiController::class, 'about']);

Route::get('/contact', [UiController::class, 'contact']);


// Route::get('/ajax/out-of-stock/{type}', [AjaxRequestController::class, 'ajaxRequest']);

Route::get('/ajax/collection/details/{id}', [AjaxRequestController::class, 'hightToLow']);

require __DIR__.'/auth.php';

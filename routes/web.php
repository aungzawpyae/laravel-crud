<?php
namespace App;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AjaxRequestController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ProductCollectionController;

/**
 * 
 * Backend Controller 
 * 
 */

Route::get('/admintest', function () {
    return view('layouts.test');
});



//   UI Route List

Route::get('/', [UiController::class, 'home']);
Route::get('/product-collection', [UiController::class, 'productCollection']);
Route::get('/collection/details/{id}', [UiController::class, 'collectionShow']);
Route::get('/product-all', [UiController::class, 'productall']);
Route::get('product/details/{id}', [UiController::class, 'productDetails']);
Route::post('product/details/{id}', [UiController::class, 'store']);
Route::get('/announcement-all', [UiController::class, 'announcementAll']);




Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/update/{id}', [CartController::class, 'update']);
Route::delete('/cart/delete/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/cart', [CartController::class, 'store'])->name('order.store');

// Order 
// Route::get('/success', [OrderController::class, 'orderSuccess']);
// Route::get('success', function () {
//     return view('ui.carts.order-success');
// });
Route::get('/success', [MailController::class, 'send']);
// Route::get('/order', [OrderController::class, 'index']);




Route::get('/about', [UiController::class, 'about']);

Route::get('/contact', [UiController::class, 'contact']);


/**
 * 
 * Admin Role
 * 
 */

Route::group(['middleware' => 'checkRole:admin', 'prefix' => 'dev'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::resource('/product', ProductController::class);
    Route::resource('/category', CategoryController::class);
    // Route::resource('/back/products', ProductController::class);
    // Route::resource('/product', ProductController::class);
    Route::resource('/banner', BannerController::class);
    Route::resource('/collection', ProductCollectionController::class);
    Route::resource('/announcement', AnnouncementController::class);    
    // Route::resource('/category', CategoryController::class);
    Route::get('/user-list', [UserController::class, 'index']);
});




Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
// Route::post('cart', [\App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
// Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
// Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


// Route::get('/ajax/out-of-stock/{type}', [AjaxRequestController::class, 'ajaxRequest']);

Route::get('/ajax/collection/details/{id}', [AjaxRequestController::class, 'hightToLow']);


/**
 * 
 * Invoice
 * 
 */
Route::get('/invoice', [InvoiceController::class, 'invoice']);







require __DIR__.'/auth.php';

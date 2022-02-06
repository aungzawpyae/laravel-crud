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
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AjaxRequestController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\OrderActionController;
use App\Http\Controllers\ProductCollectionController;



Route::get('/test', function() {
    
    return view('test');
});



//   UI Route Lis

Route::get('/', [UiController::class, 'home']);
Route::get('/collection', [UiController::class, 'collection']);
Route::get('/collection/{collection:slug}/details/', [UiController::class, 'collectionShow'])->name('collection.products');

Route::get('/product-all', [UiController::class, 'productall']);
Route::get('product/{product:slug}/details', [UiController::class, 'productDetails'])->name('product.detail');

//  Product Serch 
Route::get('/search', [UiController::class, 'search'])->name('search');

// Store Cart 
Route::post('product/{product:slug}/details', [UiController::class, 'store'])->name('cart.store');
Route::get('/announcement-all', [UiController::class, 'announcementAll']);


Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::put('cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/delete/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
// Route::post('/cart', [CartController::class, 'store'])->name('order.store');


// Route::get('success', function () {
//     return view('ui.carts.order-success');
// });
Route::get('/success', [MailController::class, 'send']);
// Route::get('/order', [OrderController::class, 'index']);


// Order 
Route::get('/order/create', [OrderController::class,'create'])->name('order.create');
Route::post('/order/create', [OrderController::class,'store'])->name('order.store');
Route::get('/order/action',[OrderActionController::class, 'action'])->name('order.action');




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
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('/product', ProductController::class);
    Route::resource('/category', CategoryController::class);
    
    Route::resource('/banner', BannerController::class);
    Route::resource('/collection', ProductCollectionController::class);
    Route::resource('/announcement', AnnouncementController::class);    
    
    Route::get('/user-list', [UserController::class, 'index']);

    // Order 

    Route::get('/order', [OrderController::class,'index'])->name('order.index');
    Route::get('/order/{id}/edit', [OrderController::class, 'edit'])->name('order.edit');
    Route::put('/order/{id}/edit', [OrderController::class, 'update'])->name('order.update');
    Route::delete('/order/{id}/delete', [OrderController::class, 'destroy'])->name('order.destroy');
    Route::get('/order/action',[OrderActionController::class, 'action'])->name('order.action');
    Route::get('/order/{id}/show', [OrderController::class, 'show'])->name('order.show');
    
});




Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');


Route::get('/ajax/collection/details/{id}', [AjaxRequestController::class, 'hightToLow']);


/**
 * 
 * Invoice
 * 
 */
Route::get('/invoice', [InvoiceController::class, 'invoice']);


/**
 * 
 * Localization
 * 
 */
Route::get('/language/{locale}', LocalizationController::class)->name('locale.switch');






require __DIR__.'/auth.php';

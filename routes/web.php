<?php

use App\Http\Controllers\Front\AccountController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('shop')->group(function () {
    Route::get('', [ShopController::class, 'index'])->name('shop.index');
    Route::get('product/{id}', [ShopController::class, 'show'])->name('shop.show');
    Route::post('product/{id}', [ShopController::class, 'postComment']);
    Route::get('category/{categorySlug}', [ShopController::class, 'category'])->name('shop.category');
});

Route::prefix('cart')->group(function () {
    Route::get('', [CartController::class, 'index'])->name('cart.index');
    Route::get('add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('delete', [CartController::class, 'delete'])->name('cart.delete');
    Route::get('destroy', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('update', [CartController::class, 'update'])->name('cart.update');
});

Route::prefix('checkout')->group(function () {
    Route::get('', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/', [CheckoutController::class, 'addOrder'])->name('checkout.add');
    Route::get('/result', [CheckoutController::class, 'result'])->name('checkout.result');
    Route::get('/vnPayCheck', [CheckoutController::class, 'vnPayCheck']);
});

Route::prefix('account')->group(function () {
    Route::get('login', [AccountController::class, 'login'])->name('account.login');
    Route::post('login', [AccountController::class, 'checkLogin'])->name('account.login');
    Route::get('register', [AccountController::class, 'register'])->name('account.register');
    Route::post('register', [AccountController::class, 'postRegister'])->name('account.register');

    Route::prefix('my-order')->group(function () {
        Route::get('/', [AccountController::class, 'myOrderIndex'])->name('account.my-order');
        Route::get('/{id}', [AccountController::class, 'myOrderShow'])->name('account.my-order.show');
    });
    Route::get('logout', [AccountController::class, 'logout'])->name('account.logout');
});

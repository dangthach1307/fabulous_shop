<?php

use App\Http\Controllers\Front\CartController;
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
    Route::get('/', [ShopController::class, 'index'])->name('shop.index');
    Route::get('product/{id}', [ShopController::class, 'show'])->name('shop.show');
    Route::post('product/{id}', [ShopController::class, 'postComment']);
    Route::get('category/{categorySlug}', [ShopController::class, 'category'])->name('shop.category');
});

Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::get('add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('delete', [CartController::class, 'delete'])->name('cart.delete');
    Route::get('destroy', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('update', [CartController::class, 'update'])->name('cart.update');
});

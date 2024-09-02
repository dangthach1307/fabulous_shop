<?php
//admin

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductAttributeController;
use App\Http\Controllers\Admin\ProductImageController;
//user
use App\Http\Controllers\Front\AccountController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\HomeController as FrontHomeController;
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

Route::get('/', [FrontHomeController::class, 'index'])->name('home');

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
    Route::post('login', [AccountController::class, 'checkLogin'])->name('account.check-login');
    Route::get('register', [AccountController::class, 'register'])->name('account.register');
    Route::post('register', [AccountController::class, 'postRegister'])->name('account.post-register');

    Route::prefix('my-order')->middleware('CheckMemberLogin')->group(function () {
        Route::get('/', [AccountController::class, 'myOrderIndex'])->name('account.my-order');
        Route::get('/{id}', [AccountController::class, 'myOrderShow'])->name('account.my-order.show');
    });
    Route::get('logout', [AccountController::class, 'logout'])->name('account.logout');
});


//Aadmin

Route::prefix('admin')->middleware('CheckAdminLogin')->group(function () {
    Route::redirect('', 'admin/user');

    Route::resource('user', UserController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('product/{product_id}/image', ProductImageController::class);
    Route::resource('product/{product_id}/attribute',ProductAttributeController::class);
    Route::resource('product', ProductController::class);
    Route::resource('order', OrderController::class);


    Route::prefix('login')->group(function () {
        Route::get('', [HomeController::class, 'getLogin'])->name('admin.login')->withoutMiddleware('CheckAdminLogin');
        Route::post('', [HomeController::class, 'postLogin'])->name('admin.post-login')->withoutMiddleware('CheckAdminLogin');
    });

    Route::get('logout', [HomeController::class, 'logout'])->name('admin.logout');
});

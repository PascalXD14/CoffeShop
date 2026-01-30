<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\MenuController as UserMenuController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\KeranjangController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/menu', [UserMenuController::class, 'index'])->name('menu.user');




Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginProcess']);

    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'registerProcess']);
});


Route::middleware('auth')->group(function () {
    Route::get('/menu/{id}', [UserMenuController::class, 'show'])->name('menu.show');
    Route::get('/buy-now/{id}', [CheckoutController::class, 'buyNow'])->name('checkout.buyNow');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    //keranjang
    Route::post('/cart/add', [KeranjangController::class, 'add'])->name('cart.add');
    Route::get('/cart', [KeranjangController::class, 'index'])->name('cart.index');
    Route::post('/cart/remove/{id}', [KeranjangController::class, 'remove'])->name('cart.remove');

    //checkout
    Route::get('/checkout/{id}', [CheckoutController::class, 'buyNow'])->name('checkout.buyNow');
    Route::post('/checkout/confirm', [CheckoutController::class, 'confirm'])->name('checkout.confirm');

    //order
    Route::get('/order-status', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order-status/{id}', [OrderController::class, 'show'])->name('order.status');
    Route::get('/order/{id}', [OrderController::class, 'show'])
        ->name('order.show');

});


Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])
        ->name('dashboard');



    Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
    Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');
    Route::get('/menu/{menu}/edit', [MenuController::class, 'edit'])->name('menu.edit');
    Route::put('/menu/{menu}', [MenuController::class, 'update'])->name('menu.update');
    Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy');
});

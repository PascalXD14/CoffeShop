<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\MenuController;

/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
| Bisa diakses guest & user login
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| AUTH (GUEST ONLY)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginProcess']);

    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'registerProcess']);
});

/*
|--------------------------------------------------------------------------
| AUTHENTICATED USER
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
| (sementara auth dulu, role nyusul)
*/
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])
        ->name('dashboard');

    // MENU MANAGEMENT
    Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
    Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');
    Route::get('/menu/{menu}/edit', [MenuController::class, 'edit'])->name('menu.edit');
    Route::put('/menu/{menu}', [MenuController::class, 'update'])->name('menu.update');
    Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy');
});

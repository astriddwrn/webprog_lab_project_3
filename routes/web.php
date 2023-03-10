<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('home');
});
Route::get('/category', function () {
    return view('category');
});

Route::get('/all', [ItemsController::class, 'allItem']);
Route::get('/category/{id}', [CategoryController::class, 'index']);
Route::get('/item/{id}', [ItemsController::class, 'index']);
Route::get('/search/', [ItemsController::class, 'search'])->name('search');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/add-to-cart', [CartController::class, 'store']);
    Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.delete');
    Route::delete('/cartAll/{id}', [CartController::class, 'destroyAll'])->name('cart.deleteAll');
    Route::get('/profile', [ProfileController::class, 'index']);

 });

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
});
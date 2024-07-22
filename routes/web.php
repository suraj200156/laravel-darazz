<?php

use Illuminate\Support\Facades\Route;

Route::get('/users');

use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\cartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\AdminDashboardController;


Route::get('/user', [UserController::class, 'index'])->name("user.view");
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/product', [ProductController::class, 'index'])->name("product.view");
Route::get('/review', [ReviewController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/cartItem', [cartItemController::class, 'index']);
Route::get('/order', [OrderController::class, 'index'])->name('order.view');
Route::get('/order/view/{id}', [OrderController::class, 'view'])->name("orders.view");
Route::get("/", [AdminDashboardController::class, 'index']);

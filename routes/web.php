<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\cartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;


Route::get('/user', [UserController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/review', [ReviewController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/cartItem', [cartItemController::class, 'index']);
Route::get('/order', [OrderController::class, 'index']);
Route::get('/orderItem', [OrderItemController::class, 'index']);
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




Route::get("/dashboard", [AdminDashboardController::class, 'index'])->name('dashboard');

Route::get('/user', [UserController::class, 'index'])->name("user.view");
Route::get('/user/create', [UserController::class, 'create'])->name("user.create");
Route::get('/user/login', [UserController::class, 'loginForm'])->name("user.form");
Route::get('/', [UserController::class, 'loginForm'])->name("user.form");
Route::post('/user/login', [UserController::class, 'login'])->name("user.login");
Route::get('/user/logout', [UserController::class, 'logout'])->name("user.logout");

Route::post('/user/store', [UserController::class, 'store'])->name("user.store");

Route::get('/category', [CategoryController::class, 'index'])->name("category.index");
Route::get('/category/create', [CategoryController::class, 'create'])->name("category.create");
Route::post('/category/store', [CategoryController::class, 'store'])->name("category.store");
Route::get('/category/view/{id}', [CategoryController::class, 'view'])->name("category.view");

Route::get('/product', [ProductController::class, 'index'])->name("product.index");
Route::get('/product/create', [ProductController::class, 'create'])->name("product.create");
Route::post('/product/store', [ProductController::class, 'store'])->name("product.store");
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name("product.edit");
Route::post('/product/update', [ProductController::class, 'update'])->name("product.update");
Route::get('/product/delet/{id}', [ProductController::class, 'delete'])->name("product.delete");

Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/order/view/{id}', [OrderController::class, 'view'])->name("orders.view");



Route::get('/review', [ReviewController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/cartItem', [cartItemController::class, 'index']);





Route::get('/test', function () {
    return view('test');
});

<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->resource('categories', CategoryController::class);
Route::middleware('auth:sanctum')->resource('products', ProductController::class);
Route::middleware('auth:sanctum')->resource('orders', OrderController::class);
Route::get('/users/{user}/orders', [OrderController::class, 'userOrders']);

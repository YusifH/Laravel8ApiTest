<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\ProductController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/* Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);
Route::post('products/create', [PassportAuthController::class, 'store']);
Route::get('products', [ProductController::class, 'index']); */
Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);
Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::post('products/create', [ProductController::class, 'store']);
Route::put('products/sil/{id}', [ProductController::class, 'destroy']);
Route::get('products/edit/{id}', [ProductController::class, 'update']);

Route::post('products/like/{id}', [ProductController::class, 'like'])->name('product.post'); 
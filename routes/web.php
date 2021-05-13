<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [ProductController::class, 'index']);


//Route::get('/like', [ProductController::class, 'index'])->name('index');
Route::post('products/like/{id}', [ProductController::class, 'like'])->name('product.post'); 
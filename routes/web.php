<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/test', function() {
//     return view('products.index');
// });

Route::get('products/search', [ProductController::class, 'searchProduct'])->name('products.search');
Route::resource('products', ProductController::class);
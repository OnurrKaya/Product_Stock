<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{id}/stock-report', [ProductController::class, 'stockReport'])->name('products.stock_report');



Route::get('/stocks', [StockController::class, 'index'])->name('stocks.index');
Route::get('/stocks/create', [StockController::class, 'create'])->name('stocks.create');
Route::post('/stocks', [StockController::class, 'store'])->name('stocks.store');
Route::get('/stocks/{id}', [StockController::class, 'show'])->name('stocks.show');
Route::get('/stocks/{id}/edit', [StockController::class, 'edit'])->name('stocks.edit');
Route::put('/stocks/{id}', [StockController::class, 'update'])->name('stocks.update');
Route::delete('/stocks/{id}', [StockController::class, 'destroy'])->name('stocks.destroy');




//   Route::get('/', function () {
 //     return view('welcome');
  // });

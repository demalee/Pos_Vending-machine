<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('_available_coins', function () {
    return view('_available_coins');
});
Route::get('/',  [App\Http\Controllers\UjuziProductController::class, 'index'])->name('welcome');
Route::get('ujuzi_pos',  [App\Http\Controllers\UjuziPosController::class, 'index'])->name('ujuzi_pos');
Route::get('add-coin',  [App\Http\Controllers\UjuziCoinController::class, 'index'])->name('add-coin');
Route::get('add_category',  [App\Http\Controllers\UjuziProductCategoryController::class, 'index'])->name('add_category');
Route::get('_all_ujuzi_products',  [App\Http\Controllers\UjuziProductController::class, 'create'])->name('_all_ujuzi_products');

Route::post('purchase',  [App\Http\Controllers\UjuziPosController::class, 'store']);
Route::post('add/category',  [App\Http\Controllers\UjuziProductCategoryController::class, 'store']);
Route::post('add/product',  [App\Http\Controllers\UjuziProductController::class, 'store']);
Route::post('add/coin',  [App\Http\Controllers\UjuziCoinController::class, 'store']);
Route::patch('update/product/{id}',  [App\Http\Controllers\UjuziProductController::class, 'update'])->name('update/product');
Route::get('checkout/{id}', [App\Http\Controllers\UjuziPosController::class, 'checkout'])->name('checkout');
Route::post('buy/product',[App\Http\Controllers\UjuziPosController::class,'buy'])->name('buy/product');
Route::delete('product_destroy/{id}',[App\Http\Controllers\UjuziProductController::class,'destroy'])->name('product_destroy');
Route::get('update_product/{id}', [App\Http\Controllers\UjuziProductController::class, 'edit'])->name('update_product');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

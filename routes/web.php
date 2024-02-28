<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class, 'index']);

Route::get('/user/{id}/name/{name}',[UserController::class, 'user'])->name('profile');
Route::get('/sales',[SalesController::class, 'sales']);

Route::prefix('products/category')->group(function(){
    Route::get('/', [ProductsController::class, 'index'])->name('index');
    Route::get('/food-beverage', [ProductsController::class, 'food'])->name('food');
    Route::get('/beauty-health', [ProductsController::class, 'beauty'])->name('beauty');
    Route::get('/home-care', [ProductsController::class, 'homeCare'])->name('homeC');
    Route::get('/baby-kid', [ProductsController::class, 'baby'])->name('baby');
});
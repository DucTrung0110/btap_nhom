<?php

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


Route::get('/',[\App\Http\Controllers\Webcontroller::class,'home']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact',[\App\Http\Controllers\Webcontroller::class,'contact']);
Route::get('/dashboard',[\App\Http\Controllers\Webcontroller::class,'dashboard']);
Route::get('/invoice',[\App\Http\Controllers\Webcontroller::class,'invoice']);
Route::get('/shoppingcart',[\App\Http\Controllers\Webcontroller::class,'shoppingcart']);
Route::get('/checkout',[\App\Http\Controllers\Webcontroller::class,'checkout']);
Route::prefix("/admin")->middleware(["auth","admin"])->group(function () {
Route::get("/dashboard",[\App\Http\Controllers\AdminController::class,'dashboard']);
Route::get('/product',[\App\Http\Controllers\AdminController::class,'product']);
Route::get('/productDetail/{product}',[\App\Http\Controllers\AdminController::class,'productDetail']);
Route::get('/productEdit/{product}',[\App\Http\Controllers\AdminController::class,'productEdit']);
Route::get('/productAdd',[\App\Http\Controllers\AdminController::class,'productAdd']);
Route::get('/category',[\App\Http\Controllers\AdminController::class,'category']);
Route::get('/categoryDetail/{brand}',[\App\Http\Controllers\AdminController::class,'categoryDetail']);
Route::get('/order',[\App\Http\Controllers\AdminController::class,'order']);
Route::get('orderDetail/{order}',[\App\Http\Controllers\AdminController::class,'orderDetail']);
Route::get('/categoryAdd',[\App\Http\Controllers\AdminController::class,'categoryAdd']);
Route::get('/categoryEdit/{brand}',[\App\Http\Controllers\AdminController::class,'categoryEdit']);
Route::post('/categoryAdd',[\App\Http\Controllers\AdminController::class,'categorySave']);
Route::get('/categoryDelete/{brand}',[\App\Http\Controllers\AdminController::class,'categoryDelete']);
Route::put('/categoryUpdated/{brand}',[\App\Http\Controllers\AdminController::class,'categoryUpdated']);
Route::post('/productAdd',[\App\Http\Controllers\AdminController::class,'productSave']);
Route::get('/productDelete/{product}',[\App\Http\Controllers\AdminController::class,'productDelete']);
Route::get('/productDetail/{product}',[\App\Http\Controllers\AdminController::class,'productDetail']);
Route::put('/productUpdated/{product}',[\App\Http\Controllers\AdminController::class,'productUpdated']);
});

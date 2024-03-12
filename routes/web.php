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
Route::get("/admin/dashboard",[\App\Http\Controllers\AdminController::class,'dashboard']);
Route::get('/contact',[\App\Http\Controllers\Webcontroller::class,'contact']);
Route::get('/dashboard',[\App\Http\Controllers\Webcontroller::class,'dashboard']);
Route::get('/invoice',[\App\Http\Controllers\Webcontroller::class,'invoice']);
Route::get('/shoppingcart',[\App\Http\Controllers\Webcontroller::class,'shoppingcart']);
Route::get('/checkout',[\App\Http\Controllers\Webcontroller::class,'checkout']);

<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/', [\App\Http\Controllers\PublicController::class, 'index']);
Route::get('/contact', [\App\Http\Controllers\PublicController::class, 'contact'])->name('contact');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\PublicController::class, 'about'])->name('about');
Route::get('/services', [App\Http\Controllers\PublicController::class, 'services'])->name('service');



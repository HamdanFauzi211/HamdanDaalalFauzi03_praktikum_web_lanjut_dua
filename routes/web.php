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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/todayspecial', [App\Http\Controllers\TodaySpecialController::class, 'todayspecial']);
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'menu']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact']);
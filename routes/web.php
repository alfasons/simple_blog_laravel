<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;



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

Route::get('/', [HomeController::class,'home'])->name('home');

Route::get('/about', [HomeController::class,'about'])->name('about');


Route::resource('posts', PostController::class)->except('index')->middleware('auth');

Route::match(['get','post'],'/auth/register', [AuthController::class, 'register'])->name('register')->middleware('guest');;
Route::match(['get', 'post'], '/auth/login', [AuthController::class, 'login'])->name('login')->middleware('guest');;
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');;

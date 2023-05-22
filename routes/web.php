<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\CategoryController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/posts', PostController::class);
Route::resource('/categories', CategoryController::class);

// Rutas para el historial de registros
Route::get('/posts/history', [PostController::class, 'history']);
Route::get('/categories/history', [CategoryController::class, 'history']);

Route::get('/', function () {
    return view('welcome');
});


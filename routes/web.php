<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/message', function(){
    return "hello, Im using the laravel framework";
});

/* Ruta con parametro no opcional */
Route::get('/message/{name}', function($name){
    return "Hello, I'm $name";
});

/* Ruta con parametro opcional */
Route::get('/message-v2/guest/{name?}', function($name = "Guest not identificated"){
    return "Hello, I'm $name";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

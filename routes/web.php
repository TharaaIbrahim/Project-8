<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;




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

Route::get('/', function () {
    return view('rooms/index');
});

Route::get('/about', function () {
    return view('rooms/about-us');
});
Route::get('/contact', function () {
    return view('rooms/contact');
});


Auth::routes();
<<<<<<< HEAD
//Tharaa
//test
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// rahaf
=======
Route::resource('/rooms',RoomController::class);
Route::resource('/admin',AdminController::class);
Route::resource('/user',UserController::class);
Route::post('/rooms/{room}', [RoomController::class, 'book'])->name('rooms.book');










>>>>>>> 90955392bb0a34bfc4b8a288f76acdcd69c92267

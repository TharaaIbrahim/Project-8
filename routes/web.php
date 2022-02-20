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

// Route::get('/', function () {
//     return view('rooms/index');
// });

Route::get('/about', function () {
    return view('rooms/about-us');
});
Route::get('/contact', function () {
    return view('rooms/contact');
});

Auth::routes();
Route::resource('/rooms',RoomController::class);

Route::post('/rooms/{room}', [RoomController::class, 'book'])->name('rooms.book');


Route::get('/', [RoomController::class, 'bestprice'])->name('rooms.bestprice');


Route::group(['prefix'=>'/admin','middleware'=>['auth','admin']],function(){
    Route::resource('/admin',AdminController::class);
    Route::resource('/user',UserController::class);
    Route::get('/', [AdminController::class, 'show'])->name('admins.show');
});

Route::group(['middleware'=>['auth']],function(){
    Route::get('/userProfile', [UserController::class, 'userProfile'])->name('auth.userProfile');
Route::put('/userProfile/{user}', [UserController::class, 'updateUserProfile'])->name('user.updateUserProfile');
});








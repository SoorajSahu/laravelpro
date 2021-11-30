<?php

use App\Http\Controllers\Auth\UserController;
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

Route::get('/', function () {
    return view('pro.index');
});

Route::get('/signup', function () {
    return view('pro.signup');
})->name('signup');
Route::get('/signin', function () {
    return view('pro.signin');
});

Route::get('/dashboard', function () {
    return view('pro.dashboard');
})->name('dashboard');

Route::get('/logout', [UserController::class,'logout'])->name('logout');
Route::get('/allusers', [UserController::class,'showusers'])->name('showusers');
Route::post('/signup', [UserController::class,'signup'])->name('register');
Route::post('/signin', [UserController::class,'signin'])->name('signin');
Route::post('/register', [UserController::class,'register'])->name('register_new');

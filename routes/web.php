<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\listBukuController;

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
    return view('landing-page');
});

// login
Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/login/login-post', [authController::class, 'loginAuth'])->name('login-post');
Route::get('/register', [authController::class, 'register'])->name('register');
Route::post('/register/register-post', [authController::class, 'registerStore'])->name('register-post');

// konten
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/list-buku', [listBukuController::class, 'index'])->name('listbuku');

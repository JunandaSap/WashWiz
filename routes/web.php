<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\historyController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'store']);
Route::get('/signup', [SignupController::class, 'showRegistrationForm']);
Route::post('/signup', [SignupController::class, 'register'])->name('signup');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Rute untuk halaman beranda
Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');
Route::get('/outlet', function () {
    return view('outlet');
});
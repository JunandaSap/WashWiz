<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaundryController;

Route::get('/', function () {
    return redirect('/login');
})->middleware('guest');

Route::get('/home', [LaundryController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/signup', [SignupController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'register']);

Route::get('/pesanan', function () {
    return view('pesanan');
})->middleware('auth');


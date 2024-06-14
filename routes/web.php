<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\OrderController;

Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
Route::post('/orders/{id}/pay', [OrderController::class, 'pay'])->name('orders.pay');
Route::get('/history', [OrderController::class, 'history'])->name('orders.history');


Route::get('/', function () {
    return redirect('/login');
})->middleware('auth');

Route::get('/home', [LaundryController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/signup', [SignupController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'register']);

Route::get('/pesanan', function () {
    return view('pesanan');
})->middleware('auth');


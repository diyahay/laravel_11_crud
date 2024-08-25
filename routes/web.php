<?php
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginRegisterController;


Route::get('/', function () {
    return view('home');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/home', 'home')->name('home');
    Route::post('/logout', 'logout')->name('logout');
});

<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('test', function () {
    return view('test');
});


Route::get('home', function () {
    return view('home');
});

Route::get('/header', function () {
    return view('components.header');
});

Route::get('product-list', function () {
    return view('product-list');
});

Route::get('new-item', function () {
    return view('new-item');
});

Route::get('product-overview', function () {
    return view('product-overview');
});

Route::get('product-transaction', function () {
    return view('product-transaction');
});



Route::post('/', [AuthController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {


});


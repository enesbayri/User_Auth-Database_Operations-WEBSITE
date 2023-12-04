<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UyeController;
use App\Http\Controllers\GirisController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('home');
});
Route::resource('giris',GirisController::class);
Route::resource('uyeler',UyeController::class);
Route::resource('adminler',AdminController::class);



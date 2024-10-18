<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class, 'index' ])->name('home');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'auth')->name('login.auth');
    Route::get('/create', 'create')->name('login.create');
    Route::post('/create', 'store')->name('login.store');
    
});

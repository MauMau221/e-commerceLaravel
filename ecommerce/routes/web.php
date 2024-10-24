<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class, 'index' ])->name('index.home');



Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login.index'); //tela de login
    Route::get('/create', 'create')->name('login.create'); //Tela para Criar conta
    Route::post('/create', 'store')->name('login.store'); //Registra os dados no bd
    Route::get('/delete/{id}', 'destroy')->name('login.destroy'); 
});

Route::controller(AuthController::class)->group(function() {
    Route::post('/login', 'auth')->name('login.auth');//Verif dados recebido e faz o login
    Route::post('/login', 'isAuth')->name('login.isAuth');//Você está logado?
});
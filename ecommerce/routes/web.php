<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class, 'index' ])->name('index.home');

Route::prefix('info')->group(function() {
    route::view('/contato', 'info.contato')->name('info.contato');
    route::view('/privacidade', 'info.privacidade')->name('info.privacidade');
    route::view('/quemsomos', 'info.quemsomos')->name('info.quemsomos');
    route::view('/termos', 'info.termos')->name('info.termos');
    route::view('/trocas', 'info.trocas')->name('info.trocas');
});



Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login.index'); //tela de login
    Route::get('/create', 'create')->name('login.create'); //Tela para Criar conta
    Route::post('/create', 'store')->name('login.store'); //Registra os dados no bd
    Route::post('/logout', 'logout')->name('login.logout');
});

Route::controller(AuthController::class)->group(function() {
    Route::post('/login', 'auth')->name('login.auth');//Verif dados recebido e faz o login
    Route::post('/login', 'isAuth')->name('login.isAuth');//Você está logado?
    
});
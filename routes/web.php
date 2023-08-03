<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('home');

    Route::get('/novousuario', [UserController::class, 'newuser']);
    
    Route::post('/novousuario', [UserController::class, 'incluirusuario']);
    
    Route::delete('/usuario/{id}', [UserController::class, 'deleteusuario']);
});





Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

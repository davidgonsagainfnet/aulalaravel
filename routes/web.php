<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('/novousuario', [UserController::class, 'newuser']);

Route::post('/novousuario', [UserController::class, 'incluirusuario']);
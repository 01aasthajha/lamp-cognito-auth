<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CognitoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [CognitoController::class, 'login'])->name('login');

Route::get('/auth/callback', [CognitoController::class, 'callback'])->name('callback');

Route::get('/dashboard', [CognitoController::class, 'dashboard'])->name('dashboard');

Route::get('/logout', [CognitoController::class, 'logout'])->name('logout');
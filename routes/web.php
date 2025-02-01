<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('/login',[UserController::class,'login']);
Route::get('/dashboard', function () {
    return view('dashboard');
});
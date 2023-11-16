<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::get('login', 'login');
    Route::post('register', 'register');
    Route::get('users', 'users');
    Route::get('absensi', 'absensi');
    Route::post('absensi', 'absensi');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/login-frontend', [App\Http\Controllers\Auth\FrontendAuthController::class, 'index']);
Route::post('/login-frontend', [App\Http\Controllers\Auth\FrontendAuthController::class, 'store'])->name('post.login.frontend');
Route::post('/logout-frontend', [App\Http\Controllers\Auth\FrontendAuthController::class, 'destroy']);
Route::get('/frontend/home', [App\Http\Controllers\HomeController::class, 'frontendHome']);
Route::get('/register/frontend', [App\Http\Controllers\Auth\FrontendAuthController::class, 'registerFrontend']);
Route::post('/register/frontend', [App\Http\Controllers\Auth\FrontendAuthController::class, 'createUserFrontend']);

Route::get('/login-backend', [App\Http\Controllers\Auth\BackendAuthController::class, 'index']);
Route::post('/login-backend', [App\Http\Controllers\Auth\BackendAuthController::class, 'store'])->name('post.login.backend');
Route::post('/logout-backend', [App\Http\Controllers\Auth\FrontendAuthController::class, 'destroy']);
Route::get('/backend/home', [App\Http\Controllers\HomeController::class, 'backendHome']);

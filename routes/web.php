<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AngkatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

Route::get('auth',[AuthController::class, 'index'])->name('auth.index');
Route::prefix('auth')->name('auth.')->group(function(){
    Route::post('login',[AuthController::class, 'do_login'])->name('login');
    Route::post('register',[AuthController::class, 'do_register'])->name('register');
});
Route::middleware(['auth:web'])->group(function(){
    Route::get('logout',[AuthController::class, 'do_logout'])->name('auth.logout');
    Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');
    Route::resource('alumni', AlumniController::class);
    Route::resource('angkatan', AngkatanController::class);
});
Route::get('/',[HomeController::class,'index'])->name('home');

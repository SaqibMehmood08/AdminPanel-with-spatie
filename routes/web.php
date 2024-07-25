<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;




Route::middleware('guest')->group(function () {
Route::redirect('/','login');
Route::get('/login',[LoginController::class,'LoginView'])->name('login');
Route::post('/login',[LoginController::class,'login']);

});
Route::middleware('auth')->group(function () {
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    Route::get('/dashboard',[dashboardController::class,'index'])->name('index');

    // Route::get('/form',[dashboardController::class,'form'])->name('form');
});

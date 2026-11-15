<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\OrderController::class, 'index'])->name('home');
Route::resource('dish', App\Http\Controllers\DishesController::class);

Auth::routes([
    'register' => false, // Disable registration route
    'reset' => false, // Disable password reset route
    'verify' => false, // Disable email verification route
    'confirm' => false, // Disable password confirmation route
]);

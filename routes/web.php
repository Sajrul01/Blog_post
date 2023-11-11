<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'show_send'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'show_Send'])->name('dashboard');

    Route::get('/send', [SendController::class, 'index'])->name('send.index');
    Route::post('/send', [SendController::class, 'create'])->name('send.create');
   
    Route::get('/send/edit/{id}', [SendController::class, 'edit'])->name('send.edit');
    Route::PUT('/send/edit/{id}', [SendController::class, 'update'])->name('send.update');
    Route::get('/send/delete/{id}', [SendController::class, 'destroy'])->name('send.destroy');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

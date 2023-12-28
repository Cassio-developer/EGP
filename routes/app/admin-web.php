<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::namespace('admin')->prefix('admin')->group(function () {
    
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');

    Route::post('/auth', [AdminController::class, 'auth'])->name('admin.auth');
   
    Route::get('/usuarios', [AdminController::class, 'users'])->name('admin.users');

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/create', [AdminController::class, 'adminCreate'])->name('admin.create')->middleware('admin.access');

});
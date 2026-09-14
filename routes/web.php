<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware(['auth', 'checkAdmin'])
    ->name('admin.index');

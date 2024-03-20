<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('web.home');
Route::get('/contact', [UserController::class, 'contact'])->name('web.contact');
Route::get('/about-us', [UserController::class, 'aboutUs'])->name('web.about-us');
Route::get('/blog', [UserController::class, 'blog'])->name('web.blog');
Route::post('/usuario', [UserController::class, 'store'])->name('web.store');

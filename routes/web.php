<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('web.home');
Route::get('/contact', [UserController::class, 'contact'])->name('web.contact');
Route::get('/about-us', [UserController::class, 'aboutUs'])->name('web.about-us');
Route::get('/blog', [UserController::class, 'blog'])->name('web.blog');
Route::post('/usuario', [UserController::class, 'store'])->name('web.store');

Route::controller(SiteController::class)->group(function (){
    Route::get('/', 'index')->name('site.home');
    Route::get('/quem-somos', 'aboutUs')->name('site.about-us');
    Route::get('/servicos', 'services')->name('site.services');
    Route::get('/estudo-de-caso', 'cases')->name('site.case');
    Route::get('/blog', 'blog')->name('site.blog');
    Route::get('/contato', 'contact')->name('site.contact');
    Route::post('/contato/formulário', 'store')->name('site.store');
});

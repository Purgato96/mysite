<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::controller(SiteController::class)->group(function (){
    Route::get('/', 'index')->name('site.home');
    Route::get('/quem-somos', 'aboutUs')->name('site.about-us');
    Route::get('/servicos', 'services')->name('site.services');
    Route::get('/estudo-de-caso', 'cases')->name('site.case');
    Route::get('/blog', 'blog')->name('site.blog');
    Route::get('/contato', 'contact')->name('site.contact');
});

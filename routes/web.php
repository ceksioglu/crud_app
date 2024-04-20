<?php

use App\Http\Controllers\PostC;
use App\Http\Controllers\UserC;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('anasayfa');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Login Bölümü

Route::post('/kayit', [UserC::class, 'kayit']);
Route::post('/cikis',[UserC::class, 'cikis']);
Route::post('/giris',[UserC::class, 'giris']);

//Gönderi Bölümü

Route::post('/create-post',[PostC::class, 'createPost']);
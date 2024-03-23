<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserC;

Route::get('/', function () {
    return view('anasayfa');
});

Route::post('/kayit', [UserC::class, 'kayit']);
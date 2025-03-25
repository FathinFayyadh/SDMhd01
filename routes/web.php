<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[homecontroller::class,'home'])->name('home');
Route::get('/tentang-kami', [homecontroller::class,'aboute'])->name('aboute');
Route::get('/fasilitas', [homecontroller::class,'fasilitas'])->name('fasilitas');

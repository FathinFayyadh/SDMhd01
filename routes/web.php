<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

Route::get('/', function () {
    return view('welcome');
});

// home
Route::get('/',[homecontroller::class,'home'])->name('home');
Route::get('/tentang-kami', [homecontroller::class,'aboute'])->name('aboute');
Route::get('/fasilitas', [homecontroller::class,'fasilitas'])->name('fasilitas');
Route::get('/kontak-kami', [homecontroller::class,'contact'])->name('contact');
// end home

// auth
Route::get('/login', [homecontroller::class,'login'])->name('login');
Route::get('/register', [homecontroller::class,'register'])->name('register');
// end auth

// admin
Route::get('/dashboard', [AdminController::class,'admin'])->name('admin');

// end admin
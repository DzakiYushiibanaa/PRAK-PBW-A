<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::resource('users', UserController::class)->middleware('auth');

Route::get('login', [LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('logout', LogoutController::class)->name('logout')->middleware('auth');


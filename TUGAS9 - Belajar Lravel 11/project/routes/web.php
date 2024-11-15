<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get( uri: '/', action: [HomeController::class, 'index']);
Route::get( uri: '/about', action: [AboutController::class, 'index']);
Route::get( uri: '/contact', action: [ContactController::class, 'index']);
Route::get( uri: '/gallery', action: [GalleryController::class, 'index']);
Route::get( uri: '/users', action: [UserController::class, 'index']);
Route::get( uri: '/users/create', action: [UserController::class, 'create']);
Route::post( uri: '/users', action: [UserController::class, 'store']);
Route::get( uri: '/users/{user:id}', action: [UserController::class, 'show']);







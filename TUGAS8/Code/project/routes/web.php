<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get( uri: '/', action: [HomeController::class, 'index']);
Route::get( uri: '/about', action: [AboutController::class, 'index']);
Route::get( uri: '/contact', action: [ContactController::class, 'index']);
Route::get( uri: '/gallery', action: [GalleryController::class, 'index']);


Route::get(uri: 'users', action: function (){

    $users = [

        ['id' => 1, 'name' => 'John Doe', 'email' => 'dzaki@gmail.com'],

        ['id' => 2, 'name' => 'John Doe', 'email' => 'dzaki@gmail.com'],

    ];

    return view( view: 'users.index', data: compact(var_name: 'users'));
});
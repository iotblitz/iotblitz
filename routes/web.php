<?php

use App\Http\Controllers\public\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',[Home::class, 'home'])->name('home');

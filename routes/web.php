<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('start');
});

Route::get('/contact', function () {
   return view('contact');
});

Route::get('/admin', function () {
    return view('adminpanel/dashboard');
});

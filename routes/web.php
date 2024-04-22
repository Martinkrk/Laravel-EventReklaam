<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('start');
});

Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

Route::get('/login', function () {
    return view('login');
});

Route::get('/contact', function () {
   return view('contact');
});

//TICKETS
Route::get('/tickets', [TicketController::class, 'index']);
Route::get('/addticket', [TicketController::class, 'create']);
Route::post('/addticket', [TicketController::class, 'store']);
Route::get('/editticket', [TicketController::class, 'edit']);
Route::post('/editticket', [TicketController::class, 'update']);
Route::delete('/editticket', [TicketController::class, 'destroy']);

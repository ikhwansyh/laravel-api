<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', function () {
    return view('login');
});
Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/contacts', function () {
        return view('contact');
    });
});

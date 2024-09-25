<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('root');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/contacts/{id}', [ContactController::class, 'view']);

Route::get('/api', function () {
    return [123, 'test', [123, 555]];
});

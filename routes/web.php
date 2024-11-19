<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('root');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/contacts/{id}', [ContactController::class, 'view']);

Route::get('/jobs', [JobsController::class, 'index']);
Route::post('/jobs', [JobsController::class, 'store']);
Route::get('/jobs/create', [JobsController::class, 'create']);
Route::get('/jobs/{id}', [JobsController::class, 'view']);

Route::get('/api', function () {
    return [123, 'test', [123, 555]];
});

<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// route per gli esterni


Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/business', function () {
    return view('business');
})->name("business");

Route::post('/contacts',[ContactController::class, 'store']);

require __DIR__.'/auth.php';
require __DIR__.'/user.php';
require __DIR__.'/games.php';

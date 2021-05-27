<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

// route che accedono agli utenti

Route::get('/dashboard',[UsersController::class, 'edit'] )->middleware(['auth'])->name('dashboard');

Route::get('/users/{id}',[UsersController::class, 'show'] )->middleware(['auth']);

Route::get('/users',[UsersController::class, 'index'] )->middleware(['auth'])->name("users");

Route::get('/dashboard', [UsersController::class,'dashboard'])->middleware(['auth'])->name("dashboard");


?>
<?php

use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;

// route dei giochi

Route::get('/games',[GamesController::class, 'index'] )->middleware(['auth'])->name('games');

Route::get('/games/{id}',[GamesController::class, 'show'] )->whereNumber("id")->middleware(['auth']);

Route::get('/games/{id}/edit',[GamesController::class, 'edit'] )->middleware(['auth']);

Route::get('/games/create',[GamesController::class, 'create'] )->middleware(['auth'])->name("create");

Route::post('/games',[GamesController::class, 'store'] )->middleware(['auth']);

Route::patch('/games/{id}',[GamesController::class, 'update'] )->middleware(['auth']);

Route::delete('/games/{id}',[GamesController::class, 'delete'] )->middleware(['auth']);

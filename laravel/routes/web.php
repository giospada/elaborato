<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

//games

Route::get('/games',[GamesController::class, 'index'] )->middleware(['auth'])->name('games');

Route::get('/games/{id}',[GamesController::class, 'show'] )->whereNumber("id")->middleware(['auth']);

Route::get('/games/{id}/edit',[GamesController::class, 'edit'] )->middleware(['auth']);

Route::get('/games/create',[GamesController::class, 'create'] )->middleware(['auth'])->name("create");

Route::post('/games/{id}',[GamesController::class, 'store'] )->middleware(['auth']);

Route::patch('/games/{id}',[GamesController::class, 'update'] )->middleware(['auth']);

Route::delete('/games/{id}',[GamesController::class, 'delete'] )->middleware(['auth']);


//user

Route::get('/dashboard',[UsersController::class, 'edit'] )->middleware(['auth'])->name('dashboard');


Route::get('/users/{id}',[UsersController::class, 'show'] )->middleware(['auth']);

Route::get('/users',[UsersController::class, 'index'] )->middleware(['auth'])->name("users");

Route::get('/dashboard', [UsersController::class,'dashboard'])->middleware(['auth'])->name("dashboard");

Route::post('/contacts',[ContactController::class, 'store']);

require __DIR__.'/auth.php';

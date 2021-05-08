<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\User;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {
        $games=Games::all();
        return view('games.index',["games"=>$games]);//compact($games));
    }

}

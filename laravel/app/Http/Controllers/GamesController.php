<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {
        $games=Games::all();
        
        return view('games.index',["games"=>$games]);//compact($games));
    }

}

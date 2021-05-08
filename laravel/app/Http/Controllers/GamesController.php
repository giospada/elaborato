<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\User;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {
        $games=Games::paginate(8);
        return view('games.index',["games"=>$games]);//compact($games));
    }
    public function show($id)
    {
        $game=Games::find($id);
        if($game==null)
            return redirect('401');
        return view('games.show',["game"=>$game]);//compact($games));
    }

}

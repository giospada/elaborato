<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GamesController extends Controller
{
    public function index()
    {
        $games = Games::paginate(6);
        return view('games.index', ["games" => $games]); //compact($games));
    }

    public function create()
    {
        return view('games.create'); //compact($games));
    }

    public function show($id)
    {
        $game = Games::find($id);
        if ($game == null)
            return redirect('401');
        $user = $game->user()->get()[0];
        return view('games.show', ["game" => $game, "user" => $user]); //compact($games));
    }

    public function edit(Request $request,$id)
    {
        $game = Games::find($id);
        if ($game == null or $request->user()->cannot('update',$game))
            return redirect('401');
        return view('games.edit', ["game" => $game]); //compact($games));

    }

    public function update()
    {
    }
}

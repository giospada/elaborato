<?php

namespace App\Http\Controllers;

use App\Models\GameImages;
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

    public function create(Request $request)
    {

        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'titolo' => 'required|string',
                'prezzo' => 'required|numeric',
                'descrizione' => 'required|string',
                'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
                'img.*' => 'image|mimes:jpg,png,jpeg,gif,svg',
            ]);
            $path = explode("/", $validatedData['logo']->store('public/games'))[2];

            $game = Games::create([
                'user_id' => Auth::user()->id,
                'titolo' => $validatedData['titolo'],
                'descrizione' => $validatedData['descrizione'],
                'prezzo' => $validatedData['prezzo'],
                'logo' => $path,
            ]);
            dump($validatedData);
            if (array_key_exists("img",$validatedData)) {
                dump($validatedData);
                foreach ($validatedData['img'] as $gameimg) {
                    dump($gameimg);
                    $pathtmp = explode("/", $gameimg->store('public/gamesimgs'))[2];
                    GameImages::create([
                        'game_id'=>$game->id,
                        'path'=>$pathtmp
                    ]);
                }
            }
            return redirect('/games/' . ($game->id));
        } else
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

    public function edit(Request $request, $id)
    {
        $game = Games::find($id);
        if ($game == null or $request->user()->cannot('update', $game))
            return redirect('401');
        return view('games.edit', ["game" => $game]); //compact($games));

    }

    public function update()
    {
    }
}

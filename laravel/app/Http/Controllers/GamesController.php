<?php

namespace App\Http\Controllers;

use App\Models\GameImages;
use App\Models\Games;
use App\Models\User;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class GamesController extends Controller
{
    public function index()
    {
        $games = Games::paginate(6);
        return view('games.index', ["games" => $games]); //compact($games));
    }

    public function create(Request $request)
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


    public function edit(Request $request, $id)
    {
        $game = Games::find($id);
        if ($game == null or $request->user()->cannot('update', $game))
            return redirect('401');
        return view('games.edit', ["game" => $game]); //compact($games));

    }

    public function store(Request $request)
    {
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
        if (array_key_exists("img", $validatedData)) {
            foreach ($validatedData['img'] as $gameimg) {
                $pathtmp = explode("/", $gameimg->store('public/gamesimgs'))[2];
                GameImages::create([
                    'game_id' => $game->id,
                    'path' => $pathtmp
                ]);
            }
        }
        return redirect('/games/' . ($game->id));
    }

    public function update(Request $request, $id)
    {
        $game = Games::find($id);
        if ($game == null or $request->user()->cannot('update', $game)) {
            return redirect('401');
        }
        $validatedData = $request->validate([
            'titolo' => 'nullable|string',
            'prezzo' => 'nullable|numeric',
            'descrizione' => 'nullable|string',
        ]);
        var_dump($validatedData);
        if (array_key_exists("titolo", $validatedData) and $validatedData["titolo"] != null)
            $game->titolo = $validatedData["titolo"];
        if (array_key_exists("prezzo", $validatedData) and $validatedData["prezzo"] != null)
            $game->prezzo = $validatedData["prezzo"];
        if (array_key_exists("descrizione", $validatedData) and $validatedData["descrizione"] != null)
            $game->descrizione = $validatedData["descrizione"];

        $game->save();
        return redirect('/games/' . ($game->id));
    }

    public function delete(Request $request, $id)
    {
        $game = Games::find($id);
        if ($game == null or $request->user()->cannot('delete', $game)) {
            return redirect('401');
        }

        $game->delete();
        return redirect('games');
    }
}

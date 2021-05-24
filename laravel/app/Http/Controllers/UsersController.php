<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function dashboard()
    {        
        $user= Auth::user();
        $games = $user->games()->paginate(8);
        return view('dashboard', ["games" => $games, "user" => $user]);
       
    }
    public function show($id)
    {

        $user = User::find($id);
        if ($user == null)
            return redirect('401');

        $games = $user->games()->paginate(8);
        return view('users.show', ["games" => $games, "user" => $user]);
    }


    public function index()
    {
        $users = User::paginate(12);

        return view('users.index',["users"=>$users]);
    }
}

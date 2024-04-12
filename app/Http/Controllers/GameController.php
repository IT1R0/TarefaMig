<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function jogos()
    {
        $games = Game::with('genre')->get();
        return view('videogame', compact('games'));
    }
}

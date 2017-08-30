<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Game;
use App\User;

class DashboardController extends Controller
{
    public function index() {
        $teams = Team::all();
        $games = Game::all();
        $players = User::all();

        return view('dashboard', [ 
            'teams' => $teams,
            'games' => $games,
            'players' => $players 
        ]);
    }
}

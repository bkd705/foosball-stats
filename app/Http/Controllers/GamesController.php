<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Game;

class GamesController extends Controller
{
    public function index() {
        return view('games.index', [ 'games' => Game::all() ]);
    }

    public function show($id) {
        return view('games.show', [ 'game' => Game::findOrFail($id) ]);
    }

    public function create() {
        return view('games.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'team_one_id' => 'required',
            'team_two_id' => 'required'
        ]);

        if($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

        $game = new Game;
        $game->team_one_id = $request->team_one_id;
        $game->team_two_id = $request->team_two_id;
        $game->save();

        return redirect('/games');
    }
}

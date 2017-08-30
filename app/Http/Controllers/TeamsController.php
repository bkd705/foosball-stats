<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Team;

class TeamsController extends Controller
{
    public function index() {
        return view('teams.index', [ 'teams' => Team::all() ]);
    }

    public function show($id) {
        return view('teams.show', [ 'team' => Team::findOrFail($id) ]);
    }

    public function create() {
        return view('teams.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'player_one' => 'required',
            'player_two' => 'required'            
        ]);

        if($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

        $team = new Team;
        $team->player_one = $request->player_one;
        $team->player_two = $request->player_two;
        $team->save();
        return redirect('teams');
    }
}

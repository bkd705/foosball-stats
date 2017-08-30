@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Teams</div>

                <div class="panel-body">
                    @if ($teams)
                      @foreach($teams as $team)
                        <div class="alert alert-success">
                        <strong>id:</strong> {{ $team->id }} <br />
                        <strong>player one:</strong> {{ $team->player_one }} <br />
                        <strong>player two:</strong> {{ $team->player_two }}
                        </div>
                      @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Games</div>

                <div class="panel-body">
                    @if ($games)
                      @foreach($games as $game)
                        <div class="alert alert-success">
                            <strong>id:</strong> {{ $game->id }} <br />
                            <strong>team one:</strong> {{ $game->team_one_id }} <br />
                            <strong>team two:</strong> {{ $game->team_two_id }} <br />
                            <strong>team one goals:</strong> {{ $game->team_one_goals }} <br />
                            <strong>team two goals:</strong> {{ $game->team_two_goals }} <br />                            
                            <strong>status:</strong> {{ $game->status }}                       
                        </div>
                      @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Players</div>

                <div class="panel-body">
                    @if ($players)
                      @foreach($players as $player)
                        <div class="alert alert-success">
                            {{ $player->name }}
                        </div>
                      @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

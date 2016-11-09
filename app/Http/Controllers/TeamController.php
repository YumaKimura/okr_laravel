<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Team;

class TeamController extends Controller
{
    public function show(int $id)
    {
        $team = Team::with('individuals')->findOrFail($id);
        $individuals = $team->individuals;

        return view('team.show')->with(compact('team'));
    }
}
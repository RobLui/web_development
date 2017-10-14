<?php

namespace App\Http\Controllers;

use App\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function view;

class CompetitionController extends Controller
{
    public function index(){
        $competition = Competition::find(1);
        return view('Competition.index.show')
            ->withCompetition($competition)
            ;
    }

    public function create(Request $req){
        if ($req->isMethod('POST'))
        {
            $comp = new Competition();
            $comp->explanation = $req->explanation;
            $comp->prizes = $req->prizes;
            $comp->previous_participants = $req->previous_participants;
            $comp->save();
            Session::flash('success','Wedstrijd toegevoegd');
        }
        return view('Competition.index.create')
            ;

    }

    public function edit(Request $req){
        $comp = Competition::find(1);
        if (!$comp)
        {
            return view('Competition.index.show')->withCompetition($comp);
        }
        if ($req->isMethod("POST"))
        {
            $comp->explanation = $req->explanation;
            $comp->prizes = $req->prizes;
            $comp->previous_participants = $req->previous_participants;
            $comp->save();
        }
        return view('Competition.index.edit')
            ->withCompetition($comp)
            ;
    }
}

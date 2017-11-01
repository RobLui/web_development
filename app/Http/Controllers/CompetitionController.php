<?php

namespace App\Http\Controllers;

use App\Competition;
use App\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function view;

class CompetitionController extends Controller
{
    public function index(){

        if (Period::all()) {
            $winners = Period::whereNotNull('winner')->get();
        }
        $competition = Competition::find(1);

        return view('Competition.index.show')
            ->withCompetition($competition)
            ->withWinners($winners)
            ;
    }

    public function create(Request $req){

        if ($req->isMethod('POST'))
        {
            $validator = $this->validate($req, [
                'explanation'               => 'required|max:450|string',
                'prizes'                    => 'required|max:255',
            ]);
            if ($validator)
            {
                $comp = new Competition();
                $comp->explanation = $req->explanation;
                $comp->prizes = $req->prizes;
                $comp->save();
                Session::flash('success','Wedstrijd toegevoegd');
            }
        }
        return view('Competition.index.create')
            ;

    }

    public function edit(Request $req){

        if (Period::all()) {
            $winners = Period::whereNotNull('winner')->get();
        }
        $comp = Competition::find(1);
        $view = view('Competition.index.edit');
        if (!$comp)
        {
            $view = view('Competition.index.show');
        }
        if ($req->isMethod("POST"))
        {
            $validator = $this->validate($req, [
                'explanation'               => 'required|max:450|string',
                'prizes'                    => 'required|max:255',
            ]);
            if($validator){
                $comp->explanation = $req->explanation;
                $comp->prizes = $req->prizes;
                $comp->save();
            }

            $view = view('Competition.index.show');
        }
        return $view
            ->withCompetition($comp)
            ->withWinners($winners)
            ;
    }

}

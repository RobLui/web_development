<?php

namespace App\Http\Controllers;

use App\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index(){
//        $competition = Competition::all();
        return view('Competition/index/show')
//            ->withCompetition($competition)
            ;
    }

    public function create(){
        return view('Competition/index/create');
    }

    public function edit(Request $req){
        return view('Competition/index/edit');
    }
}

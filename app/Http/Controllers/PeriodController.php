<?php

namespace App\Http\Controllers;

use App\Period;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PeriodController extends Controller
{
    public function create(Request $req){

        $validator = $this->validate($req, [
            'startDate'    => 'required|max:255',
            'endDate'      => 'required|max:255',
        ]);

        if ($validator)
        {
            $period = new Period();
            $period->startDate = DateTime::dateTime($req->startDate);
            $period->endDate = DateTime::dateTime($req->endDate);
            $period->competition_id = $req->competition_id;
            $period->prize = $req->prize;
            $period->save();
            Session::flash('success','Periode toegevoegd');
        }
        return view('config');
    }
}

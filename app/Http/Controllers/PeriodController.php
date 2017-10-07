<?php

namespace App\Http\Controllers;

use App\Period;
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
            $period->startDate = $req->startDate;
            $period->endDate = $req->endDate;
            $period->save();
            Session::flash('success','Periode toegevoegd');
        }
        return view('config.index');
    }
}

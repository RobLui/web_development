<?php

namespace App\Http\Controllers;

use App\Period;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function redirect;
use function view;

class PeriodController extends Controller
{
    public function create(Request $req){

        $validator = $this->validate($req, [
            'startDate'         => 'required|max:255|date',
            'endDate'           => 'required|max:255',
            'competition_id'    => 'required|integer',
            'prize'             => 'required|max:255',
        ]);

        if ($validator)
        {
            $period = new Period();
            $period->startDate = date('Y-m-d', strtotime($req->startDate));
            $period->endDate = date('Y-m-d', strtotime($req->endDate));
            $period->competition_id = $req->competition_id;
            $period->prize = $req->prize;
            $period->save();
            Session::flash('success','Periode toegevoegd');
        }
        return redirect()->back();
    }
    public function edit(Request $req, $id){

        if ($req->isMethod("GET"))
        {
            $period = Period::find($id);
            return view('Periods.show')
                ->withPeriod($period)
                ;
            ;
        }
        if ($req->isMethod("POST"))
        {
            $period = Period::findOrFail($id);
            if ($period)
            {
                $period->startDate = date('Y-m-d', strtotime($req->startDate));
                $period->endDate = date('Y-m-d', strtotime($req->endDate));
                $period->competition_id = $req->competition_id;
                $period->prize = $req->prize;
                $period->save();
                Session::flash('success','Periode updated');
            }
            return redirect()->back();
        }
    }
}

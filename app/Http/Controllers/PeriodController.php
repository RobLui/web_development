<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PeriodController extends Controller
{
    public function create(){
        Session::flash('success','Periode toegevoegd');
        return view('config.index');
    }
}

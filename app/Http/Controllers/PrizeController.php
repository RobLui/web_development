<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrizeController extends Controller
{
    public function index(){
        return view('Prizes.show');
    }

    public function create(){
        return view('Prizes.create');
    }

    public function edit(){
        return view('Prizes.edit');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        return view('Competition/questions/show');
    }

    public function create(){
        return view('Competition/questions/create');
    }

    public function edit(){
        return view('Competition/questions/edit');
    }
}

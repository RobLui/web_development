<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::where('active', 0)->first();
        return view('Competition/questions/show')->withQuestions($questions);
    }

    public function create(){
        return view('Competition/questions/create');
    }

    public function edit(){
        return view('Competition/questions/edit');
    }
}

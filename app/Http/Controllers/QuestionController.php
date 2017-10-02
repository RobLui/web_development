<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::where('active', 1)->first();
        return view('Competition.questions.show')->withQuestions($questions);
    }

    public function create(Request $req){
        if ($req->isMethod("POST"))
        {
            $validator = $this->validate($req, [
                'category'      => 'required|max:255',
                'title'         => 'required|max:255',
                'text'          => 'required|max:255',
                'difficulty'    => 'required|max:255',
                'answerd'       => 'required|max:255',
            ]);
            if($validator){
                $question = new Question();
                $question->category = $req->category;
                $question->title = $req->title;
                $question->text = $req->text;
                $question->difficulty = $req->difficulty;
                $question->answerd = $req->answerd;
                $question->active = $req->active;
                $question->save();
            }
        }
        return view('Competition.questions.create');
    }

    public function edit(Request $req){
        $question = Question::findOrFail(1);
        if ($req->isMethod("POST"))
        {
            $validator = $this->validate($req, [
                'category'      => 'required|max:255',
                'title'         => 'required|max:255',
                'text'          => 'required|max:255',
                'difficulty'    => 'required|max:255',
                'answerd'       => 'required|max:255',
            ]);
            if($validator){
                $question = new Question();
                $question->category = $req->category;
                $question->title = $req->title;
                $question->text = $req->text;
                $question->difficulty = $req->difficulty;
                $question->answerd = $req->answerd;
                $question->active = $req->active;
                $question->save();
            }
        }
        return view('Competition.questions.edit')
            ->withQuestion($question)
            ;
    }
}

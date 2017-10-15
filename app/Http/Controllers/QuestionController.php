<?php

namespace App\Http\Controllers;

use App\Participant;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    public function index() {
        $questions = Question::where('active', 1)->first();
        return view('Competition.questions.show')->withQuestions($questions);
    }

    public function create(Request $req) {
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
                Session::flash('success',($question->title .' aangemaakt'));
            }
            return redirect()->back();
        }
        return view('Competition.questions.create');
    }

    public function edit(Request $req,$id) {
        $question = Question::findOrFail($id);
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
                $question->category = $req->category;
                $question->title = $req->title;
                $question->text = $req->text;
                $question->difficulty = $req->difficulty;
                $question->answerd = $req->answerd;
                $question->active = $req->active;
                $question->save();
                Session::flash('success',($question->title .' aangepast'));
            }
        }
        return view('Competition.questions.edit')
            ->withQuestion($question)
            ;
    }

    public function permission(Request $req) {

        $participant = DB::table("participants")->where("ipadress",$req->ip())->get();

        if ($participant){

            for ($i=0; $i < count($participant); $i++){
                if ((bool)($participant[$i]->has_permission)){
                    Session::flash('success',($participant[$i]->firstname . ' maakt kans om te winnen'));
                }
                else
                {
                    Session::flash('error',($participant[$i]->firstname . ' maakt geen kans om te winnen'));
                }
            }
        }
        else {
            Session::flash('success',('Registreer je eerst en maak dan kans om te winnen!'));
        }
        return redirect()->back();
    }
}

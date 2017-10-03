<?php

namespace App\Http\Controllers;

use App\Competition;
use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use function redirect;

class ParticipantController extends Controller
{
    public function index()
    {
        $parts = Participant::all();
        return view('participants')
            ->withParts($parts)
            ;
    }
    public function create(Request $req){

        $validator = $this->validate($req, [
            'firstname'     => 'required|max:255|string',
            'lastname'      => 'required|max:255|string',
            'age'           => 'required|max:255|Integer',
            'adress'        => 'required|max:255|string',
            'housenumber'   => 'required|max:255|Integer',
            'municipality'  => 'required|max:255|string',
            'postalcode'    => 'required|max:10000|Integer',
            'email'         => 'required|max:255|email'
        ]);

        $competition = Competition::find(1);
        $comp_id = $competition['id'];
        $participant = new Participant();
        $participant->firstname = $req->firstname;
        $participant->lastname = $req->lastname;
        $participant->age = $req->age  ;
        $participant->adress = $req->adress;
        $participant->housenumber = $req->housenumber;
        $participant->municipality = $req->municipality;
        $participant->postalcode = $req->postalcode;
        $participant->email = $req->email;
        $participant->ipadress = $req->ip();
        $participant->competition_id = $comp_id;
        $participant->save();
        Session::flash("success", ("Saved!"));
        return redirect('competition/participants');
    }

    public function DownloadExcel(){
        Excel::create('participants', function($excel)
        {
            $excel->sheet('Participants', function($list) {
                $list->fromArray(Participant::all(), null, 'A4', false, false);
            });

        })
            ->download('xls');
    }

    public function SendMail(){
        //send('view')
        Mail::send('welcome', [], function ($message){
            $message->to('robbertluit@hotmail.com')->subject('Mandril mailer works');
        });
        Session::flash("success", ("Mail verstuurd!"));
        return redirect()->back();
    }
}

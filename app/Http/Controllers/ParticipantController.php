<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $participant->save();
        Session::flash("success", ("Saved!"));
        return redirect('competition/participants');

    }
}

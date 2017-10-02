<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;


class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function create(Request $req){

        $validator = $this->validate($req, [
            'firstname'     => 'required|max:255',
            'lastname'      => 'required|max:255',
            'age'           => 'required|max:255',
            'adress'        => 'required|max:255',
            'housenumber'   => 'required|max:255',
            'municipality'  => 'required|max:255',
            'postalcode'    => 'required|max:255',
            'email'         => 'required|max:255'
        ]);

        $registration = new Registration();
        $registration->firstname = $req->firstname;
        $registration->lastname = $req->lastname;
        $registration->age = $req->age  ;
        $registration->adress = $req->adress;
        $registration->housenumber = $req->housenumber;
        $registration->municipality = $req->municipality;
        $registration->postalcode = $req->postalcode;
        $registration->email = $req->email;
        $registration->ipadress = $req->ip();
        $registration->save();
        Session::flash("success", ("Saved!"));
        return view('registration');
    }
}

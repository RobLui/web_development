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

        $validator = Validator::make($req->all(),[
            'firstname'     => 'required|max:255',
            'lastname'      => 'required|max:255',
            'age'           => 'required|max:255',
            'adress'        => 'required|max:255',
            'housenumber'   => 'requi   red|max:255',
            'municipality'  => 'required|max:255',
            'postalcode'    => 'required|max:255',
            'email'         => 'required|max:255',
        ]);


        if (!$validator->fails())
        {
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
        else
        {
            Session::flash("error", ("Something went wrong!"));
            return redirect('competition/registration');
        }
    }

}

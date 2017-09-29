<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration');
    }
    public function create(Request $req){
        $registration = new Registration();
        $registration->firstname = $req->firstname;

    }
}

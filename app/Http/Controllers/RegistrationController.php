<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration');
    }
}

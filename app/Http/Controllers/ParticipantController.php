<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index()
    {
        $parts = Registration::all();
        return view('participants')->withParts($parts);
    }
}

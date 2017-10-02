<?php

namespace App\Http\Controllers;

use App\EmailManager;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        $emailManagers = EmailManager::all();

        return view("config")
            ->withEmailmanagers($emailManagers)
            ;
    }
}

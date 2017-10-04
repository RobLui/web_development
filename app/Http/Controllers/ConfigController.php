<?php

namespace App\Http\Controllers;

use App\Competition;
use App\EmailManager;
use App\Period;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        $mm = EmailManager::all();
        $comps = Competition::all();
        $periods = Period::all();

        return view("config")
            ->withMm($mm)
            ->withComps($comps)
            ->withPeriods($periods)
            ;
    }
    public function show()
    {
        $mm = EmailManager::all();
        $comps = Competition::all();
        $periods = Period::all();

        return view("config")
            ->withMm($mm)
            ->withComps($comps)
            ->withPeriods($periods)
            ;
    }
    public function create(Request $req)
    {
        $mm = EmailManager::all();
        $comps = Competition::all();
        if ($req->isMethod('POST'))
        {
            $mm = new EmailManager();
            $mm->name = $req->name;
            $mm->email = $req->email;
            $mm->competition_id = $req->competition_id;
            $mm->save();
        }
        return view("config")
            ->withMm($mm)
            ->withComps($comps)
            ;
    }
    public function edit()
    {
        $mm = EmailManager::all();

        return view("config")
            ->withMm($mm)
            ;
    }
}


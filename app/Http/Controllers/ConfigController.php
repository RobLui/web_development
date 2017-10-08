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
            $validator = $this->validate($req, [
                'name'      => 'required|max:255',
                'email'    => 'required|max:255|email',
                'competition_id'    => 'required|integer'
            ]);

            if($validator){
                $mm = new EmailManager();
                $mm->name = $req->name;
                $mm->email = $req->email;
                $mm->competition_id = $req->competition_id;
                $mm->save();
                Session::flash('success','Excel email ontvanger toegevoegd');
            }
        }
        return redirect()->back();
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


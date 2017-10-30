<?php

namespace App\Http\Controllers;

use App\Competition;
use App\EmailManager;
use App\Participant;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use function redirect;
use function view;

class ParticipantController extends Controller
{
    use SoftDeletes;

    public function index() {
        $parts = Participant::all();
        return view('participants.participants')
            ->withParts($parts)
            ;
    }

    public function create(Request $req) {

        $u_participant = Participant::where('ipadress', $req->ip())->first();
        $u_email = Participant::where('email', $req->email)->first();

        if(!$u_participant && !$u_email) {
            $validator = $this->validate($req, [
                'firstname'     => 'required|max:255|string',
                'lastname'      => 'required|max:255|string',
                'age'           => 'required|max:255|Integer',
                'adress'        => 'required|max:255|string',
                'housenumber'   => 'required|max:1000|Integer',
                'municipality'  => 'required|max:255|string',
                'postalcode'    => 'required|max:10000|Integer',
                'email'         => 'required|max:255|email|unique:participants',
                'answerd'       => 'required|max:255'
            ]);
            if ($validator){
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
                $participant->answerd = $req->answerd;
                $participant->save();
                Session::flash("success", "Bedankt voor het meedoen, veel succes!");
            }
        }
        else {
            if ($u_email)
            {
                Session::flash("error", "Dit e-mailadres werd reeds geregistreerd");
            }
            if ($u_participant)
            {
                Session::flash("error", "Dit ip-adres werd reeds geregistreerd");
            }
        }
        return redirect()->back();
    }

    public function edit(Request $req,$id) {

        $participant = Participant::findOrFail($id);
        if ($req->isMethod("POST"))
        {
            $validator = $this->validate($req, [
                'firstname'     => 'required|max:255|string',
                'lastname'      => 'required|max:255|string',
                'age'           => 'required|max:255|Integer',
                'adress'        => 'required|max:255|string',
                'housenumber'   => 'required|max:255|Integer',
                'municipality'  => 'required|max:255|string',
                'postalcode'    => 'required|max:10000|Integer',
                'email'         => 'required|max:255|email',
                'answerd'       => 'required'
            ]);

            if ($validator){
                $competition = Competition::find(1);
                $comp_id = $competition['id'];
                $participant->firstname = $req->firstname;
                $participant->lastname = $req->lastname;
                $participant->age = $req->age  ;
                $participant->adress = $req->adress;
                $participant->housenumber = $req->housenumber;
                $participant->municipality = $req->municipality;
                $participant->postalcode = $req->postalcode;
                $participant->email = $req->email;
                $participant->answerd = $req->answerd;
                $participant->ipadress = $req->ipadress;
                $participant->competition_id = $comp_id;
                $participant->has_permission = (boolean)$req->has_permission;
                $participant->save();
                Session::flash("success", ( $participant->firstname . " werd aangepast"));
                return redirect()->back();
            }
        }
        else{
            return view('participants.edit')->withParticipant($participant);
        }

    }

    public function delete(Request $req, $id) {

        if ($req->isMethod("GET"))
        {
            $participant = Participant::findOrFail($id);
            $participant->delete($id);
            Session::flash("success", "Deelnemer verwijderd");
        }
        return redirect()->back();
    }

    public function DownloadExcel() {
        Excel::create('participants', function($excel)
        {
            $excel->sheet('Participants', function($list) {
                $list->fromArray(Participant::all(), null, 'A4', false, false);
            });

        })
            ->download('xls');
    }

    public function SendMail() {

//        $emails['attach'] = base_path().'/storage/test/test.xls';

//        Mail::send('email.remindsupplier', $testData, function ($mail) use ($emails) {
//            $mail->to($emails['to'])
//                ->subject('Test Application')
//                ->attach($emails['attach']);
//        });
//
        $participants = Participant::all();
        Mail::send('participants.participants', ['parts' => $participants] , function ($message){

            $emailmanagers = EmailManager::all();

            foreach ($emailmanagers as $m)
            {
                $message->to($m->email)->subject('Deelnemerslijst');
            }
            });
            Session::flash("success", ("Deelnemerslijst naar e-mailmanagers verstuurd!"));
            return redirect()->back();
    }

    public function SendAutoMail() {
        $participants = Participant::all();
        Mail::send('participants.participants', ['parts' => $participants,'errors' => []] , function ($message){

            $emailmanagers = EmailManager::all();

            foreach ($emailmanagers as $m)
            {
                $message->to($m->email)->subject('Participants list');
            }
        });
        return;
    }
}

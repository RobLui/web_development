@extends('layouts.app')
@section('content')

    @include("common.messages")
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="links">
                <div class="col-md-4 text-center dashboard">
                    <a href="{{ route('registration') }}">Deelnemen (form)</a>
                </div>
                <div class="col-md-4 text-center dashboard">
                    <a href="{{ route('competitionedit') }}">Wedstrijd (form)</a>
                </div>
                <div class="col-md-4 text-center dashboard">
                    <a href="{{ route('participants') }}">Deelnemers (list)</a>
                </div>
                <div class="col-md-4 text-center dashboard">
                    <a href="{{ route('showQ') }}">Vragen</a>
                </div>
                <div class="col-md-4 text-center dashboard">
                    <a href="{{ route('showP') }}">Prijzen</a>
                </div>
                <div class="col-md-4 text-center dashboard">
                    <a href="{{ route('config') }}">Instellingen</a>
                </div>
            </div>
        </div>
    </div>

@endsection
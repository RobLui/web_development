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
                    <a href="{{ route('edit_competition') }}">Wedstrijd (form)</a>
                </div>
                <div class="col-md-4 text-center dashboard">
                    <a href="{{ route('participants') }}">Deelnemers (list)</a>
                </div>
                <div class="col-md-4 text-center dashboard">
                    <a href="{{ route('show_questions') }}">Vragen</a>
                </div>
                <div class="col-md-4 text-center dashboard">
                    <a href="{{ route('show_prizes') }}">Prijzen</a>
                </div>
                <div class="col-md-4 text-center dashboard">
                    <a href="{{ route('config') }}">Instellingen</a>
                </div>
            </div>

        </div>
        <div class="links col-md-10 col-md-offset-1 sess">
            <a href="{{ route('create_prizes') }}">Create prizes</a>
            <a href="{{ route('create_questions') }}">Create questions</a>
            <a href="{{ route('create_competition') }}">Create competition</a>
        </div>
    </div>
@endsection
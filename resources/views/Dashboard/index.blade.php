@extends('layouts.app')
@section('content')

    @include("common.messages")
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6 text-center dashboard">
                    <a href="{{ route('edit_competition') }}">Wedstrijd</a>
                </div>
                <div class="col-sm-6 text-center dashboard">
                    <a href="{{ route('show_participants') }}">Deelnemerslijst</a>
                </div>
                <div class="col-sm-6 text-center dashboard">
                    <a href="{{ route('show_questions') }}">Vragen</a>
                </div>
                <div class="col-sm-6 text-center dashboard">
                    <a href="{{ route('config') }}">Instellingen</a>
                </div>
            </div>
        </div>
    </div>
@endsection
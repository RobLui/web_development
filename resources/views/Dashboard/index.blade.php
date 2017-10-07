@extends('layouts.app')
@section('content')

    @include("common.messages")
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-4 text-center dashboard">
                <a href="{{ route('registration') }}">Deelnemen</a>
            </div>
            <div class="col-md-4 text-center dashboard">
                <a href="{{ route('edit_competition') }}">Wedstrijd</a>
            </div>
            <div class="col-md-4 text-center dashboard">
                <a href="{{ route('show_participants') }}">Deelnemerslijst</a>
            </div>
            <div class="col-md-4 text-center dashboard">
                <a href="{{ route('show_questions') }}">Vragen</a>
            </div>
            <div class="col-md-4 text-center dashboard">
                {{-- --}}
            </div>
            <div class="col-md-4 text-center dashboard">
                <a href="{{ route('config') }}">Instellingen</a>
            </div>
        </div>
    </div>
@endsection
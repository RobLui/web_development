@extends('layouts.app')

@section('content')
    @if($competition)
        <div class="container">
            @include("common.messages")
            @include("common.errors")
            <div class="col-md-12">
                <div class="content">
                    <div class="col-md-4">
                        <h2>Uitleg</h2>
                        <p>{{ $competition->explanation }}</p>
                    </div>
                    <div class="col-md-4">
                        <h2>Prijzen</h2>
                        <p>{{ $competition->prizes }}</p>
                    </div>
                    <div class="col-md-4">
                        <h2>Vorige deelnemers</h2>
                        <p>{{ $competition->previous_participants }}</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-primary" href="{{ route('registration') }}">Ok, next!</a>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="col-sm-12">
                <div class="col-sm-5 col-sm-offset-5">
                    <a class="btn btn-primary" href="{{ route('create_competition') }}">Wedstrijd aanmaken</a>
                </div>
            </div>
        @endif

@endsection


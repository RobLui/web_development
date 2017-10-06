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
                    <a class="btn btn-primary" href="{{ route('registration') }}">Ok, next!</a>
                </div>
            </div>
        </div>
    @else
        <a class="btn btn-primary" href="{{ route('create_competition') }}">Wedstrijd aanmaken</a>
    @endif
@endsection


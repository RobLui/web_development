@extends('layouts.app')

@section('content')
    @if($competition)
        <div class="container">
            @include("common.messages")
            @include("common.errors")
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <h3>Uitleg</h3>
                    <p>{{ $competition->explanation }}</p>
                    <h3>Prijzen</h3>
                    <p>{{ $competition->prizes }}</p>
                    <h3>Vorige deelnemers</h3>
                    <p>{{ $competition->previous_participants }}</p>
                    <a class="btn btn-primary" href="{{ route('registration') }}">IK WIL DEELNEMEN!</a>
                </div>
            </div>
        </div>
    @endif
@endsection


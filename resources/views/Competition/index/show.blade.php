@extends('layouts.app')

@section('content')
    @if($competition)
        <div class="container">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">< vorige</a>
            @include("common.messages")
            @include("common.errors")
            <div class="col-sm-12">
                <div class="content">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2>Uitleg</h2>
                        <p>{{ $competition->explanation }}</p>
                    </div>
                    {{--<div class="col-sm-4">--}}
                        {{--<h2>Prijzen</h2>--}}
                        {{--<p>{{ $competition->prizes }}</p>--}}
                    {{--</div>--}}
                </div>
                {{--Vorige deelnemers--}}
                <div class="col-sm-12">
                    <div class="content">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2>Vorige deelnemers</h2>
                            <p>{{ $competition->previous_participants }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <div class="col-sm-2 col-sm-offset-5">
                    <a class="btn btn-primary btn-sm" href="{{ route('registration') }}">Ok, next!</a>
                </div>
            </div>
        </div>
        @if(Auth::check())
            <div class="col-sm-12 text-center">
                    <a class="btn btn-primary btn-sm" href="{{ route('edit_competition',$competition->id) }}">Wedstrijd aanpassen</a>
                </div>
            </div>
        @endif
        @else
            @if(Auth::check())
                <div class="col-sm-12">
                    <div class="col-sm-5 col-sm-offset-5">
                        <a class="btn btn-primary" href="{{ route('create_competition') }}">Wedstrijd aanmaken</a>
                    </div>
                </div>
            @endif
        @endif

@endsection


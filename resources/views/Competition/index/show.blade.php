@extends('layouts.app')

@section('content')
    @if($competition)
    <div class="container">
        <div class="col-sm-12">
            <a href="{{ route('welcome') }}" class="btn btn-secondary">&#8592; terug naar home</a>
            @include("common.messages")
            @include("common.errors")
            <div class="row">

                <div class="block">
                    <div class="col-sm-12">
                        <div class="content">

                            {{-- Uitleg --}}
                            <div class="col-sm-6 col-sm-offset-3">
                                <h2>Uitleg</h2>
                                <p>{{ $competition->explanation }}</p>
                            </div>

                            {{-- Vorige winnaar --}}
                            @if(count($winners) > 0)
                                <div class="col-sm-6 col-sm-offset-3">
                                    <h2>Vorige winnaar</h2>
                                    @foreach($winners as $winner)
                                        <p>{{ $winner->winner_name }}</p>
                                    @endforeach
                                </div>
                            @endif

                        </div>
                    </div>
                </div>

            <div class="col-sm-12 text-center">
                <div class="col-sm-2 col-sm-offset-5">
                    <a class="btn btn-primary btn-sm push" href="{{ route('registration') }}">Ok, next!</a>
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
            </div>

        </div>
    </div>
@endsection


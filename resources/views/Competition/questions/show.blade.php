@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">< vorige</a>
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="col-sm-12">
                    @if(count($questions) > 0)

                        <h2 class="col-sm-12">{{ $questions->title }}</h2>
                        <p class="col-sm-12">{{ $questions->text }}</p>

                        {{--TOESTEMMING--}}
                        @if(Auth::guest())
                            <div class="col-sm-4">
                                {!! Form::open(array('route' => 'permission')) !!}
                                    {{ Form::submit('Maak ik kans om te winnen?', array('class' => 'btn btn-primary btn-sm')) }}
                                {!! Form::close() !!}
                            </div>
                        @endif

                        {{--AANPASSEN--}}
                        @if(Auth::check())
                            <div class="col-sm-4">
                                <a href="{{ route('edit_questions',$questions->id) }}" class="btn btn-primary btn-sm">vraag aanpassen</a>
                            </div>
                        @endif
                    @else

                        {{--AANMAKEN--}}
                        <div class="col-sm-4">
                            <a class="btn btn-primary btn-sm" href="{{ route('create_questions') }}">Vraag aanmaken</a>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection

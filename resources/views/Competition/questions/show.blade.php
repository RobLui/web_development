@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{ route('dashboard') }}" class="btn btn-secondary">&#8592; terug naar dashboard</a>
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
                    <div class="col-sm-12">
                        {!! Form::open(array('route' => 'create_questions')) !!}
                            {{ csrf_field() }}
                            <div class="col-sm-4 form-group">
                                {{ Form::label('Categorie'),array('class' =>  'form-group' )}}
                                {{ Form::input('Categorie', 'category', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-sm-4 form-group">
                                {{ Form::label('Titel'),array('class' =>  'form-group' )}}
                                {{ Form::input('Titel', 'title', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-sm-4 form-group">
                                {{ Form::label('Tekst'),array('class' =>  'form-group' )}}
                                {{ Form::input('Tekst', 'text', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-sm-4 form-group">
                                {{ Form::label('Moeilijkheid'),array('class' =>  'form-group' )}}
                                {{ Form::input('Moeilijkheid', 'difficulty', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-sm-4 form-group">
                                {{ Form::label('Antwoord'),array('class' =>  'form-group' )}}
                                {{ Form::input('Antwoord', 'answerd', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-sm-10">
                                {{ Form::submit('Toevoegen', array('class' => 'btn btn-primary')) }}
                            </div>
                        {!! Form::close() !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

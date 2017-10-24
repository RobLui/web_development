@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">terug</a>
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Vraag aanmaken</h2>
                {!! Form::open(array('route' => 'create_questions')) !!}
                    {{ csrf_field() }}
                    <div class="col-md-4 form-group">
                        {{ Form::label('category'),array('class' =>  'form-group' )}}
                        {{ Form::input('category', 'category', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-md-4 form-group">
                        {{ Form::label('title'),array('class' =>  'form-group' )}}
                        {{ Form::input('title', 'title', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-md-4 form-group">
                        {{ Form::label('text'),array('class' =>  'form-group' )}}
                        {{ Form::input('text', 'text', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-md-4 form-group">
                        {{ Form::label('difficulty'),array('class' =>  'form-group' )}}
                        {{ Form::input('difficulty', 'difficulty', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-md-4 form-group">
                        {{ Form::label('answerd'),array('class' =>  'form-group' )}}
                        {{ Form::input('answerd', 'answerd', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-md-10 form-group">
                        {{ Form::label('active'),array('class' =>  'form-group' )}}
                        {{ Form::checkbox("active"),array('class' => 'form-group') }}
                    </div>
                    <div class="col-md-10">
                        {{ Form::submit('Toevoegen', array('class' => 'btn btn-primary')) }}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


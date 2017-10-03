@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Vraag aanmaken</h2>
                {!! Form::open(array('route' => 'create_questions')) !!}
                    {{ csrf_field() }}
                    <div class="col-md-4 form-group">
                        {{ Form::label('category'),array('class' =>  'form-group' )}}
                        {{ Form::textarea("category"),array('class' => 'form-control') }}
                    </div>
                    <div class="col-md-4 form-group">
                        {{ Form::label('title'),array('class' =>  'form-group' )}}
                        {{ Form::textarea("title"),array('class' => 'form-control') }}
                    </div>
                    <div class="col-md-4 form-group">
                        {{ Form::label('text'),array('class' =>  'form-group' )}}
                        {{ Form::textarea("text"),array('class' => 'form-control') }}
                    </div>
                    <div class="col-md-4 form-group">
                        {{ Form::label('difficulty'),array('class' =>  'form-group' )}}
                        {{ Form::textarea("difficulty"),array('class' => 'form-control') }}
                    </div>
                    <div class="col-md-4 form-group">
                        {{ Form::label('answerd'),array('class' =>  'form-group' )}}
                        {{ Form::textarea("answerd"),array('class' => 'form-control') }}
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


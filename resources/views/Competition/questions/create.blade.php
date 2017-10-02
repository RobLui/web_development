@extends('layouts.app')

@section('content')

    <div class="container">
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Vraag aanmaken</h2>
                {!! Form::open(array('route' => 'postCreateQ','class' => 'form-horizontal')) !!}
                    {{ csrf_field() }}
                    <div class="col-md-4">
                        {{ Form::label('category'),array('class' =>  'form-control' )}}
                        {{ Form::textarea("category"),array('class' => 'form-control') }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::label('title'),array('class' =>  'form-control' )}}
                        {{ Form::textarea("title"),array('class' => 'form-control') }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::label('text'),array('class' =>  'form-control' )}}
                        {{ Form::textarea("text"),array('class' => 'form-control') }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::label('difficulty'),array('class' =>  'form-control' )}}
                        {{ Form::textarea("difficulty"),array('class' => 'form-control') }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::label('answerd'),array('class' =>  'form-control' )}}
                        {{ Form::textarea("answerd"),array('class' => 'form-control') }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::checkbox("active"),array('class' => 'form-control') }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::submit('Toevoegen', array('class' => 'btn btn-secondary')) }}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


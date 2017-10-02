@extends('layouts.app')

@section('content')

    @include("common.messages")
    @include("common.errors")
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Vraag aanmaken</h2>
            {!! Form::open(array('route' => 'competitioncreate','class' => 'form-horizontal')) !!}

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
@endsection


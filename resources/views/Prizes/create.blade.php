@extends('layouts.app')

@section('content')

    @include("common.messages")
    @include("common.errors")
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Prijs aanmaken</h2>
            {!! Form::open(array('route' => 'createP','class' => 'form-horizontal')) !!}

            <div class="col-md-10 form-group">
                {{ Form::label('difficulty'),array('class' =>  'control-label' )}}
                {{ Form::textarea("difficulty"),array('class' => 'control-label') }}
            </div>
            <div class="col-md-10 form-group">
                {{ Form::label('answerd'),array('class' =>  'form-control' )}}
                {{ Form::textarea("answerd"),array('class' => 'form-control') }}
            </div>
            <div class="col-md-10 form-group">
                {{ Form::label('active'),array('class' =>  'form-control' )}}
                {{ Form::checkbox("active"),array('class' => 'form-control') }}
            </div>
            <div class="col-md-4 ">
                {{ Form::submit('Toevoegen', array('class' => 'btn btn-secondary')) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

